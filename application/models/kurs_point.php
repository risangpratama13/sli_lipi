<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kurs_point extends CI_Model {
    
    private $table = "kurs_point";
    
    function __construct() {
        parent::__construct();
    }
    
    function get_kurs() {
        return $this->db->get_where($this->table, array("id" => 1))->row();
    }
    
}
