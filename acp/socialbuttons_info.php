<?php
/**
*
* @package phpBB Extension - tas2580 test
* @copyright (c) 2014 tas2580 (https://tas2580.net)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace tas2580\socialbuttons\acp;

class socialbuttons_info
{
    function module()
    {
        return array(
            'filename'    => '\tas2580\socialbuttons\socialbuttons_module',
            'title'        => 'ACP_SOCIALBUTTONS_TITLE',
            'version'    => '0.4.3',
            'modes'        => array(
                'settings'    => array(
                    'title' => 'ACP_SOCIALBUTTONS_TITLE',
                    'auth' => 'ext_tas2580/socialbuttons && acl_a_board', 
                    'cat' => array('ACP_SOCIALBUTTONS_TITLE')
                ),
            ),
        );
    }
}
