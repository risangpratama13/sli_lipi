<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Model {
    
    private $table = "members";
    
    function __construct() {
        parent::__construct();
    }
    
    function by_user_id($user_id) {
        $this->db->select('members.*, provinces.prov_name, states.state_name, researchers.researcher_name, researches.research_name');
        $this->db->from('members');
        $this->db->join('provinces','members.province_id = provinces.id');
        $this->db->join('states','members.state_id = states.id');
        $this->db->join('researchers','members.researcher_id = researchers.id');
        $this->db->join('researches','members.research_id = researches.id');
        $this->db->where('members.user_id', $user_id);
        $query = $this->db->get();
        return $query->row();
    }
    
    function create_member($data) {
        return $this->db->insert($this->table, $data);
    }
    
    function update_member($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }
    
}