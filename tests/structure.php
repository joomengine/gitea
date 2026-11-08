<?php

/** Non-executing, local checks; this is not a JCB compiler or dependency resolver. */
declare(strict_types=1);

$root = dirname(__DIR__);
$index = json_decode(file_get_contents($root . '/super-powers.json'), true, 512, JSON_THROW_ON_ERROR);
$checked = 0;

function ensure(bool $condition, string $message): void
{
	if (!$condition)
	{
		throw new RuntimeException($message);
	}
}

/** Extract the outer declaration body without counting braces in comments/strings. */
function declarationBody(string $source): string
{
	$tokens = token_get_all($source, TOKEN_PARSE);
	$declaration = false;
	$depth = 0;
	$offset = 0;
	$start = null;
	foreach ($tokens as $token)
	{
		$text = is_array($token) ? $token[1] : $token;
		if (is_array($token) && in_array($token[0], [T_CLASS, T_INTERFACE, T_TRAIT], true) && $start === null)
		{
			$declaration = true;
		}
		if ($declaration && ($token === '{' || (is_array($token) && in_array($token[0], [T_CURLY_OPEN, T_DOLLAR_OPEN_CURLY_BRACES], true))))
		{
			if ($depth++ === 0)
			{
				$start = $offset + strlen($text);
			}
		}
		elseif ($declaration && $token === '}' && --$depth === 0)
		{
			return substr($source, $start, $offset - $start);
		}
		$offset += strlen($text);
	}
	throw new RuntimeException('No complete class/interface/trait declaration was found.');
}

try
{
	foreach ($index as $guid => $entry)
	{
		ensure(preg_match('/^[0-9a-f]{8}-(?:[0-9a-f]{4}-){3}[0-9a-f]{12}$/D', $guid) === 1, 'Invalid GUID: ' . $guid);
		$directory = 'src/' . $guid;
		ensure($entry['guid'] === $guid && $entry['path'] === $directory, 'Index identity/path mismatch: ' . $guid);
		ensure($entry['spk'] === 'Super---' . str_replace('-', '_', $guid) . '---Power', 'Index SPK mismatch: ' . $guid);
		foreach (['code' => 'code.php', 'power' => 'code.power', 'settings' => 'settings.json'] as $key => $filename)
		{
			ensure($entry[$key] === $directory . '/' . $filename, 'Index path mismatch: ' . $guid . '/' . $key);
			ensure(is_file($root . '/' . $entry[$key]), 'Missing indexed file: ' . $entry[$key]);
		}
		ensure(is_file($root . '/' . $directory . '/README.md'), 'Missing Power README: ' . $guid);
		$settings = json_decode(file_get_contents($root . '/' . $entry['settings']), true, 512, JSON_THROW_ON_ERROR);
		foreach (['guid', 'name', 'type'] as $field)
		{
			ensure($entry[$field] === $settings[$field], 'Settings mismatch: ' . $guid . '/' . $field);
		}
		ensure(str_contains($settings['namespace'], '[[[NamespacePrefix]]]'), 'Portable namespace missing: ' . $guid);
		$source = str_replace("\r\n", "\n", file_get_contents($root . '/' . $entry['power']));
		$php = str_replace("\r\n", "\n", file_get_contents($root . '/' . $entry['code']));
		ensure(trim(declarationBody($php)) === trim($source), 'Generated PHP body differs from code.power: ' . $guid);
		token_get_all('<?php ' . $entry['type'] . ' ' . $entry['name'] . "\n{\n" . $source . "\n}", TOKEN_PARSE);
		$lint = proc_open([PHP_BINARY, '-l', $root . '/' . $entry['code']], [1 => ['pipe', 'w'], 2 => ['pipe', 'w']], $pipes);
		ensure(is_resource($lint), 'Could not start PHP lint for ' . $guid);
		$lintOutput = stream_get_contents($pipes[1]) . stream_get_contents($pipes[2]);
		fclose($pipes[1]);
		fclose($pipes[2]);
		ensure(proc_close($lint) === 0, 'PHP lint failed for ' . $guid . ': ' . $lintOutput);
		$checked++;
	}
	foreach (glob($root . '/src/*/settings.json') as $settings)
	{
		ensure(isset($index[basename(dirname($settings))]), 'Unindexed Power: ' . $settings);
	}
	printf("Validated identities, paths, syntax and source/PHP body agreement for %d Powers (PHP %s).\n", $checked, PHP_VERSION);
}
catch (Throwable $error)
{
	fwrite(STDERR, $error->getMessage() . "\n");
	exit(1);
}
