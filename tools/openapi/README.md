# Pinned Gitea API specification

`gitea-28.2.0.json` is an unmodified copy of the official Swagger 2.0 API schema:

- Release: **v28.2.0** (latest stable release verified 31 October 2026).
- Revision: `829b49c1ae96015e345f9d2a0eb1ea7acd5f31e1`.
- Source: [templates/swagger/v1-swagger.generated.json](https://github.com/go-gitea/gitea/blob/829b49c1ae96015e345f9d2a0eb1ea7acd5f31e1/templates/swagger/v1-swagger.generated.json).
- License: [Gitea/Gogs MIT copyright and license](LICENSE-Gitea.txt).
- Documented operations: **537**.

The unchanged source retains the upstream version/base-URL placeholders; runtime requests use the configured client URI, never those placeholders. `Utilities\Operations::SCHEMA_SHA256` records the hash of these exact source bytes.

`overrides-28.2.0.json` records narrowly scoped, source-verified corrections without modifying the upstream schema: GPG verification requires `key_id`/`armored_signature` JSON and returns HTTP 200; direct LFS storage can return HTTP 303. Each correction links to the exact router/model source at the pinned revision. Recheck these overrides when upgrading; they are not guesses about future versions. Legacy NodeInfo/ActivityPub endpoints are absent from this schema and return 501 in the pinned server; this catalog does not advertise them as functioning features.

## Reproduce the catalog

```sh
python3 tools/generate-operations.py
python3 tools/generate-operations.py --check
```

The generator writes the authoritative operation catalog `code.power` and its assembled `code.php` representation. It checks unique operation IDs, route/parameter agreement, supported parameter representation and documented success responses. It preserves parameter types, enum/range restrictions, collection formats, required body properties and request/response media types. It does not generate JCB metadata or replace JCB's compiler.

For a later Gitea release, explicitly review the upstream changes, add its unmodified schema and license, update the generator's source/version/revision, regenerate, and run request/response tests. No remote schema is fetched implicitly at runtime. Existing convenience wrappers still require their own review when upstream contracts change.

## Reuse decision

Joomla Framework's existing HTTP transport and URI classes remain responsible for transport, TLS, headers and URI objects. The existing Gitea `Abstraction\Api` provides service injection and configuration switching; `Utilities\Response` provides response/error handling. The current shared-foundation catalog (revision recorded in the maintenance audit) contains generic Git interfaces and database schema utilities, but no Gitea OpenAPI operation registry/dispatcher. Two specialist powers are therefore needed: generated operation metadata and request dispatch. They do not duplicate Joomla's HTTP stack or introduce a new generic framework.

Offline contract checks establish addressability of all schema operations and exercise representative JSON, DELETE-body, multipart, binary, repeated-query, authentication-header and redirect behavior. They do not establish live permissions, server configuration compatibility or JCB import/compilation.
