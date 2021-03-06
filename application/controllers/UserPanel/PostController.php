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
            $this->load->model('UserPanel/PostModel');
           $SpecificDetailsId= $this->PostModel->insertSpecificDetails($data1);
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
        $OtherBenefitId= $this->PostModel->insertOtherBenefit($data2);


        $this->load->library('upload');

        $dataInfo = array();
        $files = $_FILES;

        $cpt = count($_FILES['post_image']['name']);
        $data4=array();
        for($i=0; $i<$cpt; $i++) {
            $_FILES['post_image']['name'] = $files['post_image']['name'][$i];
            $_FILES['post_image']['type'] = $files['post_image']['type'][$i];
            $_FILES['post_image']['tmp_name'] = $files['post_image']['tmp_name'][$i];
            $_FILES['post_image']['error'] = $files['post_image']['error'][$i];
            $_FILES['post_image']['size'] = $files['post_image']['size'][$i];

            $this->upload->initialize($this->set_upload_options());
            $this->upload->do_upload('post_image');
            // $a=$this->upload->data();

            thumb('./tolet_post/real_img/'.$_FILES['post_image']['name'],'100','100');



            $data5=array(

                'post_image_name'.($i+1)=>$_FILES['post_image']['name'],

            );
            $data4=array_merge($data4, $data5);


        }
            $postImageId=$this->PostModel->insertImages($data4);


//        $config['upload_path'] = './tolet_post/real_img/';
//        $config['allowed_types'] = 'gif|jpg|png|jpeg';
//        $config['max_size'] = '2048';
//        $this->upload->initialize($config);
//        $this->upload->do_upload('post_image');
//
//        $images = $this->upload->data();
//        $photo= $images['file_name'];
//        thumb('./tolet_post/real_img/'.$photo,'100','100');


        $data3=array(
            'post_category_id' => $this->input->post('category_id'),
            'post_title' => $this->input->post('post_title'),
            'post_phone' => $this->input->post('contact_number'),
            'post_date_from' => $this->input->post('rent_date'),
            'post_price' => $this->input->post('rent_amount'),
            'post_advance_price' => $this->input->post('advance_rent_amount'),
            'post_description' => $this->input->post('post_description'),
            'post_status' => "1",
            'post_availability' => "1",
            'post_specific_details_id' => $SpecificDetailsId,
            'post_other_benefit_id' => $OtherBenefitId,

            'post_image_id' => $postImageId,


            'post_address' => $this->input->post('post_address'),
            'post_state' => $this->input->post('post_state'),
            'post_city' => $this->input->post('post_city'),
            'post_zip' => $this->input->post('post_zip'),
            'post_division' => $this->input->post('post_division'),
            'post_country' => $this->input->post('post_country'),
            'post_lat_long' => $this->input->post('post_description'),
        );

        $post= $this->PostModel->insertPost($data3);
        redirect('New_post');
    }
        private function set_upload_options()
    {
        //upload an image options
        $config = array();
        $config['upload_path'] = './tolet_post/real_img/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
//       $config['max_size']      = '48000';
        $config['overwrite']     = FALSE;
        $config['remove_space']     = True;

        return $config;
    }
}