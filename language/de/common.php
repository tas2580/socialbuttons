<?php
/**
*
* @package phpBB Extension - tas2580 Social Media Buttons
* @copyright (c) 2015 tas2580 (https://tas2580.net)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
    exit;
}

if (empty($lang) || !is_array($lang))
{
    $lang = array();
}
// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//
$lang = array_merge($lang, array(
	'ACP_CACHE_PURGE_SUCCESS'	=> 'Alle Dateien im Cache wurden gelöscht.',
	'ACP_CACHETIME'				=> 'Cachezeit',
	'ACP_CACHETIME_EXPLAIN'		=> 'Wie lange sollen die Daten für die Anzahl der Shares gecached werden?',
	'ACP_DISPLAY_ON_INDEX'			=> 'Im der Foren Übersicht anzeigen',
	'ACP_DISPLAY_ON_INDEX_EXPLAIN'	=> 'Wenn aktiviert werden die Buttons in der Foren Übersicht angezeigt',
	'ACP_ENABLE_FORUMS'			=> 'Buttons aktivieren',
	'ACP_ENABLE_FORUMS_EXPLAIN'	=> 'Wähle die Foren in denen die Buttons angezeigt werden sollen.',
	'ACP_ENABLE_OG_DESC'			=> 'Beschreibung',
	'ACP_ENABLE_OG_TAGS'			=> 'OG Meta-Tags aktivieren',
	'ACP_ENABLE_OG_TITLE'			=> 'Titel',
	'ACP_MULTIPLICATOR_HOURS'		=> 'Stunden',
	'ACP_MULTIPLICATOR_MINUTES'	=> 'Minuten',
	'ACP_MULTIPLICATOR_SECONDS'	=> 'Sekunden',
	'ACP_OG_DESC_EXPLAIN'			=> 'Wenn aktiviert wird der erste Beitrag als Beschreibung übergeben. So kann umgangen werden das die Plattformen den Login Text verwenden.<br /><span style="color:#f00;">Achtung! Der erste Beitrag ist somit auch bei privaten Foren für jeden sichtbar.</span>',
	'ACP_OG_EXPLAIN'				=> 'Aktiviert <a href="http://ogp.me/">Open Graph</a> Meta-Tags um den Social Media Plattformen das auslesen von Informationen zu erleichtern',
	'ACP_OG_IMAGE'				=> 'Bild',
	'ACP_OG_IMAGE_EXPLAIN'			=> 'Gib die URL zu einem Bild an das in dem geteilten Beitrag angezeigt wird.',
	'ACP_OG_TAGS'				=> 'OG Meta-Tags',
	'ACP_OG_TITLE_EXPLAIN'			=> 'Wenn aktiviert wird der Themen Titel als OG-Tag verwendet',
	'ACP_POSITION'					=> 'Position in Themen',
	'ACP_POSITION_ALL'				=> 'Oben und unten',
	'ACP_POSITION_BOTTOM'			=> 'Nur unten',
	'ACP_POSITION_EXPLAIN'			=> 'Wähle eine Position an der die Buttons in der Themen-Ansicht angezeigt werden sollen.',
	'ACP_POSITION_TOP'				=> 'Nur oben',
	'ACP_PURGE_CACHE'			=> 'Cache löschen',
	'ACP_PURGE_CACHE_EXPLAIN'		=> 'Löscht alle Dateien aus dem Cache',
	'ACP_SAVED'					=> 'Social Media Buttons Einstellungen geändert.',
	'ACP_SET_PLATFORMS'			=> 'Platformen aktivieren',
	'ACP_SETTINGS'				=> 'Einstellungen',
	'ACP_SHOWSHARES'				=> 'Shares anzeigen',
	'ACP_SHOWSHARES_EXPLAIN'		=> 'Soll die Anzahl der Shares neben den Buttons angezeigt werden?',
	'ACP_STYLE'					=> 'Style',
	'ACP_STYLE_EXPLAIN'			=> 'Wähle ein Style für die Buttons',
	'ACP_SUBMIT'					=> 'Änderungen übernehmen',
	'ACP_USE_SEO_URLS'			=> 'URL Rewriting',
	'ACP_USE_SEO_URLS_EXPLAIN'		=> 'Aktiviere diese Option wenn das Forum eine URL-Rewriting Extension verwendet.',
	'ACP_FACEBOOK'				=> 'Facebook',
	'ACP_TWITTER'					=> 'Twitter',
	'ACP_GOOGLE'					=> 'Google Plus',
	'ACP_LINKEDIN'					=> 'Linkedin',
	'CACHE_PATH_NOT_WRITEABLE'	=> 'Der Cache Pfad "%s" ist nicht beschreibbar!',
	'RUN_NOW'					=> 'Ausführen',
	'SHARE_FACEBOOK'				=> 'Auf Facebook teilen',
	'SHARE_GOOGLEPLUS'			=> 'Auf Google+ teilen',
	'SHARE_LINKEDIN'				=> 'Auf Linkedin teilen',
	'SHARE_TWITTER'				=> 'Auf Twitter teilen',
	'SOCIAL_BUTTONS'				=> 'Social Media',
));