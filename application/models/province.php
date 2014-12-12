<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Province extends CI_Model {
    
    private $table = "provinces";
    
    function __construct() {
        parent::__construct();
    }
    
    function get_all() {        
        $query = $this->db->get($this->table);
        return $query->result();
    } 
    
}
