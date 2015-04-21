<?php

defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set("Asia/Jakarta");

class Master extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('item_type');
        $this->load->model('kurs_point');
        $this->load->model('unit');
        $this->load->model('tool');
        $this->load->model('research_group');

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

    function config_point() {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        if ($this->ion_auth->in_group(3) or $this->ion_auth->is_admin()) {
            if ($this->input->post('ubah_kurs')) {
                $this->form_validation->set_rules('idr', 'Nilai Tukar Rupiah', 'required|xss_clean|numeric|is_natural_no_zero');
                if ($this->form_validation->run() == true) {
                    $data = array(
                        "idr" => $this->input->post('idr'),
                        "last_update" => date('Y-m-d H:i:s')
                    );
                    $this->kurs_point->update($data);
                    redirect('config_point', 'refresh');
                }
            } else if ($this->input->post('ubah_init_saldo')) {
                $this->form_validation->set_rules('init_saldo', 'Saldo Awal Anggota', 'required|xss_clean|numeric|is_natural_no_zero');
                if ($this->form_validation->run() == true) {
                    $data = array("init_point" => $this->input->post('init_saldo'));
                    $this->kurs_point->update($data);
                    redirect('config_point', 'refresh');
                }
            } else if ($this->input->post('ubah_test_percent')) {
                $this->form_validation->set_rules('test_percent', 'Persentasi Poin Operator', 'required|xss_clean|numeric|is_natural_no_zero');
                if ($this->form_validation->run() == true) {
                    $data = array("test_percent" => $this->input->post('test_percent'));
                    $this->kurs_point->update($data);
                    redirect('config_point', 'refresh');
                }
            } else if ($this->input->post('ubah_min_saldo')) {
                $this->form_validation->set_rules('min_saldo', 'Minimum Saldo', 'required|xss_clean|numeric|is_natural_no_zero');
                if ($this->form_validation->run() == true) {
                    $data = array("min_saldo" => $this->input->post('min_saldo'));
                    $this->kurs_point->update($data);
                    redirect('config_point', 'refresh');
                }
            }


            $config = $this->kurs_point->get_kurs();
            $form_kurs = array(
                'name' => 'idr',
                'class' => 'form-control',
                'placeholder' => 'Nilai Tukar Rupiah',
                'type' => 'text',
                'value' => $config->idr,
                'onkeypress' => 'return isNumberKey(event)'
            );
            $form_init_saldo = array(
                'name' => 'init_saldo',
                'class' => 'form-control',
                'placeholder' => 'Saldo Awal Anggota',
                'type' => 'text',
                'value' => $config->init_point,
                'onkeypress' => 'return isNumberKey(event)'
            );
            $form_test_percent = array(
                'name' => 'test_percent',
                'class' => 'form-control',
                'placeholder' => 'Persentase Poin Operator',
                'type' => 'text',
                'value' => $config->test_percent,
                'onkeypress' => 'return isNumberKey(event)'
            );
            $form_min_saldo = array(
                'name' => 'min_saldo',
                'class' => 'form-control',
                'placeholder' => 'Konfigurasi Minimum Saldo',
                'type' => 'text',
                'value' => $config->min_saldo,
                'onkeypress' => 'return isNumberKey(event)'
            );

            $this->basic_data();
            $this->smartyci->assign('kurs', $config);
            $this->smartyci->assign('form_kurs', $form_kurs);
            $this->smartyci->assign('form_init_saldo', $form_init_saldo);
            $this->smartyci->assign('form_test_percent', $form_test_percent);
            $this->smartyci->assign('form_min_saldo', $form_min_saldo);
            $this->smartyci->display('master-data/kurs_point.tpl');
        } else {
            redirect('/', 'refresh');
        }
    }

    function tools() {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        if ($this->ion_auth->in_group(3) or $this->ion_auth->is_admin()) {
            $tools = $this->tool->get_all();
            $tool_name = array(
                'name' => 'tool_name',
                'class' => 'form-control',
                'placeholder' => 'Nama Alat',
                'type' => 'text',
                'required' => 'required'
            );

            $tool_qty = array(
                'name' => 'tool_qty',
                'class' => 'form-control',
                'placeholder' => 'Jumlah Alat',
                'type' => 'number',
                'required' => 'required',
                'min' => 1,
                'value' => 1,
                'max' => 100
            );
            $this->basic_data();
            $this->smartyci->assign('tools', $tools);
            $this->smartyci->assign('tool_name', $tool_name);
            $this->smartyci->assign('tool_qty', $tool_qty);
            $this->smartyci->display('master-data/tool.tpl');
        } else {
            redirect('/', 'refresh');
        }
    }

    function crud_tools() {
        if ($_SERVER['HTTP_REFERER']) {
            $action = $this->input->post('action');

            switch ($action) {
                case "delete":
                    if ($this->tool->delete($this->input->post('id'))) {
                        echo "Success";
                    } else {
                        echo "Failed";
                    }
                    break;
                case "edit":
                    $data = array(
                        "tool_name" => $this->input->post('tool_name'),
                        "tool_qty" => $this->input->post('tool_qty')
                    );
                    $this->tool->update($this->input->post('id'), $data);
                    redirect('tool', 'refresh');
                    break;
                case "add":
                default:
                    $data = array(
                        "tool_name" => $this->input->post('tool_name'),
                        "tool_qty" => $this->input->post('tool_qty')
                    );
                    $this->tool->save($data);
                    redirect('tool', 'refresh');
                    break;
            }
        } else {
            redirect('/', 'refresh');
        }
    }

    function research_group() {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        if ($this->ion_auth->in_group(3) or $this->ion_auth->is_admin()) {
            $research_groups = $this->research_group->get_all();
            $users = array();
            foreach ($research_groups as $research_group) {
                if($research_group->user_id != NULL) {
                    $user = $this->ion_auth->user($research_group->user_id)->row();
                    $users[$research_group->user_id] = $user->full_name;
                }
            }

            $this->basic_data();
            $this->smartyci->assign('users', $users);
            $this->smartyci->assign('research_groups', $research_groups);
            $this->smartyci->display('master-data/research_group/lists.tpl');
        } else {
            redirect('/', 'refresh');
        }
    }

    function add_research_group() {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        $this->form_validation->set_rules('group_name', 'Nama Kelompok Penelitian', 'required|xss_clean');
        $this->form_validation->set_rules('researcher', 'Deputi Bidang', 'required|xss_clean');
        $this->form_validation->set_rules('research', 'Satuan Kerja', 'required|xss_clean');

        if ($this->ion_auth->in_group(3) or $this->ion_auth->is_admin()) {
            if ($this->form_validation->run() == true) {
                $data = array(
                    'researcher_id' => $this->input->post('researcher'),
                    'research_id' => $this->input->post('research'),
                    'res_group_name' => $this->input->post('group_name')
                );
                $this->research_group->save($data);
                redirect('research_group', 'refresh');
            } else {
                $this->load->model('research');
                $this->load->model('researcher');

                $researchers = $this->researcher->get_all();
                $researchs = $this->research->get_all();

                $users = $this->ion_auth->users(2)->result();
                $leaders = array();
                foreach ($users as $user) {
                    $research_group = $this->research_group->find_byuser($user->id);
                    if (empty($research_group)) {
                        $leaders[$user->id] = $user->full_name;
                    }
                }

                $group_name = array('name' => 'group_name',
                    'class' => 'form-control',
                    'placeholder' => 'Kelompok Penelitan',
                    'type' => 'text'
                );

                $this->basic_data();
                $this->smartyci->assign('action', 'add');
                $this->smartyci->assign('researches', $researchs);
                $this->smartyci->assign('researchers', $researchers);
                $this->smartyci->assign('group_name', $group_name);
                $this->smartyci->assign('users', $leaders);
                $this->smartyci->display('master-data/research_group/form.tpl');
            }
        } else {
            redirect('/', 'refresh');
        }
    }

    function edit_research_group($id = NULL) {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        $this->form_validation->set_rules('group_name', 'Nama Kelompok Penelitian', 'required|xss_clean');
        $this->form_validation->set_rules('researcher', 'Deputi Bidang', 'required|xss_clean');
        $this->form_validation->set_rules('research', 'Satuan Kerja', 'required|xss_clean');

        if ($this->ion_auth->in_group(3) or $this->ion_auth->is_admin()) {
            if ($this->form_validation->run() == true) {
                $id = $this->input->post('id');
                $data = array(
                    'researcher_id' => $this->input->post('researcher'),
                    'research_id' => $this->input->post('research'),
                    'res_group_name' => $this->input->post('group_name')
                );
                $this->research_group->update($id, $data);
                redirect('research_group', 'refresh');
            } else {
                $this->load->model('research');
                $this->load->model('researcher');

                $research_group = $this->research_group->find_byid($id);
                if (!empty($research_group)) {
                    $researchers = $this->researcher->get_all();
                    $researchs = $this->research->get_all();

                    $users = $this->ion_auth->users(2)->result();
                    $leaders = array();
                    foreach ($users as $user) {
                        $research_group_user = $this->research_group->find_byuser($user->id);
                        if (empty($research_group_user)) {
                            $leaders[$user->id] = $user->full_name;
                        }
                    }

                    $group_name = array('name' => 'group_name',
                        'class' => 'form-control',
                        'placeholder' => 'Kelompok Penelitan',
                        'type' => 'text',
                        'value' => $research_group->res_group_name
                    );

                    $this->basic_data();
                    $this->smartyci->assign('action', 'edit');
                    $this->smartyci->assign('research_group', $research_group);
                    $this->smartyci->assign('researches', $researchs);
                    $this->smartyci->assign('researchers', $researchers);
                    $this->smartyci->assign('group_name', $group_name);
                    $this->smartyci->assign('users', $leaders);
                    $this->smartyci->display('master-data/research_group/form.tpl');
                } else {
                    redirect('research_group', 'refresh');
                }
            }
        } else {
            redirect('/', 'refresh');
        }
    }
    
    function delete_research_group() {
        if ($_SERVER['HTTP_REFERER']) {
            if ($this->research_group->delete($this->input->post('id'))) {
                echo "Success";
            } else {
                echo "Failed";
            }
        } else {
            redirect('research_group', 'refresh');
        }
    }

}
