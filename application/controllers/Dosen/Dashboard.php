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
		$this->load->helper(array('form', 'url','string'));

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

	public function ViewTambahCatatan($nim)
	{
		// $test = random_string('numeric', 1);
		// echo $test;
		// die;
		$data['data'] = $this->m->getId($nim);
		
		$this->load->view('Template/header');
		$this->load->view('Dosen/V_TambahCatatan',$data);
		$this->load->view('Template/footer');
	}

	public function TambahCatatan($id_perwalian)
	{
		// echo $id_perwalian;
		// die;
		$catatan = $this->input->post('catatan');

		$data = array(
			'id_perwalian' => $id_perwalian,
			'catatan' => $catatan,
		);

		// print_r($data);
		// die;
		$this->m->inputCatatan($data);
		redirect('Dosen/Dashboard/');

		// print_r($data);
		// die;


	}

	public function ViewJadwal()
	{
		$nidn = $this->session->userdata('nidn');
		$jadwal['jadwal'] = $this->m->getJadwal($nidn);
		// print_r($nidn);
		// die;
		$this->load->view('Template/header');
		$this->load->view('Dosen/Jadwal',$jadwal);
		$this->load->view('Template/footer');
	}

	public function sessions()
	{
		print_r($this->session->userdata());
	}
}
