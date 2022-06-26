<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('mymodel');
	}

	function index(){
		$this->load->view('v_login');
	}

	function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_admin=$this->mymodel->auth_admin($username,$password);

        if($cek_admin->num_rows() > 0){ //jika login sebagai dosen
				$data=$cek_admin->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         if($data){ //Akses admin
		            $this->session->set_userdata('akses','1');
		            $this->session->set_userdata('ses_noinduk',$data['no_induk']);
		            $this->session->set_userdata('ses_id',$data['id_user']);
		            $this->session->set_userdata('ses_user',$data['username']);
		            $this->session->set_userdata('ses_kantor',$data['kode_kantor']);
		            $this->session->set_userdata('ses_nik',$data['nik']);
		            $this->session->set_userdata('ses_nama',$data['nama_lengkap']);
		            redirect('page');

		         }else{ //akses dosen
		            $this->session->set_userdata('akses','2');
		            $this->session->set_userdata('ses_noinduk',$data['no_induk']);
		            $this->session->set_userdata('ses_id',$data['id_user']);
					$this->session->set_userdata('ses_user',$data['username']);
		            $this->session->set_userdata('ses_kantor',$data['kode_kantor']);
		            $this->session->set_userdata('ses_nik',$data['nik']);
		            $this->session->set_userdata('ses_nama',$data['nama_lengkap']);
		            redirect('page');
		        }
		}else{
			$url=base_url('index.php/login');
			echo $this->session->set_flashdata('msg','Maaf, username atau password salah! atau user non aktif!');
			redirect($url);
		}
    }

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('login');
        redirect($url);
    }

}