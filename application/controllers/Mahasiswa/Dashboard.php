<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswa/Dashboard_model', 'm');
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
		$angkatan = $this->session->userdata('angkatan');
		$queryPerwalian = $this->m->getDataPerwalian($nim);
		$queryJadwal = $this->m->getJadwalPerwalian($angkatan);

		$cekJadwal = $this->m->cekJadwal();

		// print_r($cekJadwal);
		// die;

		$data = array(
			'perwalian' => $queryPerwalian,
			'jadwal' => $queryJadwal,
			'cek' => $cekJadwal,
		);

		// print_r($data);
		// die;

		$this->load->view('Template/header');
		$this->load->view('Mahasiswa/DashboardMahasiswa',$data);
		$this->load->view('Template/footer');

	}

	public function ViewJadwalPerwalian()
	{
		$this->load->view('Template/header');
		$this->load->view('Mahasiswa/JadwalPerwalian');
		$this->load->view('Template/footer');
	}

	public function sessions()
	{
		print_r($this->session->userdata());
	}
}
