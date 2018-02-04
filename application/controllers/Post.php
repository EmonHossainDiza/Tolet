<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

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

    function all_property(){
        $data = [];
        $this->load->view('property/all_property',$data);
    }

    function all_property_grid(){
        $data = [];
        $this->load->view('property/all_property_grid',$data);
    }

    function single_property(){
        $data = [];
        $this->load->view('property/single_property',$data);
    }


}