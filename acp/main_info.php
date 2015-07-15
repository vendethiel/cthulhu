<?php
/**
*
* @package phpBB Extension - vendethiel cthulhu
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace vendethiel\cthulhu\acp;

class main_info
{
	function module()
	{
		return array(
			'filename'	=> '\vendethiel\cthulhu\acp\main_module',
			'title'		=> 'ACP_CTHULHU_TITLE',
			'version'	=> '0.0.1',
			'modes'		=> array(
				'settings'	=> array(
					'title' => 'ACP_CTHULHU',
					'auth' => 'ext_vendethiel/cthulhu && acl_a_board',
					'cat' => array('ACP_CTHULHU_TITLE')
				),
			),
		);
	}
}