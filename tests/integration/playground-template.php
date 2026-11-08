<?php
/**
 * JCB consumer integration smoke test for maintenance/gitea-28-api.
 *
 * Paste this complete file into the default template of a disposable Demo
 * component view in JCB, or append it after HTML in an existing view. Keep the
 * Super___GUID___Power references: JCB resolves and bundles them at compile time.
 * Compile, install and open the view; this file is not a standalone CLI test.
 *
 * The recording transport makes no network requests. The final check sends only
 * two anonymous GET /api/v1/version requests to the configured public host.
 * See docs/testing-playground.md for setup, evidence and limitations.
 */
defined('_JEXEC') or die;

$giteaLiveBase = 'https://git.vdm.dev';
$giteaReport = ['branch' => 'maintenance/gitea-28-api', 'checks' => []];
$giteaAssert = static function ($condition, $message): void {
	if (!$condition)
	{
		throw new \RuntimeException($message);
	}
};
$giteaCheck = static function (string $name, callable $test) use (&$giteaReport): void {
	try
	{
		$details = $test();
		$giteaReport['checks'][] = ['name' => $name, 'status' => 'PASS', 'details' => $details];
	}
	catch (\Throwable $error)
	{
		$giteaReport['checks'][] = ['name' => $name, 'status' => 'FAIL', 'details' => get_class($error) . ': ' . $error->getMessage()];
	}
};

try
{
// An active Factory reference makes JCB compile the complete provider graph.
// Its configured HTTP service is never resolved, so no stored token is used.
$giteaNamespace = (new \ReflectionClass(Super___4612af84_5a42_4ea5_87bf_9d79cc19c330___Power::class))->getNamespaceName();
$giteaHttp = new Super___ce40b3d2_226c_4a64_b116_c19455822be1___Power('');
$giteaHttp->setOption('timeout', 15);
$giteaUri = new Super___61e813c6_a872_4f55_8078_198241170e80___Power($giteaLiveBase);
$giteaContainer = new \Joomla\DI\Container();
$giteaContainer->share('Gitea.Utilities.Http', $giteaHttp);
$giteaContainer->share('Gitea.Dynamic.Uri', $giteaUri);
foreach (['Utilities', 'Settings', 'Organization', 'User', 'Repository', 'Package', 'Issue', 'Notifications', 'Miscellaneous', 'Admin'] as $giteaProvider)
{
	$giteaProviderClass = $giteaNamespace . '\\Service\\' . $giteaProvider;
	$giteaContainer->registerServiceProvider(new $giteaProviderClass());
}
$giteaClient = $giteaContainer->get('Gitea.Client');

$giteaCheck('Pinned branch operation catalog', static function () use ($giteaAssert): string {
	$giteaAssert(Super___b194b19f_e665_435a_925d_04158a61ef3e___Power::VERSION === '28.2.0', 'Wrong catalog release');
	$giteaAssert(count(Super___b194b19f_e665_435a_925d_04158a61ef3e___Power::all()) === 537, 'Wrong operation count');
	return '537 operations; upstream ' . Super___b194b19f_e665_435a_925d_04158a61ef3e___Power::REVISION;
});
$giteaCheck('Anonymous transport and redirect policy', static function () use ($giteaHttp, $giteaAssert): string {
	$giteaAssert($giteaHttp->getToken() === null, 'A token was unexpectedly configured');
	$giteaAssert($giteaHttp->getOption('follow_location') === false, 'Redirect policy is not the branch policy');
	return get_class($giteaHttp);
});
$giteaCheck('All endpoint services construct', static function () use ($giteaContainer, $giteaAssert): string {
	$count = 0;
	foreach ($giteaContainer->getKeys() as $key)
	{
		if (strpos($key, 'Gitea.') === 0)
		{
			$giteaAssert(is_object($giteaContainer->get($key)), 'Service failed: ' . $key);
			$count++;
		}
	}
	$giteaAssert($count >= 95, 'Too few services were loaded: ' . $count);
	$giteaAssert(is_object($giteaContainer->get('Gitea.Issue.Deadline')), 'Missing deadline service');
	return $count . ' services resolved';
});
$giteaCheck('Compiled branch classes are loaded', static function () use ($giteaClient, $giteaHttp): array {
	return [
		'client' => (new \ReflectionClass($giteaClient))->getFileName(),
		'http' => (new \ReflectionClass($giteaHttp))->getFileName(),
		'catalog' => (new \ReflectionClass(Super___b194b19f_e665_435a_925d_04158a61ef3e___Power::class))->getFileName(),
	];
});

// This transport records requests in memory. These tests cannot contact a server.
$giteaRecording = new class implements \Joomla\Http\TransportInterface {
	public array $requests = [];
	public array $responses = [];
	public static function isSupported() { return true; }
	public function request($method, \Joomla\Uri\UriInterface $uri, $data = null, array $headers = [], $timeout = null, $userAgent = null)
	{
		$this->requests[] = ['method' => $method, 'url' => (string) $uri, 'data' => $data, 'headers' => $headers];
		if (!$this->responses) { throw new \RuntimeException('Unexpected recorded request'); }
		[$status, $body, $responseHeaders] = array_shift($this->responses);
		$response = new \Joomla\Http\Response('php://memory', $status, $responseHeaders);
		$response->getBody()->write($body);
		$response->getBody()->rewind();
		return $response;
	}
};
$giteaFixtureHttp = new Super___ce40b3d2_226c_4a64_b116_c19455822be1___Power('', $giteaRecording);
$giteaFixtureClient = new Super___6a20613d_d232_4f5b_8f86_8e41a20cd1a1___Power(
	$giteaFixtureHttp,
	new Super___61e813c6_a872_4f55_8078_198241170e80___Power('https://fixture.invalid'),
	new Super___19eb68d7_1e19_4d14_a0ef_70d719c45e80___Power()
);
$giteaCheck('Recorded response decoding', static function () use ($giteaFixtureClient, $giteaRecording, $giteaAssert): string {
	$giteaRecording->responses[] = [200, '{"version":"28.2.0"}', ['Content-Type' => 'application/json']];
	$giteaAssert($giteaFixtureClient->call('getVersion')->version === '28.2.0', 'Success response was not decoded');
	return 'HTTP 200 with null success default decoded correctly';
});
$giteaCheck('Recorded path and repeated query encoding', static function () use ($giteaFixtureClient, $giteaRecording, $giteaAssert): string {
	$giteaRecording->responses[] = [200, '[]', ['Content-Type' => 'application/json']];
	$giteaFixtureClient->call('notifyGetRepoList', ['owner' => 'a&b', 'repo' => 'a/b'], ['status-types' => ['unread', 'pinned']]);
	$request = end($giteaRecording->requests);
	$giteaAssert($request['url'] === 'https://fixture.invalid/api/v1/repos/a%26b/a%2Fb/notifications?status-types=unread&status-types=pinned', 'Encoded URI differs');
	return $request['url'];
});
$giteaCheck('Recorded raw JSON file bytes', static function () use ($giteaFixtureClient, $giteaRecording, $giteaAssert): string {
	$bytes = "{\"file\":\"json\"}\n";
	$giteaRecording->responses[] = [200, $bytes, ['Content-Type' => 'application/json']];
	$result = $giteaFixtureClient->call('repoGetRawFile', ['owner' => 'alice', 'repo' => 'project', 'filepath' => 'dir/file.json']);
	$giteaAssert($result === $bytes, 'Raw file was converted or trimmed');
	return 'Exact JSON file bytes preserved';
});
$giteaCheck('Temporary token restores anonymous state', static function () use ($giteaFixtureClient, $giteaFixtureHttp, $giteaAssert): string {
	$giteaFixtureClient->load_(null, 'in-memory-test-token');
	$giteaFixtureClient->reset_();
	$giteaAssert($giteaFixtureHttp->getToken() === null, 'Anonymous token state was not restored');
	return 'No network request made';
});
$giteaCheck('Invalid input rejected before transport', static function () use ($giteaFixtureClient, $giteaRecording, $giteaAssert): string {
	$before = count($giteaRecording->requests);
	$rejected = false;
	try { $giteaFixtureClient->call('repoGet', ['owner' => 'alice']); }
	catch (\InvalidArgumentException $error) { $rejected = true; }
	$giteaAssert($rejected && count($giteaRecording->requests) === $before, 'Invalid request reached transport');
	return 'Missing repository rejected locally';
});
$giteaCheck('Live anonymous version endpoint', static function () use ($giteaClient, $giteaContainer, $giteaAssert, $giteaLiveBase): string {
	$modern = $giteaClient->call('getVersion');
	$legacy = $giteaContainer->get('Gitea.Miscellaneous.Version')->get();
	$giteaAssert(is_object($modern) && isset($modern->version), 'Version field absent');
	$giteaAssert($modern->version === $legacy->version, 'New and existing clients disagree');
	return $giteaLiveBase . ' reports ' . $modern->version . '; both clients agree. This verifies the version endpoint only.';
});

}
catch (\Throwable $giteaBootstrapError)
{
	$giteaReport['checks'][] = ['name' => 'Compiled classes and container bootstrap', 'status' => 'FAIL', 'details' => get_class($giteaBootstrapError) . ': ' . $giteaBootstrapError->getMessage()];
}

$giteaReport['passed'] = count(array_filter($giteaReport['checks'], static function ($row) { return $row['status'] === 'PASS'; }));
$giteaReport['failed'] = count($giteaReport['checks']) - $giteaReport['passed'];
echo '<h1>Gitea branch integration test</h1><pre>' . htmlspecialchars(json_encode($giteaReport, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . '</pre>';
