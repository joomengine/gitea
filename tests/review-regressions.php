<?php

test('issue subscriber lists return users as arrays including empty lists', function (): void {
	[$api, $transport] = client(VDM\Joomla\Gitea\Issue\Subscriptions::class, body: '[{"login":"alice"}]');
	same('alice', $api->get('owner', 'repo', 1, 2, 20)[0]->login);
	same('https://gitea.example.test/api/v1/repos/owner/repo/issues/1/subscriptions?page=2&limit=20', $transport->requests[0]['url']);
	$transport->queue(200, '[]');
	same([], $api->get('owner', 'repo', 1));
});

test('unadopted repository filters use the current query parameter', function (): void {
	[$api, $transport] = client(VDM\Joomla\Gitea\Admin\Unadopted::class, body: '[]');
	same([], $api->list(pattern: 'owner/project*'));
	same('https://gitea.example.test/api/v1/admin/unadopted?page=1&limit=10&query=owner%2Fproject%2A', $transport->requests[0]['url']);
	$transport->queue(200, '[]');
	$api->list();
	same('https://gitea.example.test/api/v1/admin/unadopted?page=1&limit=10', $transport->requests[1]['url']);
});
