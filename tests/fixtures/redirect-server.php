<?php

// A loopback-only HTTP fixture. Report how many requests actually arrived.
$server = stream_socket_server('tcp://127.0.0.1:0', $errno, $error);
if ($server === false)
{
	fwrite(STDERR, $error . "\n");
	exit(1);
}
$address = stream_socket_get_name($server, false);
echo $address . "\n";
flush();
$requests = 0;
while ($connection = @stream_socket_accept($server, $requests === 0 ? 5 : 1))
{
	stream_set_timeout($connection, 2);
	while (($line = fgets($connection)) !== false && trim($line) !== '') {}
	$requests++;
	$status = $requests === 1 ? '302 Found' : '200 OK';
	$location = $requests === 1 ? 'Location: http://' . $address . "/target\r\n" : '';
	fwrite($connection, "HTTP/1.1 " . $status . "\r\n" . $location . "Content-Length: 0\r\nConnection: close\r\n\r\n");
	fclose($connection);
	if ($requests >= 2)
	{
		break;
	}
}
fclose($server);
echo $requests . "\n";
