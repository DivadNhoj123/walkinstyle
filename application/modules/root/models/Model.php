<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Model extends CI_Model {

	function insertData($table, $data){
		$this->db->insert($table,$data);
		return $this->db->insert_id('id');
	}

	function CheckData($where)
	{
		// $this->db->select('user_info.*, user_info.department');
		$this->db->from('user_account');
		$this->db->join('user_info', 'user_account.id = user_info.account_id');
		$this->db->where($where);
		return $this->db->get()->row();
	}
}