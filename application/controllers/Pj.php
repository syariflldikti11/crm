<?php

class Pj extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('m_sakip');
    if ($this->session->userdata('akses') <> 2) {
      redirect(base_url('login_sakip'));
    }
  }
  function pengukuran_kinerja()
{
 
 $tahun=$this->session->userdata('tahun');
  $data = array(
        'judul' => 'Pengukuran Kinerja',
        'tahun'=> $tahun,
        'dt_ikk'=> $this->m_sakip->get_ikk_home(),
        'dt_pk'=> $this->m_sakip->get_pk(),
         'dt_tw'=> $this->m_sakip->get_triwulan()
    );  
  $this->template->load('sakip/pj/template', 'sakip/pj/pengukuran_kinerja', $data);
     
}
   public function uploadppks()
  {
    $config['upload_path']          = 'upload';
    $config['allowed_types']        = 'pdf|jpg|jpeg|png|pdf|xls|xlsx|doc|docx';
    $config['overwrite']      = false;
     $config['max_size']             = 5000; // 1MB
$config['encrypt_name'] = TRUE;

    $this->load->library('upload', $config);
  $this->upload->initialize($config);

      if ($this->upload->do_upload('ppks')) 
      {
          return $this->upload->data("file_name");
      }
       $error = $this->upload->display_errors();
       echo $error;
       exit;
      // return "default.jpg";
  }
    public function uploadnarkoba()
  {
    $config['upload_path']          = 'upload';
    $config['allowed_types']        = 'pdf|jpg|jpeg|png|pdf|xls|xlsx|doc|docx';
    $config['overwrite']      = false;
     $config['max_size']             = 5000; // 1MB
$config['encrypt_name'] = TRUE;

    $this->load->library('upload', $config);
  $this->upload->initialize($config);

      if ($this->upload->do_upload('narkoba')) 
      {
          return $this->upload->data("file_name");
      }
       $error = $this->upload->display_errors();
       echo $error;
       exit;
      // return "default.jpg";
  }
    public function uploadkorupsi()
  {
    $config['upload_path']          = 'upload';
    $config['allowed_types']        = 'pdf|jpg|jpeg|png|pdf|xls|xlsx|doc|docx';
    $config['overwrite']      = false;
     $config['max_size']             = 5000; // 1MB
$config['encrypt_name'] = TRUE;

    $this->load->library('upload', $config);
  $this->upload->initialize($config);

      if ($this->upload->do_upload('korupsi')) 
      {
          return $this->upload->data("file_name");
      }
       $error = $this->upload->display_errors();
       echo $error;
       exit;
      // return "default.jpg";
  }
  function view_kak($id_usulan_tb)
  {

    $data = array(

      'view_kak' => $this->m_sakip->get_row_view_dokumen($id_usulan_tb),
    );
    $this->load->view('sakip/pj/view_kak', $data);
  }
  function view_rab($id_usulan_tb)
  {

    $data = array(

      'view_rab' => $this->m_sakip->get_row_view_dokumen($id_usulan_tb),
    );
    $this->load->view('sakip/pj/view_rab', $data);
  }
  function view_rab_excel($id_usulan_tb)
  {

    $data = array(

      'view_rab_excel' => $this->m_sakip->get_row_view_dokumen($id_usulan_tb),
    );
    $this->load->view('sakip/pj/view_rab_excel', $data);
  }
  function ganti_password()
  {
    $username = $this->session->userdata('username');
    $password = $this->input->post('password');
    $data = array(
      'password' => sha1($password),
    );
    $this->db->where('username', $username);
    $update = $this->db->update('sakip_user', $data);
    $notif = "Berhasil ganti password, silahkan logout lalu login kembali";
    $this->session->set_flashdata('success', $notif);
    redirect('pj');
  }
  function cetak_proker()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'tahun' => $tahun,
      'dt_proker' => $this->m_sakip->cetak_proker_tb_pj(),

    );
    $this->load->view('sakip/pj/cetak_proker', $data);

  }
  function cetak_proker_excel()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'tahun' => $tahun,
      'dt_proker' => $this->m_sakip->cetak_proker_tb_pj(),
    );
    $this->load->view('sakip/pj/cetak_proker_excel', $data);

  }
  function cetak_proker_td()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'tahun' => $tahun,
      'dt_proker' => $this->m_sakip->cetak_proker_td_pj(),

    );
    $this->load->view('sakip/pj/cetak_proker_td', $data);

  }
  function cetak_proker_excel_td()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'tahun' => $tahun,
      'dt_proker' => $this->m_sakip->cetak_proker_td_pj(),
    );
    $this->load->view('sakip/pj/cetak_proker_excel_td', $data);

  }
  function kalender_proker_tb()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'tahun' => $tahun,
      'dt_proker' => $this->m_sakip->cetak_proker_tb_pj(),

    );
    $this->template->load('sakip/pj/template', 'sakip/pj/kalender_proker_tb', $data);

  }
  function kalender_proker_td()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'tahun' => $tahun,
      'dt_proker' => $this->m_sakip->cetak_proker_td_pj(),

    );
    $this->template->load('sakip/pj/template', 'sakip/pj/kalender_proker_td', $data);

  }
  function proker_tb()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'judul' => 'Program Kerja',
      'dt_proker_tb' => $this->m_sakip->get_proker_tb(),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/proker_tb', $data);

  }
  function proker_td()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'judul' => 'Program Kerja',
      'dt_proker_td' => $this->m_sakip->get_proker_td(),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/proker_td', $data);

  }

  function usulan_tb()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'judul' => 'Program Kerja',
      'dt_usulan_tb' => $this->m_sakip->get_usulan_tb(),
      'dt_iku_proker' => $this->m_sakip->get_data('iku_proker'),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/usulan_tb', $data);

  }
  function usulan_td()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'judul' => 'Program Kerja',
      'dt_usulan_td' => $this->m_sakip->get_usulan_td(),
      'dt_iku_proker' => $this->m_sakip->get_data('iku_proker'),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/usulan_td', $data);

  }
  function detail_proker_tb($id)
  {
    $tahun = $this->session->userdata('tahun');
    $data = array(
      'judul' => 'Program Kerja',
      'id' => $id,
      'dt_detail_proker_tb' => $this->m_sakip->get_detail_proker_tb($id),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/detail_proker_tb', $data);
  }
  function detail_proker_td($id)
  {
    $tahun = $this->session->userdata('tahun');
    $data = array(
      'judul' => 'Program Kerja',
      'id' => $id,
      'dt_detail_proker_tb' => $this->m_sakip->get_detail_proker_tb($id),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/detail_proker_td', $data);
  }

  function simpan_usulan_tb()
  {

    $tahun = $this->session->userdata('tahun');
    $id_bagian = $this->session->userdata('id');
    $this->db->set('id_usulan_tb', 'UUID()', FALSE);
    $nama_kegiatan = $this->input->post('nama_kegiatan');
    $permasalahan = $this->input->post('permasalahan');
    $id_iku_proker = $this->input->post('id_iku_proker');
    $kak = $this->uploadKAK();
    $rab = $this->uploadRAB();
    $rab_excel = $this->uploadRABExcel();

    $data = array(

      'nama_kegiatan' => $nama_kegiatan,
      'id_bagian' => $id_bagian,

      'permasalahan' => $permasalahan,
      'kak' => $kak,
      'rab' => $rab,
      'rab_excel' => $rab_excel,
      'tahun_proker' => $tahun,
      'id_iku_proker' => $id_iku_proker,
    );

    $this->m_umum->input_data($data, 'usulan_tb');
    $notif = "Tambah Data Berhasil";
    $this->session->set_flashdata('success', $notif);
    redirect('pj/usulan_tb');

  }
  function simpan_usulan_td()
  {

    $tahun = $this->session->userdata('tahun');
    $tahuntd = $tahun + 1;
    $id_bagian = $this->session->userdata('id');
    $this->db->set('id_usulan_tb', 'UUID()', FALSE);
    $nama_kegiatan = $this->input->post('nama_kegiatan');
    $permasalahan = $this->input->post('permasalahan');
    $id_iku_proker = $this->input->post('id_iku_proker');
    $kak = $this->uploadKAK();
    $rab = $this->uploadRAB();
    $rab_excel = $this->uploadRABExcel();

    $data = array(

      'nama_kegiatan' => $nama_kegiatan,
      'id_bagian' => $id_bagian,

      'permasalahan' => $permasalahan,
      'kak' => $kak,
      'rab' => $rab,
      'rab_excel' => $rab_excel,
      'tahun_proker' => $tahuntd,
      'id_iku_proker' => $id_iku_proker,
    );

    $this->m_umum->input_data($data, 'usulan_tb');
    $notif = "Tambah Data Berhasil";
    $this->session->set_flashdata('success', $notif);
    redirect('pj/usulan_td');

  }

  function update_usulan_tb()
  {
    $id_usulan_tb = $this->input->post('id_usulan_tb');
    $nama_kegiatan = $this->input->post('nama_kegiatan');
    $permasalahan = $this->input->post('permasalahan');
    $id_iku_proker = $this->input->post('id_iku_proker');
    $old_kak = $this->input->post('old_kak');
    $old_rab = $this->input->post('old_rab');
    $old_rab_excel = $this->input->post('old_rab_excel');

    if (!empty($_FILES["kak"]["name"])) {
      $kak = $this->uploadKAK();
      unlink("./upload/$old_kak");
    } else {
      $kak = $old_kak;
    }
    if (!empty($_FILES["rab"]["name"])) {
      $rab = $this->uploadRAB();
      unlink("./upload/$old_rab");
    } else {
      $rab = $old_rab;
    }
    if (!empty($_FILES["rab_excel"]["name"])) {
      $rab_excel = $this->uploadRABExcel();
      unlink("./upload/$old_rab_excel");
    } else {
      $rab_excel = $old_rab_excel;
    }
    $data_update = array(
      'id_usulan_tb' => $id_usulan_tb,
      'nama_kegiatan' => $nama_kegiatan,

      'permasalahan' => $permasalahan,
      'kak' => $kak,
      'rab' => $rab,
      'rab_excel' => $rab_excel,
      'id_iku_proker' => $id_iku_proker,
    );
    $where = array('id_usulan_tb' => $id_usulan_tb);
    $res = $this->m_umum->UpdateData('usulan_tb', $data_update, $where);
    $notif = "Update Data Berhasil";
    $this->session->set_flashdata('success', $notif);
    redirect('pj/usulan_tb');

  }
  function update_usulan_td()
  {
    $id_usulan_tb = $this->input->post('id_usulan_tb');
    $nama_kegiatan = $this->input->post('nama_kegiatan');
    $permasalahan = $this->input->post('permasalahan');
    $id_iku_proker = $this->input->post('id_iku_proker');
    $old_kak = $this->input->post('old_kak');
    $old_rab = $this->input->post('old_rab');
    $old_rab_excel = $this->input->post('old_rab_excel');

    if (!empty($_FILES["kak"]["name"])) {
      $kak = $this->uploadKAK();
      unlink("./upload/$old_kak");
    } else {
      $kak = $old_kak;
    }
    if (!empty($_FILES["rab"]["name"])) {
      $rab = $this->uploadRAB();
      unlink("./upload/$old_rab");
    } else {
      $rab = $old_rab;
    }
    if (!empty($_FILES["rab_excel"]["name"])) {
      $rab_excel = $this->uploadRABExcel();
      unlink("./upload/$old_rab_excel");
    } else {
      $rab_excel = $old_rab_excel;
    }
    $data_update = array(
      'id_usulan_tb' => $id_usulan_tb,
      'nama_kegiatan' => $nama_kegiatan,

      'permasalahan' => $permasalahan,
      'kak' => $kak,
      'rab' => $rab,
      'rab_excel' => $rab_excel,
      'id_iku_proker' => $id_iku_proker,
    );
    $where = array('id_usulan_tb' => $id_usulan_tb);
    $res = $this->m_umum->UpdateData('usulan_tb', $data_update, $where);
    $notif = "Update Data Berhasil";
    $this->session->set_flashdata('success', $notif);
    redirect('pj/usulan_td');

  }
  function delete_usulan_tb($id = NULL)
  {
    $detail = $this->m_sakip->cek_detail_usulan_tb($id);
    $histori = $this->m_sakip->cek_histori_detail_usulan_tb($id);
    if ($detail->num_rows() > 0 or $histori->num_rows() > 0) {
      $notif = "Tidak bisa hapus data karena sudah ada riwayatnya";
      $this->session->set_flashdata('delete', $notif);
      redirect('pj/usulan_tb');
    } else {
      $this->m_umum->hapus('usulan_tb', 'id_usulan_tb', $id);
      $notif = " Data berhasil dihapuskan";
      $this->session->set_flashdata('delete', $notif);
      redirect('pj/usulan_tb');
    }

  }
  function delete_usulan_td($id = NULL)
  {
    $detail = $this->m_sakip->cek_detail_usulan_tb($id);
    $histori = $this->m_sakip->cek_histori_detail_usulan_tb($id);
    if ($detail->num_rows() > 0 or $histori->num_rows() > 0) {
      $notif = "Tidak bisa hapus data karena sudah ada riwayatnya";
      $this->session->set_flashdata('delete', $notif);
      redirect('pj/usulan_tb');
    } else {
      $this->m_umum->hapus('usulan_tb', 'id_usulan_tb', $id);
      $notif = " Data berhasil dihapuskan";
      $this->session->set_flashdata('delete', $notif);
      redirect('pj/usulan_td');
    }

  }
  function kirim_usulan_tb($id)
  {
    $tgl = date('Y-m-d');
    $this->db->query("update usulan_tb set status_usulan=1,tgl_kirim='$tgl' where id_usulan_tb='$id'");
    $notif = " Usulan Proker Tahun Berjalan Berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect('pj/usulan_tb');

  }
  function kirim_usulan_td($id)
  {
    $tgl = date('Y-m-d');
    $this->db->query("update usulan_tb set status_usulan=1,tgl_kirim='$tgl' where id_usulan_tb='$id'");
    $notif = " Usulan Proker Tahun Depan Berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect('pj/usulan_td');

  }
  function perubahan_jadwal_proker()
  {
    $id_detail_usulan_tb = $this->input->post('id_detail_usulan_tb');
    $id_usulan_tb = $this->input->post('id_usulan_tb');
    $catatan = $this->input->post('catatan');
    $jan = $this->input->post('jan');
    $feb = $this->input->post('feb');
    $mar = $this->input->post('mar');
    $apr = $this->input->post('apr');
    $mei = $this->input->post('mei');
    $jun = $this->input->post('jun');
    $jul = $this->input->post('jul');
    $agu = $this->input->post('agu');
    $sep = $this->input->post('sep');
    $okt = $this->input->post('okt');
    $nov = $this->input->post('nov');
    $des = $this->input->post('des');
    $this->db->query("update detail_usulan_tb set status_perubahan_jadwal=1 where id_detail_usulan_tb='$id_detail_usulan_tb'");
    $querycek = $this->db->query("select * from detail_usulan_tb a where a.id_detail_usulan_tb='$id_detail_usulan_tb'");
    foreach ($querycek->result() as $a) {
      $sql = "insert into histori_detail_usulan_tb (id_detail_usulan_tb, id_usulan_tb, detail_kegiatan,bentuk_kegiatan,status_detail_usulan,anggaran,catatan,jan,feb,mar,apr,mei,jun,jul,agu,sep,okt,nov,des,tempat_pelaksanaan,status_perubahan_jadwal)values ('$a->id_detail_usulan_tb',' $a->id_usulan_tb',' $a->detail_kegiatan','$a->bentuk_kegiatan','$a->status_detail_usulan','$a->anggaran','$catatan','$jan','$feb','$mar','$apr','$mei','$jun','$jul','$agu','$sep','$okt','$nov','$des','$a->tempat_pelaksanaan','1')";
      $this->db->query($sql);
    }

    $notif = " Perubahan Jadwal Berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/detail_proker_tb/" . $id_usulan_tb);
  }
  function pembatalan_kegiatan()
  {
    $id_detail_usulan_tb = $this->input->post('id_detail_usulan_tb');
    $id_usulan_tb = $this->input->post('id_usulan_tb');
    $catatan = $this->input->post('catatan');

    $this->db->query("update detail_usulan_tb set status_pembatalan=1 where id_detail_usulan_tb='$id_detail_usulan_tb'");
    $querycek = $this->db->query("select * from detail_usulan_tb a where a.id_detail_usulan_tb='$id_detail_usulan_tb'");
    foreach ($querycek->result() as $a) {
      $sql = "insert into histori_detail_usulan_tb (id_detail_usulan_tb, id_usulan_tb, detail_kegiatan,bentuk_kegiatan,status_detail_usulan,anggaran,catatan,jan,feb,mar,apr,mei,jun,jul,agu,sep,okt,nov,des,tempat_pelaksanaan,status_pembatalan)values ('$a->id_detail_usulan_tb',' $a->id_usulan_tb',' $a->detail_kegiatan','$a->bentuk_kegiatan','$a->status_detail_usulan','$a->anggaran','$catatan','$a->jan','$a->feb','$a->mar','$a->apr','$a->mei','$a->jun','$a->jul','$a->agu','$a->sep','$a->okt','$a->nov','$a->des','$a->tempat_pelaksanaan','1')";
      $this->db->query($sql);
    }

    $notif = " Pembatalan Kegiatan Berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/detail_proker_tb/" . $id_usulan_tb);
  }
  function kirim_detail_usulan_tb($id, $id_detail_usulan_tb)
  {
    $this->db->query("update detail_usulan_tb set status_detail_usulan=1 where id_detail_usulan_tb='$id'");
    $this->db->query("insert into histori_detail_usulan_tb (id_detail_usulan_tb, id_usulan_tb, detail_kegiatan,bentuk_kegiatan,status_detail_usulan,anggaran,catatan,jan,feb,mar,apr,mei,jun,jul,agu,sep,okt,nov,des,tempat_pelaksanaan,tgl_input,status_perubahan_jadwal,status_pembatalan)
SELECT * FROM detail_usulan_tb a
where a.id_detail_usulan_tb='$id'");

    $notif = " Detail Kegiatan Berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/detail_usulan_tb/" . $id_detail_usulan_tb);
  }
  function kirim_detail_usulan_td($id, $id_detail_usulan_tb)
  {
    $this->db->query("update detail_usulan_tb set status_detail_usulan=1 where id_detail_usulan_tb='$id'");
    $this->db->query("insert into histori_detail_usulan_tb (id_detail_usulan_tb, id_usulan_tb, detail_kegiatan,bentuk_kegiatan,status_detail_usulan,anggaran,catatan,jan,feb,mar,apr,mei,jun,jul,agu,sep,okt,nov,des,tempat_pelaksanaan,tgl_input,status_perubahan_jadwal,status_pembatalan)
SELECT * FROM detail_usulan_tb a
where a.id_detail_usulan_tb='$id'");

    $notif = " Detail Kegiatan Berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/detail_usulan_td/" . $id_detail_usulan_tb);
  }
  function detail_usulan_tb($id)
  {
    $tahun = $this->session->userdata('tahun');
    $data = array(
      'judul' => 'Program Kerja',
      'id' => $id,
      'dt_detail_usulan_tb' => $this->m_sakip->get_detail_usulan_tb($id),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/detail_usulan_tb', $data);
  }
  function detail_usulan_td($id)
  {
    $tahun = $this->session->userdata('tahun');
    $data = array(
      'judul' => 'Program Kerja',
      'id' => $id,
      'dt_detail_usulan_tb' => $this->m_sakip->get_detail_usulan_tb($id),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/detail_usulan_td', $data);
  }

  function histori_detail_usulan_tb($id)
  {
    $tahun = $this->session->userdata('tahun');
    $data = array(
      'judul' => 'Program Kerja',
      'id' => $id,
      'dt_histori_detail_usulan_tb' => $this->m_sakip->get_histori_detail_usulan_tb($id),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/histori_detail_usulan_tb', $data);
  }
  function histori_detail_usulan_td($id)
  {
    $tahun = $this->session->userdata('tahun');
    $data = array(
      'judul' => 'Program Kerja',
      'id' => $id,
      'dt_histori_detail_usulan_tb' => $this->m_sakip->get_histori_detail_usulan_tb($id),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/histori_detail_usulan_td', $data);
  }


  function simpan_detail_usulan_tb()
  {

    $this->db->set('id_detail_usulan_tb', 'UUID()', FALSE);
    $this->form_validation->set_rules('detail_kegiatan', 'detail_kegiatan', 'required');
    $id = $this->input->post('id_usulan_tb');
    if ($this->form_validation->run() === FALSE)
      redirect(base_url() . "pj/detail_usulan_tb/" . $id);
    else {

      $this->m_umum->set_data("detail_usulan_tb");
      $notif = "Tambah Data Berhasil";
      $this->session->set_flashdata('success', $notif);
      redirect(base_url() . "pj/detail_usulan_tb/" . $id);
    }

  }
  function simpan_detail_usulan_td()
  {

    $this->db->set('id_detail_usulan_tb', 'UUID()', FALSE);
    $this->form_validation->set_rules('detail_kegiatan', 'detail_kegiatan', 'required');
    $id = $this->input->post('id_usulan_tb');
    if ($this->form_validation->run() === FALSE)
      redirect(base_url() . "pj/detail_usulan_tb/" . $id);
    else {

      $this->m_umum->set_data("detail_usulan_tb");
      $notif = "Tambah Data Berhasil";
      $this->session->set_flashdata('success', $notif);
      redirect(base_url() . "pj/detail_usulan_td/" . $id);
    }

  }


  function update_detail_usulan_tb()
  {
    $id_detail_usulan_tb = $this->input->post('id_detail_usulan_tb');
    $jan = $this->input->post('jan');
    $feb = $this->input->post('feb');
    $mar = $this->input->post('mar');
    $apr = $this->input->post('apr');
    $mei = $this->input->post('mei');
    $jun = $this->input->post('jun');
    $jul = $this->input->post('jul');
    $agu = $this->input->post('agu');
    $sep = $this->input->post('sep');
    $okt = $this->input->post('okt');
    $nov = $this->input->post('nov');
    $des = $this->input->post('des');
    $this->form_validation->set_rules('id_detail_usulan_tb', 'id_detail_usulan_tb', 'required');
    $this->form_validation->set_rules('detail_kegiatan', 'detail_kegiatan', 'required');
    $id = $this->input->post('id_usulan_tb');
    if ($this->form_validation->run() === FALSE)
      redirect(base_url() . "pj/detail_usulan_tb/" . $id);
    else {
      $data_update = array(
        'jan' => NULL,
        'feb' => NULL,
        'mar' => NULL,
        'apr' => NULL,
        'mei' => NULL,
        'jun' => NULL,
        'jul' => NULL,
        'agu' => NULL,
        'sep' => NULL,
        'okt' => NULL,
        'nov' => NULL,
        'des' => NULL,
      );
      $where = array('id_detail_usulan_tb' => $id_detail_usulan_tb);
      $res = $this->m_umum->UpdateData('detail_usulan_tb', $data_update, $where);
      $this->m_umum->update_data("detail_usulan_tb");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "pj/detail_usulan_tb/" . $id);
    }

  }

  function update_detail_usulan_td()
  {
    $id_detail_usulan_tb = $this->input->post('id_detail_usulan_tb');
    $jan = $this->input->post('jan');
    $feb = $this->input->post('feb');
    $mar = $this->input->post('mar');
    $apr = $this->input->post('apr');
    $mei = $this->input->post('mei');
    $jun = $this->input->post('jun');
    $jul = $this->input->post('jul');
    $agu = $this->input->post('agu');
    $sep = $this->input->post('sep');
    $okt = $this->input->post('okt');
    $nov = $this->input->post('nov');
    $des = $this->input->post('des');
    $this->form_validation->set_rules('id_detail_usulan_tb', 'id_detail_usulan_tb', 'required');
    $this->form_validation->set_rules('detail_kegiatan', 'detail_kegiatan', 'required');
    $id = $this->input->post('id_usulan_tb');
    if ($this->form_validation->run() === FALSE)
      redirect(base_url() . "pj/detail_usulan_tb/" . $id);
    else {
      $data_update = array(
        'jan' => NULL,
        'feb' => NULL,
        'mar' => NULL,
        'apr' => NULL,
        'mei' => NULL,
        'jun' => NULL,
        'jul' => NULL,
        'agu' => NULL,
        'sep' => NULL,
        'okt' => NULL,
        'nov' => NULL,
        'des' => NULL,
      );
      $where = array('id_detail_usulan_tb' => $id_detail_usulan_tb);
      $res = $this->m_umum->UpdateData('detail_usulan_tb', $data_update, $where);
      $this->m_umum->update_data("detail_usulan_tb");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "pj/detail_usulan_td/" . $id);
    }

  }


  function delete_detail_usulan_tb($id = NULL, $id_detail)
  {

    $this->m_umum->hapus('detail_usulan_tb', 'id_detail_usulan_tb', $id);
    $notif = " Data berhasil dihapuskan";
    $this->session->set_flashdata('delete', $notif);
    redirect(base_url() . "pj/detail_usulan_tb/" . $id_detail);


  }
  function delete_detail_usulan_td($id = NULL, $id_detail)
  {

    $this->m_umum->hapus('detail_usulan_tb', 'id_detail_usulan_tb', $id);
    $notif = " Data berhasil dihapuskan";
    $this->session->set_flashdata('delete', $notif);
    redirect(base_url() . "pj/detail_usulan_td/" . $id_detail);


  }

  function upload_bukti_dukung()
  {
    $id_iku = $this->input->post('id_iku');
    $menu = $this->input->post('menu');
    $id_triwulan = $this->input->post('id_triwulan');
    $file = $this->uploadFile();

    $datakib = array(

      'id_iku' => $id_iku,
      'id_triwulan' => $id_triwulan,
      'file' => $file
    );

    $this->m_umum->input_data($datakib, 'sakip_bukti_dukung');
    $notif = " Data berhasil ditambahkan";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/$menu/" . $id_iku);
  }
  public function uploadKAK()
  {
    $config['upload_path'] = 'upload';
    $config['allowed_types'] = 'pdf';
    $config['overwrite'] = false;
    $config['max_size'] = 2000; // 1MB
    $config['encrypt_name'] = TRUE;


    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if ($this->upload->do_upload('kak')) {
      return $this->upload->data("file_name");
    }
    $error = $this->upload->display_errors();
    echo $error;
    exit;
    // return "default.jpg";
  }

  public function uploadRAB()
  {
    $config['upload_path'] = 'upload';
    $config['allowed_types'] = 'pdf';
    $config['overwrite'] = false;
    $config['max_size'] = 2000; // 1MB
    $config['encrypt_name'] = TRUE;


    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if ($this->upload->do_upload('rab')) {
      return $this->upload->data("file_name");
    }
    $error = $this->upload->display_errors();
    echo $error;
    exit;
    // return "default.jpg";
  }
  public function uploadRABExcel()
  {
    $config['upload_path'] = 'upload';
    $config['allowed_types'] = 'xls|xlsx';
    $config['overwrite'] = false;
    $config['max_size'] = 2000; // 1MB
    $config['encrypt_name'] = TRUE;


    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if ($this->upload->do_upload('rab_excel')) {
      return $this->upload->data("file_name");
    }
    $error = $this->upload->display_errors();
    echo $error;
    exit;
    // return "default.jpg";
  }
  public function uploadFile()
  {
    $config['upload_path'] = 'upload';
    $config['allowed_types'] = 'pdf|jpg|jpeg|png|pdf|xls|xlsx|doc|docx';
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
  public function uploadkekerasan()
  {
    $config['upload_path'] = 'upload';
    $config['allowed_types'] = 'pdf|jpg|jpeg|png|pdf|xls|xlsx|doc|docx';
    $config['overwrite'] = false;
    $config['max_size'] = 5000; // 1MB
    $config['encrypt_name'] = TRUE;

    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if ($this->upload->do_upload('kekerasan')) {
      return $this->upload->data("file_name");
    }
    $error = $this->upload->display_errors();
    echo $error;
    exit;
    // return "default.jpg";
  }
  public function uploadperundungan()
  {
    $config['upload_path'] = 'upload';
    $config['allowed_types'] = 'pdf|jpg|jpeg|png|pdf|xls|xlsx|doc|docx';
    $config['overwrite'] = false;
    $config['max_size'] = 5000; // 1MB
    $config['encrypt_name'] = TRUE;

    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if ($this->upload->do_upload('perundungan')) {
      return $this->upload->data("file_name");
    }
    $error = $this->upload->display_errors();
    echo $error;
    exit;
    // return "default.jpg";
  }
 
  function index()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'jml_kembali_iku1' => $this->m_sakip->hitung_kembali_iku1(),
      'jml_kembali_iku2' => $this->m_sakip->hitung_kembali_iku2(),
      'jml_kembali_iku3' => $this->m_sakip->hitung_kembali_iku3(),
      'jml_kembali_iku4' => $this->m_sakip->hitung_kembali_iku4(),
      'jml_kembali_iku5' => $this->m_sakip->hitung_kembali_iku5(),
      'jml_kembali_iku6' => $this->m_sakip->hitung_kembali_iku6(),
      'jml_kembali_iku7' => $this->m_sakip->hitung_kembali_iku7(),
      'jml_kembali_iku8' => $this->m_sakip->hitung_kembali_iku8(),
      'jml_kembali_iku9' => $this->m_sakip->hitung_kembali_iku9(),
      'jml_kembali_iku10' => $this->m_sakip->hitung_kembali_iku10(),
      'jml_kembali_iku11' => $this->m_sakip->hitung_kembali_iku11(),
      'jml_kembali_analisa' => $this->m_sakip->hitung_kembali_analisa(),
      'judul' => 'Dashboard',
      'tahun' => $tahun,
      'dt_ikk' => $this->m_sakip->get_ikk_home(),
      'dt_pk' => $this->m_sakip->get_pk(),
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/home', $data);

  }

  function triwulan()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'tahun' => $tahun,
      'judul' => 'Setting Triwulan',
      'dt_triwulan' => $this->m_sakip->get_data('sakip_triwulan'),
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/sakip_triwulan', $data);

  }
  function update_triwulan()
  {

    $this->form_validation->set_rules('id_triwulan', 'id_triwulan', 'required');
    if ($this->form_validation->run() === FALSE)
      redirect('pj/triwulan');
    else {
      $this->m_umum->update_data("sakip_triwulan");
      $notif = " Input triwulan Berhasil";
      $this->session->set_flashdata('update', $notif);
      redirect('pj/triwulan');
    }

  }
  function user()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'judul' => 'Standar Layanan',
      'dt_user' => $this->m_sakip->get_data('sakip_user'),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/user', $data);

  }
  function renaksi()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'judul' => 'Rencana Aksi Triwulan',

      'dt_renaksi' => $this->m_sakip->get_renaksi(),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/renaksi', $data);

  }
  function update_renaksi()
  {

    $this->form_validation->set_rules('id_ikk', 'id_ikk', 'required');
    $id = $this->input->post('id_sasaran_kegiatan');
    if ($this->form_validation->run() === FALSE)
      redirect('pj/target_kinerja');
    else {
      $this->m_umum->update_data("sakip_ikk");
      $notif = " Input Renaksi Berhasil";
      $this->session->set_flashdata('update', $notif);
      redirect('pj/renaksi');
    }

  }
  function simpan_renaksi()
  {

    $this->db->set('id_renaksi', 'UUID()', FALSE);
    $this->form_validation->set_rules('id_ikk', 'id_ikk', 'required');
    if ($this->form_validation->run() === FALSE)
      redirect('pj/renaksi');
    else {

      $this->m_umum->set_data("sakip_renaksi");
      $notif = "Tambah Data Berhasil";
      $this->session->set_flashdata('success', $notif);
      redirect('pj/renaksi');
    }

  }
  function standar_layanan()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'judul' => 'Standar Layanan',
      'dt_bagian' => $this->m_sakip->get_bagian_user(),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/standar_layanan', $data);

  }
  function detail_standar_layanan($id_bagian)
  {

    $tahun = $this->session->userdata('tahun');

    $data = array(
      'id' => $id_bagian,
      'judul' => 'Standar Layanan',
      'd' => $this->m_sakip->m_bagian($id_bagian),
      'dt_standar_layanan' => $this->m_sakip->get_standar_layanan($id_bagian),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/detail_standar_layanan', $data);

  }
  function simpan_standar_layanan()
  {

    $this->db->set('id_standar_layanan', 'UUID()', FALSE);
    $this->form_validation->set_rules('nama_standar_layanan', 'nama_standar_layanan', 'required');
    $id_bagian = $this->input->post('id_bagian');
    if ($this->form_validation->run() === FALSE)
      redirect(base_url() . "pj/detail_standar_layanan/" . $id_bagian);
    else {

      $this->m_umum->set_data("sakip_standar_layanan");
      $notif = "Tambah Data Berhasil";
      $this->session->set_flashdata('success', $notif);
      redirect(base_url() . "pj/detail_standar_layanan/" . $id_bagian);
    }

  }
  function update_standar_layanan()
  {

    $this->form_validation->set_rules('id_standar_layanan', 'id_standar_layanan', 'required');
    $id_bagian = $this->input->post('id_bagian');
    if ($this->form_validation->run() === FALSE)
      redirect(base_url() . "pj/detail_standar_layanan/" . $id_bagian);
    else {
      $this->m_umum->update_data("sakip_standar_layanan");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "pj/detail_standar_layanan/" . $id_bagian);
    }

  }
  function delete_standar_layanan($id_standar_layanan, $id)
  {

    $this->m_umum->hapus('sakip_standar_layanan', 'id_standar_layanan', $id_standar_layanan);
    $notif = " Data berhasil dihapuskan";
    $this->session->set_flashdata('delete', $notif);
    redirect(base_url() . "pj/detail_standar_layanan/" . $id);

  }
  function analisa()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'judul' => 'Analisa Capaian Kinerja',
      'dt_iku' => $this->m_sakip->get_iku_user(),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/analisa', $data);

  }
  function analisa_spi()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'judul' => 'Analisa Capaian Kinerja',
      'dt_iku' => $this->m_sakip->get_iku(),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/analisa_spi', $data);

  }
  function analisa_capaian_kinerja($ida)
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'judul' => 'Analisa Capaian Kinerja',
      'id_iku' => $ida,
      'dt_analisa' => $this->m_sakip->get_analisa($ida),
      'dt_tw' => $this->m_sakip->get_triwulan(),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/analisa_capaian_kinerja', $data);


  }
  function analisa_capaian_kinerja_spi($ida)
  {


    $tahun = $this->session->userdata('tahun');
    $data = array(
      'judul' => 'Analisa Capaian Kinerja',
      'id_iku' => $ida,
      'dt_analisa' => $this->m_sakip->get_analisa($ida),

      'dt_tw' => $this->m_sakip->get_triwulan(),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/analisa_capaian_kinerja_spi', $data);

  }
  function cetak_analisa()
  {

    $data['dt_analisa'] = $this->m_sakip->get_cetak_analisa();
    $this->load->view('sakip/pj/cetak_analisa', $data);

  }

  function simpan_analisa_capaian_kinerja()
  {

    $this->db->set('id_analisa', 'UUID()', FALSE);
    $id = $this->input->post('id_iku');
    $this->form_validation->set_rules('progress', 'progress', 'trim|required|min_length[1000]');
    $this->form_validation->set_rules('kendala', 'kendala', 'required');
    $this->form_validation->set_rules('tindak_lanjut', 'required');

    if ($this->form_validation->run() === FALSE) {
      $notif = "Jangan menggunakan inspect element";
      $this->session->set_flashdata('delete', $notif);

      redirect(base_url() . "pj/analisa_capaian_kinerja/" . $id);
    } else {

      $this->m_umum->set_data("sakip_analisa");
      $notif = "Tambah Data Berhasil";
      $this->session->set_flashdata('success', $notif);
      redirect(base_url() . "pj/analisa_capaian_kinerja/" . $id);
    }

  }
  function update_analisa_capaian_kinerja()
  {

    $this->form_validation->set_rules('id_analisa', 'id_analisa', 'required');
    $this->form_validation->set_rules('progress', 'progress', 'trim|required|min_length[1000]');
    $this->form_validation->set_rules('kendala', 'kendala', 'trim|required');
    $this->form_validation->set_rules('tindak_lanjut', 'tindak_lanjut', 'trim|required');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE) {
      $notif = "Jangan menggunakan inspect element";
      $this->session->set_flashdata('delete', $notif);

      redirect(base_url() . "pj/analisa_capaian_kinerja/" . $id);
    } else {
      $this->m_umum->update_data("sakip_analisa");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "pj/analisa_capaian_kinerja/" . $id);
    }

  }
  function validasi_analisa_capaian_kinerja()
  {

    $this->form_validation->set_rules('id_analisa', 'id_analisa', 'required');
    $this->form_validation->set_rules('status_analisa', 'status_analisa');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE) {
      redirect(base_url() . "pj/analisa_capaian_kinerja/" . $id);
    } else {
      $this->m_umum->update_data("sakip_analisa");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "pj/analisa_capaian_kinerja/" . $id);
    }

  }
  function delete_analisa_capaian_kinerja($id, $id_iku)
  {

    $this->m_umum->hapus('sakip_analisa', 'id_analisa', $id);
    $notif = " Data berhasil dihapuskan";
    $this->session->set_flashdata('delete', $notif);
    redirect(base_url() . "pj/analisa_capaian_kinerja/" . $id_iku);

  }

  function capaian_kinerja()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'judul' => 'Capaian Kinerja',
      'dt_iku' => $this->m_sakip->get_iku_user(),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/capaian_kinerja', $data);

  }
  function capaian_kinerja_spi()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'judul' => 'Capaian Kinerja',
      'dt_iku' => $this->m_sakip->get_iku(),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/capaian_kinerja_spi', $data);

  }
  function iku1($id_iku)
  {

    $tahun = $this->session->userdata('tahun');

    $data = array(
      'id' => $id_iku,
      'd' => $this->m_sakip->m_iku($id_iku),

      'dt_iku1' => $this->m_sakip->get_iku1($id_iku),
      'dt_tw' => $this->m_sakip->get_triwulan(),
      'judul' => 'Capaian Kinerja',
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/iku1', $data);

  }
  function simpan_iku1()
  {

    $this->db->set('id_iku1', 'UUID()', FALSE);
    $this->form_validation->set_rules('nilai_survey', 'nilai_survey', 'required');
    $id_iku = $this->input->post('id_iku');
    $nilai_survey = $this->input->post('nilai_survey');
    $total_responden=$this->input->post('total_responden');
    $id_triwulan = $this->input->post('id_triwulan');
    $file = $this->uploadFile();
    if ($this->form_validation->run() === FALSE) {
      redirect(base_url() . "pj/iku1/" . $id_iku);
    } else {


      $datakib = array(
'total_responden' => $total_responden,
        'nilai_survey' => $nilai_survey,
        'id_triwulan' => $id_triwulan,
        'id_iku' => $id_iku,
        'file' => $file
      );

      $this->m_umum->input_data($datakib, 'sakip_iku1');
      $notif = " Data berhasil ditambahkan";
      $this->session->set_flashdata('success', $notif);
      redirect(base_url() . "pj/iku1/" . $id_iku);
    }

  }
  function update_iku1()
  {
    $id_iku1 = $this->input->post('id_iku1');
    $id_iku = $this->input->post('id_iku');
    $total_responden=$this->input->post('total_responden');
    $nilai_survey = $this->input->post('nilai_survey');
    $old = $this->input->post('old_file');

    if (!empty($_FILES["file"]["name"])) {
      $file = $this->uploadFile();
      unlink("./upload/$old");
    } else {
      $file = $old;
    }
    $data_update = array(
        'total_responden' => $total_responden,
      'nilai_survey' => $nilai_survey,
      'file' => $file
    );
    $where = array('id_iku1' => $id_iku1);
    $res = $this->m_umum->UpdateData('sakip_iku1', $data_update, $where);
    if ($res >= 1) {

      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "pj/iku1/" . $id_iku);
    } else {
      echo "<h1>GAGAL</h1>";
    }
  }

  function cetak_iku1()
  {

    $data['dt_iku1'] = $this->m_sakip->get_iku1();
    $this->load->view('sakip/laporan/cetak_iku1', $data);

  }

  function delete_iku1($id, $id_iku)
  {

    $this->m_umum->hapus('sakip_iku1', 'id_iku1', $id);
    $notif = " Data berhasil dihapuskan";
    $this->session->set_flashdata('delete', $notif);
    redirect(base_url() . "pj/iku1/" . $id_iku);

  }

  function iku2($id_iku)
  {

    $tahun = $this->session->userdata('tahun');

    $data = array(
      'id' => $id_iku,
      'd' => $this->m_sakip->m_iku($id_iku),
      'dt_pts' => $this->m_sakip->get_pts_iku2(),
      'dt_iku2' => $this->m_sakip->get_iku2($id_iku),
      'dt_bukti' => $this->m_sakip->get_bukti($id_iku),
      'dt_tw' => $this->m_sakip->get_triwulan(),
      'judul' => 'Capaian Kinerja',
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/iku2', $data);

  }
  function simpan_iku2()
  {

    
    $this->form_validation->set_rules('kode_pt', 'kode_pt', 'required');
    $id_iku = $this->input->post('id_iku');
    $kode_pt = $this->input->post('kode_pt');
    $id_triwulan = $this->input->post('id_triwulan');
    $nama_pt = $this->input->post('nama_pt');
    $provinsi = $this->input->post('provinsi');
    $nm_akred = $this->input->post('nm_akred');
    $sk_akred_sp = $this->input->post('sk_akred_sp');
    $tst_sk_akred_sp = $this->input->post('tst_sk_akred_sp');
    $file = $this->uploadFile();
    if ($this->form_validation->run() === FALSE) {
      redirect(base_url() . "pj/iku2/" . $id_iku);
    } else {


      $datakib = array(

        'kode_pt' => $kode_pt,
        'id_triwulan' => $id_triwulan,
        'id_iku' => $id_iku,
        'nama_pt' => $nama_pt,
        'provinsi' => $provinsi,
        'nm_akred' => $nm_akred,
        'sk_akred_sp' => $sk_akred_sp,
        'tst_sk_akred_sp' => $tst_sk_akred_sp,
        'id_iku' => $id_iku,
        'file' => $file
      );

      $this->m_umum->input_data($datakib, 'sakip_iku2');
      $notif = " Data berhasil ditambahkan";
      $this->session->set_flashdata('success', $notif);
      redirect(base_url() . "pj/iku2/" . $id_iku);
    }

  }
  function import_iku2()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $kode_unik = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 40);
    $id_iku = $this->input->post('id_iku');

    $query1 = $this->db->query("SELECT 
* from sakip_akred_pt where  nm_akred is not NULL  and
kode_pt NOT IN(
SELECT kode_pt FROM sakip_iku2)");

    foreach ($query1->result() as $a) {

      $sql1 = "insert into sakip_iku2 (id_iku2,kode_pt,nama_pt,provinsi,nm_akred,sk_akred_sp,tst_sk_akred_sp,status_iku,catatan,id_iku,id_triwulan) values (NULL,'$a->kode_pt','$a->nama_pt','$a->provinsi_pt','$a->nm_akred','$a->sk_akred_sp','$a->tst_sk_akred_sp','0','','$id_iku','$id_triwulan')";
      $this->db->query($sql1);
    }

    $notif = "Tambah Data Berhasil";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku2/" . $id_iku);

  }
  function update_iku2()
  {
    $id_iku2 = $this->input->post('id_iku2');
    $id_iku = $this->input->post('id_iku');
    $nm_akred = $this->input->post('nm_akred');
    $sk_akred_sp = $this->input->post('sk_akred_sp');
    $tst_sk_akred_sp = $this->input->post('tst_sk_akred_sp');
    $old = $this->input->post('old_file');

    if (!empty($_FILES["file"]["name"])) {
      $file = $this->uploadFile();
      unlink("./upload/$old");
    } else {
      $file = $old;
    }
    $data_update = array(
      'nm_akred' => $nm_akred,
      'sk_akred_sp' => $sk_akred_sp,
      'tst_sk_akred_sp' => $tst_sk_akred_sp,
      'file' => $file
    );
    $where = array('id_iku2' => $id_iku2);
    $res = $this->m_umum->UpdateData('sakip_iku2', $data_update, $where);
    if ($res >= 1) {

      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "pj/iku2/" . $id_iku);
    } else {
      echo "<h1>GAGAL</h1>";
    }
  }

  function delete_iku2($id, $id_iku)
  {

    $this->m_umum->hapus('sakip_iku2', 'id_iku2', $id);
    $notif = " Data berhasil dihapuskan";
    $this->session->set_flashdata('delete', $notif);
    redirect(base_url() . "pj/iku2/" . $id_iku);

  }
  function cetak_iku2()
  {

    $data['dt_iku2'] = $this->m_sakip->get_iku2();
    $this->load->view('sakip/admin/cetak_iku2', $data);

  }
  function iku3($id_iku)
  {

    $tahun = $this->session->userdata('tahun');

    $data = array(
      'id' => $id_iku,
      'd' => $this->m_sakip->m_iku($id_iku),

      'dt_iku3' => $this->m_sakip->get_iku3($id_iku),
      'dt_bukti' => $this->m_sakip->get_bukti($id_iku),
      'dt_tw' => $this->m_sakip->get_triwulan(),
      'judul' => 'Capaian Kinerja',
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/iku3', $data);

  }
  function simpan_iku3()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $kode_unik = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 40);
    $id_iku = $this->input->post('id_iku');

    $query1 = $this->db->query("SELECT 
npsn,
nm_lemb,
nm_jenj_didik,
nm_pd,
nipd,
sks_smt,
id_smt
FROM
sakip_mhs_mbkm
where id_jenj_didik between 22 and 30 and sks_smt >=10
and nipd NOT IN(
SELECT nipd  FROM sakip_iku3)
and id_smt NOT IN(
SELECT id_smt  FROM sakip_iku3)
");
    $query2 = $this->db->query("SELECT 
npsn,
nm_lemb,
nm_jenj_didik,
nm_pd,
nipd,
sks_smt,
id_smt
FROM
sakip_mhs_mbkm
where id_jenj_didik < 22 and sks_smt >=5
and nipd NOT IN(
SELECT nipd  FROM sakip_iku3)
and id_smt NOT IN(
SELECT id_smt  FROM sakip_iku3)

");
    foreach ($query1->result() as $a) {
      $sql1 = "insert into sakip_iku3 (id_iku3,kode_pt,nama_pt,nm_jenj_didik,nm_pd,nipd,sks_smt,id_smt,id_iku,id_triwulan,status_iku,catatan) values (NULL,'$a->npsn','$a->nm_lemb','$a->nm_jenj_didik','" . addslashes($a->nm_pd) . "','$a->nipd','$a->sks_smt','$a->id_smt','$id_iku','$id_triwulan','0','')";
      $this->db->query($sql1);
    }
    foreach ($query2->result() as $b) {

      $sql2 = "insert into sakip_iku3 (id_iku3,kode_pt,nama_pt,nm_jenj_didik,nm_pd,nipd,sks_smt,id_smt,id_iku,id_triwulan,status_iku,catatan) values (NULL,'$b->npsn','$b->nm_lemb','$b->nm_jenj_didik','" . addslashes($b->nm_pd) . "','$b->nipd','$b->sks_smt','$b->id_smt','$id_iku','$id_triwulan','0','')";
      $this->db->query($sql2);
    }
    $this->db->query("UPDATE sakip_iku3 
SET  bobot =  CASE  
                        WHEN sks_smt >=20 THEN 1 
                        WHEN sks_smt <20 THEN 0.50 
                        end
                       ");
    $notif = "Tambah Data Berhasil";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku3/" . $id_iku);

  }
  function cetak_iku3($id_iku)
  {

    $data['dt_iku3'] = $this->m_sakip->get_iku3($id_iku);
    $this->load->view('sakip/laporan/cetak_iku3', $data);

  }
  function iku4($id_iku)
  {

    $tahun = $this->session->userdata('tahun');

    $data = array(
      'id' => $id_iku,
      'd' => $this->m_sakip->m_iku($id_iku),
      'dt_pts' => $this->m_sakip->get_pts(),
      'dt_iku4' => $this->m_sakip->get_iku4($id_iku),
      'dt_bukti' => $this->m_sakip->get_bukti($id_iku),
      'dt_tw' => $this->m_sakip->get_triwulan(),

      'judul' => 'Capaian Kinerja',
      'tahun' => $tahun,
    );


    $this->template->load('sakip/pj/template', 'sakip/pj/iku4', $data);

  }


  function simpan_iku4()
  {

    $kode_unik = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 40);
    $this->db->set('id_iku4', $kode_unik);
    $this->form_validation->set_rules(
      'kode_pt', 'Kode PT',
      'required|is_unique[sakip_iku4.kode_pt]');
    $kode_pt = $this->input->post('kode_pt');
    $id_iku = $this->input->post('id_iku');
    $nama_pt = $this->input->post('nama_pt');
    $id_triwulan = $this->input->post('id_triwulan');
    $file = $this->uploadFile();
    if ($this->form_validation->run() === FALSE) {
      $notif = "PTS Sudah Ada/Sudah Menjadi Capaian ditahun Sebelumnya";
      $this->session->set_flashdata('delete', $notif);
      redirect(base_url() . "pj/iku4/" . $id_iku);
    } else {


      $datakib = array(

        'kode_pt' => $kode_pt,
        'nama_pt' => $nama_pt,
        'id_triwulan' => $id_triwulan,
        'id_iku' => $id_iku,
        'file' => $file
      );

      $this->m_umum->input_data($datakib, 'sakip_iku4');
      $notif = " Data berhasil ditambahkan";
      $this->session->set_flashdata('success', $notif);
      redirect(base_url() . "pj/iku4/" . $id_iku);
    }

  }

  function update_iku4()
  {
    $id = $this->input->post('id_iku');
    $id_iku4 = $this->input->post('id_iku4');

    if (!empty($_FILES['file']['name'])) {
      $file = $this->uploadFile();
    } else {
      $file = $this->input->post("old_file");
    }
    $data_update = array(

      'id_iku4' => $id_iku4,
      'file' => $file
    );
    $where = array('id_iku4' => $id_iku4);
    $res = $this->m_umum->UpdateData('sakip_iku4', $data_update, $where);
    $notif = " Update data berhasil";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku4/" . $id);
  }
  function delete_iku4($id, $id_iku)
  {

    $this->m_umum->hapus('sakip_iku4', 'id_iku4', $id);
    $notif = " Data berhasil dihapuskan";
    $this->session->set_flashdata('delete', $notif);
    redirect(base_url() . "pj/iku4/" . $id_iku);

  }
  function simpan_detail_iku4()
  {

    $kode_unik = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 40);
    $this->db->set('id_detail_iku4', $kode_unik);
    $this->form_validation->set_rules(
      'detail_kode_pt', 'detail_kode_pt',
      'required|is_unique[detail_sakip_iku4.detail_kode_pt]');
    $id_iku4 = $this->input->post('id_iku4');

    if ($this->form_validation->run() === FALSE) {
      $notif = "PTS Sudah Ada/Sudah Menjadi Capaian ditahun Sebelumnya";
      $this->session->set_flashdata('delete', $notif);
      redirect(base_url() . "pj/detail_iku4/" . $id_iku4);
    } else {

      $this->m_umum->set_data("detail_sakip_iku4");
      $notif = "Tambah Data Berhasil";
      $this->session->set_flashdata('success', $notif);
      redirect(base_url() . "pj/detail_iku4/" . $id_iku4);
    }

  }

  function delete_detail_iku4($id, $id_iku4)
  {

    $this->m_umum->hapus('detail_sakip_iku4', 'id_detail_iku4', $id);
    $notif = " Data berhasil dihapuskan";
    $this->session->set_flashdata('delete', $notif);
    redirect(base_url() . "pj/detail_iku4/" . $id_iku4);

  }
  function detail_iku4($id_iku4)
  {

    $tahun = $this->session->userdata('tahun');

    $data = array(
      'id' => $id_iku4,
      'd' => $this->m_sakip->m_iku4($id_iku4),
      'dt_pts' => $this->m_sakip->get_pts_all(),
      'dt_detail_iku4' => $this->m_sakip->get_detail_iku4($id_iku4),

      'judul' => 'Capaian Kinerja',
      'tahun' => $tahun,
    );


    $this->template->load('sakip/pj/template', 'sakip/pj/detail_iku4', $data);

  }
  function cetak_iku4($id_iku)
  {

    $data['dt_iku4'] = $this->m_sakip->get_iku4($id_iku);
    $this->load->view('sakip/laporan/cetak_iku4', $data);

  }
  function iku5($id_iku)
  {

    $tahun = $this->session->userdata('tahun');

    $data = array(
      'id' => $id_iku,
      'd' => $this->m_sakip->m_iku($id_iku),
      'dt_pts' => $this->m_sakip->get_pts(),
      'dt_bukti' => $this->m_sakip->get_bukti($id_iku),
      'dt_iku5' => $this->m_sakip->get_iku5($id_iku),
      'dt_tw' => $this->m_sakip->get_triwulan(),
      'judul' => 'Capaian Kinerja',
      'tahun' => $tahun,
    );


    $this->template->load('sakip/pj/template', 'sakip/pj/iku5', $data);

  }
  function simpan_iku5()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $kode_unik = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 40);
    $id_iku = $this->input->post('id_iku');

    $query1 = $this->db->query("SELECT 
npsn,
nm_lemb,
nm_jenj_didik,
nm_pd,
nipd,
sks_smt,
id_smt
FROM
sakip_mhs_mbkm
where id_jenj_didik between 22 and 30 and sks_smt >=10
and nipd NOT IN(
SELECT nipd  FROM sakip_iku5)
and id_smt NOT IN(
SELECT id_smt  FROM sakip_iku5)
");
    $query2 = $this->db->query("SELECT 
npsn,
nm_lemb,
nm_jenj_didik,
nm_pd,
nipd,
sks_smt,
id_smt
FROM
sakip_mhs_mbkm
where id_jenj_didik < 22 and sks_smt >=5
and nipd NOT IN(
SELECT nipd  FROM sakip_iku5)
and id_smt NOT IN(
SELECT id_smt  FROM sakip_iku5)

");
    foreach ($query1->result() as $a) {
      $sql1 = "insert into sakip_iku5 (id_iku5,kode_pt,nama_pt,nm_jenj_didik,nm_pd,nipd,sks_smt,id_smt,id_iku,id_triwulan,status_iku,catatan) values (NULL,'$a->npsn','$a->nm_lemb','$a->nm_jenj_didik','" . addslashes($a->nm_pd) . "','$a->nipd','$a->sks_smt','$a->id_smt','$id_iku','$id_triwulan','0','')";
      $this->db->query($sql1);
    }
    foreach ($query2->result() as $b) {

      $sql2 = "insert into sakip_iku5 (id_iku5,kode_pt,nama_pt,nm_jenj_didik,nm_pd,nipd,sks_smt,id_smt,id_iku,id_triwulan,status_iku,catatan) values (NULL,'$b->npsn','$b->nm_lemb','$b->nm_jenj_didik','" . addslashes($b->nm_pd) . "','$b->nipd','$b->sks_smt','$b->id_smt','$id_iku','$id_triwulan','0','')";
      $this->db->query($sql2);
    }
    $this->db->query("UPDATE sakip_iku5
SET  bobot =  CASE  
                        WHEN sks_smt >=20 THEN 1 
                        WHEN sks_smt <20 THEN 0.50 
                        end
                       ");
    $notif = "Tambah Data Berhasil";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku5/" . $id_iku);

  }
  function cetak_iku5($id_iku)
  {
    $data['dt_pts'] = $this->m_sakip->get_pts();
    $data['dt_iku'] = $this->m_sakip->get_iku5($id_iku);
    $this->load->view('sakip/laporan/cetak_iku5', $data);

  }
  function delete_iku5()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("delete From sakip_iku5 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data berhasil dihapuskan";
    $this->session->set_flashdata('delete', $notif);
    redirect(base_url() . "pj/iku5/" . $id_iku);
  }
  function iku6($id_iku)
  {

    $tahun = $this->session->userdata('tahun');

    $data = array(
      'id' => $id_iku,
      'd' => $this->m_sakip->m_iku($id_iku),
      'dt_pts' => $this->m_sakip->get_pts(),
      'dt_bukti' => $this->m_sakip->get_bukti($id_iku),
      'dt_iku6' => $this->m_sakip->get_iku6($id_iku),
      'dt_tw' => $this->m_sakip->get_triwulan(),

      'judul' => 'Capaian Kinerja',
      'tahun' => $tahun,
    );


    $this->template->load('sakip/pj/template', 'sakip/pj/iku6', $data);

  }

  function simpan_iku6()
  {

    $this->db->set('id_iku6', 'UUID()', FALSE);
    $this->form_validation->set_rules(
      'kode_pt', 'Kode PT',
      'required|is_unique[sakip_iku6.kode_pt]');
    $kode_pt = $this->input->post('kode_pt');
    $id_iku = $this->input->post('id_iku');
    $nama_pt = $this->input->post('nama_pt');
    $bentuk_ppks = $this->input->post('bentuk_ppks');
    $bentuk_narkoba = $this->input->post('bentuk_narkoba');
    $bentuk_korupsi = $this->input->post('bentuk_korupsi');
    $id_triwulan = $this->input->post('id_triwulan');
    $ppks = $this->uploadppks();
    $narkoba = $this->uploadnarkoba();
    $korupsi = $this->uploadkorupsi();
    if ($this->form_validation->run() === FALSE) {
      $notif = "PTS Sudah Ada/Sudah Menjadi Capaian ditahun Sebelumnya";
      $this->session->set_flashdata('delete', $notif);
      redirect(base_url() . "pj/iku6/" . $id_iku);
    } else {
      $datakib = array(

        'kode_pt' => $kode_pt,
        'nama_pt' => $nama_pt,
        'id_triwulan' => $id_triwulan,
        'id_iku' => $id_iku,
        'ppks' => $ppks,
        'narkoba' => $narkoba,
        'korupsi' => $korupsi,
        'bentuk_ppks' => $bentuk_ppks,
        'bentuk_korupsi' => $bentuk_korupsi,
        'bentuk_narkoba' => $bentuk_narkoba,
      );

      $this->m_umum->input_data($datakib, 'sakip_iku6');
      $notif = " Data berhasil ditambahkan";
      $this->session->set_flashdata('success', $notif);
      redirect(base_url() . "pj/iku6/" . $id_iku);
    }

  }
  function update_iku6()
  {
    $id = $this->input->post('id_iku');
    $id_iku6 = $this->input->post('id_iku6');
    $bentuk_ppks = $this->input->post('bentuk_ppks');
    $bentuk_narkoba = $this->input->post('bentuk_narkoba');
    $bentuk_korupsi = $this->input->post('bentuk_korupsi');


    if (!empty($_FILES['ppks']['name'])) {
      $ppks = $this->uploadppks();
    } else {
      $ppks = $this->input->post("old_ppks");
    }

    if (!empty($_FILES['narkoba']['name'])) {
      $narkoba = $this->uploadnarkoba();
    } else {
      $narkoba = $this->input->post("old_narkoba");
    }

    if (!empty($_FILES['korupsi']['name'])) {
      $korupsi = $this->uploadkorupsi();
    } else {
      $korupsi = $this->input->post("old_korupsi");
    }
    $data_update = array(

      'id_iku6' => $id_iku6,
      'ppks' => $ppks,
      'narkoba' => $narkoba,
      'bentuk_narkoba' => $bentuk_narkoba,
      'bentuk_korupsi' => $bentuk_korupsi,
      'bentuk_ppks' => $bentuk_ppks,
      'korupsi' => $korupsi
    );
    $where = array('id_iku6' => $id_iku6);
    $res = $this->m_umum->UpdateData('sakip_iku6', $data_update, $where);
    $notif = " Update data berhasil";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku6/" . $id);
  }
  function cetak_iku6()
  {

    $data['dt_iku6'] = $this->m_sakip->get_iku6();
    $this->load->view('sakip/laporan/cetak_iku6', $data);

  }
  function delete_iku6($id, $id_iku)
  {

    $this->m_umum->hapus('sakip_iku6', 'id_iku6', $id);
    $notif = " Data berhasil dihapuskan";
    $this->session->set_flashdata('delete', $notif);
    redirect(base_url() . "pj/iku6/" . $id_iku);

  }
  function iku7($id_iku)
  {

    $tahun = $this->session->userdata('tahun');

    $data = array(
      'id' => $id_iku,
      'd' => $this->m_sakip->m_iku($id_iku),
      'dt_iku7' => $this->m_sakip->get_iku7($id_iku),
      'dt_bukti' => $this->m_sakip->get_bukti($id_iku),
      'dt_tw' => $this->m_sakip->get_triwulan(),
      'judul' => 'Capaian Kinerja',
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/iku7', $data);

  }
  function simpan_iku7()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $kode_unik = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 40);
    $id_iku = $this->input->post('id_iku');

    $query1 = $this->db->query("SELECT 
* from sakip_mhs_pres where 
nipd NOT IN(
SELECT nipd  FROM sakip_iku7)
and thn_prestasi NOT IN(
SELECT thn_prestasi  FROM sakip_iku7)");

    foreach ($query1->result() as $a) {

      $sql1 = "insert into sakip_iku7 (id_iku7,kode_pt,nama_pt,nipd,nm_pd,nm_prestasi,nm_tkt_prestasi,nm_jns_prestasi,peringkat,penyelenggara,thn_prestasi,id_iku,id_triwulan,status_iku,catatan) values (NULL,'$a->npsn','$a->nm_lemb','$a->nipd','" . addslashes($a->nm_pd) . "','" . addslashes($a->nm_prestasi) . "','$a->nm_tkt_prestasi','$a->nm_jns_prestasi','$a->peringkat','" . addslashes($a->penyelenggara) . "','$a->thn_prestasi','$id_iku','$id_triwulan','0','')";
      $this->db->query($sql1);
    }
    $this->db->query("UPDATE sakip_iku7
SET  bobot =  CASE  
                        WHEN nm_tkt_prestasi ='Nasional' THEN 0.50
                        WHEN nm_tkt_prestasi ='Internasional' THEN 0.75
                        WHEN nm_tkt_prestasi ='Propinsi' THEN 0.25
                     
                        end
                       ");
    $notif = "Tambah Data Berhasil";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku7/" . $id_iku);

  }
  function update_iku7()
  {
    $id_iku7 = $this->input->post('id_iku7');
    $id_iku = $this->input->post('id_iku');
    $old = $this->input->post('old_file');

    if (!empty($_FILES["file"]["name"])) {
      $file = $this->uploadFile();
      unlink("./upload/$old");
    } else {
      $file = $old;
    }
    $data_update = array(
      'file' => $file
    );
    $where = array('id_iku7' => $id_iku7);
    $res = $this->m_umum->UpdateData('sakip_iku7', $data_update, $where);
    if ($res >= 1) {

      $notif = "Bukti Dukung berhasil di tambah";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "pj/iku7/" . $id_iku);
    } else {
      echo "<h1>GAGAL</h1>";
    }
  }

  function delete_iku7($id, $id_iku)
  {

    $this->m_umum->hapus('sakip_iku7', 'id_iku7', $id);
    $notif = " Data berhasil dihapuskan";
    $this->session->set_flashdata('delete', $notif);
    redirect(base_url() . "pj/iku7/" . $id_iku);

  }
  function cetak_iku7()
  {

    $data['dt_iku7'] = $this->m_sakip->get_iku7();
    $this->load->view('sakip/laporan/cetak_iku3', $data);

  }
  function iku8($id_iku)
  {

    $tahun = $this->session->userdata('tahun');

    $data = array(
      'id' => $id_iku,
      'd' => $this->m_sakip->m_iku($id_iku),
      'dt_pts' => $this->m_sakip->get_pts_iku8(),
      'dt_bukti' => $this->m_sakip->get_bukti($id_iku),
      'dt_iku8' => $this->m_sakip->get_iku8($id_iku),
      'dt_tw' => $this->m_sakip->get_triwulan(),

      'judul' => 'Capaian Kinerja',
      'tahun' => $tahun,
    );


    $this->template->load('sakip/pj/template', 'sakip/pj/iku8', $data);

  }
  function simpan_iku8()
  {

    $kode_unik = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 40);
    $this->db->set('id_iku8', $kode_unik);
    $this->form_validation->set_rules(
      'kode_pt', 'Kode PT',
      'required|is_unique[sakip_iku8.kode_pt]');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE) {
      $notif = "PTS Sudah Ada/Sudah Menjadi Capaian ditahun Sebelumnya";
      $this->session->set_flashdata('delete', $notif);
      redirect(base_url() . "pj/iku8/" . $id);
    } else {

      $this->m_umum->set_data("sakip_iku8");
      $notif = "Tambah Data Berhasil";
      $this->session->set_flashdata('success', $notif);
      redirect(base_url() . "pj/iku8/" . $id);
    }

  }
  function cetak_iku8($id_iku)
  {

    $data['dt_iku8'] = $this->m_sakip->get_iku8($id_iku);
    $this->load->view('sakip/laporan/cetak_iku8', $data);

  }
  function update_iku8()
  {

    $this->form_validation->set_rules('id_iku8', 'id_iku8', 'required');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE)
      redirect(base_url() . "pj/iku8/" . $id);
    else {
      $this->m_umum->update_data("sakip_iku8");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "pj/iku8/" . $id);
    }

  }
  function delete_iku8($id, $id_iku)
  {

    $this->m_umum->hapus('sakip_iku8', 'id_iku8', $id);
    $notif = " Data berhasil dihapuskan";
    $this->session->set_flashdata('delete', $notif);
    redirect(base_url() . "pj/iku8/" . $id_iku);

  }
  function iku9($id_iku)
  {

    $tahun = $this->session->userdata('tahun');

    $data = array(
      'id' => $id_iku,
      'd' => $this->m_sakip->m_iku($id_iku),
      'dt_pts' => $this->m_sakip->get_pts_iku9(),
      'dt_iku9' => $this->m_sakip->get_iku9($id_iku),
      'dt_bukti' => $this->m_sakip->get_bukti($id_iku),
      'dt_tw' => $this->m_sakip->get_triwulan(),

      'judul' => 'Capaian Kinerja',
      'tahun' => $tahun,
    );


    $this->template->load('sakip/pj/template', 'sakip/pj/iku9', $data);

  }
  function simpan_iku9()
  {

    $kode_unik = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 40);
    $this->db->set('id_iku9', $kode_unik);
    $this->form_validation->set_rules(
      'kode_pt', 'Kode PT',
      'required|is_unique[sakip_iku9.kode_pt]');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE) {
      $notif = "PTS Sudah Ada/Sudah Menjadi Capaian ditahun Sebelumnya";
      $this->session->set_flashdata('delete', $notif);
      redirect(base_url() . "pj/iku9/" . $id);
    } else {

      $this->m_umum->set_data("sakip_iku9");
      $notif = "Tambah Data Berhasil";
      $this->session->set_flashdata('success', $notif);
      redirect(base_url() . "pj/iku9/" . $id);
    }

  }
  function update_iku9()
  {

    $this->form_validation->set_rules('id_iku9', 'id_iku9', 'required');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE)
      redirect(base_url() . "pj/iku9/" . $id);
    else {
      $this->m_umum->update_data("sakip_iku9");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "pj/iku9/" . $id);
    }

  }
  function cetak_iku9($id_iku)
  {

    $data['dt_iku9'] = $this->m_sakip->get_iku9($id_iku);
    $this->load->view('sakip/laporan/cetak_iku9', $data);

  }
  function delete_iku9($id, $id_iku)
  {

    $this->m_umum->hapus('sakip_iku9', 'id_iku9', $id);
    $notif = " Data berhasil dihapuskan";
    $this->session->set_flashdata('delete', $notif);
    redirect(base_url() . "pj/iku9/" . $id_iku);

  }
  function iku10($id_iku)
  {

    $tahun = $this->session->userdata('tahun');

    $data = array(
      'id' => $id_iku,
      'd' => $this->m_sakip->m_iku($id_iku),
      'dt_pts' => $this->m_sakip->get_pts(),
      'dt_bukti' => $this->m_sakip->get_bukti($id_iku),
      'dt_iku10' => $this->m_sakip->get_iku10($id_iku),
      'dt_tw' => $this->m_sakip->get_triwulan(),
      'judul' => 'Capaian Kinerja',
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/iku10', $data);

  }

  function simpan_iku10()
  {

    $kode_unik = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 40);
    $this->db->set('id_iku10', $kode_unik);
    $this->form_validation->set_rules('predikat_sakip', 'predikat_sakip', 'required');
    $id_iku = $this->input->post('id_iku');
    $predikat_sakip = $this->input->post('predikat_sakip');
    $id_triwulan = $this->input->post('id_triwulan');
    $file = $this->uploadFile();
    if ($this->form_validation->run() === FALSE) {
      redirect(base_url() . "pj/iku10/" . $id_iku);
    } else {


      $datakib = array(

        'predikat_sakip' => $predikat_sakip,
        'id_triwulan' => $id_triwulan,
        'id_iku' => $id_iku,
        'file' => $file
      );

      $this->m_umum->input_data($datakib, 'sakip_iku10');
      $notif = " Data berhasil ditambahkan";
      $this->session->set_flashdata('success', $notif);
      redirect(base_url() . "pj/iku10/" . $id_iku);
    }

  }
  function update_iku10()
  {

    $this->form_validation->set_rules('id_iku10', 'id_iku10', 'required');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE)
      redirect(base_url() . "pj/iku10/" . $id);
    else {
      $this->m_umum->update_data("sakip_iku10");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "pj/iku10/" . $id);
    }

  }
  function cetak_iku10($id_iku)
  {

    $data['dt_iku10'] = $this->m_sakip->get_iku10($id_iku);
    $this->load->view('sakip/laporan/cetak_iku10', $data);

  }
  function delete_iku10($id, $id_iku)
  {

    $this->m_umum->hapus('sakip_iku10', 'id_iku10', $id);
    $notif = " Data berhasil dihapuskan";
    $this->session->set_flashdata('delete', $notif);
    redirect(base_url() . "pj/iku10/" . $id_iku);

  }
  function iku11($id_iku)
  {

    $tahun = $this->session->userdata('tahun');

    $data = array(
      'id' => $id_iku,
      'd' => $this->m_sakip->m_iku($id_iku),
      'dt_pts' => $this->m_sakip->get_pts(),
      'dt_bukti' => $this->m_sakip->get_bukti($id_iku),
      'dt_iku11' => $this->m_sakip->get_iku11($id_iku),
      'dt_tw' => $this->m_sakip->get_triwulan(),
      'judul' => 'Capaian Kinerja',
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/iku11', $data);

  }

  function simpan_iku11()
  {

    $kode_unik = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 40);
    $this->db->set('id_iku11', $kode_unik);
    $this->form_validation->set_rules('nilai_rka', 'nilai_rka', 'required');
    $id_iku = $this->input->post('id_iku');
    $nilai_rka = $this->input->post('nilai_rka');
    $id_triwulan = $this->input->post('id_triwulan');
    $file = $this->uploadFile();
    if ($this->form_validation->run() === FALSE) {
      redirect(base_url() . "pj/iku11/" . $id_iku);
    } else {


      $datakib = array(

        'nilai_rka' => $nilai_rka,
        'id_triwulan' => $id_triwulan,
        'id_iku' => $id_iku,
        'file' => $file
      );

      $this->m_umum->input_data($datakib, 'sakip_iku11');
      $notif = " Data berhasil ditambahkan";
      $this->session->set_flashdata('success', $notif);
      redirect(base_url() . "pj/iku11/" . $id_iku);
    }

  }
  function update_iku11()
  {

    $this->form_validation->set_rules('id_iku11', 'id_iku11', 'required');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE)
      redirect(base_url() . "pj/iku11/" . $id);
    else {
      $this->m_umum->update_data("sakip_iku11");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "pj/iku11/" . $id);
    }

  }
  function delete_iku11($id, $id_iku)
  {

    $this->m_umum->hapus('sakip_iku11', 'id_iku11', $id);
    $notif = " Data berhasil dihapuskan";
    $this->session->set_flashdata('delete', $notif);
    redirect(base_url() . "pj/iku11/" . $id_iku);

  }
  function cetak_iku11($id_iku)
  {

    $data['dt_iku11'] = $this->m_sakip->get_iku11($id_iku);
    $this->load->view('sakip/laporan/cetak_iku11', $data);

  }
  function iku()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'judul' => 'Indikator Kinerja Utama LLDIKTI XI',
      'dt_iku' => $this->m_sakip->get_iku(),
      'dt_ikk' => $this->m_sakip->get_data('sakip_ikk'),
      'dt_bagian' => $this->m_sakip->get_data('sakip_bagian'),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/iku', $data);

  }
  function simpan_iku()
  {

    $this->db->set('id_iku', 'UUID()', FALSE);
    $this->form_validation->set_rules('id_ikk', 'id_ikk', 'required');
    if ($this->form_validation->run() === FALSE)
      redirect('pj/iku');
    else {

      $this->m_umum->set_data("sakip_iku");
      $notif = "Tambah Data Berhasil";
      $this->session->set_flashdata('success', $notif);
      redirect('pj/iku');
    }

  }
  function update_iku()
  {

    $this->form_validation->set_rules('id_iku', 'id_iku', 'required');
    if ($this->form_validation->run() === FALSE)
      redirect('pj/iku');
    else {
      $this->m_umum->update_data("sakip_iku");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect('pj/iku');
    }

  }
  function delete_iku($id)
  {

    $this->m_umum->hapus('sakip_iku', 'id_iku', $id);
    $notif = " Data berhasil dihapuskan";
    $this->session->set_flashdata('delete', $notif);
    redirect('pj/iku');

  }
  function target_kinerja()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'judul' => 'Target Perjanjian Kinerja',
      'dt_sasaran' => $this->m_sakip->get_sk(),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/sasaran_kegiatan', $data);

  }

  function simpan_sasaran_kegiatan()
  {

    $tahun = $this->session->userdata('tahun');
    $this->db->set('id_sasaran_kegiatan', 'UUID()', FALSE);
    $this->db->set('tahun', $tahun);
    $this->form_validation->set_rules('sasaran_kegiatan', 'sasaran_kegiatan', 'required');
    if ($this->form_validation->run() === FALSE)
      redirect('pj/target_kinerja');
    else {

      $this->m_umum->set_data("sakip_sasaran_kegiatan");
      $notif = "Tambah Data Berhasil";
      $this->session->set_flashdata('success', $notif);
      redirect('pj/target_kinerja');
    }

  }
  function update_sasaran_kegiatan()
  {

    $this->form_validation->set_rules('id_sasaran_kegiatan', 'id_sasaran_kegiatan', 'required');
    if ($this->form_validation->run() === FALSE)
      redirect('pj/target_kinerja');
    else {
      $this->m_umum->update_data("sakip_sasaran_kegiatan");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect('pj/target_kinerja');
    }

  }
  function delete_sasaran_kegiatan($id = NULL)
  {

    $this->m_umum->hapus('sakip_sasaran_kegiatan', 'id_sasaran_kegiatan', $id);
    $notif = " Data berhasil dihapuskan";
    $this->session->set_flashdata('delete', $notif);
    redirect('pj/target_kinerja');

  }
  function error()
  {
    $this->load->view('errors/html/error_404');
  }
  function ikk($id)
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'judul' => 'Target Perjanjian Kinerja',
      'id' => $id,
      'dt_ikk' => $this->m_sakip->get_ikk($id),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/pj/template', 'sakip/pj/ikk', $data);

  }

  function simpan_ikk()
  {

    $this->db->set('id_ikk', 'UUID()', FALSE);
    $this->form_validation->set_rules('ikk', 'ikk', 'required');
    $id = $this->input->post('id_sasaran_kegiatan');
    if ($this->form_validation->run() === FALSE)
      redirect('pj/target_kinerja');
    else {

      $this->m_umum->set_data("sakip_ikk");
      $notif = "Tambah Data Berhasil";
      $this->session->set_flashdata('success', $notif);
      redirect(base_url() . "pj/ikk/" . $id);
    }

  }

  function update_ikk()
  {

    $this->form_validation->set_rules('id_ikk', 'id_ikk', 'required');
    $id = $this->input->post('id_sasaran_kegiatan');
    if ($this->form_validation->run() === FALSE)
      redirect('pj/target_kinerja');
    else {
      $this->m_umum->update_data("sakip_ikk");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "pj/ikk/" . $id);
    }

  }

  function delete_ikk($id = NULL, $id_sk)
  {

    $this->m_umum->hapus('sakip_ikk', 'id_ikk', $id);
    $notif = " Data berhasil dihapuskan";
    $this->session->set_flashdata('delete', $notif);
    redirect(base_url() . "pj/ikk/" . $id_sk);

  }
  function send_iku1($id_iku, $id)
  {

    $this->db->query("update sakip_iku1 set status_iku=1 where id_iku1='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku1/" . $id);
  }
  function send_iku2($id_iku, $id)
  {

    $this->db->query("update sakip_iku2 set status_iku=1 where id_iku2='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku2/" . $id);
  }
  function send_iku4($id_iku, $id)
  {

    $this->db->query("update sakip_iku4 set status_iku=1 where id_iku4='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku4/" . $id);
  }
  function send_iku5($id_iku, $id)
  {

    $this->db->query("update sakip_iku5 set status_iku=1 where id_iku5='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku5/" . $id);
  }
  function send_iku6($id_iku, $id)
  {

    $this->db->query("update sakip_iku6 set status_iku=1 where id_iku6='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku6/" . $id);
  }
  function send_iku7($id_iku, $id)
  {

    $this->db->query("update sakip_iku7 set status_iku=1 where id_iku7='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku7/" . $id);
  }
  function send_iku8($id_iku, $id)
  {

    $this->db->query("update sakip_iku8 set status_iku=1 where id_iku8='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku8/" . $id);
  }
  function send_iku9($id_iku, $id)
  {

    $this->db->query("update sakip_iku9 set status_iku=1 where id_iku9='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku9/" . $id);
  }
  function send_iku10($id_iku, $id)
  {

    $this->db->query("update sakip_iku10 set status_iku=1 where id_iku10='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku10/" . $id);
  }
  function send_iku11($id_iku, $id)
  {

    $this->db->query("update sakip_iku11 set status_iku=1 where id_iku11='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku11/" . $id);
  }
  function kirim_analisa($id_analisa, $id_iku)
  {
    $this->db->query("update sakip_analisa set status_analisa=1 where id_analisa='$id_analisa'");
    $notif = " Data Analisa IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/analisa_capaian_kinerja/" . $id_iku);
  }
  function kirim_iku2()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku2 set status_iku=1 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku2/" . $id_iku);
  }
  function kirim_iku3()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku3 set status_iku=1 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku3/" . $id_iku);
  }
  function kirim_iku4()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku4 set status_iku=1 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku4/" . $id_iku);
  }
  function kirim_iku5()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku5 set status_iku=1 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku5/" . $id_iku);
  }
  function kirim_iku6()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku6 set status_iku=1 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku6/" . $id_iku);
  }
  function kirim_iku7()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku7 set status_iku=1 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku7/" . $id_iku);
  }
  function kirim_iku8()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku8 set status_iku=1 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku8/" . $id_iku);
  }
  function kirim_iku9()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku9 set status_iku=1 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku9/" . $id_iku);
  }
  function kirim_iku10()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku10 set status_iku=1 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku10/" . $id_iku);
  }
  function kirim_iku11()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku11 set status_iku=1 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku11/" . $id_iku);
  }

  function valid_iku1()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku1 set status_iku=3 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku1/" . $id_iku);
  }
  function valid_iku2()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku2 set status_iku=3 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku2/" . $id_iku);
  }
  function valid_iku3()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku3 set status_iku=3 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku3/" . $id_iku);
  }
  function valid_iku4()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku4 set status_iku=3 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku4/" . $id_iku);
  }
  function valid_iku5()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku5 set status_iku=3 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku5/" . $id_iku);
  }
  function valid_iku6()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku6 set status_iku=3 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku6/" . $id_iku);
  }
  function valid_iku7()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku7 set status_iku=3 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku7/" . $id_iku);
  }
  function valid_iku8()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku8 set status_iku=3 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku8/" . $id_iku);
  }
  function valid_iku9()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku9 set status_iku=3 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku9/" . $id_iku);
  }
  function valid_iku10()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku10 set status_iku=3 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku10/" . $id_iku);
  }
  function valid_iku11()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku11 set status_iku=3 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "pj/iku11/" . $id_iku);
  }
  function validasi_iku1()
  {

    $this->form_validation->set_rules('id_iku1', 'id_iku1', 'required');
    $this->form_validation->set_rules('status_iku', 'status_iku');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE) {
      redirect(base_url() . "pj/iku1/" . $id);
    } else {
      $this->m_umum->update_data("sakip_iku1");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "pj/iku1/" . $id);
    }

  }
  function validasi_iku2()
  {

    $this->form_validation->set_rules('id_iku2', 'id_iku2', 'required');
    $this->form_validation->set_rules('status_iku', 'status_iku');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE) {
      redirect(base_url() . "pj/iku2/" . $id);
    } else {
      $this->m_umum->update_data("sakip_iku2");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "pj/iku2/" . $id);
    }

  }
  function validasi_iku4()
  {

    $this->form_validation->set_rules('id_iku4', 'id_iku4', 'required');
    $this->form_validation->set_rules('status_iku', 'status_iku');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE) {
      redirect(base_url() . "pj/iku4/" . $id);
    } else {
      $this->m_umum->update_data("sakip_iku4");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "pj/iku4/" . $id);
    }

  }
  function validasi_iku5()
  {

    $this->form_validation->set_rules('id_iku5', 'id_iku5', 'required');
    $this->form_validation->set_rules('status_iku', 'status_iku');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE) {
      redirect(base_url() . "pj/iku5/" . $id);
    } else {
      $this->m_umum->update_data("sakip_iku5");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "pj/iku5/" . $id);
    }

  }
  function validasi_iku6()
  {

    $this->form_validation->set_rules('id_iku6', 'id_iku6', 'required');
    $this->form_validation->set_rules('status_iku', 'status_iku');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE) {
      redirect(base_url() . "pj/iku6/" . $id);
    } else {
      $this->m_umum->update_data("sakip_iku6");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "pj/iku6/" . $id);
    }

  }
  function validasi_iku7()
  {

    $this->form_validation->set_rules('id_iku7', 'id_iku7', 'required');
    $this->form_validation->set_rules('status_iku', 'status_iku');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE) {
      redirect(base_url() . "pj/iku7/" . $id);
    } else {
      $this->m_umum->update_data("sakip_iku7");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "pj/iku7/" . $id);
    }

  }
  function validasi_iku8()
  {

    $this->form_validation->set_rules('id_iku8', 'id_iku8', 'required');
    $this->form_validation->set_rules('status_iku', 'status_iku');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE) {
      redirect(base_url() . "pj/iku8/" . $id);
    } else {
      $this->m_umum->update_data("sakip_iku8");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "pj/iku8/" . $id);
    }

  }
  function validasi_iku9()
  {

    $this->form_validation->set_rules('id_iku9', 'id_iku9', 'required');
    $this->form_validation->set_rules('status_iku', 'status_iku');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE) {
      redirect(base_url() . "pj/iku9/" . $id);
    } else {
      $this->m_umum->update_data("sakip_iku9");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "pj/iku9/" . $id);
    }

  }
  function validasi_iku10()
  {

    $this->form_validation->set_rules('id_iku10', 'id_iku10', 'required');
    $this->form_validation->set_rules('status_iku', 'status_iku');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE) {
      redirect(base_url() . "pj/iku10/" . $id);
    } else {
      $this->m_umum->update_data("sakip_iku10");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "pj/iku10/" . $id);
    }

  }
  function validasi_iku11()
  {

    $this->form_validation->set_rules('id_iku11', 'id_iku11', 'required');
    $this->form_validation->set_rules('status_iku', 'status_iku');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE) {
      redirect(base_url() . "pj/iku11/" . $id);
    } else {
      $this->m_umum->update_data("sakip_iku11");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "pj/iku11/" . $id);
    }

  }
}

?>