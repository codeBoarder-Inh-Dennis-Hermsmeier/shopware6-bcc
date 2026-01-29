# CodeBoarder BCC

[English](README.md) | [Deutsch](README.de.md)

Adds one or more BCC recipients to every email sent by Shopware 6.

Repository: https://github.com/codeBoarder-Inh-Dennis-Hermsmeier/shopware6-bcc

Feature requests are welcome via GitHub Issues or Pull Requests.

## Table of Contents

- [Installation](#installation)
- [Configuration](#configuration)
- [Local development](#local-development)

## Installation

### From GitHub Releases

1. Download the latest release ZIP from GitHub Releases.
2. Download the matching `.sha256` checksum file.
3. Verify the checksum:

```bash
sha256sum -c CodeBoarderBcc-vX.Y.Z.zip.sha256
```

4. Upload and install the ZIP via Shopware Administration:
   - Go to **Extensions > My extensions**.
   - Click **Upload extension** and choose the downloaded ZIP.
   - After upload, click **Install** and **Activate**.

Alternatively, extract and upload the `CodeBoarderBcc` folder to `custom/plugins/CodeBoarderBcc`, then refresh and install via CLI:

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
