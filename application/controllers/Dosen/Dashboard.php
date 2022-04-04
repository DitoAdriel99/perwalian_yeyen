<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('dosen/Dashboard_model', 'm');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));

		if ($this->session->userdata('roles') != "2") {
			redirect(base_url());
		}
	}

	public function index()
	{
		$id_dosen = $this->session->userdata('nidn');

		// print_r($id_dosen);
		// die();
		$queryMahasiswaPerwalian['perwalian'] = $this->m->getMahasiswaPerwalian($id_dosen);
		// $queryJadwal = $this->m->getJadwal();

		$this->load->view('Template/header');
		$this->load->view('Dosen/DashboardDosen',$queryMahasiswaPerwalian);
		$this->load->view('Template/footer');

	}

	public function TambahCatatan()
	{
		$id_perwalian = $this->input->post('id_perwalian');
		$catatan = $this->input->post('catatan');

		$data = array(
			'id_perwalian' => $id_perwalian,
			'catatan' => $catatan,
		);

		$this->m->inputCatatan($data);
		redirect('Dosen/Dashboard');

		// print_r($data);
		// die;


	}

	public function sessions()
	{
		print_r($this->session->userdata());
	}
}
