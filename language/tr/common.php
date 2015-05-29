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
    'SOCIAL_BUTTONS'         => 'Sosyal Medya&#39;da Paylaş',
   'SHARE_FACEBOOK'         => 'Facebook&#39;ta Paylaş',
   'SHARE_TWITTER'            => 'Twitter&#39;da Paylaş',
   'SHARE_GOOGLEPLUS'         => 'Google+&#39;da Paylaş',
   'SHARE_LINKEDIN'         => 'Linkedin&#39;de Paylaş',
   'ACP_SETTINGS'            => 'Ayarlar',
   'ACP_POSITION'            => 'Pozisyon',
   'ACP_POSITION_EXPLAIN'      => 'Butonların yerini belirleyiniz.',
   'ACP_SUBMIT'            => 'Güncelleme değişiklikleri',
   'ACP_POSITION_ALL'         => 'Hem üstte hem altta',
   'ACP_POSITION_TOP'         => 'Üstte',
   'ACP_POSITION_BOTTOM'      => 'Altta',
   'ACP_CACHETIME'            => 'Önbellek aralığı',
   'ACP_CACHETIME_EXPLAIN'      => 'Önbellek temizliği hangi zaman aralığında olsun?',
   'ACP_MULTIPLICATOR_SECONDS'   => 'Saniye',
   'ACP_MULTIPLICATOR_MINUTES'   => 'Dakika',
   'ACP_MULTIPLICATOR_HOURS'   => 'Saat',
   'ACP_SET_PLATFORMS'         => 'Aktif Et',
   'ACP_FACEBOOK'            => 'Facebook',
   'ACP_TWITTER'            => 'Twitter',
   'ACP_GOOGLE'            => 'Google Plus',
   'ACP_LINKEDIN'            => 'Linkedin',
   'ACP_SAVED'               => 'Sosyal medya buton ayarları güncellendi.',
   'ACP_STYLE'               => 'Alternatif Buton',
   'ACP_STYLE_EXPLAIN'         => 'Alternatif butonlardan birini seçebilirsiniz',
   'CACHE_PATH_NOT_WRITEABLE'   => 'Önbellek yolu "%s" yazılabilir değil!',
   'ACP_CACHE_PURGE_SUCCESS'   => 'Önbellekteki tüm dosyalar silindi.',
   'ACP_SHOWSHARES'         => 'Paylaşım sayısını görüntüle',
   'ACP_SHOWSHARES_EXPLAIN'   => 'Buttonların sağında kaç kişi tarafından paylaşıldığı görüntülenir.',
   'ACP_PURGE_CACHE'         => 'Önbellek temizliği',
   'ACP_PURGE_CACHE_EXPLAIN'   => 'Önbellekteki tüm dosyaları sil',
   'RUN_NOW'               => 'Şimdi Çalıştır',
   'ACP_OG_TAGS'            => 'OG Meta-Etiketleri',
   'ACP_ENABLE_OG_TAGS'      => 'OG Meta-Etiketlerini Etkinleştir',
   'ACP_OG_EXPLAIN'         => 'Aktif ederseniz <em>Open Graph</em> Meta-Etiketleri Sosyal Medya platformlarında paylaşımlarınız hakkında bilgiler verir',
   'ACP_OG_IMAGE'            => 'Resim',
   'ACP_OG_IMAGE_EXPLAIN'      => 'Paylaşımlarda kullanmak istediğiniz resmin adresini giriniz.',
   'ACP_ENABLE_OG_TITLE'      => 'Başlık',
   'ACP_OG_TITLE_EXPLAIN'      => 'Eğer aktifse konu başlığı olarak kullanılır og:başlık',
   'ACP_ENABLE_OG_DESC'      => 'Tanım',
   'ACP_OG_DESC_EXPLAIN'      => 'Eğer aktifse konunun ilk yazısı kullanılır og:tanım.<br /><span style="color:#f00;">Dikkat! Bunu aktif ettiğinizde forum özel forum olsa bile tanım yazısı herkes tarafından görüntülenecektir.</span> Bu platformlarda açıklama metni girilmesini engeller.',
));