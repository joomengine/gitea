# Development checks

From the repository root, with PHP 8.1 or later and Composer 2:

```bash
composer install
composer check
python3 tools/generate-operations.py --check
```

Composer is used only to supply development dependencies. It does not import these
Powers into JCB or install a Joomla component. `vendor/` and the local development
lockfile are ignored so the CI jobs can resolve their intended Framework generation.

`composer check` runs two independent checks. The separate Python command verifies
that the operation catalog matches its pinned schema and documented corrections:

- `php tests/structure.php` lints every indexed PHP class, parses raw Power bodies, checks
  GUIDs/index paths/portable namespace presence, and compares the authoritative body
  with its generated representation after newline normalization. It does not execute
  the classes, resolve remote dependencies or emulate JCB compilation.
- `php tests/run.php` executes the actual generated classes against Composer's Joomla
  HTTP, URI, registry and DI implementations. A recording `TransportInterface`
  implementation captures requests and returns explicit fixture responses; it never
  contacts a Gitea server. Tests cover request verbs, routes, query encoding, bodies,
  response status/shape, binary responses, authentication restoration and DI services.

Tests fail on unexpected requests, mismatched values, exceptions and PHP warnings.
External shared interfaces and the shared Factory are pinned, attributed fixtures
from [the shared foundation](fixtures/super-powers/README.md); they are not substitutes
for the dependencies installed by a real JCB consumer.

The workflow exercises PHP 8.1 with Joomla HTTP 2, PHP 8.3 with HTTP 3, and PHP 8.5
with HTTP 4. Other Joomla packages resolve according to those PHP/HTTP constraints.
HTTP 2's published package constraint supports PHP 8.0/8.1 but excludes PHP 8.2 and
later, so its job deliberately uses PHP 8.1. For independent local dependency sets,
set `GITEA_TEST_AUTOLOAD` to that installation's `vendor/autoload.php` before running
`tests/run.php`; the production source still loads from this checkout.

The broader [Superpowers validation workflow](https://github.com/joomengine/ai-doc/blob/main/super-powers/workflows/validate-and-integrate.md)
also checks the current ordered dependency catalogue and defines JCB import/refresh,
compilation and installed-consumer acceptance. Passing these local tests does not
certify those integration stages, a live server, every historical Gitea version, or
every possible request body.

For a real imported and compiled consumer, follow the
[JCB playground procedure](../docs/testing-playground.md) and its portable
[view template](integration/playground-template.php). Keep the resulting report
with the tested branch commit; the template is not a standalone CLI test.
