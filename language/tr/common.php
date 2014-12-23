<?php
/**
*
* @package phpBB Extension - tas2580 Social Media Buttons
* @copyright (c) 2014 tas2580 (https://tas2580.net) translation by Tuqe
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
	'SOCIAL_BUTTONS'			=> 'Sosyal Medya&#39;da Paylaş',
	'SHARE_FACEBOOK'			=> 'Facebook&#39;ta Paylaş',
	'SHARE_TWITTER'				=> 'Twitter&#39;da Paylaş',
	'SHARE_GOOGLEPLUS'			=> 'Google+&#39;ta Paylaş',
	'SHARE_LINKEDIN'			=> 'Linkedin&#39;de Paylaş',
	'ACP_SOCIALBUTTONS_TITLE'	=> 'Sosyal Medya Butonları',
	'ACP_SETTINGS'				=> 'Ayarlar',
	'ACP_POSITION'				=> 'Pozisyon',
	'ACP_POSITION_EXPLAIN'		=> 'Butonların yeri için pozisyon belirleyin',
	'ACP_SUBMIT'				=> 'Güncelleme değişiklikleri',
	'ACP_POSITION_ALL'			=> 'Hem üstte hem altta',
	'ACP_POSITION_TOP'			=> 'Üstte',
	'ACP_POSITION_BOTTOM'		=> 'Altta',
	'ACP_CACHETIME'				=> 'Önbellek',
	'ACP_CACHETIME_EXPLAIN'		=> 'Önbellek temizliği hangi uzunlukta olsun?',
	'ACP_MULTIPLICATOR_SECONDS'	=> 'Saniye',
	'ACP_MULTIPLICATOR_MINUTES'	=> 'Dakika',
	'ACP_MULTIPLICATOR_HOURS'	=> 'Saat',
	'ACP_SET_PLATFORMS'			=> 'Aktif Et',
	'ACP_FACEBOOK'				=> 'Facebook',
	'ACP_TWITTER'				=> 'Twitter',
	'ACP_GOOGLE'				=> 'Google Plus',
	'ACP_LINKEDIN'				=> 'Linkedin',
	'ACP_SAVED'					=> 'Sosyal medya buton ayarları güncellendi.',
	'ACP_STYLE'					=> 'Stil',
	'ACP_STYLE_EXPLAIN'			=> 'Düğmeleri için bir stil seçin',
));
