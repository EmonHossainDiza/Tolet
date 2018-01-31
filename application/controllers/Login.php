<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $title['title']="Tolet | Login";
//        $this->load->view("login/login_view",$title);
        $this->load->view("login/test_login",$title);
    }

    public function verify()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $result = $this->Login_model->login($email);

        if (!empty($result)) {

            $success=password_verify($password, $result->user_password);

            if ($success && $result->user_type=='0') {
                $data=array(
                    'login_browser' => $_SERVER['HTTP_USER_AGENT'],
                    'login_ip' => $this->input->ip_address(),
                    'user_id' => $result->user_id,
                );
                $login_id=$this->Login_model->insert_login($data);

                $result->res=$this->Login_model->login($email);
                $result->title="Tolet | User Profile";

                //$this->Login_model->dd($result->res);

                $this->session->set_userdata('login_type',"$result->user_type");
                $this->session->set_userdata('login_emails',"$result->user_email");
                $this->session->set_userdata('login_user_id',"$result->user_id");
                $this->session->set_userdata('login_id',"$login_id");


                $this->load->view('profile_view',$result);

            }
            elseif ($success && $result->user_type=='1') {
                $data=array(
                    'login_browser' => $_SERVER['HTTP_USER_AGENT'],
                    'login_ip' => $this->input->ip_address(),
                    'user_id' => $result->user_id,
                );
                $login_id=$this->Login_model->insert_login($data);

                $result->res=$this->Login_model->login($email);
                $result->title="Tolet | Admin Profile";

                $this->session->set_userdata('login_type',"$result->user_type");
                $this->session->set_userdata('login_emails',"$result->user_email");
                $this->session->set_userdata('login_user_id',"$result->user_id");
                $this->session->set_userdata('login_id',"$login_id");


                $this->load->view('profile_view',$result);
            }
            else{
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Email or Password is wrong!</div>');
                redirect('Login');
            }

            //return $res;
        }
        else{
            $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Email or Password is wrong!</div>');
            redirect('Login');
        }

    }


}
