<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Registrasi_model', 'm');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->view('viewRegistrasi');
	}

	public function back()
	{
		redirect(base_url());
	}

	public function add()
	{
		$nim = $this->input->post('nim');
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$angkatan = $this->input->post('angkatan');
		$no_hp = $this->input->post('no_hp');
		$password = $this->input->post('password');
		$sql_nim = $this->db->query("SELECT nim FROM users where nim='$nim'");
		$cek = $sql_nim->num_rows();
		if ($cek > 0) {
			$this->session->set_flashdata('message', 'Nim Mu Kok Sudah ada Yang benar laa');
			redirect('Registrasi');
		}else{
			$sql = $this->db->query("SELECT angkatan FROM users where pj_angkatan='$angkatan'");
			$cek = $sql->num_rows();
			if ($cek > 0) {
				$data = array(
					'nim' => $nim,
					'username' => $username,
					'email' => $email,
					'angkatan' => $angkatan,
					'no_hp' => $no_hp,
					'password' => $password,
					'roles' => 1
				);
		
				$this->m->regis($data, 'users');
		
				$queryDosen = $this->db->query("SELECT nidn FROM users WHERE pj_angkatan='$angkatan'");
				$hasil = $queryDosen->row()->nidn;
		
				$perwalian = array(
					'nidn' => $hasil,
					'nim' => $nim,
				);
				// print_r($perwalian);
				// die;
		
				$this->m->regis($perwalian, 'perwalian');
				$this->session->set_flashdata('message', 'Terimakasih Sudah Melakukan Registrasi Silahkan Login');
				redirect(base_url());
			} else {
				$this->session->set_flashdata('message', 'Angkatan Tidak ada!! Harap Isi Dengan Benar');
				redirect('Registrasi');
			}
		}

	}
}
