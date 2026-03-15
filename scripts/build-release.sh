#!/usr/bin/env bash

set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
THEME_SLUG="${1:-$(basename "$ROOT_DIR")}"
DIST_DIR="$ROOT_DIR/dist"
STAGE_DIR="$DIST_DIR/$THEME_SLUG"
ZIP_PATH="$DIST_DIR/$THEME_SLUG.zip"

mkdir -p "$DIST_DIR"
rm -rf "$STAGE_DIR"
mkdir -p "$STAGE_DIR"

rsync -a \
  --delete \
  --exclude '.git/' \
  --exclude '.github/' \
  --exclude '.codex/' \
  --exclude 'dist/' \
  --exclude 'scripts/' \
  --exclude '.DS_Store' \
  --exclude 'sc_life_website_spec.md' \
  "$ROOT_DIR/" "$STAGE_DIR/"

rm -f "$ZIP_PATH"
(
	cd "$DIST_DIR"
	zip -qr "$ZIP_PATH" "$THEME_SLUG"
)

printf 'Release package created: %s\n' "$ZIP_PATH"
