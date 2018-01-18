<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Logout_model');
        date_default_timezone_set('Asia/Dhaka');
    }

    public function index()
    {

        $date=date('Y-m-d h:i:s');
        $id= $_SESSION['login_user_id'] ;
        $data=$this->Logout_model->logout($id,$date);
        $this->session->unset_userdata('login_emails');
        $this->session->unset_userdata('login_chk');
        $this->session->unset_userdata('login_type');
        redirect('');
    }
}