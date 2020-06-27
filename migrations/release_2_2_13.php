<?php
/**
 *
 * @package Recent Topics Extension
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
 */

namespace paybas\recenttopics\migrations;

class release_2_2_13 extends \phpbb\db\migration\migration
{

	public function effectively_installed()
	{
		return isset($this->config['rt_version']) && version_compare($this->config['rt_version'], '2.2.13', '>=');
	}

	static public function depends_on()
	{
		return array(
			'\paybas\recenttopics\migrations\release_2_2_12',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('rt_version', '2.2.13')),
			//the default should be unread only
			array('config.update', array('rt_unread_only', 1)),
			array('custom', array(array($this, 'set_unread'))),
		);

	}

	/**
	 * set user preferences to new unread default.
	 */
	public function set_unread()
	{
		$sql = 'UPDATE ' . $this->table_prefix . 'users' . ' SET user_rt_unread_only = ' . $this->config['rt_unread_only'];
		$this->db->sql_query($sql);
	}
}
