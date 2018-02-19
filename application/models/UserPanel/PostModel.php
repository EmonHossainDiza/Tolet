<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PostModel extends CI_Model
{


    public function insertSpecificDetails($data1)
    {
        $this->db->insert('tbl_post_specific_details',$data1);
        return $this->db->insert_id();
    }

    public function insertOtherBenefit($data2)
    {
        $this->db->insert('tbl_post_other_benefit', $data2);
        return $this->db->insert_id();
    }
    public function insertPost($data3)
    {
        $this->db->insert('tbl_post', $data3);

    }
    public function insertImages($data4)
    {
        $this->db->insert('tbl_post_image', $data4);
        return $this->db->insert_id();

    }

}