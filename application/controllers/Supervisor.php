<?php

class Supervisor extends CI_Controller {
 
  function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->model('m_umum');
    if($this->session->userdata('akses') <> 2){
        redirect(base_url('login'));
        }
  }
  function laporan_event()
    {
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');

        $data = array(
            'judul' => 'LAPORAN DATA EVENT',
            'dari' => $dari,
            'sampai' => $sampai,
            'dt_event' => $this->m_umum->laporan_event($dari,$sampai),
        );
        $this->load->view('laporan/event',$data);
        }
        function laporan_promo()
    {
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');

        $data = array(
            'judul' => 'LAPORAN DATA PROMO',
            'dari' => $dari,
            'sampai' => $sampai,
            'dt_promo' => $this->m_umum->laporan_promo($dari,$sampai),
        );
        $this->load->view('laporan/promo',$data);
        }
        function laporan_pesanan()
    {
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');

        $data = array(
            'judul' => 'LAPORAN DATA PESANAN',
            'dari' => $dari,
            'sampai' => $sampai,
            'dt_pesanan' => $this->m_umum->laporan_pesanan($dari,$sampai),
        );
        $this->load->view('laporan/pesanan',$data);
        }
        function laporan_penawaran()
    {
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');

        $data = array(
            'judul' => 'LAPORAN DATA PENAWARAN',
            'dari' => $dari,
            'sampai' => $sampai,
            'dt_penawaran' => $this->m_umum->laporan_penawaran($dari,$sampai),
        );
        $this->load->view('laporan/penawaran',$data);
        }
        function laporan_kasus()
    {
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');

        $data = array(
            'judul' => 'LAPORAN DATA KASUS',
            'dari' => $dari,
            'sampai' => $sampai,
            'dt_kasus' => $this->m_umum->laporan_kasus($dari,$sampai),
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
  function laporan_service()
{
  
  $data = array(
      'judul' => 'LAPORAN DATA SERVICE',
       'dt_service'=> $this->m_umum->get_service(),
     
  );  
  $this->load->view('laporan/service', $data);
  
}
  function index()
  {

    $data = array(
        'judul' => 'Dashboard',

        
    );  
    $this->template->load('supervisor/template', 'supervisor/home', $data);
    
}
function penawaran()
{
  
  $data = array(
      'judul' => 'Penawaran',
      'dt_penawaran'=> $this->m_umum->get_penawaran(),
       'dt_sales'=> $this->m_umum->get_sales(),
  );  
  $this->template->load('supervisor/template', 'supervisor/penawaran', $data);
  
}
function kirim_penawaran_sales()
  {
        
    $this->form_validation->set_rules('id_penawaran','id_penawaran','required');
    if($this->form_validation->run() === FALSE)
        redirect('supervisor/penawaran');
    else
    {
      $this->m_umum->update_data("penawaran");
       $notif = "Penawaran diteruskan ke Sales";
            $this->session->set_flashdata('update', $notif);
      redirect('supervisor/penawaran');
    }
    
  }
function pesanan()
{
  
  $data = array(
      'judul' => 'pesanan',
      'dt_pesanan'=> $this->m_umum->get_pesanan(),
       'dt_sales'=> $this->m_umum->get_sales(),
  );  
  $this->template->load('supervisor/template', 'supervisor/pesanan', $data);
  
}
function kirim_pesanan_sales()
  {
        
    $this->form_validation->set_rules('id_pesanan','id_pesanan','required');
    if($this->form_validation->run() === FALSE)
        redirect('supervisor/pesanan');
    else
    {
      $this->m_umum->update_data("pesanan");
       $notif = "Pesanan diteruskan ke Sales";
            $this->session->set_flashdata('update', $notif);
      redirect('supervisor/pesanan');
    }
    
  }

function pelanggan()
{
  
  $data = array(
      'judul' => 'Pelanggan',
      'modal_tambah' => 'Tambah Data Pelanggan',
      'modal_edit' => 'Edit Data Pelanggan',
      'dt_pelanggan'=> $this->m_umum->get_data('pelanggan'),
     
  );  
  $this->template->load('supervisor/template', 'supervisor/pelanggan', $data);
  
}

 function solusi()
{
  
  $data = array(
      'judul' => 'Solusi',
      'modal_tambah' => 'Tambah Data Solusi',
      'modal_edit' => 'Edit Data Solusi',
      'dt_solusi'=> $this->m_umum->get_data('solusi'),
     
  );  
  $this->template->load('supervisor/template', 'supervisor/solusi', $data);
  
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
  $this->template->load('supervisor/template', 'supervisor/kasus', $data);
  
}
function kirim_pegawai()
  {
        
    $this->form_validation->set_rules('id_kasus','id_kasus','required');
    if($this->form_validation->run() === FALSE)
        redirect('supervisor/kasus');
    else
    {
      $this->m_umum->update_data("kasus");
       $notif = "Kasus diteruskan ke pegawai";
            $this->session->set_flashdata('update', $notif);
      redirect('supervisor/kasus');
    }
    
  }
 function simpan_kasus() { 
    
          $tahun=$this->session->userdata('tahun');
$this->db->set('id_kasus', 'UUID()', FALSE);
    $this->form_validation->set_rules('subject','subject','required');
    if($this->form_validation->run() === FALSE)
    redirect('supervisor/kasus');
    else
    {
        
        $this->m_umum->set_data("kasus");
        $notif = "Tambah Data Berhasil";
        $this->session->set_flashdata('success', $notif);
        redirect('supervisor/kasus');
    }

}
function update_kasus()
  {
        
    $this->form_validation->set_rules('id_kasus','id_kasus','required');
    if($this->form_validation->run() === FALSE)
        redirect('supervisor/kasus');
    else
    {
      $this->m_umum->update_data("kasus");
       $notif = " Data berhasil diupdate";
            $this->session->set_flashdata('update', $notif);
      redirect('supervisor/kasus');
    }
    
  }
 function delete_kasus($id=NULL)
  {
     
    $this->m_umum->hapus('kasus','id_kasus',$id);
     $notif = " Data berhasil dihapuskan";
            $this->session->set_flashdata('delete', $notif);
    redirect('supervisor/kasus');
     
  }
   function konsultasi()
{
  
  $data = array(
      'judul' => 'Konsultasi',
      'modal_edit' => 'Jawaban Konsultasi',
      'dt_konsultasi'=> $this->m_umum->get_konsultasi(),
     
  );  
  $this->template->load('supervisor/template', 'supervisor/konsultasi', $data);
  
}



  

}

  ?>