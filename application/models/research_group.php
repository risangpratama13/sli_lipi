<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Research_group extends CI_Model {
    
    private $table = 'research_groups';
    
    function __construct() {
        parent::__construct();
    }
    
    function get_all() {    
        $this->db->select('research_groups.*, researchers.researcher_name, researches.research_name');
        $this->db->from('research_groups');
        $this->db->join('researchers','researchers.id = research_groups.researcher_id');
        $this->db->join('researches','research_groups.research_id = researches.id');
        //$this->db->join('users','users.id = research_groups.user_id');
        $query = $this->db->get();
        return $query->result();
    }
    
    function find_byid($id) {
        return $this->db->get_where($this->table, array("id" => $id))->row();
    }
            
    function find_byuser($user_id) {
        return $this->db->get_where($this->table, array("user_id" => $user_id))->row();
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