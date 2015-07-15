<?php
/**
*
* @package phpBB Extension - vendethiel cthulhu
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'CTHULHU_PAGE'					=> 'Cthulhu',
	'CTHULHU_HELLO'					=> 'Hello %s!',
	'CTHULHU_GOODBYE'				=> 'Goodbye %s!',

	'ACP_CTHULHU_TITLE'				=> 'Cthulhu Module',
	'ACP_CTHULHU'					=> 'Settings',
	'ACP_CTHULHU_GOODBYE'			=> 'Should say goodbye?',
	'ACP_CTHULHU_SETTING_SAVED'		=> 'Settings have been saved successfully!',
));