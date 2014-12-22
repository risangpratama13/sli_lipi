<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test_order extends CI_Model {
    
    private $table = "test_orders";
    
    function save($data) {
        return $this->db->insert($this->table, $data);
    }
    
}
