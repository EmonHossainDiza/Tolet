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

    public function insertFmailyPost()
    {
        $data1=array(
            'no_of_room' => $this->input->post('room_number'),
            'no_of_bathroom' => $this->input->post('bathroom_number'),
            'no_of_balcony' => $this->input->post('balcony_number'),
            'area' => $this->input->post('area_sqft'),
            'floor' => $this->input->post('floor_number'),
            'negotiable_rent' => $this->input->post('negotiable_check'),
            'installment_rent' => $this->input->post('installment_check')
        );
        $this->db->insert('tbl_users', $data)

        $data2=array(
            'cc_camera' => $this->input->post('cc_camera'),
            'car_parking' => $this->input->post('car_parking'),
            'lift' => $this->input->post('lift'),
            'generator' => $this->input->post('generator'),
            'play_ground' => $this->input->post('play_ground'),
            'water_gas_eclectricity' => $this->input->post('water_gas_eclectricity'),
            'security_guard' => $this->input->post('security_guard'),
            'geyser' => $this->input->post('geyser')
        );

        $data3=array(
            'post_category_id' => $this->input->post('category_id'),
            'post_title' => $this->input->post('post_title'),
            'post_phone' => $this->input->post('contact_number'),
            'post_date_form' => $this->input->post('rent_date'),
            'post_price' => $this->input->post('rent_amount'),
            'post_advance_price' => $this->input->post('advance_rent_amount'),
            'post_description' => $this->input->post('post_description'),
//            'post_date' => date('Y-m-d'),
            'post_status' => "1",
            'post_availability' => "1"
        );

        echo "<pre>";
        print_r($data2);

//        if ($this->db->insert('tbl_users', $data))
//        {
//            echo "ok";
//        }

    }
}