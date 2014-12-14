<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Model {
    
    private $table = "categories";
    
    function __construct() {
        parent::__construct();
    }
    
    function get_all() {        
        $query = $this->db->get($this->table);
        return $query->result();
    }
}
