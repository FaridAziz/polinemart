<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';


class RestJual extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('jual_model', 'jual');
    }

    public function index_get()
    {
        $id = $this->get('id_brg');
        if ($id === null) {
            $jual = $this->jual->tampilJual();
        } else {
            $jual = $this->jual->tampilJual($id);
        }
        if ($jual) {
            $this->response([
                'status' => true,
                'data' => $jual
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'data' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
    public function index_delete()
    {
        $id = $this->delete('id_brg');

        if ($id === null) {
            $this->response([
                'status' => false,
                'data' => 'provide an id !'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->jual->deleteJual($id) > 0) {
                # ok
                $this->response([
                    'status' => true,
                    'id_brg' => $id,
                    'message' => 'deleted.'
                ], REST_Controller::HTTP_OK);
            } else {
                //id not founf
                $this->response([
                    'status' => false,
                    'message' => 'id not found'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }
    public function index_post()
    {
        $data = [
            'nama_brg' => $this->post('nama_brg'),
            'keterangan' => $this->post('keterangan'),
            'kategori' => $this->post('kategori'),
            'harga' => $this->post('harga'),
            'stok' => $this->post('stok'),
            'gambar' => $this->post('gambar')
        ];
        if ($this->jual->createJual($data) > 0) {
            $this->response([
                'status' => true,
                'data' => 'new jual has been created'
            ], REST_Controller::HTTP_CREATED);
        } else {
            //id not found
            $this->response([
                'status' => false,
                'data' => 'failed to create new data !'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    public function index_put()
    {
        $id_brg = $this->put('id_brg');
        $data = [
            'nama_brg' => $this->put('nama_brg'),
            'keterangan' => $this->put('keterangan'),
            'kategori' => $this->put('kategori'),
            'harga' => $this->put('harga'),
            'stok' => $this->put('stok'),
            'gambar' => $this->put('gambar')
        ];
        if ($this->jual->updateJual($data, $id_brg) > 0) {
            $this->response([
                'status' => true,
                'data' => 'new jual has been updated'
            ], REST_Controller::HTTP_CREATED);
        } else {
            //id not found
            $this->response([
                'status' => false,
                'data' => 'failed to update data !'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}