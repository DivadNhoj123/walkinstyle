<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class model extends CI_Model {
	function CheckData($where){
		$this->db->from('accounts');
		$this->db->where($where);
		return $this->db->get()->result();
	}

	function insertData($table,$data){
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}
}