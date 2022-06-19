
<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class ProfileMhs extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswa/ProfileMhs_model', 'm');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));

		if ($this->session->userdata('roles') != "1") {
			redirect(base_url());
		}
	}

	public function index()
	{
		$id_user=$this->session->userdata('id_user');
		
		
		$getuser['user'] = $this->m->getuser($id_user);
		$this->load->view('Template/header');
		$this->load->view('Mahasiswa/ProfileMhs', $getuser);
		$this->load->view('Template/footer');
		
	}

	public function sessions()
	{
		print_r($this->session->userdata());
	}
}
