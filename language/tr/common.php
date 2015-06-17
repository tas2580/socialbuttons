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
	'ACP_CACHE_PURGE_SUCCESS'	=> 'Önbellekteki tüm dosyalar silindi.',
	'ACP_CACHETIME'				=> 'Önbellekleme aralığı',
	'ACP_CACHETIME_EXPLAIN'		=> 'Önbellek temizliği hangi zaman aralığında olsun?',
	'ACP_DISPLAY_ON_INDEX'			=> 'Ana Sayfada Göster',
	'ACP_DISPLAY_ON_INDEX_EXPLAIN'	=> 'Eğer aktif ederseniz sosyal medya butonları “Kimler çevrimiçi ?” kısmının Yukarısında görüntülenir.',
	'ACP_ENABLE_FORUMS'			=> 'Butonları aktif et',
	'ACP_ENABLE_FORUMS_EXPLAIN'	=> 'Butonların görüntülenmesini istediğiniz forumları seçiniz.',
	'ACP_ENABLE_OG_DESC'			=> 'Tanım',
	'ACP_ENABLE_OG_TITLE'			=> 'Başlık',
	'ACP_ENABLE_OG_TAGS'			=> 'OG Meta-Etiketlerini Etkinleştir',
	'ACP_MULTIPLICATOR_HOURS'		=> 'Saat',
	'ACP_MULTIPLICATOR_MINUTES'	=> 'Dakika',
	'ACP_MULTIPLICATOR_SECONDS'	=> 'Saniye',
	'ACP_OG_DESC_EXPLAIN'			=> 'Eğer aktifse konunun ilk yazısı kullanılır og:tanım.<br /><span style="color:#f00;">Dikkat! Bunu aktif ettiğinizde forum özel forum olsa bile tanım yazısı herkes tarafından görüntülenecektir.</span> Bu platformlarda açıklama metni girilmesini engeller.',
	'ACP_OG_EXPLAIN'				=> 'Aktif ederseniz <a href="http://ogp.me/">Open Graph</a> Meta-Etiketleri Sosyal Medya platformlarında paylaşımlarınız hakkında bilgiler verir',
	'ACP_OG_IMAGE'				=> 'Resim',
	'ACP_OG_IMAGE_EXPLAIN'			=> 'Paylaşımlarda kullanmak istediğiniz resmin adresini giriniz.',
	'ACP_OG_TAGS'				=> 'OG Meta-Etiketleri',
	'ACP_OG_TITLE_EXPLAIN'			=> 'Eğer aktifse konu başlığı olarak kullanılır og:başlık',
	'ACP_POSITION'					=> 'Pozisyon',
	'ACP_POSITION_EXPLAIN'			=> 'Butonların yerini belirleyiniz.',
	'ACP_POSITION_ALL'				=> 'Hem üstte hem altta',
	'ACP_POSITION_BOTTOM'			=> 'Altta',
	'ACP_POSITION_TOP'				=> 'Üstte',
	'ACP_PURGE_CACHE'			=> 'Önbellek temizliği',
	'ACP_PURGE_CACHE_EXPLAIN'		=> 'Önbellekteki tüm dosyaları sil',
	'ACP_SAVED'					=> 'Sosyal medya buton ayarları güncellendi.',
	'ACP_SET_PLATFORMS'			=> 'Aktif Et',
	'ACP_SETTINGS'				=> 'Ayarlar',
	'ACP_SHOWSHARES'				=> 'Paylaşım sayısını görüntüle',
	'ACP_SHOWSHARES_EXPLAIN'		=> 'Buttonların sağında kaç kişi tarafından paylaşıldığı görüntülenir.',
	'ACP_STYLE'					=> 'Alternatif Buton',
	'ACP_STYLE_EXPLAIN'			=> 'Alternatif butonlardan birini seçebilirsiniz',
	'ACP_SUBMIT'					=> 'Değişiklikleri Güncelle',
	'ACP_USE_SEO_URLS'			=> 'URL Yeniden yazdır',
	'ACP_USE_SEO_URLS_EXPLAIN'		=> 'Bu seçeneği aktif ederseniz URLler yeniden yazdırılır (Seo&#39;nun aktif olması için).',
	'ACP_FACEBOOK'				=> 'Facebook',
	'ACP_TWITTER'					=> 'Twitter',
	'ACP_GOOGLE'					=> 'Google Plus',
	'ACP_LINKEDIN'					=> 'Linkedin',
	'CACHE_PATH_NOT_WRITEABLE'	=> 'Önbellek yolu "%s" yazılabilir değil!',
	'RUN_NOW'					=> 'Şimdi Çalıştır',
	'SHARE_FACEBOOK'				=> 'Facebook&#39;ta Paylaş',
	'SHARE_TWITTER'				=> 'Twitter&#39;da Paylaş',
	'SHARE_GOOGLEPLUS'			=> 'Google+&#39;da Paylaş',
	'SHARE_LINKEDIN'				=> 'Linkedin&#39;de Paylaş',
	'SOCIAL_BUTTONS'				=> 'Sosyal Medya&#39;da Paylaş',
));
