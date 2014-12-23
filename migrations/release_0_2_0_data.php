<?php
/**
*
* Precise Similar Topics
*
* @copyright (c) 2013 Matt Friedman
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace tas2580\socialbuttons\migrations;

class release_0_2_0_data extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['socialbuttons_version']) && version_compare($this->config['socialbuttons_version'], '0.2.0', '>=');
	}

	public function update_data()
	{
		return array(
			// Add configs
			array('config.add', array('socialbuttons_multiplicator', '3600')),
			array('config.add', array('socialbuttons_cachetime', '24')),
			array('config.add', array('socialbuttons_position', '2')),
			array('config.add', array('socialbuttons_facebook', '1')),
			array('config.add', array('socialbuttons_twitter', '1')),
			array('config.add', array('socialbuttons_google', '1')),
			array('config.add', array('socialbuttons_linkedin', '1')),

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
			array('config.add', array('socialbuttons_version', '0.2.0')),
		);
	}
}
