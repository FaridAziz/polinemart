<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Proses_pesanan extends CI_Controller {

        public function __construct(){
            parent::__construct();
    
            if($this->session->userdata('role_id') != '2'){
                
                redirect('login','refresh');
                
            }
        }

        public function index(){
        $data['title'] = 'pembayaran';

        // $data['name'] = $name;
        $is_processed = $this->model_invoice->index();

            if($is_processed){
                $this->cart->destroy();
                $this->load->view('template/header',$data);
                $this->load->view('pembayaran/proses_pesanan');
                $this->load->view('template/footer');
            }else{
                echo "Maaf, Pesanan Anda Gagal diproses!";
            }
        }
    }
?>