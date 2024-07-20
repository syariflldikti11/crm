<?php

class Admin extends CI_Controller {
 
  function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->model('m_umum');
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
function penawaran()
{
  
  $data = array(
      'judul' => 'Penawaran',
      'dt_penawaran'=> $this->m_umum->get_penawaran(),
        'dt_sales'=> $this->m_umum->get_sales(),
     
  );  
  $this->template->load('admin/template', 'admin/penawaran', $data);
  
}
function kirim_penawaran_sales()
  {
        
    $this->form_validation->set_rules('id_penawaran','id_penawaran','required');
    if($this->form_validation->run() === FALSE)
        redirect('admin/penawaran');
    else
    {
      $this->m_umum->update_data("penawaran");
       $notif = "Penawaran diteruskan ke Sales";
            $this->session->set_flashdata('update', $notif);
      redirect('admin/penawaran');
    }
    
  }
function pesanan()
{
  
  $data = array(
      'judul' => 'pesanan',
      'dt_pesanan'=> $this->m_umum->get_pesanan(),
           'dt_sales'=> $this->m_umum->get_sales(),
     
  );  
  $this->template->load('admin/template', 'admin/pesanan', $data);
  
}
function kirim_pesanan_sales()
  {
        
    $this->form_validation->set_rules('id_pesanan','id_pesanan','required');
    if($this->form_validation->run() === FALSE)
        redirect('admin/pesanan');
    else
    {
      $this->m_umum->update_data("pesanan");
       $notif = "Pesanan diteruskan ke Sales";
            $this->session->set_flashdata('update', $notif);
      redirect('admin/pesanan');
    }
    
  }
function pengguna()
{
  
  $data = array(
      'judul' => 'Pengguna',
      'modal_tambah' => 'Tambah Data pengguna',
      'modal_edit' => 'Edit Data pengguna',
      'dt_pengguna'=> $this->m_umum->get_pengguna(),
     
  );  
  $this->template->load('admin/template', 'admin/pengguna', $data);
  
}


function simpan_pengguna()
  {

    $this->db->set('id_pengguna', 'UUID()', FALSE);
    $nama_lengkap = $this->input->post('nama_lengkap');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $level = $this->input->post('level');
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
   

    $data = array(

      'nama_lengkap' => $nama_lengkap,
      'username' => $username,
      'password' => $hashed_password,
      'level' => $level,
    );

    $this->m_umum->input_data($data, 'pengguna');
    $notif = "Tambah Data Berhasil";
    $this->session->set_flashdata('success', $notif);
    redirect('admin/pengguna');

  }
  function update_pengguna()
  {
    $id_pengguna = $this->input->post('id_pengguna');
    $nama_lengkap = $this->input->post('nama_lengkap');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $level = $this->input->post('level');
    
    $data_update = array(
      'id_pengguna' => $id_pengguna,
       'nama_lengkap' => $nama_lengkap,
      'username' => $username,
      'level' => $level
    );
    $where = array('id_pengguna' => $id_pengguna);
    $res = $this->m_umum->UpdateData('pengguna', $data_update, $where);
    $notif = "Update Data Berhasil";
    $this->session->set_flashdata('success', $notif);
    redirect('admin/pengguna');

  }
   function delete_pengguna($id=NULL)
  {
     
    $this->m_umum->hapus('pengguna','id_pengguna',$id);
     $notif = " Data berhasil dihapuskan";
            $this->session->set_flashdata('delete', $notif);
    redirect('admin/pengguna');
     
  }
function promo()
{
  
  $data = array(
      'judul' => 'Promo',
      'modal_tambah' => 'Tambah Data Promo',
      'modal_edit' => 'Edit Data Promo',
      'dt_promo'=> $this->m_umum->get_data('promo'),
     
  );  
  $this->template->load('admin/template', 'admin/promo', $data);
  
}


function simpan_promo()
  {

    $this->db->set('id_promo', 'UUID()', FALSE);
    $nama_promo = $this->input->post('nama_promo');
    $detail_promo = $this->input->post('detail_promo');
    $tgl_promo = $this->input->post('tgl_promo');
    $file_promo = $this->uploadfilepromo();

    $data = array(

      'nama_promo' => $nama_promo,
      'detail_promo' => $detail_promo,
      'file_promo' => $file_promo,
      'tgl_promo' => $tgl_promo,
    );

    $this->m_umum->input_data($data, 'promo');
    $notif = "Tambah Data Berhasil";
    $this->session->set_flashdata('success', $notif);
    redirect('admin/promo');

  }
   function update_promo()
  {
    $id_promo = $this->input->post('id_promo');
   $nama_promo = $this->input->post('nama_promo');
    $detail_promo = $this->input->post('detail_promo');
    $tgl_promo = $this->input->post('tgl_promo');
    $old_promo = $this->input->post('old_promo');

    if (!empty($_FILES["file_promo"]["name"])) {
      $file_promo = $this->uploadfilepromo();
      unlink("./upload/$old_promo");
    } else {
      $file_promo = $old_kak;
    }
    $data_update = array(
      'id_promo' => $id_promo,
      'nama_promo' => $nama_promo,
      'detail_promo' => $detail_promo,
      'file_promo' => $file_promo,
      'tgl_promo' => $tgl_promo,
    );
    $where = array('id_promo' => $id_promo);
    $res = $this->m_umum->UpdateData('promo', $data_update, $where);
    $notif = "Update Data Berhasil";
    $this->session->set_flashdata('success', $notif);
    redirect('admin/promo');

  }
  function delete_promo($id=NULL)
  {
     
    $this->m_umum->hapus('promo','id_promo',$id);
     $notif = " Data berhasil dihapuskan";
            $this->session->set_flashdata('delete', $notif);
    redirect('admin/promo');
     
  }
  public function uploadfilepromo()
  {
    $config['upload_path'] = 'upload';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['overwrite'] = false;
    $config['max_size'] = 2000; // 1MB
    $config['encrypt_name'] = TRUE;


    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if ($this->upload->do_upload('file_promo')) {
      return $this->upload->data("file_name");
    }
    $error = $this->upload->display_errors();
    echo $error;
    exit;
    // return "default.jpg";
  }
  function banner()
{
  
  $data = array(
      'judul' => 'Banner',
      'modal_tambah' => 'Tambah Data Banner',
      'modal_edit' => 'Edit Data Banner',
      'dt_banner'=> $this->m_umum->get_data('banner'),
     
  );  
  $this->template->load('admin/template', 'admin/banner', $data);
  
}


function simpan_banner()
  {

    $this->db->set('id_banner', 'UUID()', FALSE);
    $file_banner = $this->uploadfilebanner();

    $data = array(

      'file_banner' => $file_banner,
    );

    $this->m_umum->input_data($data, 'banner');
    $notif = "Tambah Data Berhasil";
    $this->session->set_flashdata('success', $notif);
    redirect('admin/banner');

  }
   function update_banner()
  {
    $id_banner = $this->input->post('id_banner');
    $old_banner = $this->input->post('old_banner');

    if (!empty($_FILES["file_banner"]["name"])) {
      $file_banner = $this->uploadfilebanner();
      unlink("./upload/$old_banner");
    } else {
      $file_banner = $old_kak;
    }
    $data_update = array(
      'id_banner' => $id_banner,
     
      'file_banner' => $file_banner,
    );
    $where = array('id_banner' => $id_banner);
    $res = $this->m_umum->UpdateData('banner', $data_update, $where);
    $notif = "Update Data Berhasil";
    $this->session->set_flashdata('success', $notif);
    redirect('admin/banner');

  }
  function delete_banner($id=NULL)
  {
     
    $this->m_umum->hapus('banner','id_banner',$id);
     $notif = " Data berhasil dihapuskan";
            $this->session->set_flashdata('delete', $notif);
    redirect('admin/banner');
     
  }
  public function uploadfilebanner()
  {
    $config['upload_path'] = 'upload';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['overwrite'] = false;
    $config['max_size'] = 2000; // 1MB
    $config['encrypt_name'] = TRUE;


    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if ($this->upload->do_upload('file_banner')) {
      return $this->upload->data("file_name");
    }
    $error = $this->upload->display_errors();
    echo $error;
    exit;
    // return "default.jpg";
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
  function model_mobil()
{
  
  $data = array(
      'judul' => 'Model Mobil',
      'modal_tambah' => 'Tambah Data Model Mobil',
      'modal_edit' => 'Edit Data Model Mobil',
      'dt_model_mobil'=> $this->m_umum->get_data('model_mobil'),
     
  );  
  $this->template->load('admin/template', 'admin/model_mobil', $data);
  
}
 function simpan_model_mobil() { 
    
          $tahun=$this->session->userdata('tahun');
$this->db->set('id_model_mobil', 'UUID()', FALSE);
    $this->form_validation->set_rules('nama_model_mobil','nama_model_mobil','required');
    if($this->form_validation->run() === FALSE)
    redirect('admin/model_mobil');
    else
    {
        
        $this->m_umum->set_data("model_mobil");
        $notif = "Tambah Data Berhasil";
        $this->session->set_flashdata('success', $notif);
        redirect('admin/model_mobil');
    }

}
function update_model_mobil()
  {
        
    $this->form_validation->set_rules('id_model_mobil','id_model_mobil','required');
    if($this->form_validation->run() === FALSE)
        redirect('admin/model_mobil');
    else
    {
      $this->m_umum->update_data("model_mobil");
       $notif = " Data berhasil diupdate";
            $this->session->set_flashdata('update', $notif);
      redirect('admin/model_mobil');
    }
    
  }
 function delete_model_mobil($id=NULL)
  {
     
    $this->m_umum->hapus('model_mobil','id_model_mobil',$id);
     $notif = " Data berhasil dihapuskan";
            $this->session->set_flashdata('delete', $notif);
    redirect('admin/model_mobil');
     
  }
  function solusi()
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
      'judul' => 'Mobil',
      'modal_tambah' => 'Tambah Data mobil',
      'modal_edit' => 'Edit Data mobil',
      'dt_mobil'=> $this->m_umum->get_data('mobil'),
     
  );  
  $this->template->load('admin/template', 'admin/mobil', $data);
  
}

 function simpan_mobil()
  {

    $this->db->set('id_mobil', 'UUID()', FALSE);
    $nama_mobil = $this->input->post('nama_mobil');
    $transmisi = $this->input->post('transmisi');
    $warna = $this->input->post('warna');
    $cc = $this->input->post('cc');
    $kapasitas = $this->input->post('kapasitas');
    $ac = $this->input->post('ac');
    $ac_double_blower = $this->input->post('ac_double_blower');
    $lampu_kabut = $this->input->post('lampu_kabut');
    $penggerak = $this->input->post('penggerak');
    $harga_otr = $this->input->post('harga_otr');
    $foto_mobil = $this->uploadfotomobil();

    $data = array(

      'nama_mobil' => $nama_mobil,
      'transmisi' => $transmisi,
      'foto_mobil' => $foto_mobil,
      'warna' => $warna,
      'cc' => $cc,
      'kapasitas' => $kapasitas,
      'ac' => $ac,
      'ac_double_blower' => $ac_double_blower,
      'lampu_kabut' => $lampu_kabut,
      'penggerak' => $penggerak,
      'harga_otr' => $harga_otr
    );

    $this->m_umum->input_data($data, 'mobil');
    $notif = "Tambah Data Berhasil";
    $this->session->set_flashdata('success', $notif);
    redirect('admin/mobil');

  }
   function update_mobil()
  {
    $id_mobil = $this->input->post('id_mobil');
   $nama_mobil = $this->input->post('nama_mobil');
    $transmisi = $this->input->post('transmisi');
    $warna = $this->input->post('warna');
    $cc = $this->input->post('cc');
    $kapasitas = $this->input->post('kapasitas');
    $ac = $this->input->post('ac');
    $ac_double_blower = $this->input->post('ac_double_blower');
    $lampu_kabut = $this->input->post('lampu_kabut');
    $penggerak = $this->input->post('penggerak');
    $old_mobil = $this->input->post('old_mobil');

    if (!empty($_FILES["foto_mobil"]["name"])) {
      $foto_mobil = $this->uploadfotomobil();
      unlink("./upload/$old_mobil");
    } else {
      $foto_mobil = $old_kak;
    }
    $data_update = array(
      'id_mobil' => $id_mobil,
       'nama_mobil' => $nama_mobil,
      'transmisi' => $transmisi,
      'foto_mobil' => $foto_mobil,
      'warna' => $warna,
      'cc' => $cc,
      'kapasitas' => $kapasitas,
      'ac' => $ac,
      'ac_double_blower' => $ac_double_blower,
      'lampu_kabut' => $lampu_kabut,
      'penggerak' => $penggerak
    );
    $where = array('id_mobil' => $id_mobil);
    $res = $this->m_umum->UpdateData('mobil', $data_update, $where);
    $notif = "Update Data Berhasil";
    $this->session->set_flashdata('success', $notif);
    redirect('admin/mobil');

  }
  public function uploadfotomobil()
  {
    $config['upload_path'] = 'upload';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['overwrite'] = false;
    $config['max_size'] = 2000; // 1MB
    $config['encrypt_name'] = TRUE;


    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if ($this->upload->do_upload('foto_mobil')) {
      return $this->upload->data("file_name");
    }
    $error = $this->upload->display_errors();
    echo $error;
    exit;
    // return "default.jpg";
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
      'dt_mobil'=> $this->m_umum->get_data('model_mobil'),
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

function kasus()
{
  
  $data = array(
      'judul' => 'Kasus',
      'modal_tambah' => 'Tambah Data Kasus',
      'modal_edit' => 'Edit Data Kasus',
      'dt_pelanggan'=> $this->m_umum->get_data('pelanggan'),
      'dt_kasus'=> $this->m_umum->get_kasus(),
        'dt_pegawai'=> $this->m_umum->get_pegawai(),
     
  );  
  $this->template->load('admin/template', 'admin/kasus', $data);
  
}

 function simpan_kasus() { 
    
          $tahun=$this->session->userdata('tahun');
$this->db->set('id_kasus', 'UUID()', FALSE);
    $this->form_validation->set_rules('subject','subject','required');
    if($this->form_validation->run() === FALSE)
    redirect('admin/kasus');
    else
    {
        
        $this->m_umum->set_data("kasus");
        $notif = "Tambah Data Berhasil";
        $this->session->set_flashdata('success', $notif);
        redirect('admin/kasus');
    }

}
function update_kasus()
  {
        
    $this->form_validation->set_rules('id_kasus','id_kasus','required');
    if($this->form_validation->run() === FALSE)
        redirect('admin/kasus');
    else
    {
      $this->m_umum->update_data("kasus");
       $notif = " Data berhasil diupdate";
            $this->session->set_flashdata('update', $notif);
      redirect('admin/kasus');
    }
    
  }
  function kirim_pegawai()
  {
        
    $this->form_validation->set_rules('id_kasus','id_kasus','required');
    if($this->form_validation->run() === FALSE)
        redirect('admin/kasus');
    else
    {
      $this->m_umum->update_data("kasus");
       $notif = "Kasus diteruskan ke pegawai";
            $this->session->set_flashdata('update', $notif);
      redirect('supervisor/kasus');
    }
    
  }
 function delete_kasus($id=NULL)
  {
     
    $this->m_umum->hapus('kasus','id_kasus',$id);
     $notif = " Data berhasil dihapuskan";
            $this->session->set_flashdata('delete', $notif);
    redirect('admin/kasus');
     
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