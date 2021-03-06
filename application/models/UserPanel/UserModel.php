<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model
{

    
    public function getCategoryInfo()
    {
        $this->db->select('*');
        $this->db->from('tbl_post_category');
        return $this->db->get()->result();
    }

    public function getCategoryNameStatus($catId)
    {
        $this->db->select('post_category_name,post_category_status');
        $this->db->where('post_category_id',$catId);
        $query = $this->db->get('tbl_post_category');
        return $query->row();
    }

}