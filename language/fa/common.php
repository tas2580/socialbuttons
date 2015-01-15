<?php
/**
*
* @package phpBB Extension - tas2580 Social Media Buttons
* @copyright (c) 2014 tas2580 (https://tas2580.net)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Perisan Translator: Meis@M noubari from php-bb.ir
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
    'SOCIAL_BUTTONS'			=> 'رسانه های اجتماعی',
        'SHARE_FACEBOOK'			=> 'اشتراک در فیس بوک',
	      'SHARE_TWITTER'				=> 'اشتراک در توئیتر',
      	'SHARE_GOOGLEPLUS'			=> 'اشتراک در گوگل پلاس',
      	'SHARE_LINKEDIN'			=> 'اشتراک در لینکداین',
      	'ACP_SETTINGS'				=> 'تنظیمات',
	      'ACP_POSITION'				=> 'مکان',
	      'ACP_POSITION_EXPLAIN'		=> 'مکانی که تمایل دارید دکمه های رسانه های اجتماعی قرار بگیرند.',
	      'ACP_SUBMIT'				=> 'به روز رسانی تغییرات',
	      'ACP_POSITION_ALL'			=> 'در قسمت بالای دکمه',
	      'ACP_POSITION_TOP'			=> 'در قسمت بالا',
	      'ACP_POSITION_BOTTOM'		=> 'در قسمت پایین',
	      'ACP_CACHETIME'				=> 'زمان کش',
	      'ACP_CACHETIME_EXPLAIN'		=> 'چه مقدار زمان کش باشد؟',
	      'ACP_MULTIPLICATOR_SECONDS'	=> 'ثانیه',
	      'ACP_MULTIPLICATOR_MINUTES'	=> 'دقیقه',
	      'ACP_MULTIPLICATOR_HOURS'	=> 'ساعت',
	      'ACP_SET_PLATFORMS'			=> 'فعال سازی پلتفرم',
	      'ACP_FACEBOOK'				=> 'فیس بوک',
	      'ACP_TWITTER'				=> 'توئیتر',
	      'ACP_GOOGLE'				=> 'گوگل پلاس',
	      'ACP_LINKEDIN'				=> 'لینکداین',
	      'ACP_SAVED'					=> 'تنظیمات رسانه های اجتماعی به روز شد.',
	      'ACP_STYLE'					=> 'قالب',
	      'ACP_STYLE_EXPLAIN'			=> 'قالبی برای دکمه ها انتخاب کنید',
	      'CACHE_PATH_NOT_WRITEABLE'	=> 'فایل کش "%s" قابل خواندن نیست.',
	      'ACP_CACHE_PURGE_SUCCESS'	=> 'حذف تمامی فایل ها از کش.',
	      'ACP_SHOWSHARES'			=> 'نمایش اشتراک گذاری',
	      'ACP_SHOWSHARES_EXPLAIN'	=> 'نمایش تعداد اشتراک ها پشت دکمه',
	      'ACP_PURGE_CACHE'			=> 'پاکسازی کش',
	      'ACP_PURGE_CACHE_EXPLAIN'	=> 'حذف همه فایل ها از کش',
	      'RUN_NOW'					=> 'اجرا هم اکنون',
));
