<?php

declare(strict_types=1);

defined('TYPO3') or die();

/*
 * six_seven - Jugendsprache fuer TYPO3
 * Registriert die neue Sprache "Jugendsprache" und ueberschreibt
 * ALLE Labels im TYPO3 Backend mit frischer deutscher Jugendsprache.
 * Sheesh, Digga! No cap!
 */

// Neue Locale 'de-X-SIC' (Jugendsprache) registrieren
// Nutzt BCP 47 private-use subtag: Basis 'de' (deutsch) + private 'X-SIC'
// IntlDateFormatter nutzt automatisch deutsche Datumsformate
// WICHTIG: Der Key muss in der normalisierten Form 'de-X-SIC' stehen,
// da TYPO3's Locale-Klasse diese Normalisierung automatisch vornimmt
$GLOBALS['TYPO3_CONF_VARS']['SYS']['localization']['locales']['user']['de-X-SIC'] = 'Jugendsprache';

// Fallback auf Deutsch, falls ein Label nicht uebersetzt ist
$GLOBALS['TYPO3_CONF_VARS']['SYS']['localization']['locales']['dependencies']['de-X-SIC'] = ['de'];

// Locale als verfuegbar markieren (erscheint im Backend-User-Dropdown)
$GLOBALS['TYPO3_CONF_VARS']['LANG']['availableLocales']['de-X-SIC'] = 'de-X-SIC';

// adminpanel
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:adminpanel/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/adminpanel/de-X-SIC.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:adminpanel/Resources/Private/Language/locallang_cache.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/adminpanel/de-X-SIC.locallang_cache.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/adminpanel/de-X-SIC.locallang_debug.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:adminpanel/Resources/Private/Language/locallang_info.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/adminpanel/de-X-SIC.locallang_info.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:adminpanel/Resources/Private/Language/locallang_preview.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/adminpanel/de-X-SIC.locallang_preview.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:adminpanel/Resources/Private/Language/locallang_tsdebug.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/adminpanel/de-X-SIC.locallang_tsdebug.xlf';

// backend
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/Modules/about.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/Modules/de-X-SIC.about.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/Modules/content-security-policy.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/Modules/de-X-SIC.content-security-policy.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/Modules/layout.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/Modules/de-X-SIC.layout.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/Modules/link_management.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/Modules/de-X-SIC.link_management.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/Modules/list.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/Modules/de-X-SIC.list.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/Modules/pagetsconfig.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/Modules/de-X-SIC.pagetsconfig.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/Modules/pagetsconfig_active.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/Modules/de-X-SIC.pagetsconfig_active.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/Modules/pagetsconfig_includes.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/Modules/de-X-SIC.pagetsconfig_includes.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/Modules/pagetsconfig_pages.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/Modules/de-X-SIC.pagetsconfig_pages.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/Modules/site_configuration.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/Modules/de-X-SIC.site_configuration.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/Modules/site_settings.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/Modules/de-X-SIC.site_settings.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/Modules/status.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/Modules/de-X-SIC.status.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/Modules/user_settings.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/Modules/de-X-SIC.user_settings.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/SudoMode.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.SudoMode.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/Wizards/general.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/Wizards/de-X-SIC.general.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/Wizards/localization.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/Wizards/de-X-SIC.localization.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/Wizards/move_content_elements.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/Wizards/de-X-SIC.move_content_elements.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/Wizards/move_page.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/Wizards/de-X-SIC.move_page.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/Wizards/page.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/Wizards/de-X-SIC.page.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/links.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.links.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.locallang_alt_doc.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/locallang_browse_links.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.locallang_browse_links.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/locallang_codeeditor.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.locallang_codeeditor.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/locallang_column_selector.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.locallang_column_selector.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/locallang_copytoclipboard.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.locallang_copytoclipboard.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/locallang_download.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.locallang_download.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/locallang_layout.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.locallang_layout.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/locallang_login.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.locallang_login.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/locallang_mfa.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.locallang_mfa.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/locallang_mod.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.locallang_mod.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/locallang_pages_new.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.locallang_pages_new.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/locallang_pages_sort.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.locallang_pages_sort.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.locallang_pagetsconfig.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/locallang_reset_password.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.locallang_reset_password.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/locallang_resource.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.locallang_resource.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/locallang_settingseditor.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.locallang_settingseditor.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/locallang_show_rechis.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.locallang_show_rechis.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.locallang_siteconfiguration.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/locallang_siteconfiguration_module.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.locallang_siteconfiguration_module.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/locallang_siteconfiguration_tca.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.locallang_siteconfiguration_tca.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/locallang_sitesettings.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.locallang_sitesettings.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/locallang_sitesettings_module.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.locallang_sitesettings_module.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/locallang_toolbar.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.locallang_toolbar.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/locallang_view_help.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.locallang_view_help.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/pages/messages.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/pages/de-X-SIC.messages.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/qrcode.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.qrcode.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/siteconfiguration_fieldinformation.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.siteconfiguration_fieldinformation.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:backend/Resources/Private/Language/user_profile.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/backend/de-X-SIC.user_profile.xlf';

// belog
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:belog/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/belog/de-X-SIC.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:belog/Resources/Private/Language/locallang_mod.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/belog/de-X-SIC.locallang_mod.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:belog/Resources/Private/Language/module.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/belog/de-X-SIC.module.xlf';

// beuser
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:beuser/Resources/Private/Language/Modules/permissions.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/beuser/Modules/de-X-SIC.permissions.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:beuser/Resources/Private/Language/Modules/user_management.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/beuser/Modules/de-X-SIC.user_management.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:beuser/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/beuser/de-X-SIC.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:beuser/Resources/Private/Language/locallang_mod.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/beuser/de-X-SIC.locallang_mod.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/beuser/de-X-SIC.locallang_mod_permission.xlf';

// core
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/db/accounts.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/db/de-X-SIC.accounts.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/db/general.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/db/de-X-SIC.general.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/db/pages.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/db/de-X-SIC.pages.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/db/sys_file_storage.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/db/de-X-SIC.sys_file_storage.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/Form/de-X-SIC.locallang_tabs.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/Form/palettes.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/Form/de-X-SIC.palettes.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/Modules/content.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/Modules/de-X-SIC.content.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/Modules/help.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/Modules/de-X-SIC.help.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/Modules/integrations.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/Modules/de-X-SIC.integrations.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/Modules/media.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/Modules/de-X-SIC.media.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/Modules/site.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/Modules/de-X-SIC.site.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/Modules/system.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/Modules/de-X-SIC.system.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/Modules/user.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/Modules/de-X-SIC.user.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/data_handler.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/de-X-SIC.data_handler.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/fileMessages.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/de-X-SIC.fileMessages.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/locallang_bookmarks.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/de-X-SIC.locallang_bookmarks.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/locallang_cache.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/de-X-SIC.locallang_cache.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/locallang_common.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/de-X-SIC.locallang_common.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/locallang_core.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/de-X-SIC.locallang_core.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/locallang_general.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/de-X-SIC.locallang_general.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/locallang_mfa_provider.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/de-X-SIC.locallang_mfa_provider.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/locallang_misc.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/de-X-SIC.locallang_misc.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/locallang_mod_admintools.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/de-X-SIC.locallang_mod_admintools.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/locallang_mod_file.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/de-X-SIC.locallang_mod_file.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/locallang_mod_help.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/de-X-SIC.locallang_mod_help.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/locallang_mod_site.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/de-X-SIC.locallang_mod_site.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/locallang_mod_system.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/de-X-SIC.locallang_mod_system.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/locallang_mod_usertools.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/de-X-SIC.locallang_mod_usertools.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/de-X-SIC.locallang_mod_web_list.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/locallang_password_policy.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/de-X-SIC.locallang_password_policy.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/locallang_tca.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/de-X-SIC.locallang_tca.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/locallang_tsfe.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/de-X-SIC.locallang_tsfe.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/locallang_wizards.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/de-X-SIC.locallang_wizards.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:core/Resources/Private/Language/wizard.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/core/de-X-SIC.wizard.xlf';

// dashboard
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:dashboard/Resources/Private/Language/db.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/dashboard/de-X-SIC.db.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:dashboard/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/dashboard/de-X-SIC.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:dashboard/Resources/Private/Language/locallang_mod.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/dashboard/de-X-SIC.locallang_mod.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:dashboard/Resources/Private/Language/locallang_widget_bookmarks.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/dashboard/de-X-SIC.locallang_widget_bookmarks.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:dashboard/Resources/Private/Language/locallang_widget_rss.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/dashboard/de-X-SIC.locallang_widget_rss.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:dashboard/Resources/Private/Language/module.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/dashboard/de-X-SIC.module.xlf';

// extbase
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:extbase/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/extbase/de-X-SIC.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:extbase/Resources/Private/Language/locallang_db.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/extbase/de-X-SIC.locallang_db.xlf';

// extensionmanager
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:extensionmanager/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/extensionmanager/de-X-SIC.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:extensionmanager/Resources/Private/Language/locallang_mod.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/extensionmanager/de-X-SIC.locallang_mod.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:extensionmanager/Resources/Private/Language/module.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/extensionmanager/de-X-SIC.module.xlf';

// felogin
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:felogin/Resources/Private/Language/Database.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/felogin/de-X-SIC.Database.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:felogin/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/felogin/de-X-SIC.locallang.xlf';

// filelist
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:filelist/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/filelist/de-X-SIC.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/filelist/de-X-SIC.locallang_mod_file_list.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:filelist/Resources/Private/Language/locallang_transfer_handler.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/filelist/de-X-SIC.locallang_transfer_handler.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:filelist/Resources/Private/Language/module.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/filelist/de-X-SIC.module.xlf';

// filemetadata
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:filemetadata/Resources/Private/Language/db.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/filemetadata/de-X-SIC.db.xlf';

// fluid
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:fluid/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/fluid/de-X-SIC.locallang.xlf';

// fluid_styled_content
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:fluid_styled_content/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/fluid_styled_content/de-X-SIC.locallang.xlf';

// form
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:form/Resources/Private/Language/Database.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/form/de-X-SIC.Database.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:form/Resources/Private/Language/Modules/form_editor.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/form/Modules/de-X-SIC.form_editor.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:form/Resources/Private/Language/Modules/form_manager.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/form/Modules/de-X-SIC.form_manager.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:form/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/form/de-X-SIC.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:form/Resources/Private/Language/locallang_db.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/form/de-X-SIC.locallang_db.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:form/Resources/Private/Language/locallang_formEditor_failSafeErrorHandling_javascript.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/form/de-X-SIC.locallang_formEditor_failSafeErrorHandling_javascript.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:form/Resources/Private/Language/locallang_formManager_javascript.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/form/de-X-SIC.locallang_formManager_javascript.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:form/Resources/Private/Language/locallang_form_editor_javascript.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/form/de-X-SIC.locallang_form_editor_javascript.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:form/Resources/Private/Language/locallang_module.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/form/de-X-SIC.locallang_module.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:form/Resources/Private/Language/locallang_relative_date_editor.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/form/de-X-SIC.locallang_relative_date_editor.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:form/Resources/Private/Language/module.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/form/de-X-SIC.module.xlf';

// frontend
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:frontend/Resources/Private/Language/db/tt_content.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/frontend/db/de-X-SIC.tt_content.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:frontend/Resources/Private/Language/general.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/frontend/de-X-SIC.general.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:frontend/Resources/Private/Language/locallang_tca.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/frontend/de-X-SIC.locallang_tca.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:frontend/Resources/Private/Language/locallang_ttc.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/frontend/de-X-SIC.locallang_ttc.xlf';

// impexp
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:impexp/Resources/Private/Language/db.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/impexp/de-X-SIC.db.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:impexp/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/impexp/de-X-SIC.locallang.xlf';

// indexed_search
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:indexed_search/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/indexed_search/de-X-SIC.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:indexed_search/Resources/Private/Language/locallang_db.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/indexed_search/de-X-SIC.locallang_db.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:indexed_search/Resources/Private/Language/locallang_em.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/indexed_search/de-X-SIC.locallang_em.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:indexed_search/Resources/Private/Language/locallang_main.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/indexed_search/de-X-SIC.locallang_main.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:indexed_search/Resources/Private/Language/locallang_mod.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/indexed_search/de-X-SIC.locallang_mod.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:indexed_search/Resources/Private/Language/module.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/indexed_search/de-X-SIC.module.xlf';

// info
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:info/Resources/Private/Language/Modules/overview.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/info/Modules/de-X-SIC.overview.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:info/Resources/Private/Language/Modules/translations.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/info/Modules/de-X-SIC.translations.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:info/Resources/Private/Language/locallang_mod_web_info.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/info/de-X-SIC.locallang_mod_web_info.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:info/Resources/Private/Language/locallang_webinfo.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/info/de-X-SIC.locallang_webinfo.xlf';

// install
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:install/Resources/Private/Language/BackendModule.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/install/de-X-SIC.BackendModule.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:install/Resources/Private/Language/ModuleInstallEnvironment.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/install/de-X-SIC.ModuleInstallEnvironment.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:install/Resources/Private/Language/ModuleInstallMaintenance.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/install/de-X-SIC.ModuleInstallMaintenance.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:install/Resources/Private/Language/ModuleInstallSettings.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/install/de-X-SIC.ModuleInstallSettings.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:install/Resources/Private/Language/ModuleInstallUpgrade.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/install/de-X-SIC.ModuleInstallUpgrade.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:install/Resources/Private/Language/Modules/environment.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/install/Modules/de-X-SIC.environment.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:install/Resources/Private/Language/Modules/maintenance.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/install/Modules/de-X-SIC.maintenance.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:install/Resources/Private/Language/Modules/settings.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/install/Modules/de-X-SIC.settings.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:install/Resources/Private/Language/Modules/upgrade.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/install/Modules/de-X-SIC.upgrade.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:install/Resources/Private/Language/Report/locallang.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/install/Report/de-X-SIC.locallang.xlf';

// linkvalidator
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:linkvalidator/Resources/Private/Language/Module/locallang.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/linkvalidator/Module/de-X-SIC.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:linkvalidator/Resources/Private/Language/Module/locallang_mod.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/linkvalidator/Module/de-X-SIC.locallang_mod.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:linkvalidator/Resources/Private/Language/db.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/linkvalidator/de-X-SIC.db.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:linkvalidator/Resources/Private/Language/module.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/linkvalidator/de-X-SIC.module.xlf';

// lowlevel
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:lowlevel/Resources/Private/Language/Modules/config.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/lowlevel/Modules/de-X-SIC.config.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:lowlevel/Resources/Private/Language/Modules/database_integrity.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/lowlevel/Modules/de-X-SIC.database_integrity.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:lowlevel/Resources/Private/Language/Modules/database_query.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/lowlevel/Modules/de-X-SIC.database_query.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:lowlevel/Resources/Private/Language/Modules/database_raw.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/lowlevel/Modules/de-X-SIC.database_raw.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:lowlevel/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/lowlevel/de-X-SIC.locallang.xlf';

// opendocs
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:opendocs/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/opendocs/de-X-SIC.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:opendocs/Resources/Private/Language/locallang_widget_recentdocuments.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/opendocs/de-X-SIC.locallang_widget_recentdocuments.xlf';

// reactions
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:reactions/Resources/Private/Language/locallang_db.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/reactions/de-X-SIC.locallang_db.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:reactions/Resources/Private/Language/module.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/reactions/de-X-SIC.module.xlf';

// recycler
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:recycler/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/recycler/de-X-SIC.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:recycler/Resources/Private/Language/locallang_mod.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/recycler/de-X-SIC.locallang_mod.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:recycler/Resources/Private/Language/locallang_tasks.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/recycler/de-X-SIC.locallang_tasks.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:recycler/Resources/Private/Language/module.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/recycler/de-X-SIC.module.xlf';

// redirects
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:redirects/Resources/Private/Language/Modules/qrcodes.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/redirects/Modules/de-X-SIC.qrcodes.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:redirects/Resources/Private/Language/Modules/redirects.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/redirects/Modules/de-X-SIC.redirects.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:redirects/Resources/Private/Language/Modules/short_urls.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/redirects/Modules/de-X-SIC.short_urls.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:redirects/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/redirects/de-X-SIC.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:redirects/Resources/Private/Language/locallang_db.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/redirects/de-X-SIC.locallang_db.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:redirects/Resources/Private/Language/locallang_extconf.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/redirects/de-X-SIC.locallang_extconf.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/redirects/de-X-SIC.locallang_module_redirect.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:redirects/Resources/Private/Language/locallang_reports.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/redirects/de-X-SIC.locallang_reports.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:redirects/Resources/Private/Language/locallang_slug_service.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/redirects/de-X-SIC.locallang_slug_service.xlf';

// reports
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:reports/Resources/Private/Language/Modules/overview.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/reports/Modules/de-X-SIC.overview.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:reports/Resources/Private/Language/Modules/statistics.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/reports/Modules/de-X-SIC.statistics.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:reports/Resources/Private/Language/Modules/status.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/reports/Modules/de-X-SIC.status.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:reports/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/reports/de-X-SIC.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:reports/Resources/Private/Language/locallang_reports.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/reports/de-X-SIC.locallang_reports.xlf';

// scheduler
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:scheduler/Resources/Private/Language/label.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/scheduler/de-X-SIC.label.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:scheduler/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/scheduler/de-X-SIC.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:scheduler/Resources/Private/Language/locallang_em.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/scheduler/de-X-SIC.locallang_em.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:scheduler/Resources/Private/Language/locallang_mod.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/scheduler/de-X-SIC.locallang_mod.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:scheduler/Resources/Private/Language/locallang_tca.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/scheduler/de-X-SIC.locallang_tca.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:scheduler/Resources/Private/Language/module.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/scheduler/de-X-SIC.module.xlf';

// seo
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:seo/Resources/Private/Language/db.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/seo/de-X-SIC.db.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:seo/Resources/Private/Language/locallang_dashboard.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/seo/de-X-SIC.locallang_dashboard.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:seo/Resources/Private/Language/locallang_webinfo.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/seo/de-X-SIC.locallang_webinfo.xlf';

// styleguide
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:styleguide/Resources/Private/Language/Modules/components.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/styleguide/Modules/de-X-SIC.components.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:styleguide/Resources/Private/Language/Modules/overview.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/styleguide/Modules/de-X-SIC.overview.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:styleguide/Resources/Private/Language/Modules/pagetrees.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/styleguide/Modules/de-X-SIC.pagetrees.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:styleguide/Resources/Private/Language/Modules/styles.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/styleguide/Modules/de-X-SIC.styles.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:styleguide/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/styleguide/de-X-SIC.locallang.xlf';

// sys_note
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:sys_note/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/sys_note/de-X-SIC.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:sys_note/Resources/Private/Language/locallang_tca.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/sys_note/de-X-SIC.locallang_tca.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:sys_note/Resources/Private/Language/locallang_widget_pages_with_internal_note.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/sys_note/de-X-SIC.locallang_widget_pages_with_internal_note.xlf';

// theme_camino
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:theme_camino/Resources/Private/Language/backend_fields.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/theme_camino/de-X-SIC.backend_fields.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:theme_camino/Resources/Private/Language/backend_layouts.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/theme_camino/de-X-SIC.backend_layouts.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:theme_camino/Resources/Private/Language/backend_previews.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/theme_camino/de-X-SIC.backend_previews.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:theme_camino/Resources/Private/Language/messages.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/theme_camino/de-X-SIC.messages.xlf';

// tstemplate
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:tstemplate/Resources/Private/Language/Modules/active.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/tstemplate/Modules/de-X-SIC.active.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:tstemplate/Resources/Private/Language/Modules/analyzer.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/tstemplate/Modules/de-X-SIC.analyzer.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:tstemplate/Resources/Private/Language/Modules/constanteditor.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/tstemplate/Modules/de-X-SIC.constanteditor.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:tstemplate/Resources/Private/Language/Modules/infomodify.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/tstemplate/Modules/de-X-SIC.infomodify.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:tstemplate/Resources/Private/Language/Modules/recordsoverview.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/tstemplate/Modules/de-X-SIC.recordsoverview.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:tstemplate/Resources/Private/Language/Modules/ts.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/tstemplate/Modules/de-X-SIC.ts.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:tstemplate/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/tstemplate/de-X-SIC.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:tstemplate/Resources/Private/Language/locallang_active.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/tstemplate/de-X-SIC.locallang_active.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:tstemplate/Resources/Private/Language/locallang_analyzer.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/tstemplate/de-X-SIC.locallang_analyzer.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:tstemplate/Resources/Private/Language/locallang_ceditor.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/tstemplate/de-X-SIC.locallang_ceditor.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:tstemplate/Resources/Private/Language/locallang_info.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/tstemplate/de-X-SIC.locallang_info.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:tstemplate/Resources/Private/Language/locallang_overview.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/tstemplate/de-X-SIC.locallang_overview.xlf';

// viewpage
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:viewpage/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/viewpage/de-X-SIC.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:viewpage/Resources/Private/Language/locallang_mod.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/viewpage/de-X-SIC.locallang_mod.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:viewpage/Resources/Private/Language/module.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/viewpage/de-X-SIC.module.xlf';

// webhooks
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:webhooks/Resources/Private/Language/locallang_db.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/webhooks/de-X-SIC.locallang_db.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:webhooks/Resources/Private/Language/module.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/webhooks/de-X-SIC.module.xlf';

// workspaces
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:workspaces/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/workspaces/de-X-SIC.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:workspaces/Resources/Private/Language/locallang_db.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/workspaces/de-X-SIC.locallang_db.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:workspaces/Resources/Private/Language/locallang_mod.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/workspaces/de-X-SIC.locallang_mod.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['de-X-SIC']['EXT:workspaces/Resources/Private/Language/module.xlf'][]
    = 'EXT:six_seven/Resources/Private/Language/workspaces/de-X-SIC.module.xlf';
