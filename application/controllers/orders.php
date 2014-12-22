<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Orders extends CI_Controller {

    private $point;
    private $kurs;
    private $idr;

    function __construct() {
        parent::__construct();
        $this->load->model('order');
        $this->load->model('test_order');
        $this->load->model('test');
        $this->load->model('member');
        $this->load->model('operator');
        $this->load->model('category');
        $this->load->model('balance');
        $this->load->model('kurs_point');

        if ($this->ion_auth->in_group(2)) {
            $user = $this->ion_auth->user()->row();
            $kurs = $this->kurs_point->get_kurs();
            $this->point = $this->balance->get_value($user->balance_id);
            $this->kurs = $kurs->idr;
            (int) $this->idr = (int) $this->point * (int) $this->kurs;
        }
    }

    function basic_data() {
        $user = $this->ion_auth->user()->row();
        $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
        $groups = array();
        foreach ($user_groups as $user_group) {
            $groups[$user_group->id] = $user_group->name;
        }

        if ($this->ion_auth->in_group(2)) {
            $this->smartyci->assign('idr', $this->idr);
            $this->smartyci->assign('point', $this->point);
            $this->smartyci->assign('shopping_carts', $this->cart->total_items());
            $this->smartyci->assign('contents', $this->cart->contents());
        }

        $this->smartyci->assign('user', $user);
        $this->smartyci->assign('groups', $groups);
    }

    /** Fungsi Untuk Menangani Pengajuan Pengujian ** */
    function index() {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        if ($this->ion_auth->in_group(3) or $this->ion_auth->is_admin()) {
            $orders = $this->order->get_all();
        } else {
            $user = $this->ion_auth->user()->row();
            $orders = $this->order->find_byuser($user->id);
        }

        $this->basic_data();
        $this->smartyci->assign('orders', $orders);
        $this->smartyci->display('order/orders.tpl');
    }

    function add_order() {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        if ($this->ion_auth->in_group(2)) {
            if ($this->idr == 0) {
                $this->session->set_flashdata('message', 'Anda Tidak Memiliki Saldo Untuk Melakukan Pengajuan Pengujian');
                redirect('keranjang_belanja', 'refresh');
            }

            $tests = $this->test->get_all();

            $this->basic_data();
            $this->smartyci->assign('tests', $tests);
            $this->smartyci->display('order/add_order.tpl');
        } else {
            redirect('/', 'refresh');
        }
    }

    function view_cart() {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        if ($this->ion_auth->in_group(2)) {
            $carts = $this->cart->contents();
            $total = $this->cart->total();
            $product_options = array();
            foreach ($carts as $cart) {
                foreach ($this->cart->product_options($cart['rowid']) as $option_name => $option_value) {
                    $product_options[$cart['rowid']][$option_name] = $option_value;
                }
            }
            $message = $this->session->flashdata('message') ? $this->session->flashdata('message') : "";

            $this->basic_data();
            $this->smartyci->assign('total', $total);
            $this->smartyci->assign('message', $message);
            $this->smartyci->assign('carts', $carts);
            $this->smartyci->assign('product_options', $product_options);
            $this->smartyci->display('order/view_cart.tpl');
        } else {
            redirect('/', 'refresh');
        }
    }

    function add_cart($id = NULL, $category = NULL) {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        if ($this->ion_auth->in_group(2)) {
            if ($this->input->post('submit')) {
                $test_id = $this->input->post('test_id');
                $qty = $this->input->post('qty');
                $test = $this->test->find_by_id($test_id);
                $operator_id = $this->input->post('operator');
                $operator = $this->operator->get_byid($operator_id);

                $data = array(
                    'id' => $test->id,
                    'qty' => $qty,
                    'price' => $test->testing_price,
                    'name' => $test->testing_name,
                    'options' => array('operator' => $operator_id, 'operator_name' => $operator->full_name)
                );
                $this->cart->insert($data);
                redirect('keranjang_belanja', 'refresh');
            } else {
                if ($this->idr == 0) {
                    $this->session->set_flashdata('message', 'Anda Tidak Memiliki Saldo Untuk Melakukan Pengajuan Pengujian');
                    redirect('keranjang_belanja', 'refresh');
                }

                $operators = $this->operator->find_bycategory($category);
                $test = $this->test->find_by_id($id);
                $qty = array(
                    "name" => 'qty',
                    "class" => "form-control",
                    "min" => 1,
                    'required' => 'required',
                    'onkeypress' => 'return isNumberKey(event)',
                    'type' => 'number'
                );

                $this->basic_data();
                $this->smartyci->assign('test_id', $id);
                $this->smartyci->assign('qty', $qty);
                $this->smartyci->assign('test', $test);
                $this->smartyci->assign('operators', $operators);
                $this->smartyci->display('order/add_cart.tpl');
            }
        } else {
            redirect('/', 'refresh');
        }
    }

    function save_cart() {
        if ($_SERVER['HTTP_REFERER']) {
            if ($this->input->post('checkout')) {
                $total = $this->cart->total();
                if ($total > $this->idr) {
                    $this->session->set_flashdata('message', 'Saldo Anda Tidak Mencukupi Untuk Melakukan Pengajuan Pengujian');
                    redirect('keranjang_belanja', 'refresh');
                } else if ($this->cart->total_items() > 0) {
                    $user = $this->ion_auth->user()->row();
                    $total = $this->cart->total();

                    $order_no = $this->order->max_order_no($user->id);
                    $order_no = $order_no + 1;

                    $code = $user->id . date("Ymd") . $order_no;
                    $data = array(
                        'order_no' => $order_no,
                        'user_id' => $user->id,
                        'code' => $code,
                        'total' => $total
                    );
                    if ($this->order->save($data)) {
                        $order_id = $this->db->insert_id();
                        foreach ($this->cart->contents() as $items) {
                            $data = array(
                                'order_id' => $order_id,
                                'operator_id' => $items['options']['operator'],
                                'test_id' => $items['id'],
                                'qty' => $items['qty'],
                                'subtotal' => $items['subtotal']
                            );
                            $this->test_order->save($data);
                        }
                        $this->cart->destroy();
                        redirect('order', 'refresh');
                    } else {
                        $this->session->set_flashdata('message', 'Terjadi Kegagalan Menyimpan Pengajuan Pengujian');
                        redirect('keranjang_belanja', 'refresh');
                    }
                } else {
                    $this->session->set_flashdata('message', 'Tidak Ada Pengujian Dalam Keranjang Belanja');
                    redirect('keranjang_belanja', 'refresh');
                }
            } else if ($this->input->post('ubah')) {
                $total_items = $this->cart->total_items();
                if ($total_items > 0) {
                    for ($i = 1; $i <= $total_items; $i++) {
                        $rowid = $this->input->post($i . 'rowid');
                        $qty = $this->input->post($i . 'qty');

                        $data = array(
                            'rowid' => $rowid,
                            'qty' => $qty
                        );
                        $this->cart->update($data);
                    }
                    redirect('keranjang_belanja', 'refresh');
                } else {
                    $this->session->set_flashdata('message', 'Tidak Ada Pengujian Dalam Keranjang Belanja');
                    redirect('keranjang_belanja', 'refresh');
                }
            } else {
                redirect('keranjang_belanja', 'refresh');
            }
        } else {
            redirect('keranjang_belanja', 'refresh');
        }
    }

    function delete_cart($rowid) {
        $data = array(
            'rowid' => $rowid,
            'qty' => 0
        );
        $this->cart->update($data);
        redirect('keranjang_belanja');
    }

    function view_order($code) {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        $order = $this->order->find_bycode($code);
        $test_orders = $this->test_order->find_byorder($order->id);
        $member = $this->member->by_user_id($order->user_id);

        $this->basic_data();
        $this->smartyci->assign('order', $order);
        $this->smartyci->assign('member', $member);
        $this->smartyci->assign('test_orders', $test_orders);
        $this->smartyci->display('order/view_order.tpl');
    }

    /** Akhir Fungsi Untuk Menangani Pengajuan Pengujian ** */
}
