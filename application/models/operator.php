<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Operator extends CI_Model {
    
    private $table = "operators";
    
    function find_byuser($user_id) {
        $this->db->select('operators.*, categories.cat_name');
        $this->db->from($this->table);
        $this->db->join('categories','operators.category_id = categories.id');
        $this->db->where('operators.user_id', $user_id);
        $query = $this->db->get();
        return $query->result();
    }
    
    function delete_byuser($user_id) {
        $this->db->where('user_id', $user_id);
        return $this->db->delete($this->table);
    }
    
    function save($data) {
        return $this->db->insert($this->table, $data);
    }  
}
