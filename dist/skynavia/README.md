# SC LIFE Theme

This repository contains a custom WordPress theme for SC LIFE.

## Local install

1. Build a distributable ZIP:

```bash
bash scripts/build-release.sh
```

2. Upload `dist/skynavia.zip` from the WordPress admin theme screen.

## GitHub release updates

The theme includes a GitHub release updater. Configure it from `wp-config.php`:

```php
define('SC_LIFE_GITHUB_REPOSITORY', 'OWNER/REPO');
define('SC_LIFE_GITHUB_RELEASE_ASSET', 'skynavia.zip');
define('SC_LIFE_GITHUB_TOKEN', 'github_pat_xxx');
```

Notes:

- `SC_LIFE_GITHUB_TOKEN` is only needed for private repositories.
- The release tag should match the theme version in `style.css`.
- Attach `dist/skynavia.zip` to the GitHub release assets.

## Release flow

1. Update the version in `style.css`.
2. Build the ZIP with `bash scripts/build-release.sh`.
3. Create a GitHub release with a tag like `v1.0.1`.
4. Attach `dist/skynavia.zip` to that release.
5. In WordPress admin, open `Dashboard > Updates` or `Appearance > Themes` and run the update.

GitHub Actions is included in `.github/workflows/release-theme.yml`, so publishing a GitHub release will also upload `dist/skynavia.zip` automatically.
