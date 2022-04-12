<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Jadwal_model', 'm');
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
	public function getDataDosen()
	{
		$queryGetDataDosen  = $this->m->getDataDosen();
		echo json_encode($queryGetDataDosen);
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
		$sql = $this->db->query("SELECT angkatan FROM jadwal_perwalian where angkatan='$angkatan'");
		$cek_nik = $sql->num_rows();
		if ($cek_nik > 0) {
			$this->session->set_flashdata('message', 'Tahun Angkatan Sudah Diisi! Harap Cari Tahun yang Lain!');
			redirect('Admin/Jadwal/viewTambahJadwal');
		} else {
			$data = array(
				'angkatan' => $angkatan,
				'tanggal' => $tanggal,
				'jam' => $jam,
				'nidn' => $nidn,
				'link' => $link
			);

			$sts = array(
				'nidn' => $nidn,
				'status_jp' => 1
			);

			$this->m->insertJadwal($data, 'jadwal_perwalian');
			$this->m->ubahStatus($sts, 'users');
			redirect('Admin/Jadwal');
		}
	}

	public function sessions()
	{
		print_r($this->session->userdata());
	}
}
