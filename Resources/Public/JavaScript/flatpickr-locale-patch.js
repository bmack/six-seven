/*
 * Registers the custom locale "de-X-SIC" (Jugendsprache)
 * as an alias for the German "de" locale in flatpickr.
 *
 * flatpickr only knows standard locale codes like "de", "en", etc.
 * TYPO3 sets document.documentElement.lang to the full locale name,
 * which flatpickr then tries to look up. This patch ensures flatpickr
 * finds a valid locale configuration for our custom locale.
 */
import flatpickr from 'flatpickr';
import 'flatpickr/dist/l10n';

if (flatpickr.l10ns.de && !flatpickr.l10ns['de-X-SIC']) {
    flatpickr.l10ns['de-X-SIC'] = flatpickr.l10ns.de;
}
