<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


    public function index(){

        // $ip = $this->input->ip_address();
        // $result = json_decode(file_get_contents("http://freegeoip.net/json/{$ip}"));
        // //$this->Login_model->dd($result);
        // echo $result->ip;
        // echo $result->country_name;
        // echo $result->city;
        // echo $result->time_zone;
        
        $view_content_info_device_resolution = isset($height) ? $height : '';
            
        $data['view_content_info'] = $this->add_view_content_info( $view_content_info_device_resolution);

        $this->load->view('home_view', $data);
        //$this->load->view('welcome_view', $data);
    }

    public function view_user_info() {
        if($this->input->is_ajax_request()){
            //$manage_video_id = $this->input->post('manage_video_id');
            $latitude = $this->input->post('latitude');
            $longitude = $this->input->post('longitude');
            $width = $this->input->post('width');
            $height = $this->input->post('height');

            
            
            if(isset($latitude) && isset($longitude)){
                $address = $this->get_user_current_address($latitude,$longitude);
            //     echo "<pre>";
            // print_r($address);
            // exit();
                $address = $address ? $address : '';
                $split_address = explode(',', $address);
                //$secondLast = $split_address[count($split_address) - 2];
                end($split_address); 
                $geo_information['geo_city_name'] = prev($split_address);
                $geo_information['geo_country_name'] = substr(strrchr($address, ","), 1);
                $geo_information['geo_latitude_longitude'] = '('.$latitude.','.$longitude.')';
                
                //$geo_information = $this->manage_admin_video_model->add_geo_information_info($geo_information);
            }
            
           // $geo_information_id = isset($geo_information) ? $geo_information : '';
            $view_content_info_device_resolution = isset($height) ? $height : '';
            
            $view_content_info = $this->add_view_content_info( $view_content_info_device_resolution);

            // if($this->session->userdata('person_id')){
            //     $person_view_content_info['person_id'] = $this->session->userdata('person_id'); 
            //     $person_view_content_info['view_content_info_id'] = $view_content_info['view_content_info_id'];
            //     $this->manage_admin_video_model->add_person_view_content_info($person_view_content_info);
            // }

                $data['geo'] =  $geo_information;
                $data['view'] =  $view_content_info;
                //print_r($data);
                echo json_encode($data);
        }
    }

    public function get_user_current_address($latitude,$longitude){
        if(!empty($latitude) && !empty($longitude)){
            //$geocodeFromLatLong = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($latitude).','.trim($longitude).'&sensor=false'); 

            //$geocodeFromLatLong = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($latitude).','.trim($longitude).'&sensor=true_or_false&key=GoogleAPIKey');
            
            //$geocodeFromLatLong = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($latitude).','.trim($longitude).'&key=AIzaSyAV0SB6cfdfRT4tnw9Cw1tDT2wnQZmwchI');
            $geocodeFromLatLong = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?latlng=23.83195,90.417695&key=AIzaSyDhtdWgnJBSZl7DNaIMgPCIf2qhSBW7bWM');

            //23.83195,90.417695

            $output = json_decode($geocodeFromLatLong);
            // echo "<pre>";
            // print_r($output);
            // exit();
            $status = $output->status;
            $address = ($status=="OK")?$output->results[1]->formatted_address:'';
            if(!empty($address)){
                return $address;
            }else{
                return false;
            }
        }else{
            return false;   
        }
    }

    public function add_view_content_info( $view_content_info_device_resolution) {
        // $view_content_info['geo_information_id'] = $geo_information_id;
        // $view_content_info['view_content_info_type'] = 1; 
        // $view_content_info['view_content_info_type_id'] = $manage_video_id; 
        $view_content_info['view_content_info_device_name'] = $_SERVER['HTTP_USER_AGENT'];
        $view_content_info['view_content_info_device_resolution'] = $view_content_info_device_resolution; 
        $view_content_info['view_content_info_visitor_ip_address'] = $_SERVER['REMOTE_ADDR']; 
        $view_content_info['view_content_info_visitor_browser'] = $this->get_browser_name();
        if(isset($_SERVER['HTTP_REFERER'])){
            $view_content_info['view_content_info_visitor_referrer'] = $_SERVER['HTTP_REFERER']; 
        }
        //$view_content_info['view_content_info_id'] = $this->manage_admin_video_model->add_view_content_info($view_content_info);
        return $view_content_info;
    }

    function get_browser_name() {
        $this->load->library('user_agent');

        if ($this->agent->is_browser()) {
            $agent = $this->agent->browser() . ' ' . $this->agent->version();
        } elseif ($this->agent->is_robot()) {
            $agent = $this->agent->robot();
        } elseif ($this->agent->is_mobile()) {
            $agent = $this->agent->mobile();
        } else {
            $agent = 'Unidentified User Agent';
        }
        return $agent;
    }


}

//
//$ip = $this->input->ip_address();
//$result = json_decode(file_get_contents("http://ip-api.io/json/{$ip}"));
//echo $result->ip;
//echo $result->country_name;
//echo $result->city;
//echo $result->time_zone;
//
//$this->load->view('welcome_view',$result);