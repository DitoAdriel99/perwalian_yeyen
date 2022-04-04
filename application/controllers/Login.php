<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model', 'm');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->view('viewLogin');
	}

	public function proses_login()
	{
		$user = $this->input->post('email');
		$pass = $this->input->post('password');
		
		$cekLogin = $this->m->login($user,$pass);

		if ($cekLogin) {
			foreach($cekLogin as $row);
			$this->session->set_userdata('id_user', $row->id_user);
			$this->session->set_userdata('username', $row->username);
			$this->session->set_userdata('no_hp', $row->no_hp);
			$this->session->set_userdata('nidn', $row->nidn);
			$this->session->set_userdata('nim', $row->nim);
			$this->session->set_userdata('angkatan', $row->angkatan);
			$this->session->set_userdata('email', $row->email);
			$this->session->set_userdata('roles', $row->roles);

			if ($this->session->userdata('roles')==('1')) {
				redirect('Mahasiswa/Dashboard');
			}elseif ($this->session->userdata('roles')==('2')) {
				redirect('Dosen/Dashboard');
			}elseif ($this->session->userdata('roles')==('3')) {
				redirect('Admin/Dashboard');
			}
		}else{
			$data['pesan'] = "cek";
			$this->load->view('viewLogin',$data);
		}
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
	
}
