<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends CI_Controller {
        public function index(){
        $data['title'] = 'Temukan Kebutuhan Komputer Anda!!!';

        $data1['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('template/header',$data);
        $this->load->view('home/index', $data1);
        $this->load->view('template/footer');
        }

        public function tambah_ke_keranjang($id){
            $barang = $this->model_barang->find($id);

            $data = array(
                'id'      => $barang->id_brg,
                'qty'     => 1,
                'price'   => $barang->harga,
                'name'    => $barang->nama_brg
            );
            
            $this->cart->insert($data);
            
            redirect('home');
            
        }

        public function detail($id_brg){

            $data['title'] = 'detail';

            $data1['barang'] = $this->model_barang->detail_brg($id_brg);

            $this->load->view('template_detail/header',$data);
            $this->load->view('detail_barang', $data1);
            $this->load->view('template_detail/footer');
        }

        // public function detail_keranjang(){
        //     $data['title'] = 'keranjang belanja';
            
        //     $this->load->view('template/header',$data);
        //     $this->load->view('keranjang');
        //     $this->load->view('template/footer');
        // }
    }

    
?>