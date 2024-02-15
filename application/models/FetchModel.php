<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class FetchModel extends CI_Model
{
    public function get()
    {
        $query = $this->db->get('productajax');
        return $query->result();
    }

    public function insert($data)
    {
        return $this->db->insert('productajax', $data);
    }

    public function select($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('productajax');
        return $query->row();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('productajax',$data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('productajax');
    }
}