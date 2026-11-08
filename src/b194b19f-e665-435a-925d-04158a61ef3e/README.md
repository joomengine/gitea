# Gitea operation catalog

`VDM\Joomla\Gitea\Utilities\Operations` contains generated metadata for the **537 unique REST operation IDs** in Gitea 28.2.0. It has no network, file-system or service-container side effects.

- Power GUID: `b194b19f-e665-435a-925d-04158a61ef3e`
- `Operations::all(): array` returns sorted operation IDs.
- `Operations::get(string $operationId): array` returns its HTTP method, relative path, request parameters, media types and documented success statuses; unknown IDs throw `InvalidArgumentException`.
- `VERSION`, `REVISION`, and `SCHEMA_SHA256` identify the exact source.

`Client` consumes this catalog through its Power dependency. Metadata is embedded in `code.power` so JCB imports do not need a separate runtime schema file. The JSON is decoded once per process and returned arrays use PHP copy-on-write semantics.

Regenerate with `python3 tools/generate-operations.py`; verify without writes using `python3 tools/generate-operations.py --check`. Never edit generated metadata manually. [Source, license and upgrade procedure](../../tools/openapi/README.md).

The catalog is derived from the upstream MIT-licensed schema; its original copyright and license are retained in `tools/openapi/LICENSE-Gitea.txt`. It describes documented transport contracts, not authorization rules or an independent guarantee of live server behavior.
