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
function monev()
{
  
  $data = array(
      'judul' => 'Monev',
      'dt_monev'=> $this->m_umum->get_data('monev'),
     
  );  
  $this->template->load('admin/template', 'admin/monev', $data);
  
}

 function simpan_monev() { 
    
          $tahun=$this->session->userdata('tahun');
$this->db->set('id_monev', 'UUID()', FALSE);
    $this->form_validation->set_rules('nama_monev','nama_monev','required');
    if($this->form_validation->run() === FALSE)
    redirect('admin/monev');
    else
    {
        
        $this->m_umum->set_data("monev");
        $notif = "Tambah Data Berhasil";
        $this->session->set_flashdata('success', $notif);
        redirect('admin/monev');
    }

}
function update_monev()
  {
        
    $this->form_validation->set_rules('id_monev','id_monev','required');
    if($this->form_validation->run() === FALSE)
        redirect('admin/monev');
    else
    {
      $this->m_umum->update_data("monev");
       $notif = " Data berhasil diupdate";
            $this->session->set_flashdata('update', $notif);
      redirect('admin/monev');
    }
    
  }
 function delete_monev($id=NULL)
  {
     
    $this->m_umum->hapus('monev','id_monev',$id);
     $notif = " Data berhasil dihapuskan";
            $this->session->set_flashdata('delete', $notif);
    redirect('admin/monev');
     
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