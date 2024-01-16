<?php

class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('m_login');
    }
 
    function index(){
        
        $data = array(
            'judul' => 'Halaman Login',
            'menu'=> 'login',
            'action' => 'login/auth',
        );  
        $this->template->load('login/template', 'login/login_form', $data);
    }

    function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
        $cek_pengguna=$this->m_login->auth_pengguna($username);
        
        if($cek_pengguna->num_rows() > 0){ 
                        $data=$cek_pengguna->row_array();
                $this->session->set_userdata('masuk',TRUE);
   if($data['level']=='1' && password_verify($password, $data['password'])){ 
                    $this->session->set_userdata('akses','1');
                       $this->session->set_userdata('ses_id',$data['username']);
                            
                    redirect('admin');
                 }
                  if($data['level']=='2' && password_verify($password, $data['password'])){ 
                    $this->session->set_userdata('akses','2');
                       $this->session->set_userdata('ses_id',$data['username']);
                            
                    redirect('user');
                 }
                 if($data['level']=='3' && password_verify($password, $data['password'])){ 
                    $this->session->set_userdata('akses','3');
                       $this->session->set_userdata('ses_id',$data['username']);
                            
                    redirect('pimpinan');
                 }
        }
       
        else {
            $notif = "username/Password Salah";
            $this->session->set_flashdata('gagal', $notif);
            redirect('login_sakip');
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login_sakip'));
    }
 
}

 