<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Item extends CI_Model {
    
    private $table = "items";
    
    function __construct() {
        parent::__construct();
    }
    
    function get_all() {
        $this->db->select('items.*, users.full_name, item_types.type_name, item_types.type_point');
        $this->db->from($this->table);
        $this->db->join('users','items.user_id = users.id');
        $this->db->join('item_types','items.item_type_id = item_types.id');
        $query = $this->db->get();
        return $query->result();
    }
    
    function find_by_id($id) {
        $this->db->select('items.*, users.full_name, item_types.type_name, item_types.type_point');
        $this->db->from($this->table);
        $this->db->join('users','items.user_id = users.id');
        $this->db->join('item_types','items.item_type_id = item_types.id');
        $this->db->where('items.id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    
    function get_by_user($user_id) {
        $this->db->select('items.*, users.full_name, item_types.type_name, item_types.type_point');
        $this->db->from($this->table);
        $this->db->join('users','items.user_id = users.id');
        $this->db->join('item_types','items.item_type_id = item_types.id');
        $this->db->where('items.user_id', $user_id);
        $query = $this->db->get();
        return $query->result();
    }
    
    function save($data) {
        return $this->db->insert($this->table, $data);
    }
    
    function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }
    
    function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete($this->table); 
    }
    
}
