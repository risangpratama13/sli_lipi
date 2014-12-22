<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Model {

    private $table = "orders";
    
    function get_all() {
        $this->db->select('orders.*, users.full_name');
        $this->db->from($this->table);
        $this->db->join('users','users.id = orders.user_id');
        $query = $this->db->get();
        return $query->result();
    }
    
    function find_byuser($user_id) {
        $this->db->select('orders.*, users.full_name');
        $this->db->from($this->table);
        $this->db->join('users','users.id = orders.user_id');
        $this->db->where('orders.user_id', $user_id);
        $query = $this->db->get();
        return $query->result();
    }
    
    function find_bycode($code) {
        $this->db->select('orders.*, users.full_name');
        $this->db->from($this->table);
        $this->db->join('users','users.id = orders.user_id');
        $this->db->where('orders.code', $code);
        $query = $this->db->get();
        return $query->row();
    }
    
    function max_order_no($user_id) {
        $this->db->select_max('order_no');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get($this->table);
        $result = $query->row();
        return $result->order_no;
    }
    
    function save($data) {
        return $this->db->insert($this->table, $data);
    }
    
}