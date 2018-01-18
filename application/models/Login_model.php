<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {
	
	public function dd($data)
    {
        echo "<pre>";
        print_r($data);
        exit();
    }

    public function login($email)
    {
        $query = $this->db->get_where('tbl_users', array('user_email' => $email));
        return $query->row();
    }

    public function insert_login($data){

    	$this->db->insert('tbl_login', $data);
    	return $this->db->insert_id();

    }

}