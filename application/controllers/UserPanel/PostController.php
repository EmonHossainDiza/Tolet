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
        $catInfo=$this->UserModel->getCategoryName($catId);
        foreach ($catInfo as $categoryInformation){
            $catStatus=$categoryInformation->post_category_name;
        }
        if ($catStatus=="1"){
            $this->load->view('UserPanel/postInformation');
        }

    }
}