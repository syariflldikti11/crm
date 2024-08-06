<?php

class Sales extends CI_Controller {
 
  function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->model('m_umum');
    if($this->session->userdata('akses') <> 3){
        redirect(base_url('login'));
        }
  }
   function laporan_pesanan()
    {
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');

        $data = array(
            'judul' => 'LAPORAN DATA PESANAN',
            'dari' => $dari,
            'sampai' => $sampai,
            'dt_pesanan' => $this->m_umum->laporan_pesanan_sales($dari,$sampai),
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
            'dt_penawaran' => $this->m_umum->laporan_penawaran_sales($dari,$sampai),
        );
        $this->load->view('laporan/penawaran',$data);
        }
  function index()
  {

    $data = array(
        'judul' => 'Dashboard',

        
    );  
    $this->template->load('sales/template', 'sales/home', $data);
    
}
function penawaran()
{
  
  $data = array(
      'judul' => 'Penawaran',
      'dt_penawaran'=> $this->m_umum->get_penawaran_sales(),
       'dt_sales'=> $this->m_umum->get_sales(),
  );  
  $this->template->load('sales/template', 'sales/penawaran', $data);
  
}
function update_penawaran()
  {
        
    $this->form_validation->set_rules('id_penawaran','id_penawaran','required');
    if($this->form_validation->run() === FALSE)
        redirect('sales/penawaran');
    else
    {
      $this->m_umum->update_data("penawaran");
       $notif = "Penawaran berhasil diupdate";
            $this->session->set_flashdata('update', $notif);
      redirect('sales/penawaran');
    }
    
  }
function pesanan()
{
  
  $data = array(
      'judul' => 'pesanan',
      'dt_pesanan'=> $this->m_umum->get_pesanan_sales(),
       'dt_sales'=> $this->m_umum->get_sales(),
  );  
  $this->template->load('sales/template', 'sales/pesanan', $data);
  
}
function update_pesanan()
  {
        
    $this->form_validation->set_rules('id_pesanan','id_pesanan','required');
    if($this->form_validation->run() === FALSE)
        redirect('sales/pesanan');
    else
    {
      $this->m_umum->update_data("pesanan");
       $notif = "Pesanan diteruskan ke Sales";
            $this->session->set_flashdata('update', $notif);
      redirect('sales/pesanan');
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
  $this->template->load('sales/template', 'sales/pelanggan', $data);
  
}


function kirim_pegawai()
  {
        
    $this->form_validation->set_rules('id_kasus','id_kasus','required');
    if($this->form_validation->run() === FALSE)
        redirect('sales/kasus');
    else
    {
      $this->m_umum->update_data("kasus");
       $notif = "Pesanan berhasil diupdate";
            $this->session->set_flashdata('update', $notif);
      redirect('sales/kasus');
    }
    
  }

 

}

  ?>