<?php
/**
*
* @package phpBB Extension - vendethiel cthulhu
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace vendethiel\cthulhu\migrations;

class release_1_0_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['vendethiel_cthulhu_enable']);
	}

	public function update_data()
	{
		return array(
			array('config.add', array('vendethiel_cthulhu_enable', 1)),

			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_CTHULHU_TITLE'
			)),
			array('module.add', array(
				'acp',
				'ACP_CTHULHU_TITLE',
				array(
					'module_basename'	=> '\vendethiel\cthulhu\acp\main_module',
					'modes'				=> array('settings'),
				),
			)),
		);
	}
}