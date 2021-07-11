<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jual extends CI_Controller {
    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '2'){
            
            redirect('login','refresh');
            
        }
    }

    public function index(){
        $data['title'] = 'Jual';

        // $data['name'] = $name;
        $data1['barang'] = $this->jualView_model->tampil_data();
        $this->load->view('template/header',$data);
        $this->load->view('jual/index',$data1);
        $this->load->view('template/footer');
    }

    public function hapus_data($id_brg){
        $this->jualView_model->hapus_data($id_brg);
        redirect('jual/index');
    }

    public function tambah_data(){
        $nama_brg       = $this->input->post('nama_brg');
        $keterangan     = $this->input->post('keterangan');
        $kategori       = $this->input->post('kategori');
        $harga          = $this->input->post('harga');
        $stok           = $this->input->post('stok');
        $gambar         = $_FILES['gambar']['name'];
        if($gambar =''){

        }else{
            $config ['upload_path'] = './uploads';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo "Gambar gagal di upload !";
            }
            else{
                $gambar=$this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_brg'      => $nama_brg,
            'keterangan'    => $keterangan,
            'kategori'      => $kategori,
            'harga'         => $harga,
            'stok'          => $stok,
            'gambar'        => $gambar
        );

        $this->jualView_model->tambah_data($data);
        redirect('jual/index');
    }

    public function edit_jual($id_brg){
        $data1['title']='edit';
        $where = array('id_brg' => $id_brg);
        $data['barang'] = $this->jualView_model->tampil_databyid($id_brg);
        $this->load->view('template/header',$data1);
        $this->load->view('jual/edit_jual', $data);
        $this->load->view('template/footer');
    }

    public function update(){
        $id_brg     = $this->input->post('id_brg');
        $nama_brg   = $this->input->post('nama_brg');
        $keterangan = $this->input->post('keterangan');
        $kategori   = $this->input->post('kategori');
        $harga      = $this->input->post('harga');
        $stok       = $this->input->post('stok');

        $data = array(
            'nama_brg'      => $nama_brg,
            'keterangan'    => $keterangan,
            'kategori'      => $kategori,
            'harga'         => $harga,
            'stok'          => $stok,
            'id_brg' => $id_brg
        );

        $this->jualView_model->ubah_data($data);
        redirect('jual/index');
    }
}