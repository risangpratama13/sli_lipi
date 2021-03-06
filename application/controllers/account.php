<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Account extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('item');
        $this->load->model('item_type');
        $this->load->model('balance_log');
        $this->load->model('balance');
        $this->load->model('kurs_point');

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

    /** Fungsi Untuk Menangani Penambahan Saldo dari Upload Item * */
    function items() {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        $user = $this->ion_auth->user()->row();
        if ($this->ion_auth->in_group(2)) {
            $items = $this->item->get_by_user($user->id);
        } else if ($this->ion_auth->in_group(3) or $this->ion_auth->is_admin()) {
            $items = $this->item->get_all();
        }

        $this->basic_data();
        $this->smartyci->assign('items', $items);
        $this->smartyci->display('account/items.tpl');
    }

    function add_item() {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        if ($this->ion_auth->in_group(2)) {
            $this->form_validation->set_rules('item_title', 'Judul Paper', 'required|xss_clean');
            $this->form_validation->set_rules('author_num', 'Jumlah Penulis', 'required|numeric|xss_clean');

            $user = $this->ion_auth->user()->row();
            if ($this->form_validation->run() == true) {
                if ($_FILES['paper']['name'] == "" and $this->input->post('paper_url') == "") {
                    $error = array('error' => "Kolom URL Berkas Harus Diisi atau Unggah Berkas");
                    $this->session->set_flashdata('message', $error);
                    redirect('tambah_item', 'refresh');
                } else {
                    if ($_FILES['paper']['name'] == "") {
                        $url = $this->input->post('paper_url');
                    } else {
                        $config['upload_path'] = './asset/items';
                        $config['max_size'] = 0;
                        $config['allowed_types'] = "*";
                        $config['encrypt_name'] = TRUE;
                        $this->load->library('upload', $config);

                        if ($this->upload->do_upload('paper')) {
                            $data = $this->upload->data();
                            $url = $data['file_name'];
                        } else {
                            $error = array('error' => $this->upload->display_errors());
                            $this->session->set_flashdata('message', $error);
                            redirect('tambah_item', 'refresh');
                        }
                    }
                }

                $data = array(
                    'user_id' => $user->id,
                    'item_title' => $this->input->post('item_title'),
                    'item_type_id' => $this->input->post('item_type'),
                    'author_num' => $this->input->post('author_num'),
                    'url' => $url,
                    'description' => $this->input->post('description')
                );

                if ($this->item->save($data)) {
                    $admins = $this->ion_auth->users(array(1, 3))->result();
                    foreach ($admins as $admin) {
                        $param = array(
                            'notif_to' => $admin->id,
                            'message' => $user->full_name . " Mengajukan Penambahan Saldo",
                            'notif_cat' => 5,
                            'notif_link' => base_url() . "item"
                        );
                        $this->create_notif($param);
                    }
                    redirect('item', 'refresh');
                } else {
                    $error = array('error' => "Data Tidak Berhasil Disimpan");
                    $this->session->set_flashdata('message', $error);
                    redirect('tambah_item', 'refresh');
                }
            } else {
                $item_types = $this->item_type->get_all();
                $kategori_item = array();
                foreach ($item_types as $item_type) {
                    $kategori_item[$item_type->id] = $item_type->type_name;
                }

                $data['message'] = $this->session->flashdata('message') ? $this->session->flashdata('message') : "";
                $data['item_title'] = array(
                    'name' => 'item_title',
                    'class' => 'form-control',
                    'placeholder' => 'Judul Paper'
                );

                $data['author_num'] = array(
                    'name' => 'author_num',
                    'type' => 'number',
                    'class' => 'form-control',
                    'placeholder' => 'Jumlah Penulis',
                    'min' => 1,
                    'onkeypress' => 'return isNumberKey(event)'
                );

                $data['description'] = array(
                    'name' => 'description',
                    'class' => 'form-control',
                    'rows' => 3
                );

                $data['paper_url'] = array(
                    'name' => 'paper_url',
                    'class' => 'form-control',
                    'placeholder' => 'URL Berkas',
                    'type' => 'url'
                );

                $data['paper_path'] = array(
                    'id' => 'paper_path',
                    'class' => 'form-control',
                    'disabled' => 'disabled'
                );

                $this->basic_data();
                $this->smartyci->assign('data', $data);
                $this->smartyci->assign('action', 'add');
                $this->smartyci->assign('kategori', $kategori_item);
                $this->smartyci->display('account/form_item.tpl');
            }
        } else {
            redirect('item', 'refresh');
        }
    }

    function edit_item($id = NULL) {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        if ($this->ion_auth->in_group(2)) {
            $this->form_validation->set_rules('item_title', 'Judul Paper', 'required|xss_clean');
            $this->form_validation->set_rules('author_num', 'Jumlah Penulis', 'required|xss_clean');

            $user = $this->ion_auth->user()->row();
            if ($this->form_validation->run() == true) {
                if ($_FILES['paper']['name'] == "" and $this->input->post('paper_url') == "") {
                    $error = array('error' => "Kolom URL Berkas Harus Diisi atau Unggah Berkas");
                    $this->session->set_flashdata('message', $error);
                    redirect('ubah_item/' . $this->input->post('id'), 'refresh');
                } else {
                    if ($_FILES['paper']['name'] == "") {
                        $url = $this->input->post('paper_url');
                    } else {
                        $config['upload_path'] = './asset/items';
                        $config['max_size'] = 0;
                        $config['allowed_types'] = "*";
                        $config['encrypt_name'] = TRUE;
                        $config['overwrite'] = TRUE;
                        $this->load->library('upload', $config);

                        if ($this->upload->do_upload('paper')) {
                            $data = $this->upload->data();
                            $url = $data['file_name'];
                        } else {
                            $error = array('error' => $this->upload->display_errors());
                            $this->session->set_flashdata('message', $error);
                            redirect('ubah_item/' . $this->input->post('id'), 'refresh');
                        }
                    }
                }

                $data = array(
                    'item_title' => $this->input->post('item_title'),
                    'item_type_id' => $this->input->post('item_type'),
                    'url' => $url,
                    'author_num' => $this->input->post('author_num'),
                    'description' => $this->input->post('description')
                );

                $this->item->update($this->input->post('id'), $data);
                redirect('item', 'refresh');
            } else {
                $item = $this->item->find_by_id($id);
                $item_types = $this->item_type->get_all();
                $kategori_item = array();
                foreach ($item_types as $item_type) {
                    $kategori_item[$item_type->id] = $item_type->type_name;
                }

                $data['message'] = $this->session->flashdata('message') ? $this->session->flashdata('message') : "";
                $data['item_title'] = array(
                    'name' => 'item_title',
                    'class' => 'form-control',
                    'placeholder' => 'Judul Paper',
                    'value' => $item->item_title
                );

                $data['author_num'] = array(
                    'name' => 'author_num',
                    'type' => 'number',
                    'class' => 'form-control',
                    'placeholder' => 'Jumlah Penulis',
                    'min' => 1,
                    'onkeypress' => 'return isNumberKey(event)',
                    'value' => $item->author_num
                );

                $data['description'] = array(
                    'name' => 'description',
                    'class' => 'form-control',
                    'rows' => 3,
                    'value' => $item->description
                );

                if (file_exists('./asset/items/' . $item->url)) {
                    $data['paper_path'] = array(
                        'id' => 'paper_path',
                        'class' => 'form-control',
                        'disabled' => 'disabled',
                        'value' => $item->url
                    );
                    $data['paper_url'] = array(
                        'name' => 'paper_url',
                        'class' => 'form-control',
                        'placeholder' => 'Paper URL',
                        'type' => 'url'
                    );
                } else {
                    $data['paper_path'] = array(
                        'id' => 'paper_path',
                        'class' => 'form-control',
                        'disabled' => 'disabled'
                    );
                    $data['paper_url'] = array(
                        'name' => 'paper_url',
                        'class' => 'form-control',
                        'placeholder' => 'Paper URL',
                        'value' => $item->url,
                        'type' => 'url'
                    );
                }

                $data['url'] = $item->url;
                $data['item_id'] = $item->id;
                $data['select_option'] = $item->item_type_id;

                $this->basic_data();
                $this->smartyci->assign('data', $data);
                $this->smartyci->assign('kategori', $kategori_item);
                $this->smartyci->assign('action', 'edit');
                $this->smartyci->display('account/form_item.tpl');
            }
        } else if ($this->ion_auth->in_group(3) or $this->ion_auth->is_admin()) {
            if ($_SERVER['HTTP_REFERER']) {
                $data = array('status' => $this->input->post('status'));
                $item = $this->item->find_by_id($this->input->post('id'));
                if ($this->item->update($this->input->post('id'), $data)) {
                    if ($this->input->post('status') == "O") {
                        $param = array(
                            'notif_to' => $item->user_id,
                            'message' => "Pengajuan Penambahan Saldo Disetujui",
                            'notif_cat' => 6,
                            'notif_link' => base_url() . "item"
                        );
                        $this->create_notif($param);
                        echo "Item Telah Disetujui";
                    } else {
                        $param = array(
                            'notif_to' => $item->user_id,
                            'message' => "Pengajuan Penambahan Saldo Tidak Disetujui",
                            'notif_cat' => 6,
                            'notif_link' => base_url() . "item"
                        );
                        $this->create_notif($param);
                        echo "Item Tidak Disetujui";
                    }
                } else {
                    echo "Failed";
                }
            } else {
                redirect('item', 'refresh');
            }
        }
    }

    function delete_item() {
        if ($_SERVER['HTTP_REFERER']) {
            $item = $this->item->find_by_id($this->input->post('id'));
            if (file_exists('./asset/items/' . $item->url)) {
                unlink('./asset/items/' . $item->url);
            }

            if ($this->item->delete($this->input->post('id'))) {
                echo "Success";
            } else {
                echo "Failed";
            }
        } else {
            redirect('item', 'refresh');
        }
    }

    /** Akhir Dari Fungsi Untuk Menangani Penambahan Saldo dari Upload Item * */

    /** Rincian Saldo * */
    function balance_detail() {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        if ($this->ion_auth->in_group(2)) {
            $user = $this->ion_auth->user()->row();
            $balances = $this->balance_log->find_byuser($user->id);
            $kurs = $this->kurs_point->get_kurs();
            $point = $this->balance->get_value($user->balance_id);
            (int) $saldo = (double) $point * (double) $kurs->idr;

            $this->basic_data();
            $this->smartyci->assign('saldo', $saldo);
            $this->smartyci->assign('balances', $balances);
            $this->smartyci->display('account/balance_log.tpl');
        } else {
            redirect('/', 'refresh');
        }
    }

    function create_notif($param) {
        $expireDate = date("Y-m-d H:i:s", strtotime("+1 month", now()));
        $mongExpireAt = new MongoDate(strtotime($expireDate));
        $data_notif = array(
            'expireAt' => $mongExpireAt,
            'notif_to' => $param['notif_to'],
            'message' => $param['message'],
            'notif_date' => date("Y-m-d H:i:s"),
            'read_status' => 0,
            'notif_cat' => $param['notif_cat'],
            'notif_link' => $param['notif_link']
        );
        $this->mongo_db->db->insert($data_notif);
    }

}
