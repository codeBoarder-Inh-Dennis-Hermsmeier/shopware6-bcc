# shopware6-bcc

[English](README.md) | [Deutsch](README.de.md)

[![Release](https://img.shields.io/github/v/release/codeBoarder-Inh-Dennis-Hermsmeier/shopware6-bcc?style=for-the-badge)](https://github.com/codeBoarder-Inh-Dennis-Hermsmeier/shopware6-bcc/releases)
[![Downloads](https://img.shields.io/github/downloads/codeBoarder-Inh-Dennis-Hermsmeier/shopware6-bcc/latest/total?style=for-the-badge)](https://github.com/codeBoarder-Inh-Dennis-Hermsmeier/shopware6-bcc/releases)
[![CI](https://github.com/codeBoarder-Inh-Dennis-Hermsmeier/shopware6-bcc/actions/workflows/release.yml/badge.svg?style=for-the-badge)](https://github.com/codeBoarder-Inh-Dennis-Hermsmeier/shopware6-bcc/actions/workflows/release.yml)
[![Shopware](https://img.shields.io/badge/Shopware-6.x-189EFF?style=for-the-badge)](https://www.shopware.com/)
[![PHP](https://img.shields.io/badge/PHP-8.1%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![License](https://img.shields.io/github/license/codeBoarder-Inh-Dennis-Hermsmeier/shopware6-bcc?style=for-the-badge)](LICENSE)
[![Donate](https://img.shields.io/badge/PayPal-Donate-00457C?style=for-the-badge&logo=paypal&logoColor=white)](https://www.paypal.com/donate/?cmd=_s-xclick&hosted_button_id=T85UYT37P3YNJ&source=url&ssrt=1769716730298)

Shopware 6 plugin that adds configurable BCC recipients to all outgoing emails.

Feature requests are welcome via GitHub Issues or Pull Requests.

## Support / Donate

There are many paid plugins in the Shopware Store that do the exact same thing. This is a simple feature and shouldn't cost money, so this repository is open source. If you'd still like to support the work, PayPal donations are very welcome.

## Install

### From GitHub Releases

1. Download the latest release ZIP from GitHub Releases.
2. (Optional) Download the matching `.sha256` checksum file.
3. (Optional) Verify the checksum:

```bash
sha256sum -c CodeBoarderBcc-vX.Y.Z.zip.sha256
```

4. Upload and install the ZIP via Shopware Administration:
   - Go to **Extensions > My extensions**.
   - Click **Upload extension** and choose the downloaded ZIP.
   - After upload, click **Install** and **Activate**.

Alternatively, extract and upload the `CodeBoarderBcc` folder to `custom/plugins/CodeBoarderBcc` on your Shopware instance, then refresh and install via CLI:

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

See [`custom/plugins/CodeBoarderBcc/README.md`](custom/plugins/CodeBoarderBcc/README.md) for configuration details.

## Local development

Install dev dependencies to get full type information in your IDE:

```bash
composer install
```

This installs `shopware/core` and provides classes like `Symfony\Component\Mime\Email` for code completion.
