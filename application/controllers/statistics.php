<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Statistics extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function basic_data() {
        $user = $this->ion_auth->user()->row();
        $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
        $groups = array();
        foreach ($user_groups as $user_group) {
            $groups[$user_group->id] = $user_group->name;
        }
        if ($this->ion_auth->in_group(2)) {
            $this->smartyci->assign('shopping_carts', $this->cart->total_items());
        }
        $this->smartyci->assign('user', $user);
        $this->smartyci->assign('groups', $groups);
    }

    function tool_statistic() {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        if ($this->ion_auth->in_group(3) or $this->ion_auth->is_admin()) {
            $this->load->model('tool');
            $this->load->model('test_tool');

            $tools = $this->tool->get_all();
            $total_hours = $this->test_tool->count_hours();

            $total = array();
            $data_hours = array();
            $data_tools = array();

            if (!empty($total_hours)) {
                foreach ($total_hours as $hour) {
                    $total[$hour->tool_id] = $hour->total_hours;
                }
                
            }

            if (!empty($tools)) {
                foreach ($tools as $tool) {
                    $data_tools[] = $tool->tool_name;
                    if (empty($total[$tool->id])) {
                        $value = 0;
                    } else {
                        $value = $total[$tool->id];
                    }
                    $data_hours[] = $value;
                }
            }

            $label_tools = "'" . join("','", $data_tools) . "'";
            $label_total_hours = join(", ", $data_hours);

            $this->basic_data();
            $this->smartyci->assign('label_tools', $label_tools);
            $this->smartyci->assign('label_total_hours', $label_total_hours);
            $this->smartyci->display('statistic/tool_stat.tpl');
        } else {
            redirect('/');
        }
    }
    
    function operator_statistic() {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        if ($this->ion_auth->in_group(3) or $this->ion_auth->is_admin()) {
            $this->load->model('operator');
            $this->load->model('test_order');

            $operators = $this->operator->get_all();
            $total_hours = $this->test_order->count_hours();

            $total = array();
            $data_hours = array();
            $data_operators = array();

            if (!empty($total_hours)) {
                foreach ($total_hours as $hour) {
                    $total[$hour->operator_id] = $hour->total_hours;
                }                
            }

            if (!empty($operators)) {
                foreach ($operators as $operator) {
                    $data_operators[] = $operator->full_name;
                    if (empty($total[$operator->id])) {
                        $value = 0;
                    } else {
                        $value = $total[$operator->id];
                    }
                    $data_hours[] = $value;
                }
            }

            $label_operators = "'" . join("','", $data_operators) . "'";
            $label_total_hours = join(", ", $data_hours);

            $this->basic_data();
            $this->smartyci->assign('label_operators', $label_operators);
            $this->smartyci->assign('label_total_hours', $label_total_hours);
            $this->smartyci->display('statistic/tool_operator.tpl');
        } else {
            redirect('/');
        }
    }

}
