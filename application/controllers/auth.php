<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('member');
        $this->load->model('operator');
        $this->load->model('category');

        $this->load->library('form_validation');
        $this->load->helper('language');
        $this->load->helper('getextension');
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
        if ($this->ion_auth->logged_in()) {
            redirect('/', 'refresh');
        }

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

            if ($this->input->post('sex') == "M") {
                $photo = "avatar_male.png";
            } else if ($this->input->post('sex') == "F") {
                $photo = "avatar_female.png";
            }
            $this->db->insert('balances', array('value' => 0));

            $additional_data = array(
                'full_name' => $this->input->post('full_name'),
                'sex' => $this->input->post('sex'),
                'photo' => $photo,
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

    function configuration($group_id) {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        if ($group_id == 1) {
            if ($this->ion_auth->in_group(3)) {
                $administrators = $this->ion_auth->users($group_id)->result();

                $this->basic_data();
                $this->smartyci->assign('administrators', $administrators);
                $this->smartyci->display('configuration/administrators.tpl');
            } else {
                redirect('/', 'refresh');
            }
        } else if ($group_id == 2) {
            if ($this->ion_auth->in_group(3) or $this->ion_auth->is_admin()) {
                $members = $this->ion_auth->users($group_id)->result();
                $this->basic_data();
                $this->smartyci->assign('members', $members);
                $this->smartyci->display('configuration/members.tpl');
            } else {
                redirect('/', 'refresh');
            }
        } else if ($group_id == 4) {
            if ($this->ion_auth->in_group(3) or $this->ion_auth->is_admin()) {
                $operators = $this->ion_auth->users($group_id)->result();
                foreach ($operators as $k => $operator) {
                    $operators[$k]->categories = $this->operator->find_byuser($operator->id);
                }
                $this->basic_data();
                $this->smartyci->assign('operators', $operators);
                $this->smartyci->display('configuration/operators.tpl');
            } else {
                redirect('/', 'refresh');
            }
        }
    }

    function add_administrator() {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        if ($this->ion_auth->in_group(3)) {
            $tables = $this->config->item('tables', 'ion_auth');
            //validate form input
            $this->form_validation->set_rules('username', 'Username', 'required|xss_clean|is_unique[' . $tables['users'] . '.username]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
            $this->form_validation->set_rules('password_confirm', 'Konfirmasi Password', 'required');

            if ($this->form_validation->run() == true) {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
            }

            if ($this->form_validation->run() == true && $this->ion_auth->register($username, $password, "", array('1'))) {
                redirect("administrator", 'refresh');
            } else {
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
                $this->basic_data();
                $this->smartyci->display('configuration/add_administrator.tpl');
            }
        } else {
            redirect('/', 'refresh');
        }
    }

    function change_password($username = "") {
        $this->form_validation->set_rules('old', 'Password Lama', 'required');
        $this->form_validation->set_rules('new', 'Password Baru', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
        $this->form_validation->set_rules('new_confirm', 'Konfirmasi Password', 'required');

        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        if ($username == "") {
            $user = $this->ion_auth->user()->row();
            $username = $user->username;
            $id = $user->id;
        } else {
            $id = $this->ion_auth->get_user_id_by_username($username);
        }

        if ($this->form_validation->run() == false) {
            $usergroups = array();
            $user_groups = $this->ion_auth->get_users_groups($id)->result_array();
            foreach ($user_groups as $group) {
                $usergroups[$group['id']] = $group['name'];
            }

            $data['message'] = $this->session->flashdata('message');

            $data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
            $data['old_password'] = array(
                'name' => 'old',
                'class' => 'form-control',
                'placeholder' => 'Password Lama',
            );
            $data['new_password'] = array(
                'name' => 'new',
                'class' => 'form-control',
                'placeholder' => 'Password Baru',
                'pattern' => '^.{' . $data['min_password_length'] . '}.*$',
            );
            $data['new_password_confirm'] = array(
                'name' => 'new_confirm',
                'class' => 'form-control',
                'placeholder' => 'Konfirmasi Password Baru',
                'pattern' => '^.{' . $data['min_password_length'] . '}.*$',
            );
            $data['identity'] = $username;

            $this->basic_data();
            $this->smartyci->assign('usergroups', $usergroups);
            $this->smartyci->assign('data', $data);
            $this->smartyci->display('configuration/change_password.tpl');
        } else {
            $identity = $this->input->post('identity');
            $change = $this->ion_auth->change_password($identity, $this->input->post('old'), $this->input->post('new'));

            if ($change) {
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                redirect('ganti_password/' . $username, 'refresh');
            } else {
                $this->session->set_flashdata('message', $this->ion_auth->errors());
                redirect('ganti_password/' . $username, 'refresh');
            }
        }
    }

    function add_member() {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        if ($this->ion_auth->in_group(3) or $this->ion_auth->is_admin()) {
            $tables = $this->config->item('tables', 'ion_auth');
            //validate form input
            $this->form_validation->set_rules('full_name', 'Nama Lengkap', 'required|xss_clean');
            $this->form_validation->set_rules('username', 'Username', 'required|xss_clean|is_unique[' . $tables['users'] . '.username]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
            $this->form_validation->set_rules('password_confirm', 'Konfirmasi Password', 'required');

            if ($this->form_validation->run() == true) {
                $username = $this->input->post('username');
                $password = $this->input->post('password');

                if ($this->input->post('sex') == "M") {
                    $photo = "avatar_male.png";
                } else if ($this->input->post('sex') == "F") {
                    $photo = "avatar_female.png";
                }
                $this->db->insert('balances', array('value' => 0));

                $additional_data = array(
                    'full_name' => $this->input->post('full_name'),
                    'sex' => $this->input->post('sex'),
                    'photo' => $photo,
                    'balance_id' => $this->db->insert_id()
                );
            }
            if ($this->form_validation->run() == true && $this->ion_auth->register($username, $password, $additional_data)) {
                redirect("anggota", 'refresh');
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

                $this->basic_data();
                $this->smartyci->assign('data', $data);
                $this->smartyci->display('configuration/add_member.tpl');
            }
        } else {
            redirect('/', 'refresh');
        }
    }

    function add_operator() {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }
        
        if ($this->ion_auth->in_group(3) or $this->ion_auth->is_admin()) {            
            if($this->input->post('submit')) {
                $categories = $this->input->post('categories');
                $user_id = $this->input->post('user_id');
                foreach ( $categories as $category) {
                    $data = array(
                        'user_id' => $user_id,
                        'category_id' => $category
                    );
                    $this->operator->save($data);
                }
                $this->ion_auth->add_to_group(4, $user_id);
                redirect('operator', 'refresh');
            } else {
                $members = $this->ion_auth->users(2)->result();
                $anggota = array();
                foreach ($members as $member) {
                    $anggota[$member->id] = $member->full_name;
                }
                
                $categories = $this->category->get_all();
                $kategori = array();
                foreach ($categories as $category) {
                    $kategori[$category->id] = $category->cat_name;
                }
                
                $this->basic_data();
                $this->smartyci->assign('members', $anggota);
                $this->smartyci->assign('categories', $kategori);
                $this->smartyci->display('configuration/add_operator.tpl');
            }            
        } else {
            redirect('/', 'refresh');
        }
    }
    
    function edit_operator($id = NULL) {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }
        
        if ($this->ion_auth->in_group(3) or $this->ion_auth->is_admin()) {            
            if($this->input->post('submit')) {
                $categories = $this->input->post('categories');
                $user_id = $this->input->post('user_id');
                
                $this->operator->delete_byuser($user_id);
                foreach ( $categories as $category) {
                    $data = array(
                        'user_id' => $user_id,
                        'category_id' => $category
                    );
                    $this->operator->save($data);
                }
                redirect('operator', 'refresh');
            } else {
                $member = $this->ion_auth->user($id)->row();
                
                $categories = $this->category->get_all();
                $kategori = array();
                foreach ($categories as $category) {
                    $kategori[$category->id] = $category->cat_name;
                }
                
                $select_operator = array();
                $operators = $this->operator->find_byuser($id);
                foreach ($operators as $operator) {
                    $select_operator[] = $operator->category_id;
                }
                
                $full_name = array(
                    'class' => 'form-control',
                    'value' => $member->full_name,
                    'disabled' => 'disabled'
                );
                
                $this->basic_data();
                $this->smartyci->assign('member', $member);
                $this->smartyci->assign('categories', $kategori);
                $this->smartyci->assign('full_name', $full_name);
                $this->smartyci->assign('select_operator', $select_operator);
                $this->smartyci->display('configuration/edit_operator.tpl');
            }            
        } else {
            redirect('/', 'refresh');
        }
    }

    function delete_operator() {
        if ($_SERVER['HTTP_REFERER']) {
            $remove_operator = $this->ion_auth->remove_from_group(4, $this->input->post('user_id'));
            if ($remove_operator) {
                if ($this->operator->delete_byuser($this->input->post('user_id'))) {
                    echo "Success";
                } else {
                    echo "Failed";
                }
            } else {
                echo "Failed";
            }
        } else {
            redirect('operator', 'refresh');
        }
    }

    function account_setting($action = "") {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        $user = $this->ion_auth->user()->row();
        $username = $user->username;
        $id = $user->id;

        switch ($action) {
            case "change_avatar":
                if ($_SERVER['HTTP_REFERER']) {
                    $ext = getExtension($_FILES['file_avatar']['type']);
                    $avatar_filename = "avatar_" . $username . $ext;

                    $config['upload_path'] = './asset/avatar';
                    $config['allowed_types'] = 'jpeg|jpg|png';
                    $config['max_size'] = '1024';
                    $config['max_width'] = '0';
                    $config['max_height'] = '0';
                    $config['overwrite'] = TRUE;
                    $config['file_name'] = $avatar_filename;
                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('file_avatar')) {
                        $datafile = $this->upload->data();

                        $config['source_image'] = $datafile['full_path'];
                        $config['new_image'] = './asset/avatar';
                        $config['maintain_ratio'] = TRUE;
                        $config['height'] = 300;
                        $config['width'] = 300;
                        $config['overwrite'] = TRUE;
                        $this->load->library('image_lib', $config);

                        if ($this->image_lib->resize()) {
                            $data = array("photo" => $avatar_filename);
                            if ($this->ion_auth->update($id, $data)) {
                                echo "Success";
                            } else {
                                echo "Failed";
                            }
                        } else {
                            echo "Failed";
                        }
                    } else {
                        echo "Failed";
                    }
                } else {
                    redirect('profil', 'refresh');
                }
                break;
            case "change_profile":
                if (!$this->ion_auth->in_group(2)) {
                    redirect('profil', 'refresh');
                }

                $this->load->model('province');
                $this->load->model('state');
                $this->load->model('researcher');
                $this->load->model('research');

                $this->form_validation->set_rules('full_name', 'Nama Lengkap', 'required|xss_clean');
                $this->form_validation->set_rules('category', 'Golongan', 'required|xss_clean');
                $this->form_validation->set_rules('position', 'Jabatan', 'required|xss_clean');
                $this->form_validation->set_rules('birthplace', 'Tempat Lahir', 'required|xss_clean');
                $this->form_validation->set_rules('birthday', 'Tanggal Lahir', 'required|xss_clean');
                $this->form_validation->set_rules('address', 'Alamat', 'required|xss_clean');
                $this->form_validation->set_rules('province', 'Propinsi', 'required|xss_clean');
                $this->form_validation->set_rules('state', 'Kabupaten/Kota', 'required|xss_clean');
                $this->form_validation->set_rules('phone', 'Kabupaten/Kota', 'required|xss_clean');
                $this->form_validation->set_rules('researcher', 'Kelompok Peneliti', 'required|xss_clean');
                $this->form_validation->set_rules('research', 'Kelompok Penelitian', 'required|xss_clean');

                $member = $this->member->by_user_id($id);
                $provinces = $this->province->get_all();
                $states = $this->state->get_all();
                $researchers = $this->researcher->get_all();
                $researches = $this->research->get_all();

                if ($this->form_validation->run() == false) {
                    $data['message'] = $this->session->flashdata('message');

                    $data['full_name'] = array(
                        'name' => 'full_name',
                        'class' => 'form-control',
                        'placeholder' => 'Nama Lengkap',
                        'value' => $user->full_name,
                        'type' => 'text'
                    );
                    $data['category'] = array(
                        'name' => 'category',
                        'class' => 'form-control',
                        'placeholder' => 'Golongan',
                        'value' => !empty($member->category) ? $member->category : "",
                        'type' => 'text'
                    );
                    $data['position'] = array(
                        'name' => 'position',
                        'class' => 'form-control',
                        'placeholder' => 'Jabatan',
                        'value' => !empty($member->position) ? $member->position : "",
                        'type' => 'text'
                    );
                    $data['birthplace'] = array(
                        'name' => 'birthplace',
                        'class' => 'form-control',
                        'placeholder' => 'Tempat Lahir',
                        'value' => !empty($member->birthplace) ? $member->birthplace : "",
                        'type' => 'text'
                    );
                    $data['address'] = array(
                        'name' => 'address',
                        'class' => 'form-control',
                        'rows' => 3,
                        'value' => !empty($member->address) ? $member->address : ""
                    );

                    $this->basic_data();
                    $this->smartyci->assign('action', 'Ubah Informasi Pribadi');
                    $this->smartyci->assign('member', $member);
                    $this->smartyci->assign('provinces', $provinces);
                    $this->smartyci->assign('states', $states);
                    $this->smartyci->assign('researchers', $researchers);
                    $this->smartyci->assign('researches', $researches);
                    $this->smartyci->assign('data', $data);
                    $this->smartyci->display('configuration/profile/change_personal_info.tpl');
                } else {
                    $data_users = array(
                        'full_name' => $this->input->post('full_name'),
                        'sex' => $this->input->post('sex')
                    );

                    $data_member = array(
                        'user_id' => $id,
                        'category' => $this->input->post('category'),
                        'position' => $this->input->post('position'),
                        'birthplace' => $this->input->post('birthplace'),
                        'birthday' => $this->input->post('birthday'),
                        'address' => $this->input->post('address'),
                        'province_id' => $this->input->post('province'),
                        'state_id' => $this->input->post('state'),
                        'phone' => $this->input->post('phone'),
                        'researcher_id' => $this->input->post('researcher'),
                        'research_id' => $this->input->post('research')
                    );

                    if ($this->input->post('oper') == "add") {
                        $this->ion_auth->update($id, $data_users);
                        $this->member->create_member($data_member);
                        $this->session->set_flashdata('message', "Informasi Pribadi Berhasil Dirubah");
                        redirect('profil', 'refresh');
                    } else if ($this->input->post('oper') == "edit") {
                        $this->ion_auth->update($id, $data_users);
                        $this->member->update_member($this->input->post('member_id'), $data_member);
                        $this->session->set_flashdata('message', "Informasi Pribadi Berhasil Dirubah");
                        redirect('profil', 'refresh');
                    }
                }
                break;
            case "change_password":
                $this->form_validation->set_rules('old', 'Password Lama', 'required');
                $this->form_validation->set_rules('new', 'Password Baru', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
                $this->form_validation->set_rules('new_confirm', 'Konfirmasi Password', 'required');

                if ($this->form_validation->run() == false) {
                    $data['message'] = $this->session->flashdata('message');

                    $data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
                    $data['old_password'] = array(
                        'name' => 'old',
                        'class' => 'form-control',
                        'placeholder' => 'Password Lama',
                    );
                    $data['new_password'] = array(
                        'name' => 'new',
                        'class' => 'form-control',
                        'placeholder' => 'Password Baru',
                        'pattern' => '^.{' . $data['min_password_length'] . '}.*$',
                    );
                    $data['new_password_confirm'] = array(
                        'name' => 'new_confirm',
                        'class' => 'form-control',
                        'placeholder' => 'Konfirmasi Password Baru',
                        'pattern' => '^.{' . $data['min_password_length'] . '}.*$',
                    );
                    $data['identity'] = $username;

                    $this->basic_data();
                    $this->smartyci->assign('action', 'Ubah Password');
                    $this->smartyci->assign('data', $data);
                    $this->smartyci->display('configuration/profile/change_password.tpl');
                } else {
                    $identity = $this->input->post('identity');
                    $change = $this->ion_auth->change_password($identity, $this->input->post('old'), $this->input->post('new'));

                    if ($change) {
                        $this->session->set_flashdata('message', $this->ion_auth->messages());
                        redirect('profil/ubah_password', 'refresh');
                    } else {
                        $this->session->set_flashdata('message', $this->ion_auth->errors());
                        redirect('profil/ubah_password', 'refresh');
                    }
                }
                break;
            default:
                if ($this->ion_auth->in_group(2)) {
                    $member = $this->member->by_user_id($id);
                    $this->smartyci->assign('member', $member);
                }
                $this->smartyci->assign('action', 'Informasi Akun');
                $this->basic_data();
                $this->smartyci->display('configuration/profile/personal.tpl');
                break;
        }
    }

}
