<?php

declare(strict_types=1);

use VDM\Joomla\Gitea\Admin\Cron;
use VDM\Joomla\Gitea\Admin\Users;
use VDM\Joomla\Gitea\Admin\Users\Organization as AdminOrganization;
use VDM\Joomla\Gitea\Notifications;
use VDM\Joomla\Gitea\Notifications\Repository as RepositoryNotifications;
use VDM\Joomla\Gitea\Notifications\Thread;
use VDM\Joomla\Gitea\Package;
use VDM\Joomla\Gitea\Package\Files;
use VDM\Joomla\Gitea\User;
use VDM\Joomla\Gitea\User\Applications;
use VDM\Joomla\Gitea\User\Emails;
use VDM\Joomla\Gitea\User\Following;
use VDM\Joomla\Gitea\User\Gpg;
use VDM\Joomla\Gitea\User\Settings;
use VDM\Joomla\Gitea\User\Tokens;

// Assertions inspect actual requests passed through Joomla's HTTP and URI classes.
test('admin edit preserves omitted fields and explicit false, zero and empty values', function (): void {
	[$api, $transport] = client(Users::class);
	$api->edit('alice', 'alice', 0, fullName: 'Alice');
	same(['login_name' => 'alice', 'source_id' => 0, 'full_name' => 'Alice'], json_decode($transport->requests[0]['data'], true));
	$transport->queue(200, '{}');
	$api->edit('alice', 'alice', 0, active: false, description: '', maxRepoCreation: 0, type: 'Bot');
	same(['login_name' => 'alice', 'source_id' => 0, 'active' => false, 'description' => '', 'max_repo_creation' => 0, 'type' => 'Bot'], json_decode($transport->requests[1]['data'], true));
});

test('admin user filters preserve false and escape query punctuation', function (): void {
	[$api, $transport] = client(Users::class, body: '[]');
	$api->list(2, 25, ['source_id' => 0, 'q' => 'alice&bob', 'is_admin' => false]);
	parse_str(parse_url($transport->requests[0]['url'], PHP_URL_QUERY), $query);
	same(['page' => '2', 'limit' => '25', 'source_id' => '0', 'q' => 'alice&bob', 'is_admin' => 'false'], $query);
	throws(InvalidArgumentException::class, fn() => $api->list(filters: ['unknown' => true]));
	same(1, count($transport->requests));
});

test('admin organization sends an organization username distinct from its owner and display name', function (): void {
	[$api, $transport] = client(AdminOrganization::class, 201);
	$api->create('alice', 'Example Organization', organization: 'example', email: 'org@example.test');
	$body = json_decode($transport->requests[0]['data'], true);
	same('example', $body['username']);
	same('Example Organization', $body['full_name']);
	same('org@example.test', $body['email']);
	same('/api/v1/admin/users/alice/orgs', parse_url($transport->requests[0]['url'], PHP_URL_PATH));
});

test('admin cron can execute a task with an empty POST body', function (): void {
	[$api, $transport] = client(Cron::class, 204, '');
	same('success', $api->run('update_mirrors'));
	same('POST', $transport->requests[0]['method']);
	same('', $transport->requests[0]['data']);
});

test('email deletion sends JSON in the DELETE body and no email query string', function (): void {
	[$api, $transport] = client(Emails::class, 204, '');
	same('success', $api->delete([4 => 'alice+test@example.test']));
	same('DELETE', $transport->requests[0]['method']);
	same(['emails' => ['alice+test@example.test']], json_decode($transport->requests[0]['data'], true));
	same(null, parse_url($transport->requests[0]['url'], PHP_URL_QUERY));
});

test('notification filters use repeated query names and preserve timestamp punctuation', function (): void {
	[$api, $transport] = client(Notifications::class, body: '[]');
	$api->list(false, ['read', 'pinned'], ['issue', 'pull'], '2026-10-31T10:00:00+02:00');
	$query = parse_url($transport->requests[0]['url'], PHP_URL_QUERY);
	same(2, substr_count($query, 'status-types='));
	same(2, substr_count($query, 'subject-type='));
	same(true, str_contains($query, 'since=2026-10-31T10%3A00%3A00%2B02%3A00'));
	same(false, str_contains($query, '%5B'));
	$transport->queue(205, '[{"id":1}]');
	same(1, $api->update(statusTypes: ['unread', 'pinned'])[0]->id);
	same(2, substr_count(parse_url($transport->requests[1]['url'], PHP_URL_QUERY), 'status-types='));
});

test('repository notifications use repeated filters and correct 205 payload', function (): void {
	[$api, $transport] = client(RepositoryNotifications::class, 205, '[{"id":2}]');
	same(2, $api->update('alice', 'repo', statusTypes: ['unread', 'pinned'])[0]->id);
	same('PUT', $transport->requests[0]['method']);
	same(2, substr_count(parse_url($transport->requests[0]['url'], PHP_URL_QUERY), 'status-types='));
});

test('notification thread marking uses PATCH and only its supported query option', function (): void {
	[$api, $transport] = client(Thread::class, 205, '{"id":42}');
	same(42, $api->mark(42, 'ignored', true, ['ignored'], 'pinned')->id);
	same('PATCH', $transport->requests[0]['method']);
	same('to-status=pinned', parse_url($transport->requests[0]['url'], PHP_URL_QUERY));
});

test('user settings return the response object and encode empty updates as objects', function (): void {
	[$api, $transport] = client(Settings::class, body: '{"hide_email":false}');
	same(false, $api->update(hideEmail: false)->hide_email);
	same(['hide_email' => false], json_decode($transport->requests[0]['data'], true));
	$transport->queue(200, '{}');
	$api->update();
	same('{}', $transport->requests[1]['data']);
});

test('scoped token creation preserves explicit empty and populated scope lists', function (): void {
	[$api, $transport] = client(Tokens::class, 201);
	$api->create('alice', 'reader', ['read:repository']);
	same(['name' => 'reader', 'scopes' => ['read:repository']], json_decode($transport->requests[0]['data'], true));
	$transport->queue(201, '{}');
	$api->create('alice', 'no-scopes', []);
	same([], json_decode($transport->requests[1]['data'], true)['scopes']);
	$transport->queue(201, '{}');
	$api->create('alice', 'default');
	same(['name' => 'default'], json_decode($transport->requests[2]['data'], true));
});

test('following checks distinguish missing relationships from HTTP failures', function (): void {
	[$api, $transport] = client(Following::class, 404, '{"message":"not found"}');
	same(false, $api->check('alice'));
	$transport->queue(204, '');
	same(true, $api->check('alice'));
	$transport->queue(401, '{"message":"unauthorized"}');
	throws(Exception::class, fn() => $api->check('alice'));
});

test('GPG verification sends a key ID and signature and accepts implementation status 200', function (): void {
	[$api, $transport] = client(Gpg::class, 200, '{"verified":true}');
	same(true, $api->verifyKey('DEADBEEF', 'signed-token')->verified);
	same(['key_id' => 'DEADBEEF', 'armored_signature' => 'signed-token'], json_decode($transport->requests[0]['data'], true));
	$transport->queue(201, '{"verified":true}');
	same(true, $api->verify('DEADBEEF', 'signed-token')->verified);
	throws(InvalidArgumentException::class, fn() => $api->verify('public-key-alone'));
	same(2, count($transport->requests));
});

test('package file lists return arrays and scoped package names remain one path parameter', function (): void {
	[$api, $transport] = client(Files::class, body: '[{"name":"package.tar.gz"}]');
	same('package.tar.gz', $api->get('owner', 'npm', '@scope/name', '1.0.0+build')[0]->name);
	same('/api/v1/packages/owner/npm/%40scope%2Fname/1.0.0%2Bbuild/files', parse_url($transport->requests[0]['url'], PHP_URL_PATH));
});

test('package version listing latest lookup linking and whole-package deletion use their distinct routes', function (): void {
	[$api, $transport] = client(Package::class, body: '[{"version":"2"}]');
	same('2', $api->versions('owner', 'npm', '@scope/name', 2, 20)[0]->version);
	same('page=2&limit=20', parse_url($transport->requests[0]['url'], PHP_URL_QUERY));
	$transport->queue(200, '{"version":"2"}');
	same('2', $api->latest('owner', 'npm', '@scope/name')->version);
	$transport->queue(201, '');
	same('success', $api->link('owner', 'npm', '@scope/name', 'repo'));
	$transport->queue(201, '');
	same('success', $api->unlink('owner', 'npm', '@scope/name'));
	$transport->queue(204, '');
	same('success', $api->deleteAll('owner', 'npm', '@scope/name'));
	$paths = array_map(fn($request) => parse_url($request['url'], PHP_URL_PATH), $transport->requests);
	same('/api/v1/packages/owner/npm/%40scope%2Fname/-/latest', $paths[1]);
	same('/api/v1/packages/owner/npm/%40scope%2Fname/-/link/repo', $paths[2]);
	same('/api/v1/packages/owner/npm/%40scope%2Fname/-/unlink', $paths[3]);
	same('/api/v1/packages/owner/npm/%40scope%2Fname', $paths[4]);
});

test('OAuth applications pass explicit secondary authorization options', function (): void {
	[$api, $transport] = client(Applications::class, 201);
	$api->create('client', ['https://example.test/callback'], skipSecondaryAuthorization: false);
	same(false, json_decode($transport->requests[0]['data'], true)['skip_secondary_authorization']);
	$transport->queue(200, '{}');
	$api->update(1, 'client', ['https://example.test/callback'], skipSecondaryAuthorization: true);
	same(true, json_decode($transport->requests[1]['data'], true)['skip_secondary_authorization']);
});

test('public user repository listing does not use the legacy starred route', function (): void {
	[$api, $transport] = client(User::class, body: '[]');
	$api->repositories('alice');
	same('/api/v1/users/alice/repos', parse_url($transport->requests[0]['url'], PHP_URL_PATH));
	$transport->queue(200, '[]');
	$api->repos('alice');
	same('/api/v1/users/alice/starred', parse_url($transport->requests[1]['url'], PHP_URL_PATH));
});


test('new repository object formats are explicit and JSON encoding fails before HTTP', function (): void {
	[$api, $transport] = client(VDM\Joomla\Gitea\User\Repos::class, 201);
	$api->create('example', objectFormatName: 'sha256');
	same('sha256', json_decode($transport->requests[0]['data'], true)['object_format_name']);
	throws(JsonException::class, fn() => $api->create("\xB1\x31"));
	same(1, count($transport->requests));
	[$api, $transport] = client(VDM\Joomla\Gitea\Admin\Users\Repository::class, 201);
	$api->create('owner', 'example', objectFormatName: 'sha256');
	same('sha256', json_decode($transport->requests[0]['data'], true)['object_format_name']);
});
