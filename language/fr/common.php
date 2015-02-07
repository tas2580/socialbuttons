<?php
/**
*
* @package phpBB Extension - tas2580 Social Media Buttons
* @copyright (c) 2014 tas2580 (https://tas2580.net)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* French translation by Galixte (http://www.galixte.com)
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
    'SOCIAL_BUTTONS'			=> 'Média social',
	'SHARE_FACEBOOK'			=> 'Partager sur Facebook',
	'SHARE_TWITTER'				=> 'Partager sur Twitter',
	'SHARE_GOOGLEPLUS'			=> 'Partager sur Google+',
	'SHARE_LINKEDIN'			=> 'Partager sur Linkedin',
	'ACP_SETTINGS'				=> 'Paramètres',
	'ACP_POSITION'				=> 'Position',
	'ACP_POSITION_EXPLAIN'		=> 'Choisir une position où les boutons doivent être affichés.',
	'ACP_SUBMIT'				=> 'Modifications mises à jour',
	'ACP_POSITION_ALL'			=> 'En haut et en bas',
	'ACP_POSITION_TOP'			=> 'En haut',
	'ACP_POSITION_BOTTOM'		=> 'En bas',
	'ACP_CACHETIME'				=> 'Durée du cache',
	'ACP_CACHETIME_EXPLAIN'		=> 'Combien de temps les données partagées doivent être mises en cache ?',
	'ACP_MULTIPLICATOR_SECONDS'	=> 'Secondes',
	'ACP_MULTIPLICATOR_MINUTES'	=> 'Minutes',
	'ACP_MULTIPLICATOR_HOURS'	=> 'Heures',
	'ACP_SET_PLATFORMS'			=> 'Activer les plateformes',
	'ACP_FACEBOOK'				=> 'Facebook',
	'ACP_TWITTER'				=> 'Twitter',
	'ACP_GOOGLE'				=> 'Google Plus',
	'ACP_LINKEDIN'				=> 'Linkedin',
	'ACP_SAVED'					=> 'Les paramètres des boutons des médias sociaux ont été mis à jour.',
	'ACP_STYLE'					=> 'Style',
	'ACP_STYLE_EXPLAIN'			=> 'Choisir un style pour les boutons',
	'CACHE_PATH_NOT_WRITEABLE'	=> 'Impossible d’écrire dans le chemin du cache : "%s" !',
	'ACP_CACHE_PURGE_SUCCESS'	=> 'Tous les fichiers du cache ont été supprimés.',
	'ACP_SHOWSHARES'			=> 'Affichage des partages',
	'ACP_SHOWSHARES_EXPLAIN'	=> 'Afficher le nombre de partages derrière le bouton.',
	'ACP_PURGE_CACHE'			=> 'Purger le cache',
	'ACP_PURGE_CACHE_EXPLAIN'	=> 'Supprimer tous les fichiers du cache.',
	'RUN_NOW'					=> 'Exécuter maintenant',
	'ACP_OG_TAGS'				=> 'Meta-Tags OG',
	'ACP_ENABLE_OG_TAGS'		=> 'Activer les Meta-Tags OG',
	'ACP_OG_EXPLAIN'			=> 'Les Meta-Tags <a href="http://ogp.me/">Open Graph</a> activés fournissent aux plateformes des médias sociaux des informations à propos de la page à partager.',
	'ACP_OG_IMAGE'				=> 'Image',
	'ACP_OG_IMAGE_EXPLAIN'		=> 'Saisir l’adresse URL d’une image que vous souhaitez utiliser pour un partage.',
	'ACP_ENABLE_OG_TITLE'		=> 'Titre',
	'ACP_OG_TITLE_EXPLAIN'		=> 'Si activé, le titre du sujet sera utilisé comme og:title.',
	'ACP_ENABLE_OG_DESC'		=> 'Description',
	'ACP_OG_DESC_EXPLAIN'		=> 'Si activé, le premier message sera utilisé comme og:description.<br /><span style="color:#f00;">Attention ! Si activé, le premier message peut être vu par tous, même si le forum est privé.</span> Cela empêche les plateformes d’utiliser le nom d’utilisateur comme description.',
	'ACP_USE_SEO_URLS'			=> 'URL Rewriting',
	'ACP_USE_SEO_URLS_EXPLAIN'	=> 'Activer cette option si une extension concernant l’URL Rewriting est activée.',
	'ACP_ENABLE_FORUMS'			=> 'Activer les boutons',
	'ACP_ENABLE_FORUMS_EXPLAIN'	=> 'Sélectionner les forums où les boutons doivent être affichés.',
));
