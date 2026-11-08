#!/usr/bin/env python3
"""Regenerate the portable operation catalog from the pinned Gitea API schema.

No network calls and no JCB compilation are performed. --check detects drift.
"""
import argparse
import hashlib
import json
import re
from pathlib import Path

ROOT = Path(__file__).resolve().parents[1]
GUID = "b194b19f-e665-435a-925d-04158a61ef3e"
SCHEMA = ROOT / "tools/openapi/gitea-28.2.0.json"
OVERRIDES = ROOT / "tools/openapi/overrides-28.2.0.json"
REVISION = "829b49c1ae96015e345f9d2a0eb1ea7acd5f31e1"


def generate():
    schema_bytes = SCHEMA.read_bytes()
    schema = json.loads(schema_bytes)
    operations = {}
    for path, methods in schema["paths"].items():
        for method, source in methods.items():
            if method not in ("get", "put", "post", "patch", "delete", "head", "options"):
                continue
            operation_id = source["operationId"]
            if operation_id in operations:
                raise ValueError(f"Duplicate operationId: {operation_id}")
            parameters = []
            for param in methods.get("parameters", []) + source.get("parameters", []):
                if "$ref" in param:
                    raise ValueError(f"Unsupported parameter reference: {operation_id}")
                definition = {key: param[key] for key in (
                    "name", "in", "required", "type", "items", "enum", "minimum", "maximum", "collectionFormat"
                ) if key in param}
                if param["in"] == "body":
                    body_schema = param.get("schema", {})
                    if "$ref" in body_schema:
                        body_schema = schema["definitions"][body_schema["$ref"].split("/")[-1]]
                    definition["type"] = body_schema.get("type", "object")
                    definition["requiredProperties"] = body_schema.get("required", [])
                parameters.append(definition)
            path_names = {param["name"] for param in parameters if param["in"] == "path"}
            if path_names != set(re.findall(r"\{([^}]+)\}", path)):
                raise ValueError(f"Unresolved path parameters: {operation_id}")
            success = [int(code) for code in source["responses"] if code.startswith("2") or code in ("301", "302", "303", "307", "308")]
            if not success:
                raise ValueError(f"No documented success response: {operation_id}")
            operations[operation_id] = {
                "method": method,
                "path": path,
                "parameters": parameters,
                "consumes": source.get("consumes", schema.get("consumes", [])),
                "produces": source.get("produces", schema.get("produces", [])),
                "success": success,
            }
    for operation_id, correction in json.loads(OVERRIDES.read_text()).items():
        if operation_id not in operations or not correction.get("reason") or not correction.get("sources"):
            raise ValueError(f"Invalid source-verified correction: {operation_id}")
        operations[operation_id].update(correction["replace"])
    rows = [json.dumps(key) + ":" + json.dumps(value, separators=(",", ":"), ensure_ascii=False)
            for key, value in sorted(operations.items())]
    body = "\t/** Gitea release used to generate this catalog. */\n\tpublic const VERSION = '28.2.0';\n\n"
    body += f"\t/** Exact upstream source revision. */\n\tpublic const REVISION = '{REVISION}';\n\n"
    body += f"\t/** SHA-256 of tools/openapi/gitea-28.2.0.json. */\n\tpublic const SCHEMA_SHA256 = '{hashlib.sha256(schema_bytes).hexdigest()}';\n\n"
    upstream_license = (ROOT / "tools/openapi/LICENSE-Gitea.txt").read_text().strip()
    body += "\t/**\n\t * Generated operation metadata. Do not edit manually.\n\t * Derived from Gitea's API schema, with source-verified corrections.\n\t *\n" + "\n".join(("\t * " + line).rstrip() for line in upstream_license.splitlines()) + "\n\t */\n\tprivate const JSON = <<<'JSON'\n{\n" + ",\n".join(rows) + "\n}\nJSON;\n\n"
    body += "\t/** @var array|null Lazily decoded immutable operation metadata. */\n\tprivate static ?array $operations = null;\n\n"
    body += "\t/** Return all documented operation IDs in alphabetical order. */\n\tpublic static function all(): array\n\t{\n\t\treturn array_keys(self::catalog());\n\t}\n\n"
    body += "\t/**\n\t * Return a documented operation's request and response contract.\n\t *\n\t * @throws \\InvalidArgumentException for an unknown operation ID.\n\t */\n\tpublic static function get(string $operationId): array\n\t{\n\t\t$operations = self::catalog();\n\n\t\tif (!isset($operations[$operationId]))\n\t\t{\n\t\t\tthrow new \\InvalidArgumentException('Unknown Gitea operation: ' . $operationId);\n\t\t}\n\n\t\treturn $operations[$operationId];\n\t}\n\n"
    body += "\t/** Decode once; returned arrays use PHP copy-on-write semantics. */\n\tprivate static function catalog(): array\n\t{\n\t\tif (self::$operations === null)\n\t\t{\n\t\t\tself::$operations = json_decode(self::JSON, true, 512, JSON_THROW_ON_ERROR);\n\t\t}\n\n\t\treturn self::$operations;\n\t}\n"
    settings = json.loads((ROOT / "src" / GUID / "settings.json").read_text())
    php = "<?php\n" + settings["licensing_template"] + "\nnamespace VDM\\Joomla\\Gitea\\Utilities;\n\n/**\n * " + settings["description"] + "\n */\nfinal class Operations\n{\n" + body + "}\n"
    return {ROOT / "src" / GUID / "code.power": body, ROOT / "src" / GUID / "code.php": php}, len(operations)


if __name__ == "__main__":
    parser = argparse.ArgumentParser(description=__doc__)
    parser.add_argument("--check", action="store_true")
    args = parser.parse_args()
    outputs, count = generate()
    for path, text in outputs.items():
        if args.check:
            if not path.is_file() or path.read_text() != text:
                raise SystemExit(f"Operation catalog drift: {path.relative_to(ROOT)}")
        else:
            path.write_text(text)
    print(f"{'Verified' if args.check else 'Generated'} {count} Gitea 28.2.0 operations")
