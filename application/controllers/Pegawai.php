<?php

class Pegawai extends CI_Controller {
 
  function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->model('m_umum');
    if($this->session->userdata('akses') <> 4){
        redirect(base_url('login'));
        }
  }
    function laporan_kasus()
    {
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');

        $data = array(
            'judul' => 'LAPORAN DATA KASUS',
            'dari' => $dari,
            'sampai' => $sampai,
            'dt_kasus' => $this->m_umum->laporan_kasus_pegawai($dari,$sampai),
        );
        $this->load->view('laporan/kasus',$data);
        }
        function laporan_konsultasi()
    {
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');

        $data = array(
            'judul' => 'LAPORAN DATA KONSULTASI',
            'dari' => $dari,
            'sampai' => $sampai,
            'dt_konsultasi' => $this->m_umum->laporan_konsultasi($dari,$sampai),
        );
        $this->load->view('laporan/konsultasi',$data);
        }
    function laporan_mobil()
{
  
  $data = array(
     'judul' => 'LAPORAN DATA MOBIL',
      'dt_mobil'=> $this->m_umum->get_data('mobil'),
     
  );  
  $this->load->view('laporan/mobil', $data);
  
}
function laporan_pelanggan()
{
  
  $data = array(
     'judul' => 'LAPORAN DATA PELANGGAN',
      'dt_pelanggan'=> $this->m_umum->get_data('pelanggan'),
     
  );  
  $this->load->view('laporan/pelanggan', $data);
  
}
  function index()
  {

    $data = array(
        'judul' => 'Dashboard',

        
    );  
    $this->template->load('pegawai/template', 'pegawai/home', $data);
    
}


function pelanggan()
{
  
  $data = array(
      'judul' => 'Pelanggan',
      'modal_tambah' => 'Tambah Data Pelanggan',
      'modal_edit' => 'Edit Data Pelanggan',
      'dt_pelanggan'=> $this->m_umum->get_data('pelanggan'),
     
  );  
  $this->template->load('pegawai/template', 'pegawai/pelanggan', $data);
  
}

 function solusi()
{
  
  $data = array(
      'judul' => 'Solusi',
      'modal_tambah' => 'Tambah Data Solusi',
      'modal_edit' => 'Edit Data Solusi',
      'dt_solusi'=> $this->m_umum->get_data('solusi'),
     
  );  
  $this->template->load('pegawai/template', 'pegawai/solusi', $data);
  
}
  
function kasus()
{
  
  $data = array(
      'judul' => 'Kasus',
      'modal_tambah' => 'Tambah Data Kasus',
      'modal_edit' => 'Edit Data Kasus',
      'dt_pelanggan'=> $this->m_umum->get_data('pelanggan'),
      'dt_kasus'=> $this->m_umum->get_kasus_pegawai(),
     
  );  
  $this->template->load('pegawai/template', 'pegawai/kasus', $data);
  
}

 function simpan_kasus() { 
    
          $tahun=$this->session->userdata('tahun');
$this->db->set('id_kasus', 'UUID()', FALSE);
    $this->form_validation->set_rules('subject','subject','required');
    if($this->form_validation->run() === FALSE)
    redirect('pegawai/kasus');
    else
    {
        
        $this->m_umum->set_data("kasus");
        $notif = "Tambah Data Berhasil";
        $this->session->set_flashdata('success', $notif);
        redirect('pegawai/kasus');
    }

}
function update_kasus()
  {
        
    $this->form_validation->set_rules('id_kasus','id_kasus','required');
    if($this->form_validation->run() === FALSE)
        redirect('pegawai/kasus');
    else
    {
      $this->m_umum->update_data("kasus");
       $notif = " Data berhasil diupdate";
            $this->session->set_flashdata('update', $notif);
      redirect('pegawai/kasus');
    }
    
  }
 function delete_kasus($id=NULL)
  {
     
    $this->m_umum->hapus('kasus','id_kasus',$id);
     $notif = " Data berhasil dihapuskan";
            $this->session->set_flashdata('delete', $notif);
    redirect('pegawai/kasus');
     
  }
   function konsultasi()
{
  
  $data = array(
      'judul' => 'Konsultasi',
      'modal_edit' => 'Jawaban Konsultasi',
      'dt_konsultasi'=> $this->m_umum->get_konsultasi(),
     
  );  
  $this->template->load('pegawai/template', 'pegawai/konsultasi', $data);
  
}
function update_konsultasi()
  {
        
    $this->form_validation->set_rules('id_konsultasi','id_konsultasi','required');
    if($this->form_validation->run() === FALSE)
        redirect('pegawai/konsultasi');
    else
    {
      $this->m_umum->update_data("konsultasi");
       $notif = " Data berhasil diupdate";
            $this->session->set_flashdata('update', $notif);
      redirect('pegawai/konsultasi');
    }
    
  }



  

}

  ?>