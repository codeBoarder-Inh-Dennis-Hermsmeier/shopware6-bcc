# CodeBoarder BCC

[English](README.md) | [Deutsch](README.de.md)

Fügt allen von Shopware 6 versendeten E-Mails einen oder mehrere BCC-Empfänger hinzu.

Repository: https://github.com/codeBoarder-Inh-Dennis-Hermsmeier/shopware6-bcc

Feature-Wünsche gern als GitHub Issue oder Pull Request einreichen.

## Inhaltsverzeichnis

- [Installation](#installation)
- [Konfiguration](#konfiguration)
- [Lokale Entwicklung](#lokale-entwicklung)
- [Release](#release)

## Installation

### Aus GitHub Releases

1. Lade die aktuelle Release-ZIP aus GitHub Releases herunter.
2. Lade die passende `.sha256`-Datei herunter.
3. Prüfe die Prüfsumme:

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

1. Kopiere das Plugin nach `custom/plugins/CodeBoarderBcc`.
2. Refresh und Installation:

```bash
bin/console plugin:refresh
bin/console plugin:install --activate CodeBoarderBcc
```

## Konfiguration

1. Öffne **Einstellungen > System > Plugins > CodeBoarder BCC** in der Shopware-Administration.
2. Trage eine oder mehrere E-Mail-Adressen in **BCC recipients** ein.
   - Trenne Adressen mit Kommas, Semikolons oder Zeilenumbrüchen.

Nach dem Speichern werden alle ausgehenden E-Mails mit den konfigurierten BCC-Empfängern versehen.

## Lokale Entwicklung

Wenn du dieses Repository direkt im IDE öffnest, installiere die Dev-Dependencies im Repository-Root:

```bash
composer install
```

Dies installiert `shopware/core` und stellt Klassen wie `Symfony\Component\Mime\Email` für Code-Completion bereit.

## Release

Tagge eine Version wie `v1.0.0` und pushe sie. GitHub Actions baut automatisch eine ZIP und hängt sie an das GitHub Release.
