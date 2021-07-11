<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Pembayaran extends CI_Controller {
        public function __construct(){
            parent::__construct();
    
            if($this->session->userdata('role_id') != '2'){
                
                redirect('login','refresh');
                
            }
        }

        public function index(){
        $data['title'] = 'pembayaran';

        // $data['name'] = $name;
        $this->load->view('template/header',$data);
        $this->load->view('pembayaran/index');
        $this->load->view('template/footer');
        }

        

        
    }
?>