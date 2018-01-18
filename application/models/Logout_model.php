<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout_model extends CI_Model {

    public function logout($id,$date)
    {
        $data = array(
            'logout_time' => $date
        );

        $this->db->where('user_id', $id);
        $this->db->update('tbl_login', $data);

    }


}