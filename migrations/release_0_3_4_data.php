<?php
/**
*
* @package phpBB Extension - tas2580 Social Media Buttons
* @copyright (c) 2014 tas2580 (https://tas2580.net)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace tas2580\socialbuttons\migrations;

class release_0_3_4_data extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['socialbuttons_version']) && version_compare($this->config['socialbuttons_version'], '0.3.4', '>=');
	}

	public function update_data()
	{
		return array(
			// Add ACP module
			array('config.add', array('socialbuttons_version', '0.3.4')),
		);
	}
}