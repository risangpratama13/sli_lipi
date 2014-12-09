<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('language');
        $this->lang->load('auth');
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

    //redirect if needed, otherwise display the user list
    function index() {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        } else {
            $this->basic_data();
            $this->smartyci->display('index.tpl');
        }
    }

    //log the user in
    function login() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == true) {
            $remember = (bool) $this->input->post('remember');
            if ($this->ion_auth->login($this->input->post('username'), $this->input->post('password'), $remember)) {
                redirect('/', 'refresh');
            } else {
                $this->session->set_flashdata('message', $this->ion_auth->errors());
                redirect('login', 'refresh');
            }
        } else {
            $data['message'] = $this->session->flashdata('message');
            $data['username'] = array('name' => 'username',
                'class' => 'form-control',
                'placeholder' => 'Username',
                'type' => 'text',
                'value' => $this->form_validation->set_value('identity'),
            );
            $data['password'] = array('name' => 'password',
                'class' => 'form-control',
                'placeholder' => 'Password',
            );
            $this->smartyci->assign('data', $data);
            $this->smartyci->display('login.tpl');
        }
    }

    //log the user out
    function logout() {
        $logout = $this->ion_auth->logout();
        $this->session->set_flashdata('message', $this->ion_auth->messages());
        redirect('login', 'refresh');
    }

    //activate the user
    function activate() {
        if ($_SERVER['HTTP_REFERER']) {
            $activation = $this->ion_auth->activate($this->input->post('id'));
            if ($activation) {
                echo "Success";
            } else {
                echo "Failed";
            }
        } else {
            redirect('/', 'refresh');
        }
    }

    //deactivate the user
    function deactivate() {
        if ($_SERVER['HTTP_REFERER']) {
            $deactivation = $this->ion_auth->deactivate($this->input->post('id'));
            if ($deactivation) {
                echo "Success";
            } else {
                echo "Failed";
            }
        } else {
            redirect('/', 'refresh');
        }        
    }
    
    //delete the user
    function delete() {
        if ($_SERVER['HTTP_REFERER']) {
            $delete = $this->ion_auth->delete_user($this->input->post('id'));
            if ($delete) {
                echo "Success";
            } else {
                echo "Failed";
            }
        } else {
            redirect('/', 'refresh');
        }        
    }

    //create a new user
    function member_registration() {
        if ($this->ion_auth->logged_in()) {
            redirect('/', 'refresh');
        }
        $tables = $this->config->item('tables', 'ion_auth');
        //validate form input
        $this->form_validation->set_rules('full_name', 'Nama Lengkap', 'required|xss_clean');
        $this->form_validation->set_rules('username', 'Username', 'required|xss_clean|is_unique[' . $tables['users'] . '.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
        $this->form_validation->set_rules('password_confirm', 'Konfirmasi Password', 'required');

        if ($this->form_validation->run() == true) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if($this->input->post('sex') == "M") {
                $photo = "avatar_male.png";
            } else if($this->input->post('sex') == "F") {
                $photo = "avatar_female.png";
            }
            $this->db->insert('balances', array('value' => 0));
            
            $additional_data = array(
                'full_name' => $this->input->post('full_name'),
                'sex' => $this->input->post('sex'),
                'photo' => $this->input->post('photo'),
                'balance_id' => $this->db->insert_id()
            );
        }
        if ($this->form_validation->run() == true && $this->ion_auth->register($username, $password, $additional_data)) {
            $remember = (bool) $this->input->post('remember');
            $this->ion_auth->login($this->input->post('username'), $this->input->post('password'), $remember);            
            redirect("/", 'refresh');
        } else {
            $data['message'] = ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message'));

            $data['full_name'] = array(
                'name' => 'full_name',
                'class' => 'form-control',
                'placeholder' => 'Nama Lengkap',
                'type' => 'text',
                'value' => $this->form_validation->set_value('full_name'),
            );
            $data['username'] = array(
                'name' => 'username',
                'class' => 'form-control',
                'placeholder' => 'Username',
                'type' => 'text',
                'value' => $this->form_validation->set_value('username'),
            );
            $data['password'] = array(
                'name' => 'password',
                'class' => 'form-control',
                'placeholder' => 'Password',
                'value' => $this->form_validation->set_value('password'),
            );
            $data['password_confirm'] = array(
                'name' => 'password_confirm',
                'class' => 'form-control',
                'placeholder' => 'Konfirmasi Password',
                'value' => $this->form_validation->set_value('password_confirm'),
            );

            $this->smartyci->assign('data', $data);
            $this->smartyci->display('registration.tpl');
        }
    }
}