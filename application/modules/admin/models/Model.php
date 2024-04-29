<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class model extends CI_Model
{
    function insertData($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id('id');
    }

    function Update($table, $data, $where)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function deleteData($table, $where)
    {
        $this->db->delete($table, $where);
    }

    //handles products query
    function getShoes()
    {
        $this->db->from('shoes');
        return $this->db->get()->result();
    }

    public function productEdits($id)
    {
        $query = $this->db->get_where('shoes', array('id' => $id));
        return $query->row();
    }
    //end handling products Query

    //handles Order Query
    function getOrders()
    {
        // Disable only_full_group_by mode for this query
        $this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''))");
        $this->db->select('orders.order_id, user_info.*, orders.*'); 
        $this->db->from('orders');
        $this->db->join('user_info', 'user_info.account_id = orders.buyer_id');
        $this->db->join('shoes', 'shoes.id = orders.shoes_id');
        $this->db->group_by('orders.order_id');
        return $this->db->get()->result();
    }
    public function filterOrders($order_id)
    {
        $this->db->select('*');
        $this->db->from('orders');
        $this->db->join('user_info', 'user_info.account_id = orders.buyer_id');
        $this->db->join('shoes', 'shoes.id = orders.shoes_id');
        $this->db->where('orders.order_id', $order_id);
        $query = $this->db->get();
        return $query->result();
    }
    public function orderView($order_id)
    {
        $this->db->select('orders.*, user_info.*, shoes.*, user_account.*, recipients.*');
        $this->db->from('orders');
        $this->db->join('user_info', 'user_info.account_id = orders.buyer_id');
        $this->db->join('user_account', 'user_account.id = orders.buyer_id');
        $this->db->join('shoes', 'shoes.id = orders.shoes_id');
        $this->db->join('recipients', 'recipients.orders_id = orders.order_id');
        $this->db->where('orders.order_id', $order_id);
        $query = $this->db->get();

        return $query->row();
    }
    // Inside your Order_model

    public function deliverOrder($order_id, $courier_id)
    {
        $data = array(
            'courier_id' => $courier_id,
            'status' => 'delivering' // Updating status to 'delivering'
        );

        $this->db->where('order_id', $order_id);
        $this->db->update('orders', $data);

        // Check if the update was successful
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    //end handling Order Query

    //handles courier query
    function getCourier()
    {
        $this->db->from('courier');
        return $this->db->get()->result();
    }
    public function courierEdits($id)
    {
        $query = $this->db->get_where('courier', array('id' => $id));
        return $query->row();
    }
    //end handling courier routes

    //handle Clients Routes
    function getClient()
    {
        $this->db->from('user_account');
        $this->db->join('user_info', 'user_account.id = user_info.account_id');
        $this->db->where('role', 1);
        return $this->db->get()->result();
    }
}
