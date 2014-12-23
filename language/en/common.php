<?php
/**
*
* @package phpBB Extension - tas2580 Social Media Buttons
* @copyright (c) 2014 tas2580
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
	'SHARE_FACEBOOK'			=> 'Share on Facebook',
	'SHARE_TWITTER'				=> 'Share on Twitter',
	'SHARE_GOOGLEPLUS'			=> 'Share on Google+',
	'SHARE_LINKEDIN'			=> 'Share on Linkedin',
	'ACP_SOCIALBUTTONS_TITLE'	=> 'Social Media Buttons',
	'ACP_SETTINGS'				=> 'Settings',
	'ACP_POSITION'				=> 'Position',
	'ACP_POSITION_EXPLAIN'		=> 'Choose a position where the buttons should be displayed.',
	'ACP_SUBMIT'				=> 'Update changes',
	'ACP_POSITION_ALL'			=> 'At the top and at the bottom',
	'ACP_POSITION_TOP'			=> 'At the top',
	'ACP_POSITION_BOTTOM'		=> 'At the bottom',
	'ACP_CACHETIME'				=> 'Cachetime',
	'ACP_CACHETIME_EXPLAIN'		=> 'How long should the data be cached?',
	'ACP_MULTIPLICATOR_SECONDS'	=> 'Seconds',
	'ACP_MULTIPLICATOR_MINUTES'	=> 'Minutes',
	'ACP_MULTIPLICATOR_HOURS'	=> 'Hours',
	'ACP_SET_PLATFORMS'			=> 'Enable platforms',
	'ACP_FACEBOOK'				=> 'Facebook',
	'ACP_TWITTER'				=> 'Twitter',
	'ACP_GOOGLE'				=> 'Google Plus',
	'ACP_LINKEDIN'				=> 'Linkedin',
	'ACP_SAVED'					=> 'Social Media Buttons settings updated.',
	'ACP_STYLE'					=> 'Style',
	'ACP_STYLE_EXPLAIN'			=> 'Choose a style for the buttons',
));
