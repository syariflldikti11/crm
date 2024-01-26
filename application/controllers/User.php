<?php

class User extends CI_Controller
{

   function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->model('m_umum');
    if($this->session->userdata('akses') <> 2){
        redirect(base_url('login'));
        }
  }
  function index()
{
 
  $data = array(
        'judul' => 'Home',
          'dt_banner'=> $this->m_umum->get_data('banner'),
          'dt_mobil'=> $this->m_umum->get_data('mobil'),
      
    );  
  $this->template->load('user/template', 'user/home', $data);
     
}
function konsultasi()
{
  
  $data = array(
      'judul' => 'Konsultasi',
      'modal_tambah' => 'Tambah Konsultasi',
      'dt_konsultasi'=> $this->m_umum->get_konsultasi_user(),
     
  );  
  $this->template->load('user/template', 'user/konsultasi', $data);
  
}

function simpan_konsultasi() { 
     $id=$this->session->userdata('ses_id');
    $this->db->set('id_konsultasi', 'UUID()', FALSE);
    $this->db->set('id_pelanggan',$id);
    $this->form_validation->set_rules('isi_konsultasi','isi_konsultasi','required');
    if($this->form_validation->run() === FALSE)
    redirect('user/konsultasi');
    else
    {
        
        $this->m_umum->set_data("konsultasi");
        $notif = "Tambah Data Berhasil";
        $this->session->set_flashdata('success', $notif);
      redirect('user/konsultasi');
    }
  
}
function penawaran()
{
  
  $data = array(
      'judul' => 'penawaran',
      'dt_penawaran'=> $this->m_umum->get_penawaran_user(),
     
  );  
  $this->template->load('user/template', 'user/penawaran', $data);
  
}
function simpan_penawaran() { 
     $id=$this->session->userdata('ses_id');
    $this->db->set('id_penawaran', 'UUID()', FALSE);
    $this->db->set('id_pelanggan',$id);
    $this->form_validation->set_rules('keterangan','keterangan','required');
    if($this->form_validation->run() === FALSE)
    redirect('user/penawaran');
    else
    {
        
        $this->m_umum->set_data("penawaran");
        $notif = "Terimakasih, Anda akan dihubungi tim kami";
        $this->session->set_flashdata('success', $notif);
      redirect('user/penawaran');
    }
  
}
function kasus()
{
  
  $data = array(
      'judul' => 'kasus',
      'modal_tambah' => 'Tambah kasus',
      'dt_kasus'=> $this->m_umum->get_kasus_user(),
     
  );  
  $this->template->load('user/template', 'user/kasus', $data);
  
}

function simpan_kasus() { 
     $id=$this->session->userdata('ses_id');
    $this->db->set('id_kasus', 'UUID()', FALSE);
    $this->db->set('id_pelanggan',$id);
    $this->form_validation->set_rules('deskripsi','deskripsi','required');
    if($this->form_validation->run() === FALSE)
    redirect('user/kasus');
    else
    {
        
        $this->m_umum->set_data("kasus");
        $notif = "Tambah Data Berhasil";
        $this->session->set_flashdata('success', $notif);
      redirect('user/kasus');
    }
  
}
function promo()
{
 
  $data = array(
        'judul' => 'Home',
          'dt_promo'=> $this->m_umum->get_data('promo'),
      
    );  
  $this->template->load('user/template', 'user/promo', $data);
     
}
function detail_mobil($id)
{
 
  $data = array(
        'judul' => 'Detail Mobil',
        'id' => $id,
          'd'=> $this->m_umum->get_detail_mobil($id),
      
    );  
  $this->template->load('user/template', 'user/detail_mobil', $data);
     
}
function event()
{
 
  $data = array(
        'judul' => 'Daftar Event',
          'dt_event'=> $this->m_umum->get_data('event'),
      
    );  
  $this->template->load('user/template', 'user/event', $data);
     
}
function solusi()
{
 
  $data = array(
        'judul' => 'Daftar Solusi',
          'dt_solusi'=> $this->m_umum->get_data('solusi'),
      
    );  
  $this->template->load('user/template', 'user/solusi', $data);
     
}

function service()
{
 
  $data = array(
        'judul' => 'Daftar Service',
          'dt_service'=> $this->m_umum->get_service(),
      
    );  
  $this->template->load('user/template', 'user/service', $data);
     
}


}

?>