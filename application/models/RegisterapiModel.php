<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class RegisterapiModel extends CI_Model
{
    public function insert($data)
    {
        if($this->db->get_where('register', array('email' => $data['email']))->num_rows() > 0)
        {
            return 'email';
        }
        else if($this->db->insert('register', $data))
        {
            return $this->db->insert('register', $data);    
        }
    }

    public function country()
    {
        $query = $this->db->get('country');
        if($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        else
        {
            return false;
        }
    }

    public function login($data)
    {
        $email = $data['email'];
        $password = $data['password'];
        
        $result = $this->db->get_where('register', array('email' => $email, 'password' => $password));
        if($result->num_rows() > 0)
        {
            return $result->result_array();
        }
        else
        {
            return false;
        }
    }
}