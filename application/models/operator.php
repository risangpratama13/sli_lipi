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
    
    function find_bycategory($category_id) {
        $this->db->select('operators.*, categories.cat_name, users.full_name');
        $this->db->from($this->table);
        $this->db->join('categories','operators.category_id = categories.id');
        $this->db->join('users', 'operators.user_id = users.id');
        $this->db->where('operators.category_id', $category_id);
        $query = $this->db->get();
        return $query->result();
    }
            
    function get_all() {
        $this->db->select('operators.*, users.full_name, categories.cat_name');
        $this->db->from($this->table);
        $this->db->join('categories','operators.category_id = categories.id');
        $this->db->join('users', 'operators.user_id = users.id');
        $query = $this->db->get();
        return $query->result();
    }
    
    function get_byid($id) {
        $this->db->select('operators.*, users.full_name, categories.cat_name');
        $this->db->from($this->table);
        $this->db->join('categories','operators.category_id = categories.id');
        $this->db->join('users', 'operators.user_id = users.id');
        $this->db->where('operators.id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    
    function delete_byuser($user_id) {
        $this->db->where('user_id', $user_id);
        return $this->db->delete($this->table);
    }
    
    function save($data) {
        return $this->db->insert($this->table, $data);
    }  
}
