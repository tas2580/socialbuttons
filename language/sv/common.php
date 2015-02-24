<?php
/**
*
* @package phpBB Extension - tas2580 Social Media Buttons
* @copyright (c) 2014 tas2580 (https://tas2580.net)
* Swedish translation by Holger (http://www.maskinisten.net)
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
    'SOCIAL_BUTTONS'			=> 'Sociala medier',
	'SHARE_FACEBOOK'			=> 'Dela hos Facebook',
	'SHARE_TWITTER'				=> 'Dela hos Twitter',
	'SHARE_GOOGLEPLUS'			=> 'Dela hos Google+',
	'SHARE_LINKEDIN'			=> 'Dela hos Linkedin',
	'ACP_SETTINGS'				=> 'Inställningar',
	'ACP_POSITION'				=> 'Position',
	'ACP_POSITION_EXPLAIN'		=> 'Välj position för knapparna.',
	'ACP_SUBMIT'				=> 'Spara ändringarna',
	'ACP_POSITION_ALL'			=> 'Uppe och nere',
	'ACP_POSITION_TOP'			=> 'Uppe',
	'ACP_POSITION_BOTTOM'		=> 'Nere',
	'ACP_CACHETIME'				=> 'Cachetid',
	'ACP_CACHETIME_EXPLAIN'		=> 'Hur länge ska data för antalet delningar cachas?',
	'ACP_MULTIPLICATOR_SECONDS'	=> 'Sekunder',
	'ACP_MULTIPLICATOR_MINUTES'	=> 'Minuter',
	'ACP_MULTIPLICATOR_HOURS'	=> 'Timmar',
	'ACP_SET_PLATFORMS'			=> 'Aktivera plattformar',
	'ACP_FACEBOOK'				=> 'Facebook',
	'ACP_TWITTER'				=> 'Twitter',
	'ACP_GOOGLE'				=> 'Google Plus',
	'ACP_LINKEDIN'				=> 'Linkedin',
	'ACP_SAVED'					=> 'Inställningarna för knapparna för sociala medier har ändrats.',
	'ACP_STYLE'					=> 'Stil',
	'ACP_STYLE_EXPLAIN'			=> 'Välj stil på knapparna',
	'CACHE_PATH_NOT_WRITEABLE'	=> 'Cachesökvägen "%s" är ej skrivbar!',
	'ACP_CACHE_PURGE_SUCCESS'	=> 'Alla filer i cachen har raderats.',
	'ACP_SHOWSHARES'			=> 'Visa delningar',
	'ACP_SHOWSHARES_EXPLAIN'	=> 'Ska antalet delningar visas bredvid knapparna?',
	'ACP_PURGE_CACHE'			=> 'Töm cachen',
	'ACP_PURGE_CACHE_EXPLAIN'	=> 'Raderar alla filer i cachen',
	'RUN_NOW'					=> 'Utför',
	'ACP_OG_TAGS'				=> 'OG metataggar',
	'ACP_ENABLE_OG_TAGS'		=> 'Aktivera OG metataggar',
	'ACP_OG_EXPLAIN'			=> 'Aktiverar <a href="http://ogp.me/">Open Graph</a> metataggar för att underlätta överföring av information till siociala plattformar.',
	'ACP_OG_IMAGE'				=> 'Bild',
	'ACP_OG_IMAGE_EXPLAIN'		=> 'Ange URL till bilden som visas med det delade inlägget.',
	'ACP_ENABLE_OG_TITLE'		=> 'Rubrik',
	'ACP_OG_TITLE_EXPLAIN'		=> 'Aktivera för att använda trådens rubrik som OG tagg',
	'ACP_ENABLE_OG_DESC'		=> 'Beskrivning',
	'ACP_OG_DESC_EXPLAIN'		=> 'Aktivera för att överföra det första inlägget som beskrivning.<br /><span style="color:#f00;">OBS! Det första inlägget syns då för alla även ur privata forum.</span> På detta sätt kan undvikas att plattformen visa login texten.',
	'ACP_USE_SEO_URLS'			=> 'URL Rewriting',
	'ACP_USE_SEO_URLS_EXPLAIN'	=> 'Aktivera denna funktion om forumet använder ett URL Rewriting tillägg.',
	'ACP_ENABLE_FORUMS'			=> 'Aktivera knappar',
	'ACP_ENABLE_FORUMS_EXPLAIN'	=> 'Välj forum som knapparna ska visas i.',
));
