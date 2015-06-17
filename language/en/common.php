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
	'ACP_CACHE_PURGE_SUCCESS'	=> 'Deleted all files from cache.',
	'ACP_CACHETIME'				=> 'Cachetime',
	'ACP_CACHETIME_EXPLAIN'		=> 'How long should the data for the number of shared be cached?',
	'ACP_DISPLAY_ON_INDEX'			=> 'Display on index',
	'ACP_DISPLAY_ON_INDEX_EXPLAIN'	=> 'If activated the social media buttons will be displayed on the index page above the “Who is online ?”.',
	'ACP_ENABLE_FORUMS'			=> 'Activate buttons',
	'ACP_ENABLE_FORUMS_EXPLAIN'	=> 'Select the forums where the buttons should be displayed.',
	'ACP_ENABLE_OG_DESC'			=> 'Description',
	'ACP_ENABLE_OG_TITLE'			=> 'Title',
	'ACP_ENABLE_OG_TAGS'			=> 'Activate OG Meta-Tags',
	'ACP_MULTIPLICATOR_HOURS'		=> 'Hours',
	'ACP_MULTIPLICATOR_MINUTES'	=> 'Minutes',
	'ACP_MULTIPLICATOR_SECONDS'	=> 'Seconds',
	'ACP_OG_DESC_EXPLAIN'			=> 'If activated the first post will be used as og:description.<br /><span style="color:#f00;">Attention! If activated the first post can be seen by everyone even if the forum is private.</span> This prevents that the platforms use the login text as description.',
	'ACP_OG_EXPLAIN'				=> 'Activates <a href="http://ogp.me/">Open Graph</a> Meta-Tags to give the Social Media platforms inormations about the page to share',
	'ACP_OG_IMAGE'				=> 'Image',
	'ACP_OG_IMAGE_EXPLAIN'			=> 'Enter the URL to an image that you whant to use in the share.',
	'ACP_OG_TAGS'				=> 'OG Meta-Tags',
	'ACP_OG_TITLE_EXPLAIN'			=> 'If activated the topic title is used as og:title',
	'ACP_POSITION'					=> 'Position',
	'ACP_POSITION_EXPLAIN'			=> 'Choose a position where the buttons should be displayed on topics.',
	'ACP_POSITION_ALL'				=> 'At the top and at the bottom',
	'ACP_POSITION_BOTTOM'			=> 'At the bottom',
	'ACP_POSITION_TOP'				=> 'At the top',
	'ACP_PURGE_CACHE'			=> 'Purge Cache',
	'ACP_PURGE_CACHE_EXPLAIN'		=> 'Delete all files from cache',
	'ACP_SAVED'					=> 'Social Media Buttons settings updated.',
	'ACP_SET_PLATFORMS'			=> 'Enable platforms',
	'ACP_SETTINGS'				=> 'Settings',
	'ACP_SHOWSHARES'				=> 'Display shares',
	'ACP_SHOWSHARES_EXPLAIN'		=> 'Display the number of shares behind the button',
	'ACP_STYLE'					=> 'Style',
	'ACP_STYLE_EXPLAIN'			=> 'Choose a style for the buttons',
	'ACP_SUBMIT'					=> 'Update changes',
	'ACP_USE_SEO_URLS'			=> 'URL Rewriting',
	'ACP_USE_SEO_URLS_EXPLAIN'		=> 'Activate this option if a URL rewriting extension is used.',
	'ACP_FACEBOOK'				=> 'Facebook',
	'ACP_TWITTER'					=> 'Twitter',
	'ACP_GOOGLE'					=> 'Google Plus',
	'ACP_LINKEDIN'					=> 'Linkedin',
	'CACHE_PATH_NOT_WRITEABLE'	=> 'The cache path "%s" is not writeable!',
	'RUN_NOW'					=> 'Run Now',
	'SHARE_FACEBOOK'				=> 'Share on Facebook',
	'SHARE_TWITTER'				=> 'Share on Twitter',
	'SHARE_GOOGLEPLUS'			=> 'Share on Google+',
	'SHARE_LINKEDIN'				=> 'Share on Linkedin',
	'SOCIAL_BUTTONS'				=> 'Social Media',
));
