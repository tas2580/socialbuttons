<?php
/**
*
* @package phpBB Extension - tas2580 Social Media Buttons
* @copyright (c) 2014 tas2580 (https://tas2580.net)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace tas2580\socialbuttons\acp;

class socialbuttons_module
{
    public $u_action;

    public function main($id, $mode)
    {
        global $config, $user, $template, $request, $phpbb_root_path;

		$user->add_lang_ext('tas2580/socialbuttons', 'common');		
        $this->tpl_name = 'acp_socialbuttons_body';
        $this->page_title = $user->lang('ACP_SOCIALBUTTONS_TITLE');

		add_form_key('acp_socialbuttons');

		// Purge the cache
		if($request->is_set_post('action_purge_cache'))
		{
			if (!check_form_key('acp_socialbuttons'))
			{
				trigger_error($user->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
			}
			$cache_path = $phpbb_root_path . 'ext/tas2580/socialbuttons/cache/';
			$handle = opendir($cache_path);
			while (false !== ($file = readdir($handle))) 
			{
				if(is_file($cache_path . $file))
				{
					unlink($cache_path . $file);
				}
			}
			trigger_error($user->lang('ACP_CACHE_PURGE_SUCCESS') . adm_back_link($this->u_action));	
		}
		
		// Form is submitted
		if($request->is_set_post('submit'))
		{
			if (!check_form_key('acp_socialbuttons'))
			{
				trigger_error($user->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
			}
			$forums = implode(',', $request->variable('enable_f', array(0)));
			$desc_forums = implode(',', $request->variable('enable_og_desc_f', array(0)));
			// Set the new settings to config
			$config->set('socialbuttons_position', $request->variable('position', 0));
			$config->set('socialbuttons_enable_forums', $forums);
			$config->set('socialbuttons_enable', $request->variable('enable', 0));
			$config->set('socialbuttons_cachetime', $request->variable('cachetime', 0));
			$config->set('socialbuttons_multiplicator', $request->variable('multiplicator', 1));
			$config->set('socialbuttons_facebook', $request->variable('facebook', 0));
			$config->set('socialbuttons_twitter', $request->variable('twitter', 0));
			$config->set('socialbuttons_google', $request->variable('google', 0));
			$config->set('socialbuttons_linkedin', $request->variable('linkedin', 0));
			$config->set('socialbuttons_style', $request->variable('style', 1));
			$config->set('socialbuttons_showshares', $request->variable('showshares', 0));
			$config->set('socialbuttons_use_seo_urls', $request->variable('use_seo_urls', ''));
			$config->set('socialbuttons_enable_og', $request->variable('enable_og', 0));
			$config->set('socialbuttons_enable_og_title', $request->variable('enable_og_title', 0));
			$config->set('socialbuttons_enable_og_desc', $request->variable('enable_og_desc', 0));
			$config->set('socialbuttons_og_image', $request->variable('og_image', ''));
			$config->set('socialbuttons_enable_og_desc_forums', $desc_forums);
			trigger_error($user->lang('ACP_SAVED') . adm_back_link($this->u_action));
		}

        // Send the curent settings to template
		$position = isset($config['socialbuttons_position']) ? $config['socialbuttons_position'] : 0;
		$multiplicator = isset($config['socialbuttons_multiplicator']) ? $config['socialbuttons_multiplicator'] : 1;
		$style = isset($config['socialbuttons_style']) ? $config['socialbuttons_style'] : 1;
		$cache_path = $phpbb_root_path . 'ext/tas2580/socialbuttons/cache/';
		$desc_forums = isset($config['socialbuttons_enable_og_desc_forums']) ? explode(',', $config['socialbuttons_enable_og_desc_forums']) : array();
		$forums = isset($config['socialbuttons_enable_forums']) ? explode(',', $config['socialbuttons_enable_forums']) : array();

		$template->assign_vars(array(
			'S_CACHE_WRITEABLE'			=> is_writable($cache_path),
			'CACHEPATH_NOT_WRITEABLE'	=> sprintf($user->lang['CACHE_PATH_NOT_WRITEABLE'], $cache_path),
			'U_ACTION'					=> $this->u_action,
            'POSITION_OPTIONS'			=> $this->position_select($position),
			'MULTIPLICATOR_OPTIONS'		=> $this->multiplicator_select($multiplicator),
			'BUTTON_STYLES'				=> $this->button_style($style),
			'S_ENABLE'					=> isset($config['socialbuttons_enable']) ? $config['socialbuttons_enable'] : 0,
			'S_USE_SEO_URLS'			=> isset($config['socialbuttons_use_seo_urls']) ? $config['socialbuttons_use_seo_urls'] : 0,
			'S_SHOWSHARES'				=> isset($config['socialbuttons_showshares']) ? $config['socialbuttons_showshares'] : 0,
			'CACHETIME'					=> isset($config['socialbuttons_cachetime']) ? $config['socialbuttons_cachetime'] : 0,
			'S_FACEBOOK'				=> isset($config['socialbuttons_facebook']) ? $config['socialbuttons_facebook'] : '',
			'S_TWITTER'					=> isset($config['socialbuttons_twitter']) ? $config['socialbuttons_twitter'] : '',
			'S_GOOGLE'					=> isset($config['socialbuttons_google']) ? $config['socialbuttons_google'] : '',
			'S_LINKEDIN'				=> isset($config['socialbuttons_linkedin']) ? $config['socialbuttons_linkedin'] : '',
			'S_ENABLE_OG'				=> isset($config['socialbuttons_enable_og']) ? $config['socialbuttons_enable_og'] : '',
			'S_ENABLE_OG_TITLE'			=> isset($config['socialbuttons_enable_og_title']) ? $config['socialbuttons_enable_og_title'] : '',
			'S_ENABLE_OG_DESC'			=> isset($config['socialbuttons_enable_og_desc']) ? $config['socialbuttons_enable_og_desc'] : '',
			'OG_IMAGE'					=> isset($config['socialbuttons_og_image']) ? $config['socialbuttons_og_image'] : '',
			'FORUM_DESC_SELECT'			=> make_forum_select($desc_forums, false, false, true),
			'FORUM_ENABLE_SELECT'		=> make_forum_select($forums, false, false, true),
		));
    }

	/**
	 * Generates a list of styles for the buttons
	 * 
	 * @global	object	$phpbb_extension_manager
	 * @param	int		$selected
	 * @return	string	
	 */
	private function button_style($selected)
	{
		global  $phpbb_extension_manager;
		$path = $phpbb_extension_manager->get_extension_path('tas2580/socialbuttons', true) . 'styles/all/template/';
		$return = '';
		for($i = 1; $i <= 10; $i++)
		{
			$checked = ($selected == $i) ? ' checked="checked"' : '';
			$return .= '<input type="radio"' . $checked . ' class="radio" id="style" name="style" value="' . $i . '" /> <img align="top" src="' . $path . 'sprite' . $i . '.png" alt="style' . $i . '" /><br /><br />';
		}
		return $return;
	}

	/**
	 * Generates a option list with positions for the buttons
	 * 
	 * @global	object	$user
	 * @param	int		$selected
	 * @return string
	 */
	private function position_select($selected)
	{
		global $user;
		$return = '<option' . (($selected == 0) ? ' selected="selected"' : '') . ' value="0">' . $user->lang('ACP_POSITION_ALL') . '</option>';
		$return .= '<option' . (($selected == 1) ? ' selected="selected"' : '') . ' value="1">' . $user->lang('ACP_POSITION_TOP') . '</option>';
		$return .= '<option' . (($selected == 2) ? ' selected="selected"' : '') . ' value="2">' . $user->lang('ACP_POSITION_BOTTOM') . '</option>';
		return $return;
	}

	/**
	 * Generates a option list for the cache tine multiplicator
	 * 
	 * @global	object	$user
	 * @param	int		$selected
	 * @return string
	 */
	private function multiplicator_select($selected)
	{
		global $user;
		$return = '<option' . (($selected == 1) ? ' selected="selected"' : '') . ' value="1">' . $user->lang('ACP_MULTIPLICATOR_SECONDS') . '</option>';
		$return .= '<option' . (($selected == 60) ? ' selected="selected"' : '') . ' value="60">' . $user->lang('ACP_MULTIPLICATOR_MINUTES') . '</option>';
		$return .= '<option' . (($selected == 3600) ? ' selected="selected"' : '') . ' value="3600">' . $user->lang('ACP_MULTIPLICATOR_HOURS') . '</option>';
		return $return;
	}

}

