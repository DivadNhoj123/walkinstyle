<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Model extends CI_Model {

	function countCart($id) {
		$this->db->where('cart.buyer_id', $id);
		$this->db->from('cart');
		return $this->db->count_all_results();
	}
	

	function insertData($table, $data){
		$this->db->insert($table,$data);
		return $this->db->insert_id('id');
	}

	function CheckData($where)
	{
		$this->db->from('user_account');
		$this->db->join('user_info', 'user_account.id = user_info.account_id');
		$this->db->where($where);
		return $this->db->get()->row();
	}

	function getShoes(){
        $this->db->from('shoes');
        return $this->db->get()->result();
    }
	
	function getCart($id){
        $this->db->from('cart');
		$this->db->join('shoes', 'shoes.id = cart.shoes_id');
		$this->db->where('cart.buyer_id', $id);
        return $this->db->get()->result();
    }

	function getProductById($product_id) {
        $this->db->where('id', $product_id);
        $query = $this->db->get('shoes');

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return null;
        }
    }
	
	function getCheckout(){
		$this->db->from('orders');
		$this->db->join('shoes', 'shoes.id = orders.shoes_id');
		$this->db->join('user_info', 'user_info.account_id = orders.buyer_id');
		$this->db->join('user_account', 'user_account.id = orders.buyer_id');
		$this->db->where('status', 'place order');
		return $this->db->get()->result();
	}
}