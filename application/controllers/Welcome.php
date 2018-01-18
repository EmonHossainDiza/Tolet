<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{

        $ip = $this->input->ip_address();
        $result = json_decode(file_get_contents("http://freegeoip.net/json/{$ip}"));
        //$this->Login_model->dd($result);
        echo $result->ip;
        echo $result->country_name;
        echo $result->city;
        echo $result->time_zone;

        $this->load->view('welcome_view',$result);
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