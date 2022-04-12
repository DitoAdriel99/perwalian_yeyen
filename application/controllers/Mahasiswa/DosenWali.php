
<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class DosenWali extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswa/Dosenwali_model', 'm');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));

		if ($this->session->userdata('roles') != "1") {
			redirect(base_url());
		}
	}

	public function index()
	{
		$nim = $this->session->userdata('nim');
		$queryNidn = $this->db->query("SELECT * FROM perwalian where nim='$nim' ");
		$nidn = $queryNidn->row()->nidn;
		$queryDosen['dosen'] = $this->m->getDosen($nidn);


		// print_r($queryDosen);
		// die;
		$this->load->view('Template/header');
		$this->load->view('Mahasiswa/DosenWali',$queryDosen);
		$this->load->view('Template/footer');

	}

	public function sessions()
	{
		print_r($this->session->userdata());
	}
}
