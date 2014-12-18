<?php
/**
*
* @package phpBB Extension - tas2580 Social Media Buttons
* @copyright (c) 2014 tas2580 (https://tas2580.net) ; Estonian translation by http://www.phpbbeesti.com/
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
    'SOCIAL_BUTTONS'			=> 'Sotsiaalmeedia',
	'SHARE_FACEBOOK'			=> 'Jaga Facebookis',
	'SHARE_TWITTER'				=> 'Jaga Twitteris',
	'SHARE_GOOGLEPLUS'			=> 'Jaga Google+\'is',
	'SHARE_LINKEDIN'			=> 'Jaga Linkedin\'is',
	'ACP_SOCIALBUTTONS_TITLE'	=> 'Sotsiaalmeedia nupud',
	'ACP_SETTINGS'				=> 'Seaded',
	'ACP_POSITION'				=> 'Asukoht',
	'ACP_POSITION_EXPLAIN'		=> 'Asukoht, kus soovid nuppe näidata.',
	'ACP_SUBMIT'				=> 'Uuenda muudatused',
	'ACP_POSITION_ALL'			=> 'Ülesse ja alla',
	'ACP_POSITION_TOP'			=> 'Üles',
	'ACP_POSITION_BOTTOM'		=> 'Alla',
	'ACP_CACHETIME'				=> 'Vahemälu aeg',
	'ACP_CACHETIME_EXPLAIN'		=> 'Kui kauaks peaks andmed jääma vahemällu?',
	'ACP_MULTIPLICATOR_SECONDS'	=> 'Sekundit',
	'ACP_MULTIPLICATOR_MINUTES'	=> 'Minutit',
	'ACP_MULTIPLICATOR_HOURS'	=> 'Tundi',
	'ACP_SET_PLATFORMS'			=> 'Luba järgnevad',
	'ACP_FACEBOOK'				=> 'Facebook',
	'ACP_TWITTER'				=> 'Twitter',
	'ACP_GOOGLE'				=> 'Google Plus',
	'ACP_LINKEDIN'				=> 'Linkedin',
	'ACP_SAVED'					=> 'Sotsiaalmeedia nuppude seaded uuendatud.',
	'ACP_STYLE'					=> 'Stiil',
	'ACP_STYLE_EXPLAIN'			=> 'Vali stiil nupud',
));
