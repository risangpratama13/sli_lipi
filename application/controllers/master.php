<?php

defined('BASEPATH') OR exit('No direct script access allowed');

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

        if ($this->ion_auth->in_group(3) or $this->ion_auth->is_admin()) {
            $units = $this->unit->get_all();
            $unit_name = array(
                'name' => 'unit_name',
                'class' => 'form-control',
                'placeholder' => 'Nama Satuan',
                'type' => 'text',
                'required' => 'required'
            );
            $this->basic_data();
            $this->smartyci->assign('units', $units);
            $this->smartyci->assign('unit_name', $unit_name);
            $this->smartyci->display('master-data/unit.tpl');
        } else {
            redirect('/', 'refresh');
        }
    }

    function crud_units() {
        if ($_SERVER['HTTP_REFERER']) {
            $action = $this->input->post('action');

            switch ($action) {
                case "delete":
                    if ($this->unit->delete($this->input->post('id'))) {
                        echo "Success";
                    } else {
                        echo "Failed";
                    }
                    break;
                case "edit":
                    $data = array("unit_name" => $this->input->post('unit_name'));
                    $this->unit->update($this->input->post('id'), $data);
                    redirect('unit', 'refresh');
                    break;
                case "add":
                default:
                    $data = array("unit_name" => $this->input->post('unit_name'));
                    $this->unit->save($data);
                    redirect('unit', 'refresh');                    
                    break;
            }
        } else {
            redirect('/', 'refresh');
        }
    }

    function item_types() {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        if ($this->ion_auth->in_group(3) or $this->ion_auth->is_admin()) {
            $item_types = $this->item_type->get_all();
            $data['type_name'] = array(
                'name' => 'type_name',
                'class' => 'form-control',
                'placeholder' => 'Nama Kategori',
                'type' => 'text',
                'required' => 'required'
            );
            $data['type_point'] = array(
                'name' => 'type_point',
                'class' => 'form-control',
                'placeholder' => 'Jumlah Poin',
                'type' => 'text',
                'required' => 'required',
                'onkeypress' => 'return isNumberKey(event)'
            );
            
            $this->basic_data();
            $this->smartyci->assign('types', $item_types);
            $this->smartyci->assign('data', $data);
            $this->smartyci->display('master-data/item_type.tpl');
        } else {
            redirect('/', 'refresh');
        }
    }

    function crud_item_types() {
        if ($_SERVER['HTTP_REFERER']) {
            $action = $this->input->post('action');

            switch ($action) {
                case "delete":
                    if ($this->item_type->delete($this->input->post('id'))) {
                        echo "Success";
                    } else {
                        echo "Failed";
                    }
                    break;
                case "edit":
                    $data = array(
                        "type_name" => $this->input->post('type_name'),
                        "type_point" => $this->input->post('type_point')
                    );
                    $this->item_type->update($this->input->post('id'), $data);
                    redirect('tipe_item', 'refresh');
                    break;
                case "add":
                default:
                    $data = array(
                        "type_name" => $this->input->post('type_name'),
                        "type_point" => $this->input->post('type_point')
                    );
                    $this->item_type->save($data);
                    redirect('tipe_item', 'refresh');
                    break;
            }
        } else {
            redirect('/', 'refresh');
        }
    }

    function kurs_point() {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        if ($this->ion_auth->in_group(3) or $this->ion_auth->is_admin()) {
            $this->form_validation->set_rules('idr', 'Nilai Tukar Rupiah', 'required|xss_clean|numeric|is_natural_no_zero');
            if ($this->form_validation->run() == true) {
                $data = array("idr" => $this->input->post('idr'));
                $this->kurs_point->update($data);
                redirect('kurs_point', 'refresh');
            } else {
                $kurs = $this->kurs_point->get_kurs();
                $form_kurs = array(
                    'name' => 'idr',
                    'class' => 'form-control',
                    'placeholder' => 'Nilai Tukar Rupiah',
                    'type' => 'text',
                    'onkeypress' => 'return isNumberKey(event)'
                );

                $this->basic_data();
                $this->smartyci->assign('kurs', $kurs);
                $this->smartyci->assign('form_kurs', $form_kurs);
                $this->smartyci->display('master-data/kurs_point.tpl');
            }
        } else {
            redirect('/', 'refresh');
        }
    }

}
