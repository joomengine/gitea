# Gitea 28 API maintenance

## Baseline and scope

This update targets **Gitea 28.2.0**, the latest stable release verified on
31 October 2026. Gitea's release number is 28.2.0; the REST API prefix remains
`/api/v1`.

The existing endpoint classes remain available. The new operation client adds
access to the **537 operations** described by the pinned upstream Swagger
schema, including Actions workflows, runs, jobs, artifacts, runners, secrets and
variables. Schema coverage describes available request construction; it is not
a claim that every operation has been exercised against a running server.

Authoritative sources:

- [Gitea 28.2.0 release](https://github.com/go-gitea/gitea/releases/tag/v28.2.0).
- [Gitea source, `829b49c1ae96015e345f9d2a0eb1ea7acd5f31e1`](https://github.com/go-gitea/gitea/tree/829b49c1ae96015e345f9d2a0eb1ea7acd5f31e1).
- [Pinned REST schema](https://github.com/go-gitea/gitea/blob/829b49c1ae96015e345f9d2a0eb1ea7acd5f31e1/templates/swagger/v1-swagger.generated.json).
- [Super Powers authoring contract](https://github.com/joomengine/ai-doc/tree/b54c061cdb74ad2a2bcb1dffbebbf6ff1883eefd/super-powers).
- Original client baseline: `6f94a230be9c7ce93f773bb6d1de9dbf147fba5a`.

## Maintenance changes

### Transport and shared services

- A successful response may map to a `null` default. Status checking now uses
  key existence instead of `isset`, so these responses are accepted.
- Clearing a token clears both its header and stored value. Restoring temporary
  configuration can restore an originally anonymous client.
- Response reading supports Joomla's PSR response accessors. Raw file, archive,
  patch and rendered-content methods preserve bytes instead of decoding them
  as JSON.
- Path parameters are encoded in the endpoint classes. Query values retain
  reserved characters instead of turning values such as `feature/a&b` into
  additional query parameters. Repeated query parameters use repeated keys.
- The HTTP adapter uses the Joomla Framework HTTP implementation. A custom
  transport can be injected; the generic client no longer implicitly selects
  the component-specific `UnsafeCurl` transport. Redirects are disabled by default;
  only Curl or Stream is selected automatically because Joomla Socket follows
  redirects without honoring that policy. Injected transports must implement the
  same no-redirect policy.
- The issue deadline service has its missing DI factory method.

### Existing endpoint repairs

Repairs cover request paths, HTTP methods, success codes, return types, payload
field names and optional values. Examples include branch creation, migration,
release editing, review requests, commit diffs, label replacement, issue editing,
reaction deletion, email deletion and user administration. The regression tests
exercise the resulting requests through the real Joomla HTTP and URI packages
with a recording network transport.

Existing GUIDs, portable namespace templates and public method names are
retained. Changes are made in `code.power` and relevant `settings.json` files,
with matching `code.php` representations. Updating only the PHP preview would
not update JCB's imported source.

## Compatibility and migration

### HTTP runtime

The development checks target PHP 8.1 or newer and compatible Joomla Framework
HTTP, URI, Registry and DI packages. These Composer dependencies support the
standalone checks; Composer does not import or install Super Powers into JCB.
Check the actual packages bundled with the consuming Joomla installation.

Joomla's deprecated `Joomla\CMS\Http\Http` adapter has been replaced with
`Joomla\Http\Http`. Applications that deliberately use a custom transport can
pass it as the second `Http` constructor argument. The old JCB
`allow_selfsigned_certificates` setting is no longer consulted implicitly by this
generic library. Configure trust for the server certificate, or explicitly
supply the application transport when that behavior is required.

Redirects are disabled for all default requests, including existing convenience
wrappers. For an archive or direct-storage LFS response that redirects, use
`Client::request()` to inspect the response and its `Location`, then fetch the
destination separately without forwarding the Gitea token. Injected transports
must honor the same TLS and no-redirect policy; the generic transport interface
cannot enforce the internal behavior of an arbitrary caller-supplied transport.

### Corrected response contracts

Some previous return declarations rejected successful Gitea responses with a
PHP `TypeError`. Those declarations now follow the actual response shape:

| Method | Correct return shape |
| --- | --- |
| `Repository\Commits::getList()` | Array of commits |
| `Repository\Topics::search()` | Object containing topics |
| `Issue\Labels::replace()` | Array of labels |
| `Issue\Subscriptions::get()` | Array of subscribed users |
| `Package\Files::get()` | Array of package files |
| `User\Settings::update()` | User-settings object |

Consumers that declared matching overrides or relied on the incorrect return
documentation need to use these shapes. Existing valid convenience-method
return shapes are preserved where possible. `Repository\Contents::raw()` is
available for exact file bytes; the existing `get()` behavior is retained.

### Partial updates and authentication

`Admin\Users::edit()` omits unspecified optional fields. Previously its defaults
could deactivate a user, remove administrator rights or change quotas during an
otherwise unrelated update. Pass `false`, `0`, or an empty string explicitly
when that is the intended change.

GPG verification needs a key ID and an armored signature. Use the documented
`User\Gpg::verifyKey()` entry point for the current server contract. A public key
alone cannot complete the server's challenge/verification flow.

`User\Following::check()` returns `false` for a missing relationship (404);
authentication, permission and server failures propagate as exceptions instead
of being mistaken for a missing follow. Notification thread marking uses PATCH;
legacy arguments unsupported by that endpoint remain accepted but are ignored,
as documented in the class README.

Authentication and authorization remain server-controlled. Token scopes, Basic
authentication for token-management operations, enabled repository units and
administrator rights still determine which calls are permitted. The client
does not silently retry writes or elevate permissions.

## Upstream limitations

Gitea's schema and implementation are not identical in every case. This audit
checks the tagged handler source where a discrepancy matters. In particular,
the pinned catalog applies explicit source-verified corrections for GPG
verification input/status and direct-storage LFS redirects, recorded in
[the override file](../tools/openapi/overrides-28.2.0.json).
ActivityPub and NodeInfo API handlers return Not Implemented in this release;
keeping those operations discoverable does not enable the server feature.

Older Gitea servers may not provide operations added after their release. The
pinned operation catalog is a 28.2.0 reference and does not negotiate server
capabilities. Use the server version endpoint and its own API documentation
when supporting older installations.

## Verification and JCB acceptance

Existing public method names and the names/order of their original arguments
were compared against the baseline; none were removed or reordered. Corrected
return types and changed defaults are identified above.

The repository includes request/response regressions, metadata and generated
source checks, and CI. Run the commands in [the test guide](../tests/README.md).
The checks use a recording transport, not a production Gitea account.

**JCB import/compile and live Gitea integration have not been run.** Before
deployment, use an isolated JCB instance to:

1. Select this branch as the Gitea Power repository's read branch, and retain
   the configured order of the shared dependency repositories.
2. Refresh changed existing Powers; initialization alone may retain stale local
   records. Import the new Powers through `super-powers.json`.
3. Compile a representative component that resolves the existing endpoint
   services and `Gitea.Client`, including a different namespace prefix.
4. Confirm the compiled source, imports, dependency registration and autoloading;
   then run representative calls against a disposable Gitea 28.2.0 instance.

Use the [JCB acceptance procedure](https://github.com/joomengine/ai-doc/blob/b54c061cdb74ad2a2bcb1dffbebbf6ff1883eefd/super-powers/workflows/validate-and-integrate.md)
for the detailed import/refresh, compilation and runtime checks. Passing local
static checks is separate evidence from those integration steps.

## Dependency and identity evidence

The two new UUIDv4 identities were generated with the documented secure helper
and rechecked against all seven current catalogs before publication. The
registered catalogs contain 366 existing identities, with no shadowed GUIDs.
They were fetched on 2026-10-31T11:23:48Z. Runtime dependency resolution
still follows the consuming JCB installation's configured repository order.

| Repository | Checked revision |
| --- | --- |
| `joomengine/super-powers` | `9cd980492bed4c8177a6e32b703641950ec93604` |
| `joomengine/search` | `b1335ddfd6149c95f6037d3d64459334cd0f5bd7` |
| `joomengine/psr` | `451da5e55ec5ea3a26b7ec44cfe2ec141cc42fd8` |
| `joomengine/phpseclib` | `77dce1558dbb8b003629d06b7ebb0950f386e2e0` |
| `joomengine/openai` | `96e575e55fd66d8d190c65e6e1de1e7c4577d29d` |
| `joomengine/gitea` | `6f94a230be9c7ce93f773bb6d1de9dbf147fba5a` |
| `joomengine/minify` | `8c33c85f6fa22eceb4a1ed0990fa63769fe8ec08` |

Local verification: **80 regression tests pass on PHP 8.3.6** with Joomla
Framework HTTP 4.0.2 and independently with HTTP 3.1.4. All **116 Powers** pass
PHP lint and authoritative/generated body, metadata and catalog checks. The
generated API catalog reproduces all **537 operations** from the pinned schema
and the two documented source corrections. A loopback HTTP test confirms that
the default transport returns a redirect without following it.

An additional HTTP 2.0.4 experiment passed on PHP 8.3.6 after bypassing its
package PHP upper bound; this does not establish officially supported PHP 8.3
usage for HTTP 2. CI tests HTTP 2 normally on PHP 8.1, HTTP 3 on PHP 8.3, and HTTP
4 on PHP 8.5. CI results are reported separately on the pull request.
