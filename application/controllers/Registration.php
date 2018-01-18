<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Dhaka');
    }

    public function index()
    {
        $title['title']="Tolet | Registration";
        $this->load->view("registration_view",$title);
    }

    public function add_reg()
    {
        $data=array(
            $username = $this->input->post('uname'),
            $email = $this->input->post('email'),
            $phone = $this->input->post('phone'),
            $password = password_hash($this->input->post('password'),PASSWORD_BCRYPT),
        );
        echo"<pre>";
        print_r($data);

    }

    public function verify()
    {

    }
}