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
    
    function save($data) {
        return $this->db->insert($this->table, $data);
    }
    
    function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }
    
    function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete($this->table); 
    }
}
