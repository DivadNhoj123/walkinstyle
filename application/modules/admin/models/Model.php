<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class model extends CI_Model
{
    function insertData($table, $data){
        $this->db->insert($table,$data);
        return $this->db->insert_id('id');
    }

    function Update($table,$data,$where){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    function deleteData($table, $where){
        $this->db->delete($table,$where);
    } 

    function getShoes(){
        $this->db->from('shoes');
        return $this->db->get()->result();
    }

    function getOrders(){
        $this->db->from('checkout');
		$this->db->join('orders', 'orders.id = checkout.order_id');
        $this->db->join('shoes', 'shoes.id = checkout.shoes_id');
		$this->db->join('user_info', 'user_info.account_id = orders.buyer_id');
		$this->db->join('user_account', 'user_account.id = orders.buyer_id');
    		return $this->db->get()->result();
    }

    function getClient(){
        $this->db->from('user_account');
		$this->db->join('user_info', 'user_account.id = user_info.account_id');
        $this->db->where('role', 1);    
        return $this->db->get()->result();
    }
}
    
