<?php

class User extends CI_Controller
{

   function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->model('m_umum');
    if($this->session->userdata('akses') <> 5){
        redirect(base_url('login'));
        }
  }
   function cetak_pesanan($id)
    {
      
      $data = array(
                'judul' => 'Update pelanggan',
            'd' => $this->m_umum->cetak_pesanan($id)

        );
        $this->load->view('laporan/cetak_pesanan',$data);
        }
           function cetak_penawaran($id)
    {
      
      $data = array(
                'judul' => 'Update pelanggan',
            'd' => $this->m_umum->cetak_penawaran($id)

        );
        $this->load->view('laporan/cetak_penawaran',$data);
        }
  function laporan_pesanan()
    {
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');

        $data = array(
            'judul' => 'LAPORAN DATA PESANAN',
            'dari' => $dari,
            'sampai' => $sampai,
            'dt_pesanan' => $this->m_umum->laporan_pesanan_user($dari,$sampai),
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
            'dt_penawaran' => $this->m_umum->laporan_penawaran_user($dari,$sampai),
        );
        $this->load->view('laporan/penawaran',$data);
        }
   public function uploadfile()
  {
    $config['upload_path'] = 'upload';
    $config['allowed_types'] = 'jpg|png|jpeg|pdf';
    $config['overwrite'] = false;
    $config['max_size'] = 2000; // 1MB
    $config['encrypt_name'] = TRUE;


    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if ($this->upload->do_upload('file')) {
      return $this->upload->data("file_name");
    }
    $error = $this->upload->display_errors();
    echo $error;
    exit;
    // return "default.jpg";
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
      'modal_edit' => 'Penilaian',
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

function update_konsultasi()
  {
        
    $this->form_validation->set_rules('id_konsultasi','id_konsultasi','required');
    if($this->form_validation->run() === FALSE)
        redirect('user/konsultasi');
    else
    {
      $this->m_umum->update_data("konsultasi");
       $notif = " Data berhasil diupdate";
            $this->session->set_flashdata('update', $notif);
      redirect('user/konsultasi');
    }
    
  }
function penawaran()
{
  
  $data = array(
      'judul' => 'Penawaran',
      'dt_penawaran'=> $this->m_umum->get_penawaran_user(),
     
  );  
  $this->template->load('user/template', 'user/penawaran', $data);
  
}
function penilaian_penawaran()
  {
        
    $this->form_validation->set_rules('id_penawaran','id_penawaran','required');
    if($this->form_validation->run() === FALSE)
        redirect('user/penawaran');
    else
    {
      $this->m_umum->update_data("penawaran");
       $notif = " Data berhasil diupdate";
            $this->session->set_flashdata('update', $notif);
      redirect('user/penawaran');
    }
    
  }
function simpan_penawaran()
  {
 $id=$this->session->userdata('ses_id');
    $this->db->set('id_penawaran', 'UUID()', FALSE);
    $this->db->set('id_pelanggan',$id);
    $keterangan = $this->input->post('keterangan');
    $id_mobil = $this->input->post('id_mobil');
    $file = $this->uploadfile();

    $data = array(

      'keterangan' => $keterangan,
      'id_mobil' => $id_mobil,
      'file' => $file
    );

    $this->m_umum->input_data($data, 'penawaran');
     $notif = "Terimakasih, Anda akan dihubungi tim kami";
    $this->session->set_flashdata('success', $notif);
    redirect('user/penawaran');

  }

    function simpan_pesanan()
  {
 $id=$this->session->userdata('ses_id');
    $this->db->set('id_pesanan', 'UUID()', FALSE);
    $this->db->set('id_pelanggan',$id);
    $keterangan = $this->input->post('keterangan');
    $id_mobil = $this->input->post('id_mobil');
   
    $file = $this->uploadfile();

    $data = array(

      'keterangan' => $keterangan,
      'id_mobil' => $id_mobil,
     
      'file' => $file
    );

    $this->m_umum->input_data($data, 'pesanan');
     $notif = "Terimakasih, Anda akan dihubungi tim kami";
    $this->session->set_flashdata('success', $notif);
    redirect('user/pesanan');

  }
  

function pesanan()
{
  
  $data = array(
      'judul' => 'pesanan',
      'dt_pesanan'=> $this->m_umum->get_pesanan_user(),
     
  );  
  $this->template->load('user/template', 'user/pesanan', $data);
  
}
function penilaian_pesanan()
  {
        
    $this->form_validation->set_rules('id_pesanan','id_pesanan','required');
    if($this->form_validation->run() === FALSE)
        redirect('user/pesanan');
    else
    {
      $this->m_umum->update_data("pesanan");
       $notif = " Data berhasil diupdate";
            $this->session->set_flashdata('update', $notif);
      redirect('user/pesanan');
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
function penilaian_kasus()
  {
        
    $this->form_validation->set_rules('id_kasus','id_kasus','required');
    if($this->form_validation->run() === FALSE)
        redirect('user/kasus');
    else
    {
      $this->m_umum->update_data("kasus");
       $notif = " Data berhasil diupdate";
            $this->session->set_flashdata('update', $notif);
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