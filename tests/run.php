<?php

declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

set_error_handler(static function (int $severity, string $message, string $file, int $line): bool {
	if (!(error_reporting() & $severity))
	{
		return false;
	}
	throw new ErrorException($message, 0, $severity, $file, $line);
});

foreach (glob(__DIR__ . '/*.php') as $file)
{
	if (!in_array(basename($file), ['bootstrap.php', 'run.php', 'structure.php'], true))
	{
		require $file;
	}
}

$failures = 0;
foreach ($tests as $name => $callback)
{
	try
	{
		$callback();
		echo "PASS $name\n";
	}
	catch (Throwable $error)
	{
		$failures++;
		fwrite(STDERR, "FAIL $name: " . $error->getMessage() . "\n" . $error->getTraceAsString() . "\n");
	}
}

printf("%d tests; %d failures (PHP %s).\n", count($tests), $failures, PHP_VERSION);
exit($failures === 0 ? 0 : 1);
