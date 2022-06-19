<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Krs extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Krs_model', 'm');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));

		if ($this->session->userdata('roles') != "3") {
			redirect(base_url());
		}
	}

	public function index()
	{
		// $queryGetDataMahasiswa['mahasiswa']  = $this->m->getDataMahasiswa();

		$queryGetAngkatan['angkatan'] = $this->m->getAngkatan();

		// print_r($queryGetAngkatan);
		// die;

		$this->load->view('Template/header');
		$this->load->view('Admin/TambahKrs',$queryGetAngkatan);
		$this->load->view('Template/footer');
	}

	public function halamanUploadKrs()
	{
		$this->load->view('Template/header');
		$this->load->view('Admin/UploadKrs');
		$this->load->view('Template/footer');
	}

	public function uploadKrs()
	{
		$angkatan = $this->input->post('angkatan');
		$krs = $this->input->post('krs');
		$config['upload_path']   = './krs_prediksi/';
		$config['allowed_types'] = 'pdf|xlsx|png';
		$config['max_size']      = 9000;
		$config['max_width']     = 9000;
		$config['max_height']    = 9000;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('krs_prediksi')) {
			$this->session->set_flashdata('peringatan', 'Kumpulkan KRS Prediksi dalam bentuk Excel ya');
			redirect('Admin/Krs/halamanUploadKrs');
		} else {
			$dataUpload = array('upload_data' => $this->upload->data());
		}
		$data = array(
			'angkatan' => $angkatan,
			'krs_prediksi' => $dataUpload['upload_data']['file_name'],
		);
		$sts = array(
			'angkatan' => $angkatan,
			'status_krs' => 1
		);
		$this->m->uploadKrs($data, 'users');
		$this->session->set_flashdata('message', 'KRS terupload');
		redirect('Admin/Krs');
	}

	public function sessions()
	{
		print_r($this->session->userdata());
	}
}
