<?php

declare(strict_types=1);

use Joomla\DI\Container;
use VDM\Joomla\Gitea\Utilities\Http;
use VDM\Joomla\Gitea\Utilities\Uri;
use VDM\Joomla\Gitea\Utilities\Response;

test('The package Factory registers providers and exposes the new Client lazily', static function (): void {
	$container = VDM\Joomla\Gitea\Factory::getContainer();
	same(true, $container->has('Gitea.Client'));
	same(true, $container->has('Gitea.Issue.Deadline'));
	same($container, VDM\Joomla\Gitea\Factory::getContainer());
	same($container->get('Gitea.Utilities.Response'), VDM\Joomla\Gitea\Factory::_('Gitea.Utilities.Response'));
});

test('All endpoint service aliases construct the declared class and share the instance', static function (): void {
	$container = new Container();
	$container->share('Gitea.Utilities.Http', new Http(null, new RecordingTransport()));
	$container->share('Gitea.Dynamic.Uri', new Uri('https://gitea.example.test'));
	$container->share('Gitea.Utilities.Response', new Response());
	$index = json_decode(file_get_contents(dirname(__DIR__) . '/super-powers.json'), true, 512, JSON_THROW_ON_ERROR);
	$resolved = 0;
	foreach ($index as $entry)
	{
		if ($entry['namespace'] !== 'VDM\\Joomla\\Gitea\\Service' || in_array($entry['name'], ['Jcb', 'Utilities'], true))
		{
			continue;
		}
		$class = $entry['namespace'] . '\\' . $entry['name'];
		$provider = new $class();
		$container->registerServiceProvider($provider);
		$source = file_get_contents(dirname(__DIR__) . '/' . $entry['power']);
		preg_match_all("/->share\('([^']+)', \[\\\$this, '([^']+)'\]/", $source, $matches, PREG_SET_ORDER);
		foreach ($matches as $match)
		{
			$service = $container->get($match[1]);
			$expected = (new ReflectionMethod($provider, $match[2]))->getReturnType()->getName();
			same($expected, get_class($service), $match[1]);
			same($service, $container->get($expected), 'Class alias ' . $expected);
			same($service, $container->get($match[1]), 'Shared service ' . $match[1]);
			$resolved++;
		}
	}
	if ($resolved < 90)
	{
		throw new RuntimeException('Endpoint provider discovery unexpectedly skipped services: ' . $resolved);
	}
});

test('The generic Client service uses the same configured URL and HTTP dependencies', static function (): void {
	$container = new Container();
	$transport = (new RecordingTransport())->queue(200, '{"version":"28.2.0"}');
	$container->share('Gitea.Utilities.Http', new Http('test-token', $transport));
	$container->share('Gitea.Dynamic.Uri', new Uri('https://gitea.example.test/subpath'));
	$container->registerServiceProvider(new VDM\Joomla\Gitea\Service\Utilities());
	$client = $container->get('Gitea.Client');
	same($client, $container->get(VDM\Joomla\Gitea\Client::class));
	same('28.2.0', $client->call('getVersion')->version);
	same('https://gitea.example.test/subpath/api/v1/version', $transport->requests[0]['url']);
});
