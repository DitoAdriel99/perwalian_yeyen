
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
		$nim = $this->session->userdata('nim');

		$getperwalian = $this->m->getPerwalian($nim);

		$id_perwalian = $getperwalian->id_perwalian;
		$pesan = $this->m->getPesan($id_perwalian);
		// print_r($pesan);
		// die;

		$queryDosen = $this->m->getDosen($nidn);

		$data = [
			'dosen' => $queryDosen,
			'pesan' => $pesan,
			'id_perwalian' => $id_perwalian
		];
		
		$this->load->view('Template/header');
		$this->load->view('Mahasiswa/DosenWali',$data);
		$this->load->view('Template/footer');
	}

	public function pushCatatan()
	{
		
		$id_perwalian = $this->input->post('id_perwalian');
		$pesan = $this->input->post('pesan');
		$id_user = $this->session->userdata('id_user');

		$data = array(
			'id_perwalian' => $id_perwalian,
			'id_user' => $id_user,
			'pesan' => $pesan
		);

		$this->m->tambahcatatan($data);
		redirect('Mahasiswa/DosenWali/');

	}

	public function sessions()
	{
		print_r($this->session->userdata());
	}
}
