<?php

use VDM\Joomla\Gitea\Abstraction\Api;
use VDM\Joomla\Gitea\Utilities\Http;
use VDM\Joomla\Gitea\Utilities\Response;
use VDM\Joomla\Gitea\Utilities\Uri;

test('default HTTP transport returns redirects without a second authenticated request', static function (): void {
	$process = proc_open([PHP_BINARY, __DIR__ . '/fixtures/redirect-server.php'],
		[['pipe', 'r'], ['pipe', 'w'], ['pipe', 'w']], $pipes);
	if (!is_resource($process))
	{
		throw new RuntimeException('Could not start the loopback HTTP fixture.');
	}
	try
	{
		fclose($pipes[0]);
		stream_set_timeout($pipes[1], 5);
		$address = trim((string) fgets($pipes[1]));
		if (!preg_match('/^127\.0\.0\.1:[0-9]+$/D', $address))
		{
			throw new RuntimeException('Loopback fixture did not become ready.');
		}
		$http = new Http('loopback-test-token');
		same(false, $http->getOption('follow_location'));
		$result = $http->get('http://' . $address . '/redirect', [], 3);
		same(302, $result->getStatusCode());
		same('1', trim((string) fgets($pipes[1])));
	}
	finally
	{
		fclose($pipes[1]);
		fclose($pipes[2]);
		proc_terminate($process);
		proc_close($process);
	}
});

test('tokens are cleared in both state and request headers', static function (): void {
	$transport = (new RecordingTransport())->queue(200)->queue(200);
	$http = new Http('first-token', $transport);
	$http->setOption('headers', ['authorization' => 'token stale', 'X-Test' => 'retained']);
	$http->setToken('second-token');
	$http->get('https://gitea.example.test/api/v1/user');
	same('token second-token', $transport->requests[0]['headers']['Authorization']);
	same(false, isset($transport->requests[0]['headers']['authorization']));
	$http->setToken('');
	$http->get('https://gitea.example.test/api/v1/version');
	same(null, $http->getToken());
	same(['X-Test' => 'retained'], $transport->requests[1]['headers']);
});

test('reset restores anonymous authentication and the original URL', static function (): void {
	$transport = (new RecordingTransport())->queue(200);
	$http = new Http(null, $transport);
	$uri = new Uri('https://gitea.example.test');
	$api = new class($http, $uri, new Response()) extends Api {};
	$api->load_('https://other.example.test', 'temporary-token');
	same('temporary-token', $http->getToken());
	$api->reset_();
	same(null, $http->getToken());
	same('https://gitea.example.test/api/v1', $api->api());
	$http->get($uri->get('/version'));
	same(false, isset($transport->requests[0]['headers']['Authorization']));
	$api->reset_();
	same(null, $http->getToken());
});

test('reset restores a prior token after temporary anonymous access', static function (): void {
	$http = new Http('original-token', new RecordingTransport());
	$api = new class($http, new Uri(), new Response()) extends Api {};
	$api->load_(null, '');
	same(null, $http->getToken());
	$api->reset_();
	same('original-token', $http->getToken());
	$api->load_(null, 'permanent-token', false);
	$api->reset_();
	same('permanent-token', $http->getToken());
});

test('URI joins normalized base paths and isolates request query state', static function (): void {
	$factory = new Uri('https://gitea.example.test/git/', '/api/', '/v1/');
	same('https://gitea.example.test/git/api/v1', $factory->api());
	$first = $factory->get('repos/owner/repo');
	$first->setVar('ref', 'feature/a&b + ü');
	same('https://gitea.example.test/git/api/v1/repos/owner/repo?ref=feature%2Fa%26b%20%2B%20%C3%BC', (string) $first);
	same('https://gitea.example.test/git/api/v1/version', (string) $factory->get('/version'));
});

test('URI encodes multi-value filters and preserves false and zero', static function (): void {
	$uri = (new Uri('https://gitea.example.test'))->get('/notifications');
	$uri->setVar('status-types', ['unread', 'pinned']);
	$uri->setVar('all', false);
	$uri->setVar('page', 0);
	$uri->setVar('unused', null);
	same('https://gitea.example.test/api/v1/notifications?status-types=unread&status-types=pinned&all=false&page=0', (string) $uri);
	$uri->setVar('invalid', [['nested']]);
	throws(InvalidArgumentException::class, static fn() => (string) $uri);
});

test('API distinguishes path parameters from repository file paths', static function (): void {
	$api = new class(new Http(null, new RecordingTransport()), new Uri(), new Response()) extends Api {
		public function values(): array
		{
			return [$this->segment('feature/a+b #ü'), $this->path('src/a b/ü.json')];
		}
	};
	same(['feature%2Fa%2Bb%20%23%C3%BC', 'src/a%20b/%C3%BC.json'], $api->values());
});

test('response accepts success codes with null defaults', static function (): void {
	$decoder = new Response();
	same(null, $decoder->get_(response(200)));
	same(null, $decoder->get_(response(204), [200 => null, 204 => null]));
	same('success', $decoder->get_(response(201), [201 => 'success']));
	same(['id' => 7], (array) $decoder->get_(response(201, '{"id":7}'), [200 => null, 201 => null]));
	$error = throws(DomainException::class, static fn() => $decoder->get_(response(403, '{"message":"Forbidden"}')));
	same(403, $error->getCode());
	same(true, strpos($error->getMessage(), 'Forbidden') !== false);
});

test('path encoding rejects dot traversal while retaining ordinary hidden filenames', static function (): void {
	$api = new class(new Http(null, new RecordingTransport()), new Uri(), new Response()) extends Api {
		public function identifier(string $value): string { return $this->segment($value); }
		public function file(string $value): string { return $this->path($value); }
	};
	throws(InvalidArgumentException::class, static fn() => $api->identifier('.'));
	throws(InvalidArgumentException::class, static fn() => $api->identifier('..'));
	throws(InvalidArgumentException::class, static fn() => $api->file('../file'));
	throws(InvalidArgumentException::class, static fn() => $api->file('src/./file'));
	same('.github/workflows/test.yml', $api->file('.github/workflows/test.yml'));
});

test('invalid JSON payloads fail before network I/O', static function (): void {
	$transport = new RecordingTransport();
	$api = new class(new Http(null, $transport), new Uri(), new Response()) extends Api {
		public function send($data): void
		{
			$this->http->post($this->uri->get('/test'), $this->encode($data));
		}
	};
	throws(JsonException::class, static fn() => $api->send(['name' => "\xff"]));
	throws(JsonException::class, static fn() => $api->send(['value' => INF]));
	same([], $transport->requests);
});

test('response decoding preserves scalars, precision, and plain whitespace', static function (): void {
	$decoder = new Response();
	same(0, $decoder->get(response(200, '0')));
	same(false, $decoder->get(response(200, 'false')));
	same(null, $decoder->get(response(200, 'null'), 200, 'empty'));
	same('9223372036854775808', $decoder->get(response(200, '9223372036854775808')));
	same(" \t\n", $decoder->get(response(200, " \t\n"), 200, 'empty'));
	same('empty', $decoder->get(response(200), 200, 'empty'));
});

test('raw responses preserve JSON files and binary bytes', static function (): void {
	$decoder = new Response();
	foreach (['{"enabled":true}', 'null', '0', "\x00\xffZIP\n", " \n"] as $body)
	{
		same($body, $decoder->raw(response(200, $body)));
	}
	same('', $decoder->raw(response(200), 200, ''));
	throws(DomainException::class, static fn() => $decoder->raw(response(404, '{"message":"File missing"}')));
});

test('base64 decoding and structured errors do not corrupt values or throw type errors', static function (): void {
	$decoder = new Response();
	same("hello\n", $decoder->get(response(200, '{"content_base64":"aGVsbG8K"}'))->content);
	same('original', $decoder->get(response(200, '{"content_base64":"%%%","content":"original"}'))->content);
	$error = throws(DomainException::class, static fn() => $decoder->get(response(422, '{"error":{"field":"invalid"}}')));
	same(422, $error->getCode());
	same(true, strpos($error->getMessage(), '"field":"invalid"') !== false);
});
