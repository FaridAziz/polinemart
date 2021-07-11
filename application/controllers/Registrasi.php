<?php

class Registrasi extends CI_Controller{

    public function index(){
        $password=md5(htmlspecialchars($this->input->post('password_1', 'password_2')));

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]');
        $this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]');

        $data['title'] = 'Register';

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates_admin/header', $data);
            $this->load->view('registrasi');
            $this->load->view('templates_admin/footer');
        }else{
            $data = array(
                'id' => '',
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password_1')),
                'role_id' => 2,
            );

            $this->db->insert('tb_user', $data);
            
            redirect('login','refresh');
            
        }
    }

}