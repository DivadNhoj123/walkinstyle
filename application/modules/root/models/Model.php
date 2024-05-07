<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Model extends CI_Model
{

	function countCart($id)
	{
		$this->db->where('cart.buyer_id', $id);
		$this->db->from('cart');
		return $this->db->count_all_results();
	}


	function insertData($table, $data)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id('id');
	}

	function CheckData($where)
	{
		$this->db->from('user_account');
		$this->db->join('user_info', 'user_account.id = user_info.account_id');
		$this->db->where($where);
		$result = $this->db->get()->row();

		if (!$result) {
			$this->db->from('courier'); 
			$this->db->where($where);
			$result = $this->db->get()->row();
		}

		return $result;
	}


	function getShoes()
	{
		$this->db->from('shoes');
		return $this->db->get()->result();
	}

	function getCart($id)
	{
		$this->db->from('cart');
		$this->db->join('shoes', 'shoes.id = cart.shoes_id');
		$this->db->join('user_info', 'account_id = cart.buyer_id');
		$this->db->where('cart.buyer_id', $id);
		return $this->db->get()->result();
	}

	// handles checkout orders method
	public function insert_orders($data)
	{
		$this->db->insert_batch('orders', $data);
	}

	public function delete_cart_item($buyer_id, $shoes_id)
	{
		$this->db->where('buyer_id', $buyer_id);
		$this->db->where('shoes_id', $shoes_id);
		$this->db->delete('cart');
	}

	function getOrders($id)
	{
		$this->db->from('orders');
		$this->db->join('shoes', 'shoes.id = orders.shoes_id');
		// $this->db->join('recipients', 'orders.id = orders.order_id');
		$this->db->where('orders.buyer_id', $id);
		return $this->db->get()->result();
	}
	// end handling checkout method

	public function checkOrderIdExists($order_id)
	{
		$this->db->where('order_id', $order_id);
		$query = $this->db->get('orders');
		return $query->num_rows() > 0;
	}


	//handle query for the courier
	function toDeliver($id){
		$this->db->select('orders.id as orders_id, user_info.*, orders.*, shoes.*');
		$this->db->from('orders');
		$this->db->join('shoes', 'shoes.id = orders.shoes_id');
		$this->db->join('user_info', 'account_id = orders.buyer_id');
		$this->db->where('courier_id', $id);
		$this->db->where_in('status', ['delivering', 'waiting for approval']);
		return $this->db->get()->result();
	}
	function ToAccept($productId){
		$this->db->where('id', $productId)->update('orders', ['status' => 'delivering']);
        return $this->db->affected_rows() > 0;
	}
	function successDelivered($productId){
		$this->db->where('id', $productId)->update('orders', ['status' => 'delivered']);
        return $this->db->affected_rows() > 0;
	}
	function myDelivered($id){
		$this->db->from('orders');
		$this->db->join('shoes', 'shoes.id = orders.shoes_id');
		$this->db->join('user_info', 'account_id = orders.buyer_id');
		$this->db->where('courier_id', $id);
		$this->db->where_in('status','delivered');
		return $this->db->get()->result();
	}
	//end handling 
}
