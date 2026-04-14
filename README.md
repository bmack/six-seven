# six_seven - Jugendsprache für TYPO3

Diese TYPO3-Extension registriert eine eigene Sprache **"Jugendsprache"** (`de-X-SIC`)
und übersetzt sämtliche Labels im TYPO3 Backend in deutsche Jugendsprache. Sheesh!

## Das Problem

Das TYPO3 Backend ist professionell, funktional und... nüchtern. Wo bleibt der Spaß?
Wo ist die Aura? Warum steht da "Löschen" statt "Yeeten"? Warum "Abbrechen" statt
"Lass stecken"? Und wieso heißt es "Versteckt" wenn "Geghostet" so viel besser klingt?

Diese Extension löst dieses Problem ein für alle Mal. No cap.

## Was passiert

- Registriert die neue Locale `de-X-SIC` als eigenständige Sprache im Backend
- Überschreibt über 7.000 Labels aus allen 35 System-Extensions
- Nutzt `de` (Deutsch) als Fallback, falls ein Label nicht übersetzt ist
- Deutsche Datumsformate bleiben erhalten (BCP 47 private-use subtag auf Basis `de`)
- Die deutsche Sprache bleibt komplett unberührt

## Highlights

| Vorher | Nachher |
|--------|---------|
| OK | Slay! |
| Ja | Bet, Digga! |
| Nein | Nö, kein Bock |
| Abbrechen | Lass stecken |
| Löschen | Yeet das weg |
| Bearbeiten | Flexen |
| Speichern und schließen | Safe speichern und Tschüssikowski |
| Suche | Stalken |
| Anmelden | Reinsliden |
| Abmelden | Tschüssikowski |
| Aktiviert | Läuft bei dir |
| Versteckt | Geghostet |
| Sichtbarkeit | Ghost-Status |
| Drucken | Auf Papier ballern |
| Mehr | Gönn dir mehr |
| Bitte bestätigen | Sag mal fr fr ob du das willst |
| Fehler | Uff |
| Erfolg | Aura +100! |
| Warnung | Red Flag! |
| Standard | Mid |
| Admin | Sigma-Admin |
| Benutzergruppen | Squads |
| Verlauf/History | Caught in 4K |
| Lesezeichen | Lebt rent free in deinen Bookmarks |

## Installation

```bash
composer req bmack/cms-six-seven
```

Alternativ den Ordner `six_seven` nach `typo3conf/ext/` kopieren und im Extension Manager aktivieren.

## Einrichtung

1. Extension aktivieren
2. Im Backend unter **Benutzereinstellungen → Sprache** die neue Sprache **"Jugendsprache"** auswählen
3. Sheesh!

## Kompatibilität

| TYPO3 | PHP | Status |
|-------|-----|--------|
| 14.x  | 8.2+ | Slay |

## Technische Details

Die Extension nutzt den TYPO3-eigenen `resourceOverrides`-Mechanismus, um für die
Locale `de-X-SIC` eigene XLF-Dateien über die Original-Labels zu legen. Der Locale-Key
folgt dem BCP 47 Standard mit private-use subtag (`x-sic`), basierend auf `de` (Deutsch).
Dadurch funktionieren `IntlDateFormatter` und andere ICU-basierte Funktionen korrekt
mit deutschen Formaten.

Die Fallback-Kette ist: `de-X-SIC` → `de` → `en`.

## Lizenz

GPL-2.0-or-later. Siehe [LICENSE](LICENSE).

## Credits

Erstellt 2026 von Benni Mack auf dem TYPO3 SurfCamp.
