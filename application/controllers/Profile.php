<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Dhaka');
    }

    public function index()
    {
       
    } 

    function my_profile(){
        $data = [];
        $this->load->view('profile/my_profile',$data);
    }
 
    function fav_post(){
        $data = [];
        $this->load->view('profile/fav_post',$data);
    }

    function new_post(){
        $data = [];
        $this->load->view('profile/new_post',$data);
    }

    function my_post(){
        $data = [];
        $this->load->view('profile/my_post',$data);
    }
    function chgn_pass(){
        $data = [];
        $this->load->view('profile/chgn_pass',$data);
    }
}