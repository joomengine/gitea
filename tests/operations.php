<?php

declare(strict_types=1);

use VDM\Joomla\Gitea\Client;
use VDM\Joomla\Gitea\Utilities\Operations;

test('operation catalog covers every documented Gitea 28.2.0 operation', function (): void {
	$schema = json_decode(file_get_contents(dirname(__DIR__) . '/tools/openapi/gitea-28.2.0.json'), true, 512, JSON_THROW_ON_ERROR);
	$ids = [];
	foreach ($schema['paths'] as $path => $methods)
	{
		foreach ($methods as $method => $definition)
		{
			if (!isset($definition['operationId']))
			{
				continue;
			}
			$ids[] = $definition['operationId'];
			$operation = Operations::get($definition['operationId']);
			same($path, $operation['path']);
			same($method, $operation['method']);
		}
	}
	sort($ids);
	same($ids, Operations::all());
	same(537, count($ids));
});

test('operation client supports Actions workflow dispatch with current options', function (): void {
	[$api, $transport] = client(Client::class, 200, '{"id":42}');
	$result = $api->call('ActionsDispatchWorkflow',
		['owner' => 'alice', 'repo' => 'project', 'workflow_id' => 'build.yml'],
		['return_run_details' => true], ['ref' => 'main', 'inputs' => ['environment' => 'test']]);
	same(42, $result->id);
	same('POST', $transport->requests[0]['method']);
	same('https://gitea.example.test/api/v1/repos/alice/project/actions/workflows/build.yml/dispatches?return_run_details=true', $transport->requests[0]['url']);
	same(['ref' => 'main', 'inputs' => ['environment' => 'test']], json_decode($transport->requests[0]['data'], true));
	same('application/json', $transport->requests[0]['headers']['Content-Type']);
	$transport->queue(204, '');
	same(null, $api->call('ActionsDispatchWorkflow',
		['owner' => 'alice', 'repo' => 'project', 'workflow_id' => 'build.yml'], [], ['ref' => 'main']));
});

test('operation client encodes path and repeated query parameters independently', function (): void {
	[$api, $transport] = client(Client::class, body: '[]');
	$api->call('notifyGetRepoList', ['owner' => 'a&b', 'repo' => 'a/b'], ['status-types' => ['unread', 'pinned'], 'since' => '2026-10-31T10:00:00+02:00']);
	same('https://gitea.example.test/api/v1/repos/a%26b/a%2Fb/notifications?status-types=unread&status-types=pinned&since=2026-10-31T10%3A00%3A00%2B02%3A00', $transport->requests[0]['url']);
});

test('operation client sends DELETE bodies and handles documented empty statuses', function (): void {
	[$api, $transport] = client(Client::class, 204, '');
	same(null, $api->call('issueDeleteCommentReaction', ['owner' => 'alice', 'repo' => 'project', 'id' => 12], [], ['content' => '+1']));
	same('DELETE', $transport->requests[0]['method']);
	same(['content' => '+1'], json_decode($transport->requests[0]['data'], true));
	same(null, parse_url($transport->requests[0]['url'], PHP_URL_QUERY));
});

test('operation client preserves plain and binary bodies exactly', function (): void {
	[$api, $transport] = client(Client::class, 200, "<p>0</p>\n");
	same("<p>0</p>\n", $api->call('renderMarkdownRaw', [], [], '0'));
	same('0', $transport->requests[0]['data']);
	same('text/plain', $transport->requests[0]['headers']['Content-Type']);
	$transport->queue(200, "\x00{\"content_base64\":\"eA==\"}\n");
	same("\x00{\"content_base64\":\"eA==\"}\n", $api->call('repoGetRawFile', ['owner' => 'alice', 'repo' => 'project', 'filepath' => 'dir/file.bin']));
	$transport->queue(200, '{"file":"json"}', ['Content-Type' => 'application/json']);
	same('{"file":"json"}', $api->call('repoGetRawFile', ['owner' => 'alice', 'repo' => 'project', 'filepath' => 'file.json']));
	$transport->queue(200, '');
	same('', $api->call('repoGetRawFile', ['owner' => 'alice', 'repo' => 'project', 'filepath' => 'empty.txt']));
});

test('operation client supports attachment multipart and octet-stream uploads', function (): void {
	[$api, $transport] = client(Client::class, 201, '{"id":7}');
	$path = ['owner' => 'alice', 'repo' => 'project', 'id' => 12];
	same(7, $api->call('repoCreateReleaseAttachment', $path, ['name' => 'build.zip'], "PK\0binary")->id);
	same('application/octet-stream', $transport->requests[0]['headers']['Content-Type']);
	same("PK\0binary", $transport->requests[0]['data']);
	$transport->queue(201, '{"id":8}');
	same(8, $api->call('repoCreateReleaseAttachment', $path, [], ['attachment' => ['filename' => 'build.zip', 'content' => "PK\0binary"]])->id);
	$request = $transport->requests[1];
	same(true, str_starts_with($request['headers']['Content-Type'], 'multipart/form-data; boundary=gitea-'));
	same(true, str_contains($request['data'], "name=\"attachment\"; filename=\"build.zip\"\r\n"));
	same(true, str_contains($request['data'], "\r\n\r\nPK\0binary\r\n"));
});

test('operation client exposes pagination and artifact redirect headers', function (): void {
	[$api, $transport] = client(Client::class, 200, '[]', ['Link' => '<https://gitea.example.test/api/v1/user/repos?page=2>; rel="next"']);
	$response = $api->request('userCurrentListRepos', [], ['page' => 1]);
	same('<https://gitea.example.test/api/v1/user/repos?page=2>; rel="next"', $response->getHeaderLine('Link'));
	$transport->queue(302, '', ['Location' => 'https://storage.example.test/archive.zip']);
	$response = $api->call('downloadArtifact', ['owner' => 'alice', 'repo' => 'project', 'artifact_id' => '42']);
	same(302, $response->getStatusCode());
	same('https://storage.example.test/archive.zip', $response->getHeaderLine('Location'));
	same(2, count($transport->requests));
	$transport->queue(303, '', ['Location' => 'https://storage.example.test/lfs.bin']);
	$response = $api->call('repoGetRawFileOrLFS', ['owner' => 'alice', 'repo' => 'project', 'filepath' => 'file.bin']);
	same(303, $response->getStatusCode());
	same('https://storage.example.test/lfs.bin', $response->getHeaderLine('Location'));
});

test('operation client corrects the upstream GPG verification schema from router source', function (): void {
	[$api, $transport] = client(Client::class, 200, '{"id":7}');
	throws(InvalidArgumentException::class, fn() => $api->call('userVerifyGPGKey'));
	throws(InvalidArgumentException::class, fn() => $api->call('userVerifyGPGKey', [], [], ['key_id' => 'ABCD']));
	same([], $transport->requests);
	same(7, $api->call('userVerifyGPGKey', [], [], ['key_id' => 'ABCD', 'armored_signature' => 'signature'])->id);
	same(['key_id' => 'ABCD', 'armored_signature' => 'signature'], json_decode($transport->requests[0]['data'], true));
});

test('operation client rejects bad input before making requests', function (): void {
	[$api, $transport] = client(Client::class);
	throws(InvalidArgumentException::class, fn() => $api->call('notAnOperation'));
	throws(InvalidArgumentException::class, fn() => $api->call('repoGet', ['owner' => 'alice']));
	throws(InvalidArgumentException::class, fn() => $api->call('repoGet', ['owner' => 'alice', 'repo' => 'project', 'extra' => 'x']));
	throws(InvalidArgumentException::class, fn() => $api->call('userCurrentListRepos', [], ['page' => 'not-a-number']));
	throws(InvalidArgumentException::class, fn() => $api->call('userCurrentListRepos', [], ['unknown' => 1]));
	throws(InvalidArgumentException::class, fn() => $api->call('renderMarkdownRaw'));
	throws(InvalidArgumentException::class, fn() => $api->call('renderMarkdownRaw', [], [], []));
	throws(InvalidArgumentException::class, fn() => $api->call('repoGet', ['owner' => 'alice', 'repo' => 'project'], [], ['unexpected' => 'body']));
	throws(InvalidArgumentException::class, fn() => $api->call('userCurrentListRepos', [], [], null, ['Authorization' => "bad\r\nHeader: value"]));
	same([], $transport->requests);
});

test('operation client does not accept undocumented success or error statuses', function (): void {
	[$api, $transport] = client(Client::class, 200, '{"message":"wrong status"}');
	$error = throws(DomainException::class, fn() => $api->call('deleteRepoSecret', ['owner' => 'alice', 'repo' => 'project', 'secretname' => 'SECRET']));
	same(200, $error->getCode());
	$transport->queue(403, '{"message":"forbidden"}');
	$error = throws(DomainException::class, fn() => $api->call('repoGet', ['owner' => 'alice', 'repo' => 'project']));
	same(403, $error->getCode());
	same(2, count($transport->requests));
});

test('operation client permits explicit Basic authentication without duplicate token headers', function (): void {
	[$api, $transport] = client(Client::class, 201, '{"id":1}');
	$api->call('userCreateToken', ['username' => 'alice'], [], ['name' => 'test', 'scopes' => ['read:repository']], ['authorization' => 'Basic dGVzdDp0ZXN0']);
	same('Basic dGVzdDp0ZXN0', $transport->requests[0]['headers']['Authorization']);
	same(false, isset($transport->requests[0]['headers']['authorization']));
});
