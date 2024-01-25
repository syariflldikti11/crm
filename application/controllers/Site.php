<?php

class Site extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->database();

  }
  function index()
{
 
  $data = array(
        'judul' => 'Home',
          'dt_banner'=> $this->m_umum->get_data('banner'),
          'dt_mobil'=> $this->m_umum->get_data('mobil'),
      
    );  
  $this->template->load('site/template', 'site/home', $data);
     
}
function promo()
{
 
  $data = array(
        'judul' => 'Home',
          'dt_promo'=> $this->m_umum->get_data('promo'),
      
    );  
  $this->template->load('site/template', 'site/promo', $data);
     
}
function detail_mobil($id)
{
 
  $data = array(
        'judul' => 'Detail Mobil',
          'd'=> $this->m_umum->get_detail_mobil($id),
      
    );  
  $this->template->load('site/template', 'site/detail_mobil', $data);
     
}
function event()
{
 
  $data = array(
        'judul' => 'Daftar Event',
          'dt_event'=> $this->m_umum->get_data('event'),
      
    );  
  $this->template->load('site/template', 'site/event', $data);
     
}
function solusi()
{
 
  $data = array(
        'judul' => 'Daftar Solusi',
          'dt_solusi'=> $this->m_umum->get_data('solusi'),
      
    );  
  $this->template->load('site/template', 'site/solusi', $data);
     
}

function service()
{
 
  $data = array(
        'judul' => 'Daftar Service',
          'dt_service'=> $this->m_umum->get_service(),
      
    );  
  $this->template->load('site/template', 'site/service', $data);
     
}


}

?>