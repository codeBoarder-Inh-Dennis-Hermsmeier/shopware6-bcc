# CodeBoarder BCC

Adds one or more BCC recipients to every email sent by Shopware 6.

Repository: https://github.com/codeBoarder-Inh-Dennis-Hermsmeier/shopware6-bcc

## Installation

### From GitHub Releases

1. Download the latest release ZIP from GitHub Releases.
2. Download the matching `.sha256` checksum file.
3. Verify the checksum:

```bash
sha256sum -c CodeBoarderBcc-vX.Y.Z.zip.sha256
```

4. Extract and upload the `CodeBoarderBcc` folder to `custom/plugins/CodeBoarderBcc`.
5. Refresh and install the plugin:

```bash
bin/console plugin:refresh
bin/console plugin:install --activate CodeBoarderBcc
```

### From source

1. Copy the plugin to `custom/plugins/CodeBoarderBcc`.
2. Refresh and install the plugin:

```bash
bin/console plugin:refresh
bin/console plugin:install --activate CodeBoarderBcc
```

## Configuration

1. Go to **Settings > System > Plugins > CodeBoarder BCC** in the Shopware Administration.
2. Enter one or more email addresses in **BCC recipients**.
   - Separate addresses with commas, semicolons, or new lines.

After saving, all outgoing emails will include the configured BCC recipients.

## Local development

If you open this repository directly in your IDE, install dev dependencies in the repository root:

```bash
composer install
```

This installs `shopware/core` and provides classes like `Symfony\Component\Mime\Email` for code completion.

## Release

Tag a version like `v1.0.0` and push it. GitHub Actions builds a ZIP and attaches it to the GitHub Release automatically.
