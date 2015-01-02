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
	
			// Set the new settings to config
			$config->set('socialbuttons_position', $request->variable('position', 0));
			$config->set('socialbuttons_cachetime', $request->variable('cachetime', 0));
			$config->set('socialbuttons_multiplicator', $request->variable('multiplicator', 1));
			$config->set('socialbuttons_facebook', $request->variable('facebook', 0));
			$config->set('socialbuttons_twitter', $request->variable('twitter', 0));
			$config->set('socialbuttons_google', $request->variable('google', 0));
			$config->set('socialbuttons_linkedin', $request->variable('linkedin', 0));
			$config->set('socialbuttons_style', $request->variable('style', 1));
			$config->set('socialbuttons_showshares', $request->variable('showshares', 0));
	
			trigger_error($user->lang('ACP_SAVED') . adm_back_link($this->u_action));
		}


        // Send the curent settings to template
		$position = isset($config['socialbuttons_position']) ? $config['socialbuttons_position'] : 0;
		$multiplicator = isset($config['socialbuttons_multiplicator']) ? $config['socialbuttons_multiplicator'] : 1;
		$style = isset($config['socialbuttons_style']) ? $config['socialbuttons_style'] : 1;
		$cache_path = $phpbb_root_path . 'ext/tas2580/socialbuttons/cache/';
        $template->assign_vars(array(
			'S_CACHE_WRITEABLE'			=> is_writable($cache_path),
			'CACHEPATH_NOT_WRITEABLE'	=> sprintf($user->lang['CACHE_PATH_NOT_WRITEABLE'], $cache_path),
			'U_ACTION'					=> $this->u_action,
            'POSITION_OPTIONS'			=> $this->position_select($position),
			'MULTIPLICATOR_OPTIONS'		=> $this->multiplicator_select($multiplicator),
			'BUTTON_STYLES'				=> $this->button_style($style),
			'S_SHOWSHARES'				=> isset($config['socialbuttons_showshares']) ? $config['socialbuttons_showshares'] : 0,
			'CACHETIME'					=> isset($config['socialbuttons_cachetime']) ? $config['socialbuttons_cachetime'] : 0,
			'S_FACEBOOK'				=> isset($config['socialbuttons_facebook']) ? $config['socialbuttons_facebook'] : '',
			'S_TWITTER'					=> isset($config['socialbuttons_twitter']) ? $config['socialbuttons_twitter'] : '',
			'S_GOOGLE'					=> isset($config['socialbuttons_google']) ? $config['socialbuttons_google'] : '',
			'S_LINKEDIN'				=> isset($config['socialbuttons_linkedin']) ? $config['socialbuttons_linkedin'] : '',
        ));
    }

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


	private function position_select($selected)
	{
		global $user;
		$return = '<option' . (($selected == 0) ? ' selected="selected"' : '') . ' value="0">' . $user->lang('ACP_POSITION_ALL') . '</option>';
		$return .= '<option' . (($selected == 1) ? ' selected="selected"' : '') . ' value="1">' . $user->lang('ACP_POSITION_TOP') . '</option>';
		$return .= '<option' . (($selected == 2) ? ' selected="selected"' : '') . ' value="2">' . $user->lang('ACP_POSITION_BOTTOM') . '</option>';
		return $return;
	}

	private function multiplicator_select($selected)
	{
		global $user;
		$return = '<option' . (($selected == 1) ? ' selected="selected"' : '') . ' value="1">' . $user->lang('ACP_MULTIPLICATOR_SECONDS') . '</option>';
		$return .= '<option' . (($selected == 60) ? ' selected="selected"' : '') . ' value="60">' . $user->lang('ACP_MULTIPLICATOR_MINUTES') . '</option>';
		$return .= '<option' . (($selected == 3600) ? ' selected="selected"' : '') . ' value="3600">' . $user->lang('ACP_MULTIPLICATOR_HOURS') . '</option>';
		return $return;
	}

}

