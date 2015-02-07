<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test_tool extends CI_Model {
    
    private $table = "tests_tools";
    
    function __construct() {
        parent::__construct();
    }
    
    function count_bytest_order($test_order_id, $start_date = NULL, $finish_date = NULL) {
        $this->db->select('tests_tools.tool_id, SUM(tests_tools.qty) as qty');
        $this->db->from($this->table);
        $this->db->join('test_orders','test_orders.id = tests_tools.test_order_id');
        $this->db->where('tests_tools.test_order_id', $test_order_id);
        $this->db->where('test_orders.start_date <=', $start_date);
        $this->db->where('test_orders.finish_date <=', $finish_date);
        $query = $this->db->get();
        return $query->result();
    } 
    
}