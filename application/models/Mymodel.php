<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mymodel extends CI_Model
{
	public function GetKonten($where = "")
	{
		$data = $this->db->query('select * from t_produk where status_tampil=1 LIMIT 6' . $where);
		return $data;
	}

	public function pag_tabel_user()
	{
		$this->load->library('pagination');

		$query = "SELECT * FROM t_user order by username ASC";

		$config['base_url'] = base_url('page/tabel_user');
		$config['total_rows'] = $this->db->query($query)->num_rows();
		$config['per_page'] = 5;
		$config['uri_segment'] = 3;
		$config['num_links'] = 3;

		// Style Pagination
		// Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap
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
		// End style pagination

		$this->pagination->initialize($config); // Set konfigurasi paginationnya

		$page = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
		$query .= " LIMIT " . $page . ", " . $config['per_page'];

		$data['limit'] = $config['per_page'];
		$data['total_rows'] = $config['total_rows'];
		$data['pagination'] = $this->pagination->create_links(); // Generate link pagination nya sesuai config diatas
		$data['pegawai'] = $this->db->query($query)->result();

		return $data;
	}

	public function GetProgramPeg($where = "")
	{
		$data = $this->db->query('select * from t_program where group_program="peg"' . $where);
		return $data;
	}

	public function GetProgramSrt($where = "")
	{
		$data = $this->db->query('select * from t_program where group_program="srt"' . $where);
		return $data;
	}

	public function GetTabelRapat($limit, $start)
	{
		$data = $this->db->query('select * from t_rapat group by kode_rand');
		return $data;
	}

	public function GetDataRapat($where = "")
	{
		$data = $this->db->query('select * from t_rapat ' . $where);
		return $data->result_array();
	}

	public function get_rapat_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('t_rapat');
		$this->db->like('judul_rapat', $keyword);
		$this->db->or_like('tgl_rapat', $keyword);
		return $this->db->get()->result();
	}

	public function GetCetakRapat($kode_rand = "")
	{
		$this->db->select('*');
		$this->db->where('kode_rand', $kode_rand);
		$this->db->from('t_rapat');
		$this->db->join('t_pegawai', 't_pegawai.id_pegawai=t_rapat.id_pegawai');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_all()
	{
		return $this->db->get('product')->result();
	}

	public function GetPegawai($where = "")
	{
		$data = $this->db->query('select * from t_pegawai' . $where);
		return $data;
	}

	public function GetUser($where = "")
	{
		$data = $this->db->query('select * from t_user' . $where);
		return $data;
	}

	public function get_pegawai_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('t_pegawai');
		$this->db->like('nama_lengkap', $keyword);
		return $this->db->get()->result();
	}

	public function get_user_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('t_user');
		$this->db->like('username', $keyword);
		return $this->db->get()->result();
	}

	public function GetTabelAnggota($limit, $start)
	{
		$data = $this->db->query('select * from t_anggota', $limit, $start);
		return $data;
	}

	public function GetTabelPegRapat($limit, $start)
	{
		$data = $this->db->query('select * from t_pegawai where sts_data=1', $limit, $start);
		return $data;
	}

	public function GetTabelUser($limit, $start)
	{
		$data = $this->db->get('t_user', $limit, $start);
		return $data;
	}

	public function CountUser()
	{
		$data = $this->db->query("select count(*) as ttlUser from t_user where status=1");
		return $data;
	}

	public function get_combo_pegawai()
	{
		$query = $this->db->query('SELECT * FROM t_pegawai');
		return $query;
	}

	function auth_admin($username, $password)
	{
		$query = $this->db->query("SELECT * FROM t_user WHERE username='$username' AND password=MD5('$password') AND status=1 LIMIT 1");
		return $query;
	}

	public function GetUpdateUser($where = "")
	{
		$data = $this->db->query('select * from t_user ' . $where);
		return $data->result_array();
	}

	public function GetUpdateAnggota($where = "")
	{
		$data = $this->db->query('select * from t_anggota ' . $where);
		return $data->result_array();
	}

	public function pass_baru()
	{
		$baru = md5($this->input->post('pass_baru'));
		$data = array(
			'password' => $baru
		);
		$this->db->where('id_user', $this->session->userdata('ses_id'));
		$this->db->update('t_user', $data);
	}

	public function pass_lama()
	{
		$lama = md5($this->input->post('pass_lama'));
		$this->db->where('password', $lama);
		$query = $this->db->get('t_user');
		return $query->result();;
	}

	public function InsertData($tabelName, $data)
	{
		$res = $this->db->insert($tabelName, $data);
		return $res;
	}

	public function UpdateData($tabelName, $data, $where)
	{
		$res = $this->db->update($tabelName, $data, $where);
		return $res;
	}

	public function DeleteData($tabelName, $where)
	{
		$res = $this->db->delete($tabelName, $where);
		return $res;
	}

	public function Insert($nama)
	{
		$sql = "INSERT INTO t_rapat SET nama_peserta=$nama";
		$perintah = $this->db->query($sql);
		return $perintah;
	}
}
