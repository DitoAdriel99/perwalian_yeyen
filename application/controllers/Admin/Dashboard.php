<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
		$this->load->view('Admin/DashboardAdmin', $data);
		$this->load->view('Template/footer');
	}

	public function getDataDosen()
	{
		$queryGetDataDosen  = $this->m->getDataDosen();
		echo json_encode($queryGetDataDosen);
	}

	public function getDataMahasiswa()
	{
		$queryGetDataMahasiswa  = $this->m->getDataMahasiswa();
		echo json_encode($queryGetDataMahasiswa);
	}

	public function ViewTambah($nim)
	{
		$data['mahasiswa'] = $this->m->getById($nim);
		$this->load->view('Template/header');
		$this->load->view('Admin/TambahPerwalian', $data);
		$this->load->view('Template/footer');
	}

	public function TambahMahasiswa()
	{
		$nim = $this->input->post('nim');
		$nidn = $this->input->post('nidn');

		$data = array(
			'nim' => $nim,
			'nidn' => $nidn,
		);

		// print_r($data);
		// die;

		$this->m->insertData($data, 'perwalian');

		// $status = 1;

		// $this->m->status($status,'users',$nim);


		// $status = 1;
		// $this->m->status($status,$nim);
		redirect('Admin/Dashboard');
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
		redirect('Admin/Dashboard');
	}

	public function ViewTambahKrs()
	{
		$queryGetDataMahasiswa['mahasiswa']  = $this->m->getDataMahasiswa();

		$this->load->view('Template/header');
		$this->load->view('Admin/TambahKrs', $queryGetDataMahasiswa);
		$this->load->view('Template/footer');
	}

	public function uploadKrs()
	{
		// print_r($_FILES);
		// die;
		$nim = $this->input->post('nim');
		$krs = $this->input->post('krs');

		$config['upload_path']   = './krs_prediksi/';
		$config['allowed_types'] = 'gif|jpg|png|pdf';
		$config['max_size']      = 9000;
		$config['max_width']     = 9000;
		$config['max_height']    = 9000;
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('krs_prediksi')) {
			$error = $this->upload->display_errors();
			// $this->load->view('upload_form', $error);
			$result = array(
				'error' => 1,
				'data' => $error
			);
			echo json_encode($result);
			exit;
		} else {
			$dataUpload = array('upload_data' => $this->upload->data());
			// $image = $dataUpload['upload_data']['file_name'];
		}

		$data = array(
			'nim' => $nim,
			'krs_prediksi' => $dataUpload['upload_data']['file_name'],
		);

		// print_r($data);
		// die;

		$this->m->uploadKrs($data,'users');
		redirect('Admin/Dashboard/ViewTambahKrs');


		// echo $nim;
	}

	public function sessions()
	{
		print_r($this->session->userdata());
	}
}
