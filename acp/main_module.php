<?php
/**
*
* @package phpBB Extension - vendethiel cthulhu
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace vendethiel\cthulhu\acp;

class main_module
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache, $request;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		$user->add_lang('acp/common');
		$this->tpl_name = 'main';
		$this->page_title = $user->lang('ACP_CTHULHU_TITLE');
		add_form_key('vendethiel/cthulhu');

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('vendethiel/cthulhu'))
			{
				trigger_error('FORM_INVALID');
			}

			$config->set('vendethiel_cthulhu_goodbye', $request->variable('vendethiel_cthulhu_goodbye', 0));

			trigger_error($user->lang('ACP_cthulhu_SETTING_SAVED') . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'U_ACTION'						=> $this->u_action,
			'VENDETHIEL_CTHULHU_GOODBYE'	=> $config['vendethiel_cthulhu_goodbye'],
		));
	}
}