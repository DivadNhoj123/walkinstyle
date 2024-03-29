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
}

// function getAdmin($id){
//     $this->db->from('user_account a');
//     $this->db->join('user_info b' , 'a.id = b.user_id');
//     $this->db->where('a.id',$id);
//     return $this->db->get()->row();
// }
// function CountInventory(){
//     return $this->db->count_all('inventory');
// }
// 
// function getItems(){
//     $this->db->from('inventory');
//     return $this->db->get()->result();
// }
// 
// function deleteAll($table){
//     return $this->db->empty_table($table);
// }

// function insertBatch($table,$data){
//     return $this->db->insert_batch($table,$data);
// }
// }
    
