# shopware6-bcc

Shopware 6 plugin that adds configurable BCC recipients to all outgoing emails.

## Install

### From GitHub Releases

1. Download the latest release ZIP from GitHub Releases.
2. Download the matching `.sha256` checksum file.
3. Verify the checksum:

```bash
sha256sum -c CodeBoarderBcc-vX.Y.Z.zip.sha256
```

4. Extract and upload the `CodeBoarderBcc` folder to `custom/plugins/CodeBoarderBcc` on your Shopware instance.
5. Refresh and install the plugin:

```bash
bin/console plugin:refresh
bin/console plugin:install --activate CodeBoarderBcc
```

### From source

1. Clone this repository into your Shopware project.
2. Ensure the plugin folder is located at `custom/plugins/CodeBoarderBcc`.
3. Refresh and install the plugin:

```bash
bin/console plugin:refresh
bin/console plugin:install --activate CodeBoarderBcc
```

### Create a local ZIP (for manual upload)

Run this from the repository root:

```bash
mkdir -p dist
rm -f dist/CodeBoarderBcc-local.zip
cd custom/plugins
zip -r "../../dist/CodeBoarderBcc-local.zip" CodeBoarderBcc
```

Or use the Composer script:

```bash
composer package
```

## Configure

See `custom/plugins/CodeBoarderBcc/README.md` for configuration details.

## Local development

Install dev dependencies to get full type information in your IDE:

```bash
composer install
```

This installs `shopware/core` and provides classes like `Symfony\Component\Mime\Email` for code completion.
