<?php
/**
*
* @package phpBB Extension - tas2580 Social Media Buttons
* @copyright (c) 2014 tas2580 (https://tas2580.net)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace tas2580\socialbuttons\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	/**
	* Constructor
	*
	* @param \phpbb\config\config $config
	* @param \phpbb\template\template $template
	* @access public
	*/
	public function __construct(\phpbb\config\config $config, \phpbb\template\template $template)
	{
		$this->config = $config;
		$this->template = $template;
	}

	/**
	* Assign functions defined in this class to event listeners in the core
	*
	* @return array
	* @static
	* @access public
	*/
	static public function getSubscribedEvents()
	{
		return array(
			'core.viewtopic_modify_page_title'		=> 'display_socialbuttons',
		);
	}

	/**
	* Load Social Media Buttons
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function display_socialbuttons($event)
	{
		global $config, $user;
		$url = urlencode(generate_board_url() . '/' . append_sid('viewtopic.php?f=' . $event['topic_data']['forum_id'] . '&t=' . $event['topic_data']['topic_id']));
		$shares = $this->get_share_count($url);
		$position = isset($config['socialbuttons_position']) ? $config['socialbuttons_position'] : 2;
		$this->template->assign_vars(array(
			'TOPIC_TITLE'			=> $event['topic_data']['topic_title'],
			'SOCIAL_MEDIA_CLASS'	=> 'socialmediabuttons' . (isset($config['socialbuttons_style']) ? $config['socialbuttons_style'] : 1),
			'SHARES_FACEBOOK'		=> isset($shares['facebook']) ? (int) $shares['facebook'] : 0,
			'SHARES_TWITTER'		=> isset($shares['twitter']) ? (int) $shares['twitter'] : 0,
			'SHARES_GOOGLE'			=> isset($shares['google']) ? (int) $shares['google'] : 0,
			'SHARES_LINKEDIN'		=> isset($shares['linkedin']) ? (int) $shares['linkedin'] : 0,
			'S_FACEBOOK'			=> isset($config['socialbuttons_facebook']) ? $config['socialbuttons_facebook'] : '',
			'S_TWITTER'				=> isset($config['socialbuttons_twitter']) ? $config['socialbuttons_twitter'] : '',
			'S_GOOGLE'				=> isset($config['socialbuttons_google']) ? $config['socialbuttons_google'] : '',
			'S_LINKEDIN'			=> isset($config['socialbuttons_linkedin']) ? $config['socialbuttons_linkedin'] : '',
			'S_SHOW_AT_TOP'			=> ($position == 0 || $position == 1) ? true : false,
			'S_SHOW_AT_BOTTOM'		=> ($position == 0 || $position == 2) ? true : false,
		));
		$user->add_lang_ext('tas2580/socialbuttons', 'common');
	}


	function get_share_count($url)
	{
		global $phpbb_root_path, $config;
		$shares = array();
		$cache_time = isset($config['socialbuttons_cachetime']) ? $config['socialbuttons_cachetime'] : 0;
		$multiplicator = isset($config['socialbuttons_multiplicator']) ? $config['socialbuttons_multiplicator'] : 1;

		$cachetime = ((int) $cache_time * (int) $multiplicator);
		$cache_file = $phpbb_root_path . 'cache/' . md5($url) . '.json';
		$filetime = file_exists($cache_file) ? filemtime($cache_file) : 0;

		if(($filetime == 0) || ($filetime < (time() - $cachetime)))
		{
			if(function_exists('curl_multi_init'))
			{
				if(isset($config['socialbuttons_facebook']) && ($config['socialbuttons_facebook'] == 1))
				{
					$querys['facebook']	= 'https://www.facebook.com/plugins/like.php?&layout=box_count&href=' . $url;
				}
				if(isset($config['socialbuttons_twitter']) && ($config['socialbuttons_twitter'] == 1))
				{
					$querys['twitter'] = 'https://cdn.api.twitter.com/1/urls/count.json?url=' . $url;
				}
				if(isset($config['socialbuttons_google']) && ($config['socialbuttons_twitter'] == 1))
				{
					$querys['google'] = 'https://plusone.google.com/_/+1/fastbutton?url=' . $url;
				}
				if(isset($config['socialbuttons_linkedin']) && ($config['socialbuttons_twitter'] == 1))
				{
					$querys['linkedin'] = 'https://www.linkedin.com/countserv/count/share?format=json&url=' . $url;
				}

				$mh = curl_multi_init();
				foreach($querys as $platform => $url)
				{
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_URL, $url);
					curl_setopt($ch, CURLOPT_NOBODY, false);
					curl_setopt($ch, CURLOPT_HEADER, false); 
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
					curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; rv:31.0) Gecko/20100101 Firefox/31.0'); 
					curl_multi_add_handle($mh, $ch);
					$handle[$platform] = $ch;
				}
				do 
				{
					curl_multi_exec($mh, $running);
				} 
				while($running > 0);

				foreach($handle as $platform => $ch)
				{
					$handle = curl_multi_info_read($mh);
					$content[$platform] = curl_multi_getcontent($ch);
					curl_multi_remove_handle($mh, $handle['handle'] );
				}
				curl_multi_close($mh);

				preg_match('#<div id="aggregateCount" class="Oy">([0-9]+)</div>#s', $content['google'], $matches);
				$shares['google'] = isset($matches[1]) ? $matches[1] : 0;

				preg_match('#<span class="pluginCountTextDisconnected">([0-9]+)</span>#s', $content['facebook'], $matches);
				$shares['facebook'] = isset($matches[1]) ? $matches[1] : 0 ;

				$pageinfo = json_decode($content['twitter'], true);
				$shares['twitter'] = isset($pageinfo['count']) ? $pageinfo['count'] : 0;

				$pageinfo = json_decode($content['linkedin'], true);
				$shares['linkedin'] = isset($pageinfo['count']) ? $pageinfo['count'] : 0;
			}
			else
			{
				if(isset($config['socialbuttons_facebook']) && ($config['socialbuttons_facebook'] == 1))
				{
					if($pageinfo = json_decode(@file_get_contents("https://graph.facebook.com/" . $url), true))
					{
						$shares['facebook'] = isset($pageinfo['shares']) ? $pageinfo['shares'] : 0;
					}
				}
				if(isset($config['socialbuttons_twitter']) && ($config['socialbuttons_twitter'] == 1))
				{
					if($pageinfo = json_decode(@file_get_contents("https://cdn.api.twitter.com/1/urls/count.json?url=" . $url), true))
					{
						$shares['twitter'] = isset($pageinfo['count']) ? $pageinfo['count'] : 0;
					}
				}
				if(isset($config['socialbuttons_google']) && ($config['socialbuttons_google'] == 1))
				{
					if($data = @file_get_contents("https://plusone.google.com/_/+1/fastbutton?url=" . $url))
					{
						preg_match('#<div id="aggregateCount" class="Oy">([0-9]+)</div>#s', $data, $matches);
						$shares['google'] = isset($matches[1]) ? $matches[1] : 0;
					}
				}
				if(isset($config['socialbuttons_linkedin']) && ($config['socialbuttons_linkedin'] == 1))
				{
					if($pageinfo = json_decode(@file_get_contents('http://www.linkedin.com/countserv/count/share?url=' . $url . '&format=json'), true))
					{
						$shares['linkedin'] = isset($pageinfo['count']) ? $pageinfo['count'] : 0;
					}
				}
			}
			
			$json = json_encode($shares);
			$handle = fopen($cache_file, 'w');
			fwrite($handle, $json);
			fclose($handle);
		}
		else
		{
			$json = file_get_contents($cache_file);
			$shares = json_decode($json, true);
		}
		return $shares;
	}
}
