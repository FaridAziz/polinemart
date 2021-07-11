<?php

use GuzzleHttp\Client;

class JualView_model extends CI_Model {
    public function tampil_data(){
        $client = new Client();
        $response = $client->request('GET', 'http://localhost/polinemart/api/RestJual/');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function tampil_databyid($id_brg){
        $client = new Client();
        $response = $client->request('GET', 'http://localhost/polinemart/api/RestJual/', [
            'query' => [
                'id_brg' => $id_brg
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function tambah_data($data){
        $client = new Client();

        $response = $client->request('POST', 'http://localhost/polinemart/api/RestJual/', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function ubah_data($data){
        $client = new Client();

        $response = $client->request('PUT', 'http://localhost/polinemart/api/RestJual/', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function hapus_data($id_brg){
        $client = new Client();
        $response = $client->request('DELETE', 'http://localhost/polinemart/api/RestJual/', [
            'form_params' => [
                'id_brg' => $id_brg
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }
    
    
}