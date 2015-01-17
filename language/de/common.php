<?php
/**
*
* @package phpBB Extension - tas2580 Social Media Buttons
* @copyright (c) 2014 tas2580 (https://tas2580.net)
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

$lang = array_merge($lang, array(
    'SOCIAL_BUTTONS'			=> 'Social Media',
	'SHARE_FACEBOOK'			=> 'Auf Facebook teilen',
	'SHARE_TWITTER'				=> 'Auf Twitter teilen',
	'SHARE_GOOGLEPLUS'			=> 'Auf Google+ teilen',
	'SHARE_LINKEDIN'			=> 'Auf Linkedin teilen',
	'ACP_SETTINGS'				=> 'Einstellungen',
	'ACP_POSITION'				=> 'Position',
	'ACP_POSITION_EXPLAIN'		=> 'Wähle eine Position an der die Buttons angezeigt werden sollen.',
	'ACP_SUBMIT'				=> 'Änderungen übernehmen',
	'ACP_POSITION_ALL'			=> 'Oben und unten',
	'ACP_POSITION_TOP'			=> 'Oben',
	'ACP_POSITION_BOTTOM'		=> 'Unten',
	'ACP_CACHETIME'				=> 'Cachezeit',
	'ACP_CACHETIME_EXPLAIN'		=> 'Wie lange sollen die Daten für die Anzahl der Shares gecached werden?',
	'ACP_MULTIPLICATOR_SECONDS'	=> 'Sekunden',
	'ACP_MULTIPLICATOR_MINUTES'	=> 'Minuten',
	'ACP_MULTIPLICATOR_HOURS'	=> 'Stunden',
	'ACP_SET_PLATFORMS'			=> 'Platformen aktivieren',
	'ACP_FACEBOOK'				=> 'Facebook',
	'ACP_TWITTER'				=> 'Twitter',
	'ACP_GOOGLE'				=> 'Google Plus',
	'ACP_LINKEDIN'				=> 'Linkedin',
	'ACP_SAVED'					=> 'Social Media Buttons Einstellungen geändert.',
	'ACP_STYLE'					=> 'Style',
	'ACP_STYLE_EXPLAIN'			=> 'Wähle ein Style für die Buttons',
	'CACHE_PATH_NOT_WRITEABLE'	=> 'Der Cache Pfad "%s" ist nicht beschreibbar!',
	'ACP_CACHE_PURGE_SUCCESS'	=> 'Alle Dateien im Cache wurden gelöscht.',
	'ACP_SHOWSHARES'			=> 'Shares anzeigen',
	'ACP_SHOWSHARES_EXPLAIN'	=> 'Soll die Anzahl der Shares neben den Buttons angezeigt werden?',
	'ACP_PURGE_CACHE'			=> 'Cache löschen',
	'ACP_PURGE_CACHE_EXPLAIN'	=> 'Löscht alle Dateien aus dem Cache',
	'RUN_NOW'					=> 'Ausführen',
	'ACP_OG_TAGS'				=> 'OG Meta-Tags',
	'ACP_ENABLE_OG_TAGS'		=> 'OG Meta-Tags aktivieren',
	'ACP_OG_EXPLAIN'			=> 'Aktiviert <a href="http://ogp.me/">Open Graph</a> Meta-Tags um den Social Media Plattformen das auslesen von Informationen zu erleichtern',
	'ACP_OG_IMAGE'				=> 'Bild',
	'ACP_OG_IMAGE_EXPLAIN'		=> 'Gib die URL zu einem Bild an das in dem geteilten Beitrag angezeigt wird.',
	'ACP_ENABLE_OG_TITLE'		=> 'Titel',
	'ACP_OG_TITLE_EXPLAIN'		=> 'Wenn aktiviert wird der Themen Titel als OG-Tag verwendet',
	'ACP_ENABLE_OG_DESC'		=> 'Beschreibung',
	'ACP_OG_DESC_EXPLAIN'		=> 'Wenn aktiviert wird der erste Beitrag als Beschreibung übergeben.<br /><span style="color:#f00;">Achtung! Der erste Beitrag ist somit auch bei privaten Foren für jeden sichtbar.</span> So kann umgangen werden das die Plattformen den Login Text verwenden.',
	'ACP_USE_SEO_URLS'			=> 'URL Rewriting',
	'ACP_USE_SEO_URLS_EXPLAIN'	=> 'Aktiviere diese Option wenn das Forum eine URL-Rewriting Extension verwendet.',
	'ACP_ENABLE_FORUMS'			=> 'Buttons aktivieren',
	'ACP_ENABLE_FORUMS_EXPLAIN'	=> 'Wähle die Foren in denen die Buttons angezeigt werden sollen.',
));