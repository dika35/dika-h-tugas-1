<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MApp extends CI_Model
{
	public function MProsesLogin($username, $password)
	{
		return $this->db->get_where('tb_user', [
			'username' => $username,
			'password' => $password
		])->row_array();
	}

	public function MTampilMember($id_user)
	{
		return $this->db->get_where('tb_member', [
			'id_user' => $id_user
		])->result_array();
	}
}
