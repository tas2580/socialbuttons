<?php
/**
*
* @package phpBB Extension - tas2580 Social Media Buttons
* @copyright (c) 2014 tas2580
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace tas2580\socialbuttons\migrations;

class release_0_3_2_data extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['socialbuttons_version']) && version_compare($this->config['socialbuttons_version'], '0.3.2', '>=');
	}

	public function update_data()
	{
		return array(
			// Add ACP module
			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_SOCIALBUTTONS_TITLE'
			)),
			array('module.add', array(
				'acp',
				'ACP_SOCIALBUTTONS_TITLE',
				array(
					'module_basename'	=> '\tas2580\socialbuttons\acp\socialbuttons_module',
					'modes'				=> array('settings'),
				),
			)),
			// Keep track of version in the database
			array('config.add', array('socialbuttons_version', '0.3.1')),
		);
	}
}
