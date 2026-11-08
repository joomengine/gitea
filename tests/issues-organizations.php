<?php

use VDM\Joomla\Gitea\Issue;
use VDM\Joomla\Gitea\Issue\Comments;
use VDM\Joomla\Gitea\Issue\Deadline;
use VDM\Joomla\Gitea\Issue\Labels as IssueLabels;
use VDM\Joomla\Gitea\Issue\Reactions;
use VDM\Joomla\Gitea\Issue\Reactions\Comment as CommentReactions;
use VDM\Joomla\Gitea\Organization;
use VDM\Joomla\Gitea\Organization\Hooks as OrganizationHooks;
use VDM\Joomla\Gitea\Organization\Repository as OrganizationRepository;
use VDM\Joomla\Gitea\Organization\Teams;

test('Issue edits use current flat fields and preserve explicit clearing values', function () {
	[$api, $transport] = client(Issue::class, status: 201, body: '{"number":7}');
	$result = $api->edit('owner', 'repo', 7, assignee: '', assignees: [], body: '',
		dueDate: '2026-11-01T00:00:00Z', milestone: 0, unsetDueDate: false,
		projects: [], contentVersion: 0);
	$request = $transport->requests[0];
	same('PATCH', $request['method']);
	same('/api/v1/repos/owner/repo/issues/7', parse_url($request['url'], PHP_URL_PATH));
	same([
		'assignee' => '', 'assignees' => [], 'body' => '',
		'due_date' => '2026-11-01T00:00:00Z', 'unset_due_date' => false,
		'projects' => [], 'content_version' => 0, 'milestone' => 0,
	], json_decode($request['data'], true));
	same(7, $result->number);
});

test('Issue creation sends project membership and Git reference', function () {
	[$api, $transport] = client(Issue::class, status: 201, body: '{"number":8}');
	$api->create('owner', 'repo', 'Task', projects: [4, 9], ref: 'refs/heads/main');
	$body = json_decode($transport->requests[0]['data'], true);
	same([4, 9], $body['projects']);
	same('refs/heads/main', $body['ref']);
});

test('Issue search sends current review and author filters', function () {
	[$api, $transport] = client(Issue::class, body: '[]');
	$api->search('fix', priorityRepoId: 9, reviewed: false, createdBy: 'maintainer');
	parse_str(parse_url($transport->requests[0]['url'], PHP_URL_QUERY), $query);
	same('false', $query['reviewed']);
	same('maintainer', $query['created_by']);
	same(false, array_key_exists('priority_repo_id', $query));
});

test('Issue and comment reactions accept new and existing reactions and DELETE JSON', function () {
	foreach ([Reactions::class, CommentReactions::class] as $class)
	{
		[$api, $transport] = client($class, status: 201, body: '{"content":"+1"}');
		same('+1', $api->add('owner', 'repo', 7, '+1')->content);
		$transport->queue(200, '{"content":"+1"}');
		same('+1', $api->add('owner', 'repo', 7, '+1')->content);
		$transport->queue(204, '');
		same('success', $api->remove('owner', 'repo', 7, '+1'));
		$request = $transport->requests[2];
		same('DELETE', $request['method']);
		same(['content' => '+1'], json_decode($request['data'], true));
		same(null, parse_url($request['url'], PHP_URL_QUERY));
	}
});

test('Replacing labels returns a list and allows clearing all labels', function () {
	[$api, $transport] = client(IssueLabels::class, body: '[{"id":2}]');
	$labels = $api->replace('owner', 'repo', 7, [2]);
	same(2, $labels[0]->id);
	$transport->queue(200, '[]');
	same([], $api->replace('owner', 'repo', 7, []));
	same(['labels' => []], json_decode($transport->requests[1]['data'], true));
});

test('Deadline changes accept the current created response', function () {
	[$api, $transport] = client(Deadline::class, status: 201, body: '{"due_date":null}');
	same(null, $api->set('owner', 'repo', 7, null)->due_date);
	same(['due_date' => null], json_decode($transport->requests[0]['data'], true));
});

test('Comment reads and edits accept documented empty responses', function () {
	[$api, $transport] = client(Comments::class, status: 204, body: '');
	same(null, $api->get('owner', 'repo', 4));
	$transport->queue(204, '');
	same(null, $api->edit('owner', 'repo', 4, 'updated'));
	same(['body' => 'updated'], json_decode($transport->requests[1]['data'], true));
});

test('Organization edit transmits empty email and keeps unspecified fields unchanged', function () {
	[$api, $transport] = client(Organization::class, body: '{}');
	$api->edit('org', email: '');
	same(['email' => ''], json_decode($transport->requests[0]['data'], true));
});

test('Organization creation supports current profile and visibility fields', function () {
	[$api, $transport] = client(Organization::class, status: 201, body: '{}');
	$api->create('org', 'Organization', 'org@example.com', teamAdmin: true,
		location: 'Windhoek', website: 'https://example.com', visibility: 'private');
	$body = json_decode($transport->requests[0]['data'], true);
	same('Windhoek', $body['location']);
	same('https://example.com', $body['website']);
	same('private', $body['visibility']);
	same(false, array_key_exists('team_admin_change_team_access', $body));
});

test('Organization repository creation accepts HTTP 201', function () {
	[$api, $transport] = client(OrganizationRepository::class, status: 201, body: '{"name":"new"}');
	same('new', $api->create('org', 'new')->name);
});

test('Team visibility and empty units maps use current JSON shapes', function () {
	[$api, $transport] = client(Teams::class, status: 201, body: '{}');
	$api->create('org', 'Reviewers', '', visibility: 'limited');
	same('limited', json_decode($transport->requests[0]['data'], true)['visibility']);
	$transport->queue(200, '{}');
	$api->edit(3, unitsMap: [], visibility: 'private');
	$body = json_decode($transport->requests[1]['data']);
	same('stdClass', get_class($body->units_map));
	same('private', $body->visibility);
});

test('Organization webhooks honor event lists and current configuration fields', function () {
	[$api, $transport] = client(OrganizationHooks::class, status: 201, body: '{}');
	$api->create('org', 'gitea', 'https://example.com/hook', events: ['push', 'pull_request'],
		name: 'Build', branchFilter: 'main', authorizationHeader: 'Bearer delivery-token');
	$body = json_decode($transport->requests[0]['data'], true);
	same(['push', 'pull_request'], $body['events']);
	same('json', $body['config']['content_type']);
	same('Build', $body['name']);
	same('main', $body['branch_filter']);
	same('Bearer delivery-token', $body['authorization_header']);
	$transport->queue(201, '{}');
	$api->create('org', 'gitea', 'https://example.com/hook', events: false);
	same([], json_decode($transport->requests[1]['data'], true)['events']);
	$transport->queue(200, '{}');
	$api->update('org', 3, name: '', authorizationHeader: '');
	same(['name' => '', 'authorization_header' => ''], json_decode($transport->requests[2]['data'], true));
});

test('Issue path identifiers cannot become a query or fragment', function () {
	[$api, $transport] = client(Issue::class, body: '{}');
	$api->get('owner#part', 'repo?part', 1);
	same('/api/v1/repos/owner%23part/repo%3Fpart/issues/1', parse_url($transport->requests[0]['url'], PHP_URL_PATH));
	same(null, parse_url($transport->requests[0]['url'], PHP_URL_QUERY));
	same(null, parse_url($transport->requests[0]['url'], PHP_URL_FRAGMENT));
});

test('Issue comment listing omits unsupported pagination but retains date filters', function () {
	[$api, $transport] = client(Comments::class, body: '[]');
	$api->list('owner', 'repo', 7, page: 3, limit: 5, since: '2026-01-01T00:00:00Z');
	parse_str(parse_url($transport->requests[0]['url'], PHP_URL_QUERY), $query);
	same(['since' => '2026-01-01T00:00:00Z'], $query);
});

test('Label descriptions can be cleared without resetting other fields', function () {
	foreach ([VDM\Joomla\Gitea\Labels::class, VDM\Joomla\Gitea\Organization\Labels::class] as $class)
	{
		[$api, $transport] = client($class, body: '{}');
		if ($class === VDM\Joomla\Gitea\Labels::class)
		{
			$api->update('owner', 'repo', '2', labelDescription: '');
		}
		else
		{
			$api->update('org', 2, description: '');
		}
		same(['description' => ''], json_decode($transport->requests[0]['data'], true));
	}
});

test('Invalid UTF-8 fails before sending a malformed issue request', function () {
	[$api, $transport] = client(Issue::class);
	throws(JsonException::class, fn () => $api->create('owner', 'repo', "bad\xFF"));
	same([], $transport->requests);
});
