<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Notifications extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->helper("notif_helper");
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
    
    function index($user_id) {
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }

        $query = array("notif_to" => $user_id);
        $notifications = $this->mongo_db->db->find($query)->sort(array('notif_date' => -1));

        $this->basic_data();
        $this->smartyci->assign('notifications', $notifications);
        $this->smartyci->display('notification/all_notif.tpl');
    }
    
}