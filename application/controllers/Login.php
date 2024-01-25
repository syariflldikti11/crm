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
        $this->load->view('login/login', $data);
    }
      function register(){
        
        $data = array(
            'judul' => 'Halaman Register',
            'menu'=> 'login',
            'action' => 'login/register',
        );  
        $this->load->view('login/register', $data);
    }
    function save_register()
  {

    $this->db->set('id_pelanggan', 'UUID()', FALSE);
    $nama_pelanggan = $this->input->post('nama_pelanggan');
    $alamat = $this->input->post('alamat');
    $tgl_lahir = $this->input->post('tgl_lahir');
    $jk = $this->input->post('jk');
    $email = $this->input->post('email');
    $no_wa = $this->input->post('no_wa');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
   $hash = password_hash($password, PASSWORD_DEFAULT);

    $data = array(

      'nama_pelanggan' => $nama_pelanggan,
      'alamat' => $alamat,
      'jk' => $jk,
      'tgl_lahir' => $tgl_lahir,
      'email' => $email,
      'no_wa' => $no_wa,
      'username' => $username,
      'password' => $hash
    );

    $this->m_umum->input_data($data, 'pelanggan');
    $notif = "Register Berhasil Silahkan Login";
    $this->session->set_flashdata('success', $notif);
    redirect('login');

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
            redirect('login');
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
 
}

 