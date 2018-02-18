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

        $data[] = $this->UserModel->getCategoryNameStatus($catId);
        
        if ($catInfo->post_category_status =="1"){
            $this->load->view('UserPanel/newFamilyPost');
        }
        elseif ($catInfo->post_category_status =="2"){
            $this->load->view('UserPanel/newSubletPost');
        }
        elseif ($catInfo->post_category_status =="3"){
            $this->load->view('UserPanel/newBechelorFlatPost');
        }
        elseif ($catInfo->post_category_status =="4"){
            $this->load->view('UserPanel/newBechelorSeatPost');
        }
        elseif ($catInfo->post_category_status =="5"){
            $this->load->view('UserPanel/newOfficePost');
        }
        elseif ($catInfo->post_category_status =="6"){
            $this->load->view('UserPanel/newShopPost');
        }
        else{
            echo '';
        }

    }
}