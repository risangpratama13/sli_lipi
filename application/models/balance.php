<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Balance extends CI_Model {
    
    private $table = "balances";
    
    function get_value($id) {
        $balance = $this->db->get_where($this->table, array("id" => $id))->row();
        return $balance->value;
    }
    
}
