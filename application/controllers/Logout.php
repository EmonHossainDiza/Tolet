<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Dhaka');
    }

    public function index()
    {
        $data = [];
        $data['logout_time'] = date('Y-m-d h:i:s');
        $login_id= $this->session->userdata('login_id') ;
        $this->Logout_model->logout($login_id, $data);

        $this->session->unset_userdata('login_emails');
        $this->session->unset_userdata('login_chk');
        $this->session->unset_userdata('login_type');
        $this->session->unset_userdata('login_id');
        redirect('');
    }
}