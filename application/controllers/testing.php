<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('category');
        $this->load->model('unit');
        $this->load->model('test');
        $this->load->model('test_order');

        $this->load->helper('download');
        $this->load->library('form_validation');
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

    function index() {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        if ($this->ion_auth->in_group(3) or $this->ion_auth->is_admin()) {
            $tests = $this->test->get_all();
            $this->basic_data();
            $this->smartyci->assign('tests', $tests);
            $this->smartyci->display('testing/test.tpl');
        } else {
            redirect('/', 'refresh');
        }
    }

    function add_pengujian() {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        $this->form_validation->set_rules('testing_name', 'Pengujian', 'required|xss_clean');
        $this->form_validation->set_rules('testing_price', 'Harga', 'required|xss_clean|numeric|is_natural_no_zero');

        if ($this->ion_auth->in_group(3) or $this->ion_auth->is_admin()) {
            if ($this->form_validation->run() == true) {
                $data = array(
                    'category_id' => $this->input->post('category'),
                    'testing_name' => $this->input->post('testing_name'),
                    'testing_price' => $this->input->post('testing_price'),
                    'unit_id' => $this->input->post('unit')
                );
                $this->test->save($data);
                redirect('pengujian', 'refresh');
            } else {
                $data['testing_name'] = array('name' => 'testing_name',
                    'class' => 'form-control',
                    'placeholder' => 'Nama Pengujian',
                    'type' => 'text'
                );
                $data['testing_price'] = array('name' => 'testing_price',
                    'class' => 'form-control',
                    'placeholder' => 'Harga',
                    'type' => 'text',
                    'onkeypress' => 'return isNumberKey(event)'
                );
                $categories = $this->category->get_all();
                $kategori = array();
                foreach ($categories as $category) {
                    $kategori[$category->id] = $category->cat_name;
                }

                $units = $this->unit->get_all();
                $satuan = array();
                foreach ($units as $unit) {
                    $satuan[$unit->id] = $unit->unit_name;
                }

                $this->basic_data();
                $this->smartyci->assign('kategori', $kategori);
                $this->smartyci->assign('satuan', $satuan);
                $this->smartyci->assign('data', $data);
                $this->smartyci->display('testing/add_test.tpl');
            }
        } else {
            redirect('/', 'refresh');
        }
    }

    function edit_pengujian($id = NULL) {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        $this->form_validation->set_rules('testing_name', 'Pengujian', 'required|xss_clean');
        $this->form_validation->set_rules('testing_price', 'Harga', 'required|xss_clean|numeric|is_natural_no_zero');

        if ($this->ion_auth->in_group(3) or $this->ion_auth->is_admin()) {
            if ($this->form_validation->run() == true) {
                $id = $this->input->post('id');
                $data = array(
                    'category_id' => $this->input->post('category'),
                    'testing_name' => $this->input->post('testing_name'),
                    'testing_price' => $this->input->post('testing_price'),
                    'unit_id' => $this->input->post('unit')
                );
                $this->test->update($id, $data);
                redirect('pengujian', 'refresh');
            } else {
                $test = $this->test->find_by_id($id);
                $data['testing_name'] = array('name' => 'testing_name',
                    'class' => 'form-control',
                    'placeholder' => 'Nama Pengujian',
                    'type' => 'text',
                    'value' => $test->testing_name
                );
                $data['testing_price'] = array('name' => 'testing_price',
                    'class' => 'form-control',
                    'placeholder' => 'Harga',
                    'type' => 'text',
                    'value' => $test->testing_price,
                    'onkeypress' => 'return isNumberKey(event)'
                );

                $categories = $this->category->get_all();
                $kategori = array();
                foreach ($categories as $category) {
                    $kategori[$category->id] = $category->cat_name;
                }

                $units = $this->unit->get_all();
                $satuan = array();
                foreach ($units as $unit) {
                    $satuan[$unit->id] = $unit->unit_name;
                }

                $this->basic_data();
                $this->smartyci->assign('kategori', $kategori);
                $this->smartyci->assign('cat_option', $test->category_id);
                $this->smartyci->assign('satuan', $satuan);
                $this->smartyci->assign('unit_option', $test->unit_id);
                $this->smartyci->assign('data', $data);
                $this->smartyci->assign('test', $test);
                $this->smartyci->display('testing/edit_test.tpl');
            }
        } else {
            redirect('/', 'refresh');
        }
    }

    function delete_pengujian() {
        if ($_SERVER['HTTP_REFERER']) {
            if ($this->test->delete($this->input->post('id'))) {
                echo "Success";
            } else {
                echo "Failed";
            }
        } else {
            redirect('pengujian', 'refresh');
        }
    }

    function history($type) {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        $user = $this->ion_auth->user()->row();
        if ($type == "member") {
            if ($this->ion_auth->in_group(2)) {
                $tests = $this->test_order->find_byuser($user->id);
            } else {
                redirect('/', 'refresh');
            }
        } else if ($type == "operator") {
            if ($this->ion_auth->in_group(2) and $this->ion_auth->in_group(4)) {
                $tests = $this->test_order->find_byuser($user->id, 4);
            } else {
                redirect('/', 'refresh');
            }
        } else if ($type == "all") {
            if ($this->ion_auth->in_group(3) or $this->ion_auth->is_admin()) {
                $tests = $this->test_order->get_all();
            } else {
                redirect('/', 'refresh');
            }
        }
        $message = $this->session->flashdata('message') ? $this->session->flashdata('message') : "";                
        
        $this->basic_data();
        $this->smartyci->assign('type', $type);
        $this->smartyci->assign('messages', $message);
        $this->smartyci->assign('tests', $tests);
        $this->smartyci->display('testing/history.tpl');
    }

    function update_status() {
        if ($_SERVER['HTTP_REFERER']) {
            $status = $this->input->post('status');
            $id = $this->input->post('id');
            switch ($status) {
                case 'O':
                    $data = array(
                        'status' => 'O',
                        'start_date' => $this->input->post('start_date') . " " . $this->input->post('start_time')
                    );
                    break;
                case 'D':
                    $data = array('status' => 'D');
                    break;
                case 'F':
                    $data = array(
                        'status' => 'F',
                        'finish_date' => date('Y-m-d H:i:s')
                    );
                    break;
            }
            if ($this->test_order->update($id, $data)) {
                echo "Success";
            } else {
                echo 'Failed';
            }
        } else {
            redirect('/', 'refresh');
        }
    }

    function upload_result() {
        if ($_SERVER['HTTP_REFERER']) {
            $id = $this->input->post('test_id');
            
            $config['upload_path'] = './asset/test_results';
            $config['max_size'] = 0;
            $config['allowed_types'] = "*";
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('test_result')) {
                $data = $this->upload->data();
                $url = $data['file_name'];
                $data = array('url_file' => $url);
                $this->test_order->update($id, $data);
                redirect('pengujian_operator', 'refresh');
            } else {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('message', $error);
                redirect('pengujian_operator', 'refresh');
            }
        } else {
            redirect('/', 'refresh');
        }
    }
}
