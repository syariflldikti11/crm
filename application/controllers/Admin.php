<?php

class Admin extends CI_Controller {
 
  function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->model('m_emonev');
    if($this->session->userdata('akses') <> 1){
        redirect(base_url('login'));
        }
  }
  function index()
  {

    $data = array(
        'judul' => 'Dashboard',

        
    );  
    $this->template->load('admin/template', 'admin/home', $data);
    
}
function event()
{
  
  $data = array(
      'judul' => 'Event',
      'modal_tambah' => 'Tambah Data Event',
      'modal_edit' => 'Edit Data Event',
      'dt_event'=> $this->m_umum->get_data('event'),
     
  );  
  $this->template->load('admin/template', 'admin/event', $data);
  
}

 function simpan_event() { 
    
          $tahun=$this->session->userdata('tahun');
$this->db->set('id_event', 'UUID()', FALSE);
    $this->form_validation->set_rules('nama_event','nama_event','required');
    if($this->form_validation->run() === FALSE)
    redirect('admin/event');
    else
    {
        
        $this->m_umum->set_data("event");
        $notif = "Tambah Data Berhasil";
        $this->session->set_flashdata('success', $notif);
        redirect('admin/event');
    }

}
function update_event()
  {
        
    $this->form_validation->set_rules('id_event','id_event','required');
    if($this->form_validation->run() === FALSE)
        redirect('admin/event');
    else
    {
      $this->m_umum->update_data("event");
       $notif = " Data berhasil diupdate";
            $this->session->set_flashdata('update', $notif);
      redirect('admin/event');
    }
    
  }
 function delete_event($id=NULL)
  {
     
    $this->m_umum->hapus('event','id_event',$id);
     $notif = " Data berhasil dihapuskan";
            $this->session->set_flashdata('delete', $notif);
    redirect('admin/event');
     
  }
  function Solusi()
{
  
  $data = array(
      'judul' => 'Solusi',
      'modal_tambah' => 'Tambah Data Solusi',
      'modal_edit' => 'Edit Data Solusi',
      'dt_solusi'=> $this->m_umum->get_data('solusi'),
     
  );  
  $this->template->load('admin/template', 'admin/solusi', $data);
  
}

 function simpan_solusi() { 
    
          $tahun=$this->session->userdata('tahun');
$this->db->set('id_solusi', 'UUID()', FALSE);
    $this->form_validation->set_rules('pertanyaan','pertanyaan','required');
    if($this->form_validation->run() === FALSE)
    redirect('admin/solusi');
    else
    {
        
        $this->m_umum->set_data("solusi");
        $notif = "Tambah Data Berhasil";
        $this->session->set_flashdata('success', $notif);
        redirect('admin/solusi');
    }

}
function update_solusi()
  {
        
    $this->form_validation->set_rules('id_solusi','id_solusi','required');
    if($this->form_validation->run() === FALSE)
        redirect('admin/solusi');
    else
    {
      $this->m_umum->update_data("solusi");
       $notif = " Data berhasil diupdate";
            $this->session->set_flashdata('update', $notif);
      redirect('admin/solusi');
    }
    
  }
 function delete_solusi($id=NULL)
  {
     
    $this->m_umum->hapus('solusi','id_solusi',$id);
     $notif = " Data berhasil dihapuskan";
            $this->session->set_flashdata('delete', $notif);
    redirect('admin/solusi');
     
  }
function pelanggan()
{
  
  $data = array(
      'judul' => 'Pelanggan',
      'modal_tambah' => 'Tambah Data Pelanggan',
      'modal_edit' => 'Edit Data Pelanggan',
      'dt_pelanggan'=> $this->m_umum->get_data('pelanggan'),
     
  );  
  $this->template->load('admin/template', 'admin/pelanggan', $data);
  
}

 function simpan_pelanggan() { 
    
          $tahun=$this->session->userdata('tahun');
$this->db->set('id_pelanggan', 'UUID()', FALSE);
    $this->form_validation->set_rules('nama_pelanggan','nama_pelanggan','required');
    if($this->form_validation->run() === FALSE)
    redirect('admin/pelanggan');
    else
    {
        
        $this->m_umum->set_data("pelanggan");
        $notif = "Tambah Data Berhasil";
        $this->session->set_flashdata('success', $notif);
        redirect('admin/pelanggan');
    }

}
function update_pelanggan()
  {
        
    $this->form_validation->set_rules('id_pelanggan','id_pelanggan','required');
    if($this->form_validation->run() === FALSE)
        redirect('admin/pelanggan');
    else
    {
      $this->m_umum->update_data("pelanggan");
       $notif = " Data berhasil diupdate";
            $this->session->set_flashdata('update', $notif);
      redirect('admin/pelanggan');
    }
    
  }
 function delete_pelanggan($id=NULL)
  {
     
    $this->m_umum->hapus('pelanggan','id_pelanggan',$id);
     $notif = " Data berhasil dihapuskan";
            $this->session->set_flashdata('delete', $notif);
    redirect('admin/pelanggan');
     
  }
  function mobil()
{
  
  $data = array(
      'judul' => 'mobil',
      'modal_tambah' => 'Tambah Data mobil',
      'modal_edit' => 'Edit Data mobil',
      'dt_mobil'=> $this->m_umum->get_data('mobil'),
     
  );  
  $this->template->load('admin/template', 'admin/mobil', $data);
  
}

 function simpan_mobil() { 
    
          $tahun=$this->session->userdata('tahun');
$this->db->set('id_mobil', 'UUID()', FALSE);
    $this->form_validation->set_rules('nama_mobil','nama_mobil','required');
    if($this->form_validation->run() === FALSE)
    redirect('admin/mobil');
    else
    {
        
        $this->m_umum->set_data("mobil");
        $notif = "Tambah Data Berhasil";
        $this->session->set_flashdata('success', $notif);
        redirect('admin/mobil');
    }

}
function update_mobil()
  {
        
    $this->form_validation->set_rules('id_mobil','id_mobil','required');
    if($this->form_validation->run() === FALSE)
        redirect('admin/mobil');
    else
    {
      $this->m_umum->update_data("mobil");
       $notif = " Data berhasil diupdate";
            $this->session->set_flashdata('update', $notif);
      redirect('admin/mobil');
    }
    
  }
 function delete_mobil($id=NULL)
  {
     
    $this->m_umum->hapus('mobil','id_mobil',$id);
     $notif = " Data berhasil dihapuskan";
            $this->session->set_flashdata('delete', $notif);
    redirect('admin/mobil');
     
  }

 function service()
{
  
  $data = array(
      'judul' => 'Service',
      'modal_tambah' => 'Tambah Data service',
      'modal_edit' => 'Edit Data service',
      'dt_mobil'=> $this->m_umum->get_data('mobil'),
      'dt_service'=> $this->m_umum->get_service(),
     
  );  
  $this->template->load('admin/template', 'admin/service', $data);
  
}

 function simpan_service() { 
    
          $tahun=$this->session->userdata('tahun');
$this->db->set('id_service', 'UUID()', FALSE);
    $this->form_validation->set_rules('nama_service','nama_service','required');
    if($this->form_validation->run() === FALSE)
    redirect('admin/service');
    else
    {
        
        $this->m_umum->set_data("service");
        $notif = "Tambah Data Berhasil";
        $this->session->set_flashdata('success', $notif);
        redirect('admin/service');
    }

}
function update_service()
  {
        
    $this->form_validation->set_rules('id_service','id_service','required');
    if($this->form_validation->run() === FALSE)
        redirect('admin/service');
    else
    {
      $this->m_umum->update_data("service");
       $notif = " Data berhasil diupdate";
            $this->session->set_flashdata('update', $notif);
      redirect('admin/service');
    }
    
  }
 function delete_service($id=NULL)
  {
     
    $this->m_umum->hapus('service','id_service',$id);
     $notif = " Data berhasil dihapuskan";
            $this->session->set_flashdata('delete', $notif);
    redirect('admin/service');
     
  }
   function konsultasi()
{
  
  $data = array(
      'judul' => 'Konsultasi',
      'modal_edit' => 'Jawaban Konsultasi',
      'dt_konsultasi'=> $this->m_umum->get_konsultasi(),
     
  );  
  $this->template->load('admin/template', 'admin/konsultasi', $data);
  
}


function update_konsultasi()
  {
        
    $this->form_validation->set_rules('id_konsultasi','id_konsultasi','required');
    if($this->form_validation->run() === FALSE)
        redirect('admin/konsultasi');
    else
    {
      $this->m_umum->update_data("konsultasi");
       $notif = " Data berhasil diupdate";
            $this->session->set_flashdata('update', $notif);
      redirect('admin/konsultasi');
    }
    
  }
 function delete_konsultasi($id=NULL)
  {
     
    $this->m_umum->hapus('konsultasi','id_konsultasi',$id);
     $notif = " Data berhasil dihapuskan";
            $this->session->set_flashdata('delete', $notif);
    redirect('admin/konsultasi');
     
  }
  function lke($id)
{
  
  $data = array(
      'judul' => 'lke Monev',
      'id' => $id,
      'dt_aspek'=> $this->m_emonev->get_aspek($id),
 
  );  
  $this->template->load('admin/template', 'admin/lke', $data);
  
}

function simpan_lke(){
 $id_aspek = $this->input->post('id_aspek');
 $nama_lke = $this->input->post('nama_lke');
 $id_area = $this->input->post('id_area');
 $this->db->set('id_lke', 'UUID()', FALSE);
    $data = array(       
            'id_aspek' => $id_aspek,
            'nama_lke' => $nama_lke
            );
         
    $this->m_umum->input_data($data,'lke');
 $notif = "Tambah data berhasil";
            $this->session->set_flashdata('success', $notif);
    redirect(base_url()."admin/lke/".$id_area);
    }
    function simpan_proker(){
 $id_lke = $this->input->post('id_lke');
 $nama_proker = $this->input->post('nama_proker');
 $pic = $this->input->post('pic');
 $sasaran = $this->input->post('sasaran');
 $id_area = $this->input->post('id_area');
 $this->db->set('id_proker', 'UUID()', FALSE);
    $data = array(       
            'id_lke' => $id_lke,
            'nama_proker' => $nama_proker,
            'pic' => $pic,
            'sasaran' => $sasaran,
            );
         
    $this->m_umum->input_data($data,'proker');
 $notif = "Tambah data berhasil";
            $this->session->set_flashdata('success', $notif);
    redirect(base_url()."admin/lke/".$id_area);
    }
function simpan_aspek() { 
     $id=$this->input->post('id_area');
    $this->db->set('id_aspek', 'UUID()', FALSE);
    $this->form_validation->set_rules('nama_aspek','nama_aspek','required');
    if($this->form_validation->run() === FALSE)
    redirect('admin/aspek');
    else
    {
        
        $this->m_umum->set_data("aspek");
        $notif = "Tambah Data Berhasil";
        $this->session->set_flashdata('success', $notif);
        redirect(base_url()."admin/lke/".$id);
    }
  
}

  function area($id)
{
  
  $data = array(
      'judul' => 'Area Monev',
      'id' => $id,
      'dt_area'=> $this->m_emonev->get_area($id),
 
  );  
  $this->template->load('admin/template', 'admin/area', $data);
  
}

function simpan_area() { 
     $id=$this->input->post('id_monev');
    $this->db->set('id_area', 'UUID()', FALSE);
    $this->form_validation->set_rules('nama_area','nama_area','required');
    if($this->form_validation->run() === FALSE)
    redirect('admin/area');
    else
    {
        
        $this->m_umum->set_data("area");
        $notif = "Tambah Data Berhasil";
        $this->session->set_flashdata('success', $notif);
        redirect(base_url()."admin/area/".$id);
    }
  
}

function update_area()
  {
        
    $this->form_validation->set_rules('id_area','id_area','required');
        $id=$this->input->post('id_monev');
    if($this->form_validation->run() === FALSE)
        redirect('admin/area');
    else
    {
      $this->m_umum->update_data("area");
       $notif = " Data berhasil diupdate";
            $this->session->set_flashdata('update', $notif);
            redirect(base_url()."admin/area/".$id);
    }
    
  }

function delete_area($id=NULL,$id_sk)
{
  
    $this->m_umum->hapus('area','id_area',$id);
     $notif = " Data berhasil dihapuskan";
        $this->session->set_flashdata('delete', $notif);
        redirect(base_url()."admin/area/".$id_sk);
        
}
 }

  ?>