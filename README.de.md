# shopware6-bcc

[English](README.md) | [Deutsch](README.de.md)

[![Release](https://img.shields.io/github/v/release/codeBoarder-Inh-Dennis-Hermsmeier/shopware6-bcc?style=for-the-badge)](https://github.com/codeBoarder-Inh-Dennis-Hermsmeier/shopware6-bcc/releases)
[![Downloads](https://img.shields.io/github/downloads/codeBoarder-Inh-Dennis-Hermsmeier/shopware6-bcc/latest/total?style=for-the-badge)](https://github.com/codeBoarder-Inh-Dennis-Hermsmeier/shopware6-bcc/releases)
[![CI](https://github.com/codeBoarder-Inh-Dennis-Hermsmeier/shopware6-bcc/actions/workflows/release.yml/badge.svg?style=for-the-badge)](https://github.com/codeBoarder-Inh-Dennis-Hermsmeier/shopware6-bcc/actions/workflows/release.yml)
[![Shopware](https://img.shields.io/badge/Shopware-6.x-189EFF?style=for-the-badge)](https://www.shopware.com/)
[![PHP](https://img.shields.io/badge/PHP-8.1%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![License](https://img.shields.io/github/license/codeBoarder-Inh-Dennis-Hermsmeier/shopware6-bcc?style=for-the-badge)](LICENSE)
[![Donate](https://img.shields.io/badge/PayPal-Donate-00457C?style=for-the-badge&logo=paypal&logoColor=white)](https://www.paypal.com/donate/?cmd=_s-xclick&hosted_button_id=T85UYT37P3YNJ&source=url&ssrt=1769716730298)

Shopware-6-Plugin, das konfigurierbare BCC-Empfänger zu allen ausgehenden E-Mails hinzufügt.

Feature-Wünsche gern als GitHub Issue oder Pull Request einreichen.

## Support / Spenden

Im Shopware Store gibt es viele kostenpflichtige Plugins, die genau das Gleiche tun. So eine einfache Funktion sollte kein Geld kosten, deshalb ist dieses Repository Open Source. Wenn du trotzdem unterstützen möchtest, sind PayPal-Spenden herzlich willkommen.

## Installation

### Aus GitHub Releases

1. Lade die aktuelle Release-ZIP aus GitHub Releases herunter.
2. (Optional) Lade die passende `.sha256`-Datei herunter.
3. (Optional) Prüfe die Prüfsumme:

```bash
sha256sum -c CodeBoarderBcc-vX.Y.Z.zip.sha256
```

4. ZIP im Shopware-Admin hochladen und installieren:
   - Gehe zu **Erweiterungen > Meine Erweiterungen**.
   - Klicke **Erweiterung hochladen** und wähle die ZIP-Datei.
   - Nach dem Upload **Installieren** und **Aktivieren**.

Alternativ den `CodeBoarderBcc`-Ordner nach `custom/plugins/CodeBoarderBcc` kopieren und per CLI installieren:

```bash
bin/console plugin:refresh
bin/console plugin:install --activate CodeBoarderBcc
```

### Aus dem Quellcode

1. Repository in dein Shopware-Projekt klonen.
2. Stelle sicher, dass der Plugin-Ordner unter `custom/plugins/CodeBoarderBcc` liegt.
3. Refresh und Installation:

```bash
bin/console plugin:refresh
bin/console plugin:install --activate CodeBoarderBcc
```

### Lokales ZIP erstellen (für manuellen Upload)

Aus dem Repository-Root ausführen:

```bash
mkdir -p dist
rm -f dist/CodeBoarderBcc-local.zip
cd custom/plugins
zip -r "../../dist/CodeBoarderBcc-local.zip" CodeBoarderBcc
```

Oder per Composer-Skript:

```bash
composer package
```

## Konfiguration

Siehe [`custom/plugins/CodeBoarderBcc/README.md`](custom/plugins/CodeBoarderBcc/README.md) für Konfigurationsdetails.

## Lokale Entwicklung

Installiere Dev-Dependencies für vollständige Typ-Informationen im IDE:

```bash
composer install
```

Dies installiert `shopware/core` und stellt Klassen wie `Symfony\Component\Mime\Email` für Code-Completion bereit.
