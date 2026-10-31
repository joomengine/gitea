# Shared foundation fixtures

These files are unchanged class/interface exports from
[`joomengine/super-powers@9cd980492bed4c8177a6e32b703641950ec93604`](https://github.com/joomengine/super-powers/tree/9cd980492bed4c8177a6e32b703641950ec93604).
They retain upstream attribution and GPL-2.0-or-later licensing. They are test
dependencies, not newly assigned or published Powers.

| Fixture | Existing Power GUID |
| --- | --- |
| `ApiInterface.php` | `17ed2fec-49d6-4731-92c3-f9cd78fb6273` |
| `Factory.php` | `2e5bf608-de5c-4b00-a20d-47c26aa350d9` |
| `FactoryInterface.php` | `caf33c5d-858c-4f9a-894f-ab302ec5445a` |
| `ContentsInterface.php` | `d1de5d5b-bf29-4031-8094-76c4f6c75900` |
| `WikiInterface.php` | `bd7c1787-f5c1-464e-a009-f39fb5090ee0` |
| `TagsInterface.php` | `39cfd409-7329-4393-af05-4b457cb72fac` |

Joomla HTTP, URI, registry and DI implementations come from Composer. Tests replace
only HTTP network transport. JCB-specific component configuration, Power import,
compilation and a live Gitea server are outside this isolated test environment.
