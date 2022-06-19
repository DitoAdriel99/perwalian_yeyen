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
		$tanggal = $this->input->post('tanggal');
		$nidn = $this->input->post('nidn');
		$jam = $this->input->post('jam');
		$link = $this->input->post('link');
		$sql = $this->db->query("SELECT pj_angkatan FROM users where nidn='$nidn'");
		$angkatan = $sql->row()->pj_angkatan;
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
	public function ViewEditJadwal($id_jadwal)
	{
		$data['jadwal'] = $this->m->UbahJadwal($id_jadwal);
		$this->load->view('Template/header');
		$this->load->view('Admin/EditJadwal',$data);
		$this->load->view('Template/footer');
	}

	public function EditJadwal()
	{
		$id_jadwal = $this->input->post('id_jadwal');
		$tanggal = $this->input->post('tanggal');
		$jam = $this->input->post('jam');
		$link = $this->input->post('link');

		$data = array(
			'id_jadwal' => $id_jadwal,
			'tanggal' => $tanggal,
			'jam' => $jam,
			'link'=> $link,
		);

		$this->m->Update($data);
		redirect('Admin/Jadwal');

	}

	public function HapusJadwal($id_jadwal)
	{

		$where = array('id_jadwal' => $id_jadwal);
		$query = $this->db->query("SELECT nidn FROM jadwal_perwalian WHERE id_jadwal = '$id_jadwal'");
		$nidn = $query->row()->nidn;

		$data = array(
			'nidn'=> $nidn,
			'status_jp' => null,
		);
		$this->m->delete($where);
		$this->m->hapusJp($data);
		redirect('Admin/Jadwal');
	}

	

	public function sessions()
	{
		print_r($this->session->userdata());
	}


	
}
