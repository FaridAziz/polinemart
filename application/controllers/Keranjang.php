<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Keranjang extends CI_Controller {
        public function __construct(){
            parent::__construct();
    
            if($this->session->userdata('role_id') != '2'){
                
                redirect('login','refresh');
                
            }
        }

        public function index(){
        $data['title'] = 'Keranjang';

        // $data['name'] = $name;
        $this->load->view('template/header',$data);
        $this->load->view('keranjang/index');
        $this->load->view('template/footer');
        }

        public function hapus_keranjang(){
            $this->cart->destroy();
            
            redirect('home');
            
        }

        
    }
?>