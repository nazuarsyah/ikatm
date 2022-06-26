<?php
class Page extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
    $this->load->library('pagination');
    //validasi jika user belum login
    if ($this->session->userdata('masuk') != TRUE) {
      $url = base_url();
      redirect($url);
    }
  }

  function index()
  {
    $data = array(
      "countuser" => $this->mymodel->CountUser()->result_array(),
      //"countpermohonan" => $this->mymodel->CountPermohonan()->result_array(),
    );
    $this->load->view('v_dashboard', $data);
  }

  public function tabel_rapat()
  {

    $config['base_url'] = site_url('page/tabel_rapat/'); //site url
    $config['total_rows'] = $this->db->count_all('t_rapat'); //total row
    $config['per_page'] = 20;  //show record per halaman
    $config["uri_segment"] = 3;  // uri parameter
    $choice = $config["total_rows"] / $config["per_page"];
    $config["num_links"] = floor($choice);

    // Membuat Style pagination untuk BootStrap v4
    $config['first_link']       = 'First';
    $config['last_link']        = 'Last';
    $config['next_link']        = 'Next';
    $config['prev_link']        = 'Prev';
    $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
    $config['full_tag_close']   = '</ul></nav></div>';
    $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
    $config['num_tag_close']    = '</span></li>';
    $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
    $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
    $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
    $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['prev_tagl_close']  = '</span>Next</li>';
    $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
    $config['first_tagl_close'] = '</span></li>';
    $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['last_tagl_close']  = '</span></li>';

    $this->pagination->initialize($config);
    $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

    $data['data'] = $this->mymodel->GetTabelRapat($config["per_page"], $data['page']);

    $data['pagination'] = $this->pagination->create_links();

    $this->load->view('v_tabel_rapat', $data);
  }

  public function add_rapat()
  {
    $config['base_url'] = site_url('page/add_rapat/'); //site url
    $config['total_rows'] = $this->db->count_all('t_pegawai'); //total row
    $config['per_page'] = 100;  //show record per halaman
    $config["uri_segment"] = 3;  // uri parameter
    $choice = $config["total_rows"] / $config["per_page"];
    $config["num_links"] = floor($choice);

    // Membuat Style pagination untuk BootStrap v4
    $config['first_link']       = 'First';
    $config['last_link']        = 'Last';
    $config['next_link']        = 'Next';
    $config['prev_link']        = 'Prev';
    $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
    $config['full_tag_close']   = '</ul></nav></div>';
    $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
    $config['num_tag_close']    = '</span></li>';
    $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
    $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
    $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
    $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['prev_tagl_close']  = '</span>Next</li>';
    $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
    $config['first_tagl_close'] = '</span></li>';
    $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['last_tagl_close']  = '</span></li>';

    $this->pagination->initialize($config);
    $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

    //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
    $data['data'] = $this->mymodel->GetTabelPegawai($config["per_page"], $data['page']);

    $data['pagination'] = $this->pagination->create_links();

    $this->load->view('v_add_rapat', $data);
  }

  public function do_insert_rapat()
  {

    $kode_rand = rand();
    $tgl_rapat = $this->input->post('tgl_rapat');
    $judul_rapat = $this->input->post('judul_rapat');
    $nama = $this->input->post('id_pegawai');
    $tgl_input = date('Y-m-d');
    $user_input = $this->session->userdata('ses_user');

    for ($i = 0; $i < sizeof($nama); $i++) {
      $data = array(
        'kode_rand' => $kode_rand,
        'tgl_rapat' => $tgl_rapat,
        'judul_rapat' => $judul_rapat,
        'id_pegawai' => $nama[$i],
        'tgl_input' => $tgl_input,
        'user_input' => $user_input
      );
      $this->db->insert('t_rapat', $data);
    }
    $this->session->set_flashdata('msg', 'Tambah data');
    $this->session->set_flashdata('msg_class', 'alert-success');
    return redirect('page/tabel_rapat');
  }

  public function cari_rapat()
  {
    $keyword = $this->input->post('keyword');
    $data['products'] = $this->mymodel->get_rapat_keyword($keyword);
    $this->load->view('v_cari_rapat', $data);
  }

  public function cetak_daftar_hadir($kode_rand)
  {
    $data_rapat = $this->mymodel->GetDataRapat("where kode_rand = $kode_rand");

    $data = array(
      'kode_rand' => $data_rapat[0]['kode_rand'],
      'tgl_rapat' => $data_rapat[0]['tgl_rapat'],
      'judul_rapat' => $data_rapat[0]['judul_rapat'],
      'id_pegawai' => $data_rapat[0]['id_pegawai'],
      'dataRpt' => $this->mymodel->GetCetakRapat($data_rapat[0]['kode_rand']),
    );
    $this->load->view('v_cetak_daftar_hadir', $data);
  }

  public function cari_pegawai()
  {
    $keyword = $this->input->post('keyword');
    $data['products'] = $this->mymodel->get_pegawai_keyword($keyword);
    $this->load->view('v_cari_pegawai', $data);
  }

  public function do_delete_anggota($id_anggota)
  {
    $where = array('id_anggota' => $id_anggota);
    $res = $this->mymodel->DeleteData('t_anggota', $where);
    if ($res >= 1) {
      $this->session->set_flashdata('msg', 'Hapus data ');
      redirect('page/tabel_anggota');
    }
  }

  public function do_delete_rapat($kode_rand)
  {
    $where = array('kode_rand' => $kode_rand);
    $res = $this->mymodel->DeleteData('t_rapat', $where);
    if ($res >= 1) {
      $this->session->set_flashdata('msg', 'Hapus data ');
      redirect('page/tabel_rapat');
    }
  }

  public function cari_user()
  {
    $keyword = $this->input->post('keyword');
    $data['products'] = $this->mymodel->get_user_keyword($keyword);
    $this->load->view('v_cari_user', $data);
  }

  public function tabel_user()
  {
    $user = $this->session->userdata('ses_user');
    $sql = $this->db->query("SELECT * FROM t_program where kode_program='page/tabel_user' AND user_program='$user'");
    $cek_program = $sql->num_rows();
    if ($cek_program > 0) {
      $data['model'] = $this->mymodel->pag_tabel_user();
      $this->load->view('v_tabel_user', $data);
    } else {
      $this->load->view('v_404');
    }
  }

  public function tabel_anggota()
  {

    $config['base_url'] = site_url('page/tabel_anggota/'); //site url
    $config['total_rows'] = $this->db->count_all('t_anggota'); //total row
    $config['per_page'] = 4;  //show record per halaman
    $config["uri_segment"] = 3;  // uri parameter
    $choice = $config["total_rows"] / $config["per_page"];
    $config["num_links"] = floor($choice);

    // Membuat Style pagination untuk BootStrap v4
    $config['first_link']       = 'First';
    $config['last_link']        = 'Last';
    $config['next_link']        = 'Next';
    $config['prev_link']        = 'Prev';
    $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
    $config['full_tag_close']   = '</ul></nav></div>';
    $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
    $config['num_tag_close']    = '</span></li>';
    $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
    $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
    $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
    $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['prev_tagl_close']  = '</span>Next</li>';
    $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
    $config['first_tagl_close'] = '</span></li>';
    $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['last_tagl_close']  = '</span></li>';

    $this->pagination->initialize($config);
    $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

    //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
    $data['data'] = $this->mymodel->GetTabelAnggota($config["per_page"], $data['page']);

    $data['pagination'] = $this->pagination->create_links();

    $this->load->view('v_tabel_anggota', $data);
  }

  public function search()
  {
    $keyword = $this->input->post('keyword');
    $data['products'] = $this->mymodel->get_product_keyword($keyword);
    $this->load->view('search', $data);
  }

  public function add_anggota()
  {
    $this->load->view('v_add_anggota');
  }

  public function add_user()
  {
    $this->load->view('v_add_user');
  }

  public function ganti_password()
  {
    $this->load->view('v_ganti_password');
  }

  public function do_insert_user()
  {
    $user_usr = $_POST['username'];
    $pass_usr = $_POST['password'];
    $nama_usr = $_POST['nama'];
    $sts_usr = $_POST['sts_user'];
    $tgl_usr = date('Y-m-d');

    $user_crt = $this->session->userdata('ses_user');

    $data_insert = array(
      'username' => $user_usr,
      'password' => md5($pass_usr),
      'nama_lengkap' => $nama_usr,
      'tgl_create' => $tgl_usr,
      'user_create' => $user_crt,
      'status' => $sts_usr,
    );

    $data_insert1 = array(
      'user_program' => $user_usr,
      'group_program' => "peg",
      'kode_program' => "page/tabel_anggota",
      'nama_program' => '"?> Tabel Anggota </a>"',
    );

    $res = $this->mymodel->InsertData('t_user', $data_insert);
    $res = $this->mymodel->InsertData1('t_program', $data_insert1);
    if ($res >= 1) {
      $this->session->set_flashdata('msg', 'Tambah data sukses..');
      redirect('page/tabel_user');
    } else {
      echo "Insert data gagal!";
    }
  }

  public function update_user($id_user)
  {
    $usr = $this->mymodel->GetUpdateUser("where id_user = $id_user");

    $data = array(
      'id_user' => $usr[0]['id_user'],
      'username' => $usr[0]['username'],
      'nama' => $usr[0]['nama_lengkap'],
      'sts_user' => $usr[0]['status'],
    );
    $this->load->view('v_update_user', $data);
  }

  public function do_update_user()
  {
    $id_usr = $_POST['id_user'];
    $user_usr = $_POST['username'];
    $nama_usr = $_POST['nama'];
    $sts_usr = $_POST['sts_user'];
    $data_update = array(
      'kode_kantor' => $kode_kantor,
      'username' => $user_usr,
      'nama_lengkap' => $nama_usr,
      'status' => $sts_usr,
    );
    $where = array('id_user' => $id_usr);
    $res = $this->mymodel->UpdateData('t_user', $data_update, $where);
    if ($res >= 1) {
      $this->session->set_flashdata('msg', 'Update data sukses..');
      redirect('page/tabel_user');
    }
  }

  public function do_delete_user($id_user)
  {
    $where = array('id_user' => $id_user);
    $res = $this->mymodel->DeleteData('t_user', $where);
    if ($res >= 1) {
      $this->session->set_flashdata('msg', 'Hapus data ');
      redirect('page/tabel_user');
    }
  }

  public function do_ganti_password()
  {
    $pass_lama = $this->mymodel->pass_lama();
    if ($pass_lama == False) {
      $this->load->view('v_ganti_password');
      $this->session->set_flashdata('error', 'Password lama salah!');
    } else {
      $this->mymodel->pass_baru();
      $this->session->set_flashdata('error', 'Ganti password anda sukses, silahkan login ulang!');
      $this->session->sess_destroy();
      redirect('login');
    }
  }

  public function do_insert_absensi()
  {

    $nik = $this->session->userdata('ses_nik');;
    $tgl_absen = date('Y-m-d');
    $jam_masuk = date('h:i:s');
    $sts_masuk = 'Y';
    $sts_pulang = 'N';

    $data_insert = array(
      'nik' => $nik,
      'tgl_absen' => $tgl_absen,
      'jam_masuk' => $jam_masuk,
      'sts_masuk' => $sts_masuk,
      'sts_pulang' => $sts_pulang,

    );

    $res = $this->mymodel->InsertData('t_absensi', $data_insert);
    if ($res >= 1) {
      $this->session->set_flashdata('msg', 'Tambah data sukses..');
      redirect('page/absensi');
    } else {
      echo "Insert data gagal!";
    }
  }

  public function do_insert_anggota()
  {

    $tgl_input = date('Y-m-d');
    $user_input = $this->session->userdata('ses_user');
    $nama = $_POST['nama'];

    $data_insert = array(
      'nama_lengkap' => $nama,
      'sts_data' => 1,
      'user_input' => $user_input,
      'tgl_input' => $tgl_input,

    );

    $res = $this->mymodel->InsertData('t_anggota', $data_insert);
    if ($res >= 1) {
      $this->session->set_flashdata('msg', 'Tambah data sukses..');
      redirect('page/tabel_anggota');
    } else {
      echo "Insert data gagal!";
    }
  }

  public function detail_pegawai($id_pegawai)
  {
    $pegawai = $this->mymodel->GetUpdatePegawai("where id_pegawai = $id_pegawai");

    $data = array(
      'nama_kantor' => $pegawai[0]['nama_kantor'],
      'kode_kantor' => $pegawai[0]['kode_kantor'],
      'nama_no_induk' => $pegawai[0]['nama_no_induk'],
      'no_ktp' => $pegawai[0]['no_ktp'],
      'no_induk' => $pegawai[0]['no_induk'],
      'nama_lengkap' => $pegawai[0]['nama_lengkap'],
      'tempat_lahir' => $pegawai[0]['tempat_lahir'],
      'tgl_lahir' => $pegawai[0]['tgl_lahir'],
      'jenis_kelamin' => $pegawai[0]['jenis_kelamin'],
      'agama' => $pegawai[0]['agama'],
      'sts_sipil' => $pegawai[0]['sts_sipil'],
      'alamat' => $pegawai[0]['alamat'],
      'pendidikan' => $pegawai[0]['pendidikan'],
      'jurusan' => $pegawai[0]['jurusan'],
      'no_hp' => $pegawai[0]['no_hp'],
      'npwp' => $pegawai[0]['npwp'],
      'nama_bank' => $pegawai[0]['nama_bank'],
      'atas_nama_rek' => $pegawai[0]['atas_nama_rek'],
      'no_rekening' => $pegawai[0]['no_rekening'],
      'tgl_masuk' => $pegawai[0]['tgl_masuk'],
      'divisi' => $pegawai[0]['divisi'],
      'jabatan' => $pegawai[0]['jabatan'],
      'sts_data' => $pegawai[0]['sts_data'],
      'foto' => $pegawai[0]['foto'],

    );
    $this->load->view('v_detail_pegawai', $data);
  }

  public function update_anggota($id_anggota)
  {
    $pegawai = $this->mymodel->GetUpdateAnggota("where id_anggota = $id_anggota");

    $data = array(
      'id_anggota' => $pegawai[0]['id_anggota'],
      'nama_lengkap' => $pegawai[0]['nama_lengkap'],
    );
    $this->load->view('v_update_anggota', $data);
  }

  public function do_update_anggota()
  {
    $id_anggota = $_POST['id_anggota'];
    $nama = $_POST['nama'];

    $data_update = array(

      'nama_lengkap' => $nama,
    );
    $where = array('id_anggota' => $id_anggota);
    $res = $this->mymodel->UpdateData('t_anggota', $data_update, $where);
    if ($res >= 1) {
      $this->session->set_flashdata('msg', 'Update data ');
      redirect('page/tabel_anggota');
    }
  }

  public function do_insert_pekerjaan()
  {

    $no_induk = $_POST['no_induk'];
    $nama_perusahaan = $_POST['nama_perusahaan'];
    $bagian = $_POST['bagian'];
    $jabatan = $_POST['jabatan'];
    $tgl_mulai = $_POST['tgl_mulai'];
    $tgl_akhir = $_POST['tgl_akhir'];

    $user_crt = $this->session->userdata('ses_user');

    $data_insert = array(
      'no_induk' => $no_induk,
      'nama_perusahaan' => $nama_perusahaan,
      'bagian' => $bagian,
      'jabatan' => $jabatan,
      'tgl_mulai' => $tgl_mulai,
      'tgl_akhir' => $tgl_akhir,
      'user_input' => $user_crt,
    );

    $res = $this->mymodel->InsertData('t_pekerjaan', $data_insert);
    if ($res >= 1) {
      $this->session->set_flashdata('msg', 'Tambah data sukses..');
      redirect('page/tabel_pekerjaan');
    } else {
      echo "Insert data gagal!";
    }
  }
}
    /*
    echo "<pre>";
    print_r($prd);
    echo "<pre>";
    }
    }*/