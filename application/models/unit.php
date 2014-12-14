<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Unit extends CI_Model {

    private $table = "units";
    
    function __construct() {
        parent::__construct();
    }
    
    function get_all() {        
        $query = $this->db->get($this->table);
        return $query->result();
    }
    
}
