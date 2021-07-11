<?php

class Model_kategori extends CI_Model{
    public function data_monitor(){
        return $this->db->get_where('tb_barang', array('kategori' => 'monitor'));
        
    }

    public function data_headset(){
        return $this->db->get_where('tb_barang', array('kategori' => 'headset'));
        
    }

    public function data_mouse(){
        return $this->db->get_where('tb_barang', array('kategori' => 'mouse'));
        
    }

    public function data_keyboard(){
        return $this->db->get_where('tb_barang', array('kategori' => 'keyboard'));
        
    }

    public function data_kursi(){
        return $this->db->get_where('tb_barang', array('kategori' => 'kursi'));
        
    }
}