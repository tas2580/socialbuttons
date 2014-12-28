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
    'SOCIAL_BUTTONS'			=> 'Medios sociales',
	'SHARE_FACEBOOK'			=> 'Comparte en Facebook',
	'SHARE_TWITTER'				=> 'Comparte en Twitter',
	'SHARE_GOOGLEPLUS'			=> 'Comparte en Google+',
	'SHARE_LINKEDIN'			=> 'Comparte en Linkedin',
	'ACP_SETTINGS'				=> 'Ajustes',
	'ACP_POSITION'				=> 'Posición',
	'ACP_POSITION_EXPLAIN'		=> 'Escoga una posición en donde los botones se indican.',
	'ACP_SUBMIT'				=> 'Actualizar los cambios',
	'ACP_POSITION_ALL'			=> 'En la parte de arriba y en la parte de abajo',
	'ACP_POSITION_TOP'			=> 'En la parte de arriba',
	'ACP_POSITION_BOTTOM'		=> 'En la parte de abajo',
	'ACP_CACHETIME'				=> 'Tiempo caché',
	'ACP_CACHETIME_EXPLAIN'		=> '¿Por cuánto tiempo se deben almacenar en caché los datos?',
	'ACP_MULTIPLICATOR_SECONDS'	=> 'Segundos',
	'ACP_MULTIPLICATOR_MINUTES'	=> 'Minutos',
	'ACP_MULTIPLICATOR_HOURS'	=> 'Horas',
	'ACP_SET_PLATFORMS'			=> 'Habilitación de plataformas',
	'ACP_FACEBOOK'				=> 'Facebook',
	'ACP_TWITTER'				=> 'Twitter',
	'ACP_GOOGLE'				=> 'Google Plus',
	'ACP_LINKEDIN'				=> 'Linkedin',
	'ACP_SAVED'					=> 'Ajuste de los medios sociales actualizados.',
	'ACP_STYLE'					=> 'Estilo',
	'ACP_STYLE_EXPLAIN'			=> 'Escoga un estilo para los botones',
));
