<?php

class Master extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('item_type');
        $this->load->model('kurs_point');
        $this->load->model('unit');
        
        $this->load->library('form_validation');
    }
    
    function basic_data() {
        $user = $this->ion_auth->user()->row();
        $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
        $groups = array();
        foreach ($user_groups as $user_group) {
            $groups[$user_group->id] = $user_group->name;
        }
        $this->smartyci->assign('user', $user);
        $this->smartyci->assign('groups', $groups);
    }
    
    function units() {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        } 
        
        if($this->ion_auth->in_group(3) or $this->ion_auth->is_admin()){
            $units = $this->unit->get_all();
            $unit_name = array(
                'name' => 'unit_name',
                'class' => 'form-control',
                'placeholder' => 'Nama Satuan',
                'type' => 'text'
            );
            $message = $this->session->flashdata('message') ? $this->session->flashdata('message') : "";
            $this->basic_data();
            $this->smartyci->assign('units', $units);
            $this->smartyci->assign('message', $message);
            $this->smartyci->assign('unit_name', $unit_name);
            $this->smartyci->display('master/unit.tpl');
        } else {
            redirect('/', 'refresh');
        }
    }
    
    function crud_units() {
        if($_SERVER['HTTP_REFERER']) {
            $action = $this->input->post('action');
            
            switch ($action) {
                case "delete":
                    if($this->unit->delete($this->input->post('id'))) {
                        echo "Success";
                    } else {
                        echo "Failed";
                    }
                    break;
                case "edit":
                    $this->form_validation->set_rules('unit_name', 'Nama Satuan', 'required|xss_clean');
                    $this->form_validation->set_error_delimiters('<p class="help-block text-red">', '</p>');
            
                    if ($this->form_validation->run() == true) {                        
                        $data = array("unit_name" => $this->input->post('unit_name'));                        
                        $this->unit->update($this->input->post('id'), $data);
                        $this->session->set_flashdata('message', "");
                        redirect('unit', 'refresh');
                    } else {
                        $this->session->set_flashdata('message', validation_errors());
                        redirect('unit', 'refresh');
                    }

                    break;
                case "change_status":
                    $data = array("unit_status" => $this->input->post("status"));
                    if($this->unit->update($this->input->post('id'), $data)) {
                        echo "Success";
                    } else {
                        echo "Failed";
                    }
                case "add":
                default:
                    $this->form_validation->set_rules('unit_name', 'Nama Satuan', 'required|xss_clean');
                    $this->form_validation->set_error_delimiters('<p class="help-block text-red">', '</p>');
            
                    if ($this->form_validation->run() == true) {
                        $data = array("unit_name" => $this->input->post('unit_name'));
                        $this->unit->save($data);
                        $this->session->set_flashdata('message', "");
                        redirect('unit', 'refresh');
                    } else {
                        $this->session->set_flashdata('message', validation_errors());
                        redirect('unit', 'refresh');
                    }
                    break;
            }
        } else {
            redirect('unit', 'refresh');
        }
    }
    
}
