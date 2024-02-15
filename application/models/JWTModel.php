<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class JWTModel extends CI_Model
{
    public function token($data)
    {
        $query = $this->db->get_where('register', $data);
        if($query->num_rows() > 0)
        {
            return $query->row();
        }
        else
        {
            return false;
        }
    }
}