# Gitea operation client

`VDM\Joomla\Gitea\Client` adds access to all **537 operation IDs** in the official Gitea **28.2.0** REST API schema. Existing endpoint classes keep their normal entry points; use this client for newer operations or access to response headers.

- Power GUID: `6a20613d-d232-4f5b-8f86-8e41a20cd1a1`
- Service: `Gitea.Client`
- Parent: existing `Abstraction\Api`; constructor receives the existing `Utilities\Http`, `Utilities\Uri`, and `Utilities\Response` services.
- Catalog dependency: `Utilities\Operations`, GUID `b194b19f-e665-435a-925d-04158a61ef3e`.
- Runtime: PHP 8.1+ and the Joomla Framework HTTP/URI dependencies used by the client.

## Calling operations

In a component whose Gitea services have been configured:

```php
use VDM\Joomla\Gitea\Factory;

$client = Factory::_('Gitea.Client');
$runs = $client->call(
    'getWorkflowRuns',
    ['owner' => 'joomengine', 'repo' => 'gitea'],
    ['branch' => 'master', 'page' => 1, 'limit' => 20]
);
```

`call(string $operationId, array $path = [], array $query = [], $body = null, array $headers = [])` uses the exact, case-sensitive operation ID and parameter names from the upstream schema. The index is discoverable through `Operations::all()` and `Operations::get($operationId)`.

The client validates required/unknown path and query names, scalar types, enums, numeric bounds and array item types. Omitted optional query parameters stay omitted; `false`, `0` and empty strings remain meaningful values. Arrays use the schema's collection format, including repeated keys. Pass **unencoded** path/query values; the client encodes each value exactly once.

Body values use PHP arrays/objects for JSON and strings for plain or binary data. Object bodies check the schema's required top-level properties; full nested field validation, authorization and server policy remain Gitea's responsibility. New supported fields can therefore be supplied without adding another PHP signature parameter. An empty PHP array supplied for an object schema becomes `{}`. Body values are not interpolated into URLs.

```php
$variable = $client->call(
    'createRepoVariable',
    ['owner' => 'joomengine', 'repo' => 'gitea', 'variablename' => 'DEPLOY_ENV'],
    [],
    ['value' => 'staging']
);
```

The HTTP token is used by default. Operations such as personal-token creation require Basic authentication; supply an explicit `Authorization` header through the final argument. The wrapper does not infer credentials or retry mutations. Use `load_()`/`reset_()` from the existing API base when temporarily changing server/token configuration.

## Response contracts

`call()` returns JSON decoded into objects/arrays, exact plain/binary bytes (including an empty string), or `null` for an empty JSON success response. Documented redirects return the complete Joomla HTTP response so the caller can inspect `Location`. Unexpected status codes throw the shared `DomainException`; unknown/malformed operation parameters throw `InvalidArgumentException` before transport. Invalid JSON input encoding throws `JsonException`.

`request()` has the same arguments and status checks but always returns the original `Joomla\Http\Response`. Use it for pagination `Link`/`X-Total-Count`, rate-limit headers, downloads, and exact byte access. Neither method automatically paginates or retries. The standard Curl/Stream transports do not follow redirects; a custom injected transport must honor that same contract. An artifact's external storage URL must be handled separately without forwarding the Gitea token. File operations preserve bytes even when the server reports a JSON content type for a JSON file.

```php
$response = $client->request('userCurrentListRepos', [], ['page' => 1, 'limit' => 50]);
$nextPage = $response->getHeaderLine('Link');
$repositories = json_decode((string) $response->getBody(), false, 512, JSON_THROW_ON_ERROR);
```

## Attachments

Release attachments support an exact binary string (sent as `application/octet-stream`) or a multipart body. Issue/comment attachments use multipart. Multipart fields hold `filename`, `content` bytes and optional `contentType`; the client does not read local paths implicitly.

```php
$attachment = $client->call(
    'repoCreateReleaseAttachment',
    ['owner' => 'joomengine', 'repo' => 'gitea', 'id' => 12],
    [],
    ['attachment' => [
        'filename' => 'notes.txt',
        'content' => "Release notes\n",
        'contentType' => 'text/plain',
    ]]
);
```

Bodies/downloads are buffered in memory, matching the existing Joomla HTTP client. This is not a streaming-upload interface. Caller-provided headers cannot override `Host` or `Content-Length`; `Content-Type` must agree with the selected payload encoding.

## Evidence and limits

The catalog is generated from Gitea tag `v28.2.0`, commit `829b49c1ae96015e345f9d2a0eb1ea7acd5f31e1`, with explicitly recorded corrections for schema/implementation discrepancies. See [schema provenance and regeneration](../../tools/openapi/README.md). Its coverage means that every documented operation is addressable, not that every permission combination or server operation has been exercised live. Server-side feature settings and token scopes still apply. JCB import/compile and live Gitea integration require separate acceptance checks.
