<?php
/**
*
* Social Media Buttons extension for the phpBB Forum Software package.
* French translation by Galixte (http://www.galixte.com)
*
* @copyright (c) 2015 tas2580 <https://tas2580.net>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
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
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_CACHE_PURGE_SUCCESS'	=> 'Tous les fichiers du cache ont été supprimés.',
	'ACP_CACHETIME'				=> 'Durée du cache',
	'ACP_CACHETIME_EXPLAIN'		=> 'Combien de temps les données partagées doivent être mises en cache ?',
	'ACP_DISPLAY_ON_INDEX'			=> 'Afficher sur l’index',
	'ACP_DISPLAY_ON_INDEX_EXPLAIN'	=> 'Affiche sur la page de l’index du forum les boutons des réseaux sociaux au-dessus du « Qui est en ligne ? ».',
	'ACP_ENABLE_FORUMS'			=> 'Activer les boutons',
	'ACP_ENABLE_FORUMS_EXPLAIN'	=> 'Sélectionner les forums où les boutons doivent être affichés.',
	'ACP_ENABLE_OG_DESC'			=> 'Description',
	'ACP_ENABLE_OG_TITLE'			=> 'Titre',
	'ACP_ENABLE_OG_TAGS'			=> 'Activer les Meta-Tags OG',
	'ACP_MULTIPLICATOR_HOURS'		=> 'Heures',
	'ACP_MULTIPLICATOR_MINUTES'	=> 'Minutes',
	'ACP_MULTIPLICATOR_SECONDS'	=> 'Secondes',
	'ACP_OG_DESC_EXPLAIN'			=> 'Si activé, le premier message sera utilisé comme og:description.<br /><span style="color:#f00;">Attention ! Si activé, le premier message peut être vu par tous, même si le forum est privé.</span> Cela empêche les plateformes d’utiliser le nom d’utilisateur comme description.',
	'ACP_OG_EXPLAIN'				=> 'Les Meta-Tags <a href="http://ogp.me/">Open Graph</a> activés fournissent aux plateformes des réseaux sociaux des informations à propos de la page à partager.',
	'ACP_OG_IMAGE'				=> 'Image',
	'ACP_OG_IMAGE_EXPLAIN'			=> 'Saisir l’adresse URL d’une image que vous souhaitez utiliser pour un partage.',
	'ACP_OG_TAGS'				=> 'Meta-Tags OG',
	'ACP_OG_TITLE_EXPLAIN'			=> 'Si activé, le titre du sujet sera utilisé comme og:title.',
	'ACP_POSITION'					=> 'Position',
	'ACP_POSITION_EXPLAIN'			=> 'Choisir une position où les boutons doivent être affichés sur les sujets.',
	'ACP_POSITION_ALL'				=> 'En haut et en bas',
	'ACP_POSITION_BOTTOM'			=> 'En bas',
	'ACP_POSITION_TOP'				=> 'En haut',
	'ACP_PURGE_CACHE'			=> 'Purger le cache',
	'ACP_PURGE_CACHE_EXPLAIN'		=> 'Supprimer tous les fichiers du cache.',
	'ACP_SAVED'					=> 'Les paramètres des boutons des réseaux sociaux ont été mis à jour.',
	'ACP_SET_PLATFORMS'			=> 'Activer les plateformes',
	'ACP_SETTINGS'				=> 'Paramètres',
	'ACP_SHOWSHARES'				=> 'Affichage des partages',
	'ACP_SHOWSHARES_EXPLAIN'		=> 'Afficher le nombre de partages derrière le bouton.',
	'ACP_STYLE'					=> 'Style',
	'ACP_STYLE_EXPLAIN'			=> 'Choisir un style pour les boutons',
	'ACP_SUBMIT'					=> 'Modifications mises à jour',
	'ACP_USE_SEO_URLS'			=> 'URL Rewriting',
	'ACP_USE_SEO_URLS_EXPLAIN'		=> 'Activer cette option si une extension concernant l’URL Rewriting est activée.',
	'ACP_FACEBOOK'				=> 'Facebook',
	'ACP_TWITTER'					=> 'Twitter',
	'ACP_GOOGLE'					=> 'Google Plus',
	'ACP_LINKEDIN'					=> 'Linkedin',
	'CACHE_PATH_NOT_WRITEABLE'	=> 'Impossible d’écrire dans le chemin du cache : "%s" !',
	'RUN_NOW'					=> 'Exécuter maintenant',
	'SHARE_FACEBOOK'				=> 'Partager sur Facebook',
	'SHARE_TWITTER'				=> 'Partager sur Twitter',
	'SHARE_GOOGLEPLUS'			=> 'Partager sur Google+',
	'SHARE_LINKEDIN'				=> 'Partager sur Linkedin',
	'SOCIAL_BUTTONS'				=> 'Réseau social',
));
