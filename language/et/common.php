<?php
/**
*
* @package phpBB Extension - tas2580 Social Media Buttons
* @copyright (c) 2014 tas2580 (https://tas2580.net) ; Estonian translation by http://www.phpbbeesti.com/ and jFlash (eraser.ee)
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
    'SOCIAL_BUTTONS'			=> 'Jaga seda sotsiaalvõrgustikus',
	'SHARE_FACEBOOK'			=> 'Jaga Facebookis',
	'SHARE_TWITTER'				=> 'Jaga Twitteris',
	'SHARE_GOOGLEPLUS'			=> 'Jaga Google+\'is',
	'SHARE_LINKEDIN'			=> 'Jaga Linkedin\'is',
	'ACP_SETTINGS'				=> 'Seaded',
	'ACP_POSITION'				=> 'Asukoht',
	'ACP_POSITION_EXPLAIN'		=> 'Vali asukoht, kus soovid näidata sotsiaalvõrgustikke nuppe.',
	'ACP_SUBMIT'				=> 'Uuenda muudatused',
	'ACP_POSITION_ALL'			=> 'Ülesse ja alla',
	'ACP_POSITION_TOP'			=> 'Üles',
	'ACP_POSITION_BOTTOM'		=> 'Alla',
	'ACP_CACHETIME'				=> 'Vahemälu aeg',
	'ACP_CACHETIME_EXPLAIN'		=> 'Kui kauaks peaks jääma andmed vahemällu?',
	'ACP_MULTIPLICATOR_SECONDS'	=> 'Sekundit',
	'ACP_MULTIPLICATOR_MINUTES'	=> 'Minutit',
	'ACP_MULTIPLICATOR_HOURS'	=> 'Tundi',
	'ACP_SET_PLATFORMS'			=> 'Luba järgnevad',
	'ACP_FACEBOOK'				=> 'Facebook',
	'ACP_TWITTER'				=> 'Twitter',
	'ACP_GOOGLE'				=> 'Google Plus',
	'ACP_LINKEDIN'				=> 'Linkedin',
	'ACP_SAVED'					=> 'Sotsiaalvõrgustike nupude seaded on uuendatud.',
	'ACP_STYLE'					=> 'Stiil',
	'ACP_STYLE_EXPLAIN'			=> 'Vali stiil nuppude jaoks',
	'CACHE_PATH_NOT_WRITEABLE'	=> 'Vahemälu teekond "%s" ei ole kirjutatav!',
	'ACP_CACHE_PURGE_SUCCESS'	=> 'Kustutatud kõik failid vahemälus.',
	'ACP_SHOWSHARES'			=> 'Kuva jagamisi',
	'ACP_SHOWSHARES_EXPLAIN'	=> 'Kas jagamiste arvu nuppude taga näidatakse või mitte?',
	'ACP_PURGE_CACHE'			=> 'Puhasta vahemälu',
	'ACP_PURGE_CACHE_EXPLAIN'	=> 'Kustuta kõik failid vahemälust',
	'RUN_NOW'					=> 'Käivita nüüd',
	'ACP_OG_TAGS'				=> 'OG Meta-sildid',
	'ACP_ENABLE_OG_TAGS'		=> 'Aktiveeri OG Meta-sildid',
	'ACP_OG_EXPLAIN'			=> 'Aktiveeritakse <a href="http://ogp.me/">Open Graph</a> metavõtmed, et sotsiaalmeedia platvormid oskaksid lehelt võtta jagamiseks infot',
	'ACP_OG_IMAGE'				=> 'Pilt',
	'ACP_OG_IMAGE_EXPLAIN'		=> 'Sisesta pildi URL mida tahad jagamise juures kasutada.',
	'ACP_ENABLE_OG_TITLE'		=> 'Pealkiri',
	'ACP_OG_TITLE_EXPLAIN'		=> 'Kui on aktiveeritud, siis postituse pealkirja kasutatakse võtmes og:title',
	'ACP_ENABLE_OG_DESC'		=> 'Kirjeldus',
	'ACP_OG_DESC_EXPLAIN'		=> 'Kui on aktiveeritud, siis esimest postitust kasutatakse võtmes og:description.<br /><span style="color:#f00;">Tähelepanu! Kui on aktiveeritud, siis esimest postitust näevad kõik, isegi siis kui postitus on privaatses foorumi alas.</span> See on selleks, et iseloomustuse asemel ei näeks teised sisselogimisteksti vaid teemat ennast.',
	'ACP_USE_SEO_URLS'			=> 'URL ülekirjutamine',
	'ACP_USE_SEO_URLS_EXPLAIN'	=> 'Aktiveeri see valik, kui URLi ülekirjutamise laiendus on kasutusel.',
	'ACP_ENABLE_FORUMS'			=> 'Aktiveeri nuppud',
	'ACP_ENABLE_FORUMS_EXPLAIN'	=> 'Vali foorumid, kus sa soovid näidata sotsiaalvõrgustikke nuppe.',
));
