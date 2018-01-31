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

        $this->load->view("registration/test_registration",$title);
       // $this->load->view("registration/newRes",$title);
//        $this->load->view("registration/registration_view",$title);
    }

    public function add_reg()
    {
        $data=array(
            'user_name' => $this->input->post('uname'),
            'user_email' => $this->input->post('email'),
            'user_phone' => $this->input->post('phone'),
            'user_password' => password_hash($this->input->post('password'),PASSWORD_BCRYPT),
        );

        if ($this->db->insert('tbl_users', $data))
        {
            echo "ok";
        }
        else
        {
            $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
            redirect('Registration');
        }


    }

    public function verify()
    {

    }
}