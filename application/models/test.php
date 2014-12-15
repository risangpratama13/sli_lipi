<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Model {
    
    private $table = "tests";
    
    function __construct() {
        parent::__construct();
    }
    
    function get_all() {
        $this->db->select('tests.*, categories.cat_name, units.unit_name');
        $this->db->from($this->table);
        $this->db->join('categories','tests.category_id = categories.id');
        $this->db->join('units','tests.unit_id = units.id');
        $query = $this->db->get();
        return $query->result();
    }
    
    function find_by_id($id) {
        $this->db->select('tests.*, categories.cat_name, units.unit_name');
        $this->db->from($this->table);
        $this->db->join('categories','tests.category_id = categories.id');
        $this->db->join('units','tests.unit_id = units.id');
        $this->db->where('tests.id', $id);
        $query = $this->db->get();
        return $query->row();
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
