<?php
/**
*
* @package phpBB Extension - tas2580 Social Media Buttons
* @copyright (c) 2014 tas2580 (https://tas2580.net)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
namespace tas2580\socialbuttons\migrations;

class release_0_5_0_data extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['socialbuttons_version']) && version_compare($this->config['socialbuttons_version'], '0.5.0', '>=');
	}
	public function update_data()
	{
		return array(
			array('config.add', array('socialbuttons_enable_og_desc_forums', '')),
			array('config.add', array('socialbuttons_use_seo_urls', '0')),
			array('config.add', array('socialbuttons_enable_forums', '')),
			array('config.add', array('socialbuttons_enable', '')),
			array('config.add', array('socialbuttons_version', '0.5.0')),
		);
	}
}
