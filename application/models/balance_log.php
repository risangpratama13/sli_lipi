<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Balance_log extends CI_Model {
    
    private $table = "balance_logs";
    
    function find_byuser($user_id) {
        $this->db->select('balance_logs.*, users.full_name');
        $this->db->from($this->table);
        $this->db->join('users','balance_logs.user_id = users.id');
        $this->db->where('balance_logs.user_id', $user_id);
        $query = $this->db->get();
        return $query->result();
    }
    
}