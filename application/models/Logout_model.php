<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout_model extends CI_Model {

    public function logout($login_id, $data)
    {
        $this->db->where('login_id', $login_id);
        $this->db->update('tbl_login', $data);

    }


}