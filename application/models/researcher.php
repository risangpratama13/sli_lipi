<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Researcher extends CI_Model {

    private $table = "researchers";
    
    function __construct() {
        parent::__construct();
    }
    
    function get_all() {        
        $query = $this->db->get($this->table);
        return $query->result();
    }
    
    function find_byid($id) {
        return $this->db->get_where($this->table, array("id" => $id))->row();
    }
    
}
