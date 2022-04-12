<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Dashboard_model', 'm');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));

		if ($this->session->userdata('roles') != "3") {
			redirect(base_url());
		}
	}

	public function index()
	{
		$queryGetDataDosen  = $this->m->getDataDosen();
		$queryGetDataMahasiswa  = $this->m->getDataMahasiswa();
		$queryGetDataJadwal = $this->m->getDataJadwal();

		$data = array(
			'dosen' => $queryGetDataDosen,
			'mahasiswa' => $queryGetDataMahasiswa,
			'jadwal' => $queryGetDataJadwal
		);
		// print_r($data);
		// die();

		$this->load->view('Template/header');
		$this->load->view('Admin/V_Jadwal', $data);
		$this->load->view('Template/footer');
	}

	public function viewTambahJadwal()
	{
		$this->load->view('Template/header');
		$this->load->view('Admin/TambahJadwal');
		$this->load->view('Template/footer');
	}

	public function TambahJadwal()
	{
		$angkatan = $this->input->post('angkatan');
		$tanggal = $this->input->post('tanggal');
		$nidn = $this->input->post('nidn');
		$jam = $this->input->post('jam');
		$link = $this->input->post('link');

		$data = array(
			'angkatan' => $angkatan,
			'tanggal' => $tanggal,
			'jam' => $jam,
			'nidn' => $nidn,
			'link' => $link
		);

		$this->m->insertJadwal($data, 'jadwal_perwalian');
		redirect('Admin/Jadwal');
	}

	public function sessions()
	{
		print_r($this->session->userdata());
	}
}
