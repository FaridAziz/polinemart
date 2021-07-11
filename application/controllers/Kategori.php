<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Kategori extends CI_Controller {
        public function index(){
        $data['title'] = 'Kategori';

        // $data['name'] = $name;
        $this->load->view('template/header',$data);
        $this->load->view('kategori/index');
        $this->load->view('template/footer');
        }

        public function monitor(){
            $data['monitor'] = $this->model_kategori->data_monitor()->result();

            $data1['title'] = 'monitor';

            // $data['name'] = $name;
            $this->load->view('template_detail/header',$data1);
            $this->load->view('kategori/monitor',$data);
            $this->load->view('template_detail/footer');
        }

        public function headset(){
            $data['headset'] = $this->model_kategori->data_headset()->result();

            $data1['title'] = 'headset';

            // $data['name'] = $name;
            $this->load->view('template_detail/header',$data1);
            $this->load->view('kategori/headset',$data);
            $this->load->view('template_detail/footer');
        }

        public function mouse(){
            $data['mouse'] = $this->model_kategori->data_mouse()->result();

            $data1['title'] = 'mouse';

            // $data['name'] = $name;
            $this->load->view('template_detail/header',$data1);
            $this->load->view('kategori/mouse',$data);
            $this->load->view('template_detail/footer');
        }

        public function keyboard(){
            $data['keyboard'] = $this->model_kategori->data_keyboard()->result();

            $data1['title'] = 'keyboard';

            // $data['name'] = $name;
            $this->load->view('template_detail/header',$data1);
            $this->load->view('kategori/keyboard',$data);
            $this->load->view('template_detail/footer');
        }

        public function kursi(){
            $data['kursi'] = $this->model_kategori->data_kursi()->result();

            $data1['title'] = 'kursi';

            // $data['name'] = $name;
            $this->load->view('template_detail/header',$data1);
            $this->load->view('kategori/kursi',$data);
            $this->load->view('template_detail/footer');
        }
    }
?>