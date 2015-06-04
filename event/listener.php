<?php
/**
*
* @package phpBB Extension - tas2580 Social Media Buttons
* @copyright (c) 2015 tas2580 (https://tas2580.net)
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

	/** @var \phpbb\user\user */
	protected $user;
	
	/* @var \phpbb\request\request */
	protected $request;
	
	/** @var string phpbb_root_path */
	protected $phpbb_root_path;
	
	/**
	* Constructor
	*
	* @param \phpbb\config\config			$config				Config Object
	* @param \phpbb\template\template		$template				Template object
	* @param \phpbb\user					$user				User object
	* @param \phpbb\request\request			$request				Request object
	* @param string						$phpbb_root_path		phpbb_root_path
	* @access public
	*/
	public function __construct(\phpbb\config\config $config, \phpbb\template\template $template, \phpbb\user $user,  \phpbb\request\request $request, $phpbb_root_path)
	{
		$this->config = $config;
		$this->template = $template;
		$this->user = $user;
		$this->request = $request;
		$this->phpbb_root_path = $phpbb_root_path;
		$this->description = '';
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
			'core.viewtopic_post_row_after'			=> 'display_og_description',
			'core.viewtopic_modify_page_title'		=> 'display_on_viewtopic',
			'core.index_modify_page_title'			=> 'display_on_index'
		);
	}
	
	/**
	* Display the first post as Open Graph description
	*
	* @param	object	$event	The event object
	* @return	null
	* @access	public
	*/
	public function display_og_description($event)
	{
		if(empty($this->description))
		{
			$desctiption = strip_tags($event['post_row']['MESSAGE']);
			//Facebook only displays the first 300 characters of a description, so we can cut the post text after 300 characters
			$this->description = (strlen($desctiption) > 300) ? preg_replace("/[^ ]*$/", '', substr($desctiption, 0, 300)) .  '...' : $desctiption;
			$this->template->assign_vars(array(
				'OG_DESCRIPTION'	=> $this->description,
			));
		}
	}
	
	/**
	* Display Social Media Buttons at the index page
	*
	* @param	object	$event	The event object
	* @return	null
	* @access	public
	*/
	public function display_on_index($event)
	{
		$url = generate_board_url();
		$enable_buttons = isset($this->config['socialbuttons_display_on_index']) ? $this->config['socialbuttons_display_on_index'] : 0;
		// Display the shares count
		if($enable_buttons && isset($this->config['socialbuttons_showshares']) && $this->config['socialbuttons_showshares'])
		{
			$shares = $this->get_share_count($url);
			$this->template->assign_vars(array(
				'S_SHOWSHARES'			=> true,
				'SHARES_FACEBOOK'		=> isset($shares['facebook']) ? (int) $shares['facebook'] : 0,
				'SHARES_TWITTER'			=> isset($shares['twitter']) ? (int) $shares['twitter'] : 0,
				'SHARES_GOOGLE'			=> isset($shares['google']) ? (int) $shares['google'] : 0,
				'SHARES_LINKEDIN'			=> isset($shares['linkedin']) ? (int) $shares['linkedin'] : 0,
			));	
		}

		// Display the buttons and the OG meta tags
		$this->template->assign_vars(array(
			'SOCIAL_MEDIA_CLASS'		=> 'socialmediabuttons' . (isset($this->config['socialbuttons_style']) ? $this->config['socialbuttons_style'] : 1),
			'S_ENABLE_BUTTONS'		=> $enable_buttons,
			'U_SHARELINK'				=> urlencode($url),
			'S_FACEBOOK'				=> isset($this->config['socialbuttons_facebook']) ? $this->config['socialbuttons_facebook'] : '',
			'S_TWITTER'				=> isset($this->config['socialbuttons_twitter']) ? $this->config['socialbuttons_twitter'] : '',
			'S_GOOGLE'				=> isset($this->config['socialbuttons_google']) ? $this->config['socialbuttons_google'] : '',
			'S_LINKEDIN'				=> isset($this->config['socialbuttons_linkedin']) ? $this->config['socialbuttons_linkedin'] : '',
			'ENABLE_OG'				=> isset($this->config['socialbuttons_enable_og']) ? $this->config['socialbuttons_enable_og'] : '',
			'ENABLE_OG_TITLE'			=> isset($this->config['socialbuttons_enable_og_title']) ? $this->config['socialbuttons_enable_og_title'] : '',
			'OG_IMAGE'				=> isset($this->config['socialbuttons_og_image']) ? $this->config['socialbuttons_og_image'] : '',
			'OG_URL'					=> $url,
			'OG_TITLE'				=> $event['page_title'],
		));
		$this->user->add_lang_ext('tas2580/socialbuttons', 'common');					
	}
	
	/**
	* Display Social Media Buttons at topics page
	*
	* @param	object	$event	The event object
	* @return	null
	* @access	public
	*/
	public function display_on_viewtopic($event)
	{
		$enabled_forums = isset($this->config['socialbuttons_enable_forums']) ? explode(',', $this->config['socialbuttons_enable_forums']) : array();
		$enable_buttons = ((isset($this->config['socialbuttons_enable']) && $this->config['socialbuttons_enable']) || in_array($event['topic_data']['forum_id'], $enabled_forums));
		
		// Generate the full URL of the topic without session ID
		$use_seo_urls = isset($this->config['socialbuttons_use_seo_urls']) ? $this->config['socialbuttons_use_seo_urls'] : 0;
		if($use_seo_urls)
		{
			// we can not use $this->user->page['page'] because it fails on use of SEO extensions
			$page = $this->request->server('REQUEST_URI');
			if(!$page)
			{
				// IIS
				$page = $this->request->server('HTTP_X_REWRITE_URL');
			}
			$host = $this->request->server('HTTP_HOST');
			$https = $this->request->server('HTTPS');
			$url = ($https ? 'https://' : 'http://') . $host . '/' . $page;
		}
		else
		{
			$url = generate_board_url() . '/viewtopic.php?f=' . $event['topic_data']['forum_id'] . '&t=' . $event['topic_data']['topic_id'];
		}
		
		// Display the shares count
		if($enable_buttons && isset($this->config['socialbuttons_showshares']) && $this->config['socialbuttons_showshares'])
		{
			$shares = $this->get_share_count($url);
			$this->template->assign_vars(array(
				'S_SHOWSHARES'			=> true,
				'SHARES_FACEBOOK'		=> isset($shares['facebook']) ? (int) $shares['facebook'] : 0,
				'SHARES_TWITTER'			=> isset($shares['twitter']) ? (int) $shares['twitter'] : 0,
				'SHARES_GOOGLE'			=> isset($shares['google']) ? (int) $shares['google'] : 0,
				'SHARES_LINKEDIN'			=> isset($shares['linkedin']) ? (int) $shares['linkedin'] : 0,
			));	
		}

		// Display the buttons and the OG meta tags
		$forums = isset($this->config['socialbuttons_enable_og_desc_forums']) ? explode(',', $this->config['socialbuttons_enable_og_desc_forums']) : array();
		$position = isset($this->config['socialbuttons_position']) ? $this->config['socialbuttons_position'] : 2;
		$this->template->assign_vars(array(
			'SOCIAL_MEDIA_CLASS'		=> 'socialmediabuttons' . (isset($this->config['socialbuttons_style']) ? $this->config['socialbuttons_style'] : 1),
			'S_ENABLE_BUTTONS'		=> $enable_buttons,
			'S_FACEBOOK'				=> isset($this->config['socialbuttons_facebook']) ? $this->config['socialbuttons_facebook'] : '',
			'S_TWITTER'				=> isset($this->config['socialbuttons_twitter']) ? $this->config['socialbuttons_twitter'] : '',
			'S_GOOGLE'				=> isset($this->config['socialbuttons_google']) ? $this->config['socialbuttons_google'] : '',
			'S_LINKEDIN'				=> isset($this->config['socialbuttons_linkedin']) ? $this->config['socialbuttons_linkedin'] : '',
			'S_SHOW_AT_TOP'			=> ($position == 0 || $position == 1) ? true : false,
			'S_SHOW_AT_BOTTOM'		=> ($position == 0 || $position == 2) ? true : false,
			'U_TOPICLINK'				=> urlencode($url),
			'OG_URL'					=> $url,			
			'ENABLE_OG'				=> isset($this->config['socialbuttons_enable_og']) ? $this->config['socialbuttons_enable_og'] : '',
			'OG_IMAGE'				=> isset($this->config['socialbuttons_og_image']) ? $this->config['socialbuttons_og_image'] : '',
			'ENABLE_OG_TITLE'			=> isset($this->config['socialbuttons_enable_og_title']) ? $this->config['socialbuttons_enable_og_title'] : '',
			'OG_TITLE'				=> $event['page_title'],
			'ENABLE_OG_DESC'			=> ((isset($this->config['socialbuttons_enable_og_desc']) && $this->config['socialbuttons_enable_og_desc']) || in_array($event['topic_data']['forum_id'], $forums)),
		));
		$this->user->add_lang_ext('tas2580/socialbuttons', 'common');
	}

	/**
	* Get the number of shares
	*
	* @param	string	$url	The URL to get the shares for
	* @return	array
	* @access private
	*/
	private function get_share_count($url)
	{
		$shares = array();
		$cache_time = isset($this->config['socialbuttons_cachetime']) ? $this->config['socialbuttons_cachetime'] : 0;
		$multiplicator = isset($this->config['socialbuttons_multiplicator']) ? $this->config['socialbuttons_multiplicator'] : 1;

		$cachetime = ((int) $cache_time * (int) $multiplicator);
		$cache_file = $this->phpbb_root_path . 'ext/tas2580/socialbuttons/cache/' . md5($url) . '.json';
		$filetime = file_exists($cache_file) ? filemtime($cache_file) : 0;
		$url = urlencode($url);
		
		// If cache is too old or we have no cache query the platforms
		if(($filetime == 0) || ($filetime < (time() - $cachetime)))
		{
			// Collect the querys
			if(isset($this->config['socialbuttons_facebook']) && ($this->config['socialbuttons_facebook'] == 1))
			{
				$querys['facebook'] = 'https://www.facebook.com/plugins/like.php?&layout=box_count&href=' . $url;
			}
			if(isset($this->config['socialbuttons_twitter']) && ($this->config['socialbuttons_twitter'] == 1))
			{
				$querys['twitter'] = 'https://cdn.api.twitter.com/1/urls/count.json?url=' . $url;
			}
			if(isset($this->config['socialbuttons_google']) && ($this->config['socialbuttons_twitter'] == 1))
			{
				$querys['google'] = 'https://plusone.google.com/_/+1/fastbutton?url=' . $url;
			}
			if(isset($this->config['socialbuttons_linkedin']) && ($this->config['socialbuttons_twitter'] == 1))
			{
				$querys['linkedin'] = 'https://www.linkedin.com/countserv/count/share?format=json&url=' . $url;
			}
			
			// Do we have curl? We can query all platforms paralel what is mutch faster
			if(function_exists('curl_multi_init') && function_exists('curl_multi_exec'))
			{
				// Set curl options for each URL
				$mh = curl_multi_init();
				foreach($querys as $platform => $query_url)
				{
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_URL, $query_url);
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
					curl_setopt($ch, CURLOPT_NOBODY, false);
					curl_setopt($ch, CURLOPT_HEADER, false); 
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
					curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; rv:31.0) Gecko/20100101 Firefox/31.0'); 
					curl_multi_add_handle($mh, $ch);
					$handle[$platform] = $ch;
				}
				
				// Exec the query
				$running = 0;
				do 
				{
					curl_multi_exec($mh, $running);
				} 
				while($running > 0);

				// Get the resonse
				foreach($handle as $platform => $ch)
				{
					$handle = curl_multi_info_read($mh);
					$content[$platform] = curl_multi_getcontent($ch);
					curl_multi_remove_handle($mh, $handle['handle'] );
				}
				curl_multi_close($mh);
			}
			// No curl we have to do it the old way
			else
			{
				//Set the useragent
				$options  = array('http' => array('user_agent' => 'Mozilla/5.0 (Windows NT 6.1; rv:31.0) Gecko/20100101 Firefox/31.0'));
				$context  = stream_context_create($options);
				foreach($querys as $platform => $query_url)
				{
					$content[$platform] = file_get_contents($query_url, false, $context);
				}
			}
			
			// Get the number of shares from response
			$matches = array();
			preg_match('#<div id="aggregateCount" class="Oy">([0-9]+)</div>#s', $content['google'], $matches);
			$shares['google'] = isset($matches[1]) ? $matches[1] : 0;

			preg_match('#<span class="pluginCountTextDisconnected">([0-9]+)</span>#s', $content['facebook'], $matches);
			$shares['facebook'] = isset($matches[1]) ? $matches[1] : 0 ;

			$pageinfo = json_decode($content['twitter'], true);
			$shares['twitter'] = isset($pageinfo['count']) ? $pageinfo['count'] : 0;

			$pageinfo = json_decode($content['linkedin'], true);
			$shares['linkedin'] = isset($pageinfo['count']) ? $pageinfo['count'] : 0;
			
			// Write data to cache
			if(is_writable(dirname($cache_file)))
			{
				$json = json_encode($shares);
				$handle = fopen($cache_file, 'w');
				fwrite($handle, $json);
				fclose($handle);
			}
		}
		// Read data from cache
		else
		{
			$json = file_get_contents($cache_file);
			$shares = json_decode($json, true);
		}
		return $shares;
	}
}