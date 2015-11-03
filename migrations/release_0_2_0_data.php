<?php
/**
*
* @package phpBB Extension - tas2580 Social Media Buttons
* @copyright (c) 2014 tas2580 (https://tas2580.net)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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

			// Keep track of version in the database
			array('config.add', array('socialbuttons_version', '0.2.0')),
		);
	}
}
