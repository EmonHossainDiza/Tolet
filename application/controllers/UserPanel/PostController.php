<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PostController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function newPost()
    {

    }
    public function getCategory()
    {

    }
    public function requiredInfoByCategory()
    {
        $catId=$this->input->post('catId');
        $this->load->model('UserPanel/UserModel');
        $catInfo=$this->UserModel->getCategoryNameStatus($catId);
        
        if ($catInfo->post_category_status =="1"){
            $this->load->view('UserPanel/postInformation');
        }
        elseif ($catInfo->post_category_status =="2"){
            $this->load->view('UserPanel/postInformation');
        }
        elseif ($catInfo->post_category_status =="3"){
            $this->load->view('UserPanel/postInformation');
        }
        else{
            echo '';
        }

    }
}