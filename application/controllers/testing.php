<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('category');
        $this->load->model('test');

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
    
    function categories() {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        if ($this->ion_auth->in_group(3) or $this->ion_auth->is_admin()) {
            $categories = $this->category->get_all();
            $cat_name = array(
                'name' => 'cat_name',
                'class' => 'form-control',
                'placeholder' => 'Kategori Pengujian',
                'type' => 'text',
                'required' => 'required'
            );
            $this->basic_data();
            $this->smartyci->assign('categories', $categories);
            $this->smartyci->assign('cat_name', $cat_name);
            $this->smartyci->display('testing/category.tpl');
        } else {
            redirect('/', 'refresh');
        }
    }

    function crud_categories() {
        if ($_SERVER['HTTP_REFERER']) {
            $action = $this->input->post('action');

            switch ($action) {
                case "delete":
                    if ($this->category->delete($this->input->post('id'))) {
                        echo "Success";
                    } else {
                        echo "Failed";
                    }
                    break;
                case "edit":
                    $data = array("cat_name" => $this->input->post('cat_name'));
                    $this->category->update($this->input->post('id'), $data);
                    redirect('kategori_pengujian', 'refresh');
                    break;
                case "add":
                default:
                    $data = array("cat_name" => $this->input->post('cat_name'));
                    $this->category->save($data);
                    redirect('kategori_pengujian', 'refresh');                    
                    break;
            }
        } else {
            redirect('/', 'refresh');
        }
    }
    
}
