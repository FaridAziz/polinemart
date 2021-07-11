<?php

defined('BASEPATH') or exit('No direct script access allowed');

class jual_model extends CI_Model
{
    public function tampilJual($id = null)
    {
        if ($id === null) {
            return $this->db->get('tb_jual')->result_array();
        } else {
            return $this->db->get_where('tb_jual', ['id_brg' => $id])->result_array();
        }
    }
    public function deleteJual($id)
    {
        $this->db->delete('tb_jual', ['id_brg' => $id]);
        return $this->db->affected_rows();
    }
    public function createJual($data)
    {
        $this->db->insert('tb_jual', $data);
        return $this->db->affected_rows();
    }
    public function updateJual($data, $id)
    {
        $this->db->update('tb_jual', $data, ['id_brg' => $id]);
        return $this->db->affected_rows();
    }
}