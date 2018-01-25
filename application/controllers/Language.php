<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Language extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Dhaka');
        $this->load->helper('cookie');
    }

    public function index($ban)
    {
        $this->session->set_userdata('lang',"$ban");
        redirect('');
    }
}