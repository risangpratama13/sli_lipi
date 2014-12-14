<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Item_type extends CI_Model {
    
    private $table = "item_types";
    
    function __construct() {
        parent::__construct();
    }
    
    function get_all() {        
        $query = $this->db->get($this->table);
        return $query->result();
    }
    
}
