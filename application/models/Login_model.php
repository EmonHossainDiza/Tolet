<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function login($email)
    {
        $query = $this->db->get_where('tbl_users', array('user_email' => $email));
        return $query->row();
    }

}