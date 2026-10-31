<?php

/**
 * Offline request/response regression support using the real Joomla Framework.
 * Only the network transport is replaced. No live Gitea credentials are used.
 */

declare(strict_types=1);

$autoload = getenv('GITEA_TEST_AUTOLOAD') ?: dirname(__DIR__) . '/vendor/autoload.php';
if (!is_file($autoload))
{
	fwrite(STDERR, "Run composer install before running the tests.\n");
	exit(1);
}
require $autoload;

$powerIndex = json_decode(file_get_contents(dirname(__DIR__) . '/super-powers.json'), true, 512, JSON_THROW_ON_ERROR);
$powerClasses = [];
foreach ($powerIndex as $power)
{
	$powerClasses[$power['namespace'] . '\\' . $power['name']] = dirname(__DIR__) . '/' . $power['code'];
}
$powerClasses += [
	'VDM\\Joomla\\Interfaces\\Git\\ApiInterface' => __DIR__ . '/fixtures/super-powers/ApiInterface.php',
	'VDM\\Joomla\\Interfaces\\FactoryInterface' => __DIR__ . '/fixtures/super-powers/FactoryInterface.php',
	'VDM\\Joomla\\Abstraction\\Factory' => __DIR__ . '/fixtures/super-powers/Factory.php',
	'VDM\\Joomla\\Interfaces\\Git\\Repository\\ContentsInterface' => __DIR__ . '/fixtures/super-powers/ContentsInterface.php',
	'VDM\\Joomla\\Interfaces\\Git\\Repository\\WikiInterface' => __DIR__ . '/fixtures/super-powers/WikiInterface.php',
	'VDM\\Joomla\\Interfaces\\Git\\Repository\\TagsInterface' => __DIR__ . '/fixtures/super-powers/TagsInterface.php',
];
spl_autoload_register(static function (string $class) use ($powerClasses): void {
	if (isset($powerClasses[$class]))
	{
		require $powerClasses[$class];
	}
});

/** A deterministic transport that fails if a response was not explicitly queued. */
final class RecordingTransport implements Joomla\Http\TransportInterface
{
	public array $requests = [];
	private array $responses = [];

	public function queue(int $status, string $body = '', array $headers = []): self
	{
		$this->responses[] = response($status, $body, $headers);
		return $this;
	}

	public function request($method, Joomla\Uri\UriInterface $uri, $data = null, array $headers = [], $timeout = null, $userAgent = null)
	{
		$this->requests[] = [
			'method' => $method,
			'url' => (string) $uri,
			'data' => $data,
			'headers' => $headers,
			'timeout' => $timeout,
			'userAgent' => $userAgent,
		];
		if (!$this->responses)
		{
			throw new RuntimeException('Unexpected HTTP request: ' . $method . ' ' . $uri);
		}
		return array_shift($this->responses);
	}

	public static function isSupported()
	{
		return true;
	}
}

function response(int $status, string $body = '', array $headers = []): Joomla\Http\Response
{
	$result = new Joomla\Http\Response('php://memory', $status, $headers);
	$result->getBody()->write($body);
	$result->getBody()->rewind();
	return $result;
}

/** @return array{0: object, 1: RecordingTransport} */
function client(string $class, int $status = 200, string $body = '{}', array $headers = []): array
{
	$transport = (new RecordingTransport())->queue($status, $body, $headers);
	$http = new VDM\Joomla\Gitea\Utilities\Http('test-token', $transport);
	$uri = new VDM\Joomla\Gitea\Utilities\Uri('https://gitea.example.test');
	return [new $class($http, $uri, new VDM\Joomla\Gitea\Utilities\Response()), $transport];
}

function same($expected, $actual, string $message = ''): void
{
	if ($expected !== $actual)
	{
		throw new RuntimeException(($message === '' ? 'Values differ' : $message)
			. '\nExpected: ' . var_export($expected, true) . '\nActual: ' . var_export($actual, true));
	}
}

function throws(string $class, callable $callback): Throwable
{
	try
	{
		$callback();
	}
	catch (Throwable $error)
	{
		if (!$error instanceof $class)
		{
			throw new RuntimeException('Expected ' . $class . ', received ' . get_class($error) . ': ' . $error->getMessage(), 0, $error);
		}
		return $error;
	}
	throw new RuntimeException('Expected ' . $class . ', no exception was thrown.');
}

$tests = [];
function test(string $name, callable $callback): void
{
	$GLOBALS['tests'][$name] = $callback;
}
