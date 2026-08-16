#!/bin/sh

set -eu

if [ "$#" -ne 1 ]; then
    echo "Usage: $0 /absolute/path/ModuleOpenLdapSync.1.1.3.zip" >&2
    exit 2
fi

case "$1" in
    /*) output_path=$1 ;;
    *)
        echo "Output path must be absolute." >&2
        exit 2
        ;;
esac

module_root=$(CDPATH= cd -- "$(dirname -- "$0")/.." && pwd)

if [ ! -f "$module_root/vendor/autoload.php" ]; then
    echo "Missing vendor/autoload.php; install the locked Composer dependencies first." >&2
    exit 1
fi

# Composer's split-package archives do not consistently contain their
# repository-level MIT files. Restore the exact tracked upstream texts before
# validating and packaging the bundled dependencies.
cp "$module_root/third_party/licenses/ldaprecord-MIT.md" \
    "$module_root/vendor/directorytree/ldaprecord/license.md"
cp "$module_root/third_party/licenses/laravel-MIT.md" \
    "$module_root/vendor/illuminate/collections/LICENSE.md"
cp "$module_root/third_party/licenses/laravel-MIT.md" \
    "$module_root/vendor/illuminate/conditionable/LICENSE.md"
cp "$module_root/third_party/licenses/laravel-MIT.md" \
    "$module_root/vendor/illuminate/contracts/LICENSE.md"
cp "$module_root/third_party/licenses/laravel-MIT.md" \
    "$module_root/vendor/illuminate/macroable/LICENSE.md"
cp "$module_root/third_party/licenses/php-fig-simple-cache-MIT.md" \
    "$module_root/vendor/psr/simple-cache/LICENSE.md"

node_bin=${NODE_BIN:-node}
"$node_bin" "$module_root/tests/package-check.mjs"

output_dir=$(dirname -- "$output_path")
if [ ! -d "$output_dir" ]; then
    echo "Output directory does not exist: $output_dir" >&2
    exit 1
fi

temporary_dir=$(mktemp -d "$output_dir/.ModuleOpenLdapSync.1.1.3.XXXXXX")
temporary_archive="$temporary_dir/ModuleOpenLdapSync.1.1.3.zip"
trap 'rm -f "$temporary_archive"; rmdir "$temporary_dir" 2>/dev/null || true' EXIT HUP INT TERM

(
    cd "$module_root"
    find . -type f \
        ! -path './.git/*' \
        ! -path './.github/*' \
        ! -path './.idea/*' \
        ! -name '.DS_Store' \
        ! -name '.gitignore' \
        -print | LC_ALL=C sort | zip -X -q "$temporary_archive" -@
)

mv -f "$temporary_archive" "$output_path"
rmdir "$temporary_dir"
trap - EXIT HUP INT TERM
echo "Created $output_path"
