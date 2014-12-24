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
	'ACP_CACHETIME_EXPLAIN'		=> 'Wie lange sollen die Daten gecached werden?',
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
	'ACP_STYLE_EXPLAIN'			=> 'Wähle ein style für die Buttons',
));
