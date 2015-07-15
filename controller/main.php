<?php
/**
*
* @package phpBB Extension - vendethiel cthulhu
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace vendethiel\cthulhu\controller;

class main
{
	/* @var \phpbb\config\config */
	protected $config;

	/* @var \phpbb\controller\helper */
	protected $helper;

	/* @var \phpbb\template\template */
	protected $template;

	/* @var \phpbb\user */
	protected $user;

	/**
	* Constructor
	*
	* @param \phpbb\config\config		$config
	* @param \phpbb\controller\helper	$helper
	* @param \phpbb\template\template	$template
	* @param \phpbb\user				$user
	*/
	public function __construct(\phpbb\config\config $config, \phpbb\controller\helper $helper, \phpbb\template\template $template, \phpbb\user $user)
	{
		$this->config = $config;
		$this->helper = $helper;
		$this->template = $template;
		$this->user = $user;
	}

	/**
	* cthulhu controller for route /cthulhu/{name}
	*
	* @param string		$name
	* @return \Symfony\Component\HttpFoundation\Response A Symfony Response object
	*/
	public function handle($name)
	{
		$l_message = !$this->config['vendethiel_cthulhu_goodbye'] ? 'CTHULHU_HELLO' : 'CTHULHU_GOODBYE';
		$this->template->assign_var('CTHULHU_MESSAGE', $this->user->lang($l_message, $name));

		return $this->helper->render('main_body.html', $name);
	}
}