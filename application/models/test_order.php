<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test_order extends CI_Model {
    
    private $table = "test_orders";
    
    function find_byorder($order_id) {
        $this->db->select('test_orders.*, tests.testing_name, users.full_name');
        $this->db->from($this->table);
        $this->db->join('tests','tests.id = test_orders.test_id');
        $this->db->join('operators','operators.id = test_orders.operator_id');
        $this->db->join('users','operators.user_id = users.id');
        $this->db->where('test_orders.order_id', $order_id);
        $query = $this->db->get();
        return $query->result();
    }
    
    function save($data) {
        return $this->db->insert($this->table, $data);
    }
    
}
