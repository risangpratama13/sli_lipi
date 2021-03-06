<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test_order extends CI_Model {
    
    private $table = "test_orders";
    
    function get_all() {
        $this->db->select('test_orders.*, tests.testing_name, m.full_name as anggota, o.full_name as operator');
        $this->db->from($this->table);
        $this->db->join('orders','orders.id = test_orders.order_id');
        $this->db->join('tests','tests.id = test_orders.test_id');
        $this->db->join('operators','operators.id = test_orders.operator_id');
        $this->db->join('users m','orders.user_id = m.id');
        $this->db->join('users o','operators.user_id = o.id');
        $query = $this->db->get();
        return $query->result();
    }
            
    function find_byorder($order_id) {
        $this->db->select('test_orders.*, tests.testing_name, users.full_name');
        $this->db->from($this->table);
        $this->db->join('tests','tests.id = test_orders.test_id');
        $this->db->join('operators','operators.id = test_orders.operator_id');
        $this->db->join('users','operators.user_id = users.id');
        $this->db->where('test_orders.order_id', $order_id);
        $query = $this->db->get();
        return $query->result();
    }
    
    function find_byid($test_order_id) {
        $this->db->select('test_orders.*, tests.testing_name, users.full_name, m.full_name as anggota, orders.code, orders.user_id');
        $this->db->from($this->table);
        $this->db->join('orders','orders.id = test_orders.order_id');        
        $this->db->join('tests','tests.id = test_orders.test_id');
        $this->db->join('operators','operators.id = test_orders.operator_id');
        $this->db->join('users','operators.user_id = users.id');
        $this->db->join('users m','orders.user_id = m.id');
        $this->db->where('test_orders.id', $test_order_id);
        $query = $this->db->get();
        return $query->row();
    }
    
    function find_byuser($user_id, $group = 2) {
        $this->db->select('test_orders.*, tests.testing_name, m.full_name as anggota, o.full_name as operator');
        $this->db->from($this->table);
        $this->db->join('orders','orders.id = test_orders.order_id');
        $this->db->join('tests','tests.id = test_orders.test_id');
        $this->db->join('operators','operators.id = test_orders.operator_id');
        $this->db->join('users m','orders.user_id = m.id');
        $this->db->join('users o','operators.user_id = o.id');
        if($group == 2) {
            $this->db->where('orders.user_id', $user_id);
        } else if($group == 4) {
            $this->db->where('operators.user_id', $user_id);
        }
        $query = $this->db->get();
        return $query->result();
    }
    
    function find_byleader($leader_id) {
        $this->db->select('test_orders.*, tests.testing_name, m.full_name as anggota, o.full_name as operator');
        $this->db->from($this->table);
        $this->db->join('orders','orders.id = test_orders.order_id');
        $this->db->join('tests','tests.id = test_orders.test_id');
        $this->db->join('research_groups','research_groups.id = tests.research_group_id');
        $this->db->join('operators','operators.id = test_orders.operator_id');
        $this->db->join('users m','orders.user_id = m.id');
        $this->db->join('users o','operators.user_id = o.id');
        $this->db->where('research_groups.user_id', $leader_id);
        $this->db->where('test_orders.status', 'P');
        $this->db->or_where('test_orders.status', 'AL');
        $this->db->order_by('test_orders.status', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
            
    function count_test_orders($user_id = NULL) {
        if($user_id) {
            $this->db->from($this->table);
            $this->db->join('orders','orders.id = test_orders.order_id');
            $this->db->where('orders.user_id', $user_id);
            return $this->db->count_all_results();
        } else {
            return $this->db->count_all_results($this->table);
        }
    }
    
    function find_bystatus($status = array()) {
        $this->db->select('test_orders.*, tests.testing_name, m.full_name as anggota, o.full_name as operator');
        $this->db->from($this->table);
        $this->db->join('orders','orders.id = test_orders.order_id');
        $this->db->join('tests','tests.id = test_orders.test_id');
        $this->db->join('operators','operators.id = test_orders.operator_id');
        $this->db->join('users m','orders.user_id = m.id');
        $this->db->join('users o','operators.user_id = o.id');
        foreach ($status as $stat => $value) {
            $this->db->or_where('test_orders.status', $value);
        }
        $query = $this->db->get();
        return $query->result();
    }
    
    function count_hours() {
        $query = "SELECT operator_id, SUM(TIMESTAMPDIFF(HOUR, start_date, finish_date)) as total_hours "
                . "FROM test_orders "
                . "WHERE status = 'F' "
                . "GROUP BY operator_id";        
        $result = $this->db->query($query);
        return $result->result();
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
