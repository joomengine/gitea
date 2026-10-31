<?php

use VDM\Joomla\Gitea\Repository;
use VDM\Joomla\Gitea\Repository\Attachments;
use VDM\Joomla\Gitea\Repository\Branch;
use VDM\Joomla\Gitea\Repository\Branch\Protection;
use VDM\Joomla\Gitea\Repository\Commits;
use VDM\Joomla\Gitea\Repository\Contents;
use VDM\Joomla\Gitea\Repository\Hooks;
use VDM\Joomla\Gitea\Repository\Hooks\Git;
use VDM\Joomla\Gitea\Repository\Media;
use VDM\Joomla\Gitea\Repository\Mirrors;
use VDM\Joomla\Gitea\Repository\Patch;
use VDM\Joomla\Gitea\Repository\Pulls;
use VDM\Joomla\Gitea\Repository\Releases;
use VDM\Joomla\Gitea\Repository\Remote;
use VDM\Joomla\Gitea\Repository\Reviewers;
use VDM\Joomla\Gitea\Repository\Topics;

test('repository file paths encode reserved characters and preserve directory separators', function (): void {
	[$api, $transport] = client(Contents::class);
	$api->metadata('owner?admin=1', 'repo#fragment', 'docs/a #100%.json', 'feature/a&b');
	same('https://gitea.example.test/api/v1/repos/owner%3Fadmin%3D1/repo%23fragment/contents/docs/a%20%23100%25.json?ref=feature%2Fa%26b', $transport->requests[0]['url']);
});

test('raw repository files preserve JSON and empty bytes while get retains decoded results', function (): void {
	$bytes = " \n{\"answer\":42}\n";
	[$api, $transport] = client(Contents::class, body: $bytes);
	same($bytes, $api->raw('owner', 'repo', 'data.json'));
	$transport->queue(200, '');
	same('', $api->raw('owner', 'repo', 'empty.txt'));
	$transport->queue(200, '{"answer":42}');
	same(42, $api->get('owner', 'repo', 'data.json')->answer);
});

test('media retains binary bytes and an empty body', function (): void {
	$bytes = "\x00\x01\n{\"x\":1}\n";
	[$api, $transport] = client(Media::class, body: $bytes);
	same($bytes, $api->get('owner', 'repo', 'nested/image.bin'));
	$transport->queue(200, '');
	same('', $api->get('owner', 'repo', 'empty.bin'));
});

test('diff patches transmit the actual option argument and fail on invalid JSON input', function (): void {
	[$api, $transport] = client(Patch::class);
	$option = ['content' => base64_encode("diff --git a/file b/file\n"), 'branch' => 'main', 'force_push' => false];
	$api->applyDiffPatch('owner', 'repo', $option);
	same($option, json_decode($transport->requests[0]['data'], true));
	throws(JsonException::class, fn() => $api->applyDiffPatch('owner', 'repo', ['content' => "\xff"]));
	same(1, count($transport->requests));
});

test('migration uses the Gitea field names and numeric deprecated uid', function (): void {
	[$api, $transport] = client(Remote::class, status: 201);
	$api->migrate('https://source.example/repo.git', 'copy', 'owner', '12', authToken: 'secret', authUsername: 'user', authPassword: 'password');
	$body = json_decode($transport->requests[0]['data'], true);
	same([
		'clone_addr' => 'https://source.example/repo.git', 'repo_name' => 'copy', 'repo_owner' => 'owner', 'uid' => 12,
		'description' => '', 'private' => false, 'auth_token' => 'secret', 'auth_username' => 'user', 'auth_password' => 'password',
	], $body);
	$transport->queue(201, '{}');
	$api->migrate('https://source.example/repo.git', 'copy', 'owner');
	same(false, array_key_exists('uid', json_decode($transport->requests[1]['data'], true)));
	throws(InvalidArgumentException::class, fn() => $api->migrate('https://source.example/repo.git', 'copy', 'owner', 'not-an-id'));
});

test('branch creation uses API field names and supports creating from tags or commits', function (): void {
	[$api, $transport] = client(Branch::class, status: 201);
	$api->create('owner', 'repo', 'feature/new', 'main');
	same(['new_branch_name' => 'feature/new', 'old_branch_name' => 'main'], json_decode($transport->requests[0]['data'], true));
	$transport->queue(201, '{}');
	$api->create('owner', 'repo', 'release/new', oldRefName: 'v1.0');
	same('v1.0', json_decode($transport->requests[1]['data'], true)['old_ref_name']);
	$transport->queue(200, '{}');
	$api->get('owner', 'repo', 'feature/a#b');
	same('https://gitea.example.test/api/v1/repos/owner/repo/branches/feature%2Fa%23b', $transport->requests[2]['url']);
});

test('branch protections use the singular upstream approvals field and current rule names', function (): void {
	[$api, $transport] = client(Protection::class, status: 201);
	$api->create('owner', 'repo', 'main', ['reviewer'], [], ruleName: 'release/*');
	$body = json_decode($transport->requests[0]['data'], true);
	same(['reviewer'], $body['approvals_whitelist_username']);
	same(false, array_key_exists('approvals_whitelist_usernames', $body));
	same('release/*', $body['rule_name']);
});

test('release updates send a flat partial body and preserve explicit false or empty values', function (): void {
	[$api, $transport] = client(Releases::class);
	$api->update('owner', 'repo', 7, description: '', isDraft: false);
	same(['body' => '', 'draft' => false], json_decode($transport->requests[0]['data'], true));
	$transport->queue(201, '{}');
	$api->create('owner', 'repo', 'v1', 'main', 'Release', 'Notes', tagMessage: 'Signed release');
	same('Signed release', json_decode($transport->requests[1]['data'], true)['tag_message']);
});

test('review cancellation sends JSON in the DELETE body', function (): void {
	[$api, $transport] = client(Reviewers::class, status: 204, body: '');
	same('success', $api->cancel('owner', 'repo', 2, ['alice'], ['maintainers']));
	same('DELETE', $transport->requests[0]['method']);
	same('https://gitea.example.test/api/v1/repos/owner/repo/pulls/2/requested_reviewers', $transport->requests[0]['url']);
	same(['reviewers' => ['alice'], 'team_reviewers' => ['maintainers']], json_decode($transport->requests[0]['data'], true));
});

test('commit lists return arrays and diffs use the representation suffix', function (): void {
	[$api, $transport] = client(Commits::class, body: '[{"sha":"abc"}]');
	same('abc', $api->getList('owner', 'repo')[0]->sha);
	$transport->queue(200, "diff --git a/a b/a\n");
	same("diff --git a/a b/a\n", $api->diff('owner', 'repo', 'abc', 'patch'));
	same('https://gitea.example.test/api/v1/repos/owner/repo/git/commits/abc.patch', $transport->requests[1]['url']);
	throws(InvalidArgumentException::class, fn() => $api->diff('owner', 'repo', 'abc', 'invalid'));
	same(2, count($transport->requests));
});

test('topic search accepts the upstream response envelope', function (): void {
	[$api] = client(Topics::class, body: '{"topics":["php"]}');
	same(['php'], $api->search('php')->topics);
});

test('Git hooks accept hook names and send flat content', function (): void {
	[$api, $transport] = client(Git::class);
	$api->get('owner', 'repo', 'pre-receive');
	same('https://gitea.example.test/api/v1/repos/owner/repo/hooks/git/pre-receive', $transport->requests[0]['url']);
	$transport->queue(200, '');
	same(null, $api->edit('owner', 'repo', 'pre-receive', ['content' => "#!/bin/sh\nexit 0\n"]));
	same(['content' => "#!/bin/sh\nexit 0\n"], json_decode($transport->requests[1]['data'], true));
});

test('push mirror creation accepts the documented HTTP 200', function (): void {
	[$api, $transport] = client(Mirrors::class, body: '{"remote_name":"mirror"}');
	same('mirror', $api->add('owner', 'repo', 'https://remote.example/repo.git', null, null, '8h', false)->remote_name);
	$transport->queue(403, '{"message":"forbidden"}');
	throws(DomainException::class, fn() => $api->add('owner', 'repo', 'https://remote.example/repo.git', null, null, '8h', false));
});

test('attachments send named HTTP headers and accept HTTP 201 when renamed', function (): void {
	[$api, $transport] = client(Attachments::class, status: 201);
	$api->create('owner', 'repo', 1, "\x00data", 'release.bin', 'application/octet-stream');
	same('application/octet-stream', $transport->requests[0]['headers']['Content-Type']);
	same("\x00data", $transport->requests[0]['data']);
	$transport->queue(201, '{"name":"new.bin"}');
	same('new.bin', $api->edit('owner', 'repo', 1, 2, 'new.bin')->name);
});

test('pull branch update sends style as a query parameter', function (): void {
	[$api, $transport] = client(Pulls::class, body: '');
	same('success', $api->mergeUpdate('owner', 'repo', 1, 'rebase'));
	same('https://gitea.example.test/api/v1/repos/owner/repo/pulls/1/update?style=rebase', $transport->requests[0]['url']);
});

test('pull requests expose current reviewer and content conflict options', function (): void {
	[$api, $transport] = client(Pulls::class, status: 201);
	$api->create('owner', 'repo', 'Change', 'feature', 'main', reviewers: ['alice'], teamReviewers: ['dev'], allowMaintainerEdit: false);
	$body = json_decode($transport->requests[0]['data'], true);
	same(['alice'], $body['reviewers']);
	same(['dev'], $body['team_reviewers']);
	same(false, $body['allow_maintainer_edit']);
	$transport->queue(201, '{}');
	$api->update('owner', 'repo', 1, body: 'Updated', contentVersion: 3);
	same(3, json_decode($transport->requests[1]['data'], true)['content_version']);
});

test('repository creation and edit expose the current object format and feature flags', function (): void {
	[$api, $transport] = client(Repository::class, status: 201);
	$api->create('repo', objectFormatName: 'sha256');
	same('sha256', json_decode($transport->requests[0]['data'], true)['object_format_name']);
	$transport->queue(200, '{}');
	$api->edit('owner', 'repo', name: 'renamed', hasActions: true, hasPackages: false, allowFastForwardOnlyMerge: true, projectsMode: 'owner');
	same(['name' => 'renamed', 'has_actions' => true, 'has_packages' => false, 'allow_fast_forward_only_merge' => true, 'projects_mode' => 'owner'], json_decode($transport->requests[1]['data'], true));
	$transport->queue(200, '{"id":42}');
	same(42, $api->getById(42)->id);
	same('https://gitea.example.test/api/v1/repositories/42', $transport->requests[2]['url']);
});

test('repository webhooks can be deleted', function (): void {
	[$api, $transport] = client(Hooks::class, status: 204, body: '');
	same('success', $api->delete('owner', 'repo', 8));
	same('DELETE', $transport->requests[0]['method']);
	same('https://gitea.example.test/api/v1/repos/owner/repo/hooks/8', $transport->requests[0]['url']);
});
