<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function index(){
        $data['title']='login';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('login/index');
        $this->load->view('templates_admin/footer');
    }

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('login_model');
    }

    public function proses_login(){
        $username=htmlspecialchars($this->input->post('uname1'));
        $password=md5(htmlspecialchars($this->input->post('pwd1')));

        $ceklogin=$this->login_model->login($username,$password);

        if($ceklogin){
            foreach($ceklogin as $row);
            $this->session->set_userdata('user', $row->username);
            $this->session->set_userdata('role_id', $row->role_id);
            
            if($this->session->userdata('role_id')=="1"){
                redirect('admin/dashboard_admin');   
            }
            elseif($this->session->userdata('role_id')=="2"){
                redirect('home');
            }
        }
        else{
            
            $data['pesan']="username dan password anda salah";
            $data['title']='login';
            $this->load->view('templates_admin/header', $data);
            $this->load->view('login/index',$data);
            $this->load->view('templates_admin/footer', $data);
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('home','refresh');
    }
}
?>