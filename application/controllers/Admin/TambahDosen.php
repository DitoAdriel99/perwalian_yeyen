<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TambahDosen extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/TambahDosen_model', 'm');
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

		$data = array(
			'dosen' => $queryGetDataDosen,
		);
		$this->load->view('Template/header');
		$this->load->view('Admin/V_Dosen', $data);
		$this->load->view('Template/footer');
	}

	public function ViewTambahDosen()
	{
		$this->load->view('Template/header');
		$this->load->view('Admin/TambahDosen');
		$this->load->view('Template/footer');
	}

	public function add()
	{
		$nidn = $this->input->post('nidn');
		$pj = $this->input->post('pj_angkatan');
		$password = $this->input->post('password');

		$sql_nidn = $this->db->query("SELECT nidn FROM dosen WHERE nidn='$nidn'");
		$ceknidn = $sql_nidn->num_rows();
		if ($ceknidn > 0) {
			$dosen = $this->db->query("SELECT * FROM dosen WHERE nidn='$nidn'");
			$biodata = $dosen->row();

			// print_r($biodata);
			// die;
			// print_r($ambil);
			$config['upload_path']   = './gambar_dosen/';
			$config['allowed_types'] = 'gif|jpg|png|pdf';
			$config['max_size']      = 9000;
			$config['max_width']     = 9000;
			$config['max_height']    = 9000;
			$this->load->library('upload', $config);
	
			if (!$this->upload->do_upload('profile')) {
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
				'nidn' => $nidn,
				'username' => $biodata->nama_dosen,
				'email' => $biodata->email,
				'password' => $password,
				'no_hp' => $biodata->no_hp,
				'roles' => 2,
				'pj_angkatan' => $pj,
				'profile' => $dataUpload['upload_data']['file_name'],
			);
	
			// print_r($data);
			// die;
	
			$this->m->insertData($data, 'users');
			redirect('Admin/TambahDosen/');
		}else{
			$this->session->set_flashdata('message', 'Nidn Tidak ada Harap Diperiksa kembali');
			redirect('Admin/TambahDosen/ViewTambahDosen');
		}

	}

	public function destroy($nidn)
	{
		$where = array('nidn' => $nidn);
		$this->m->delete($where, 'users');
		redirect('Admin/TambahDosen');
	}

	public function ViewEdit($nidn)
	{
		$data['dosen'] = $this->m->getById($nidn);
		$this->load->view('Template/header');
		$this->load->view('Admin/EditDosen', $data);
		$this->load->view('Template/footer');
	}

	public function edit()
	{
		$nidn = $this->input->post('nidn');
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$no_hp = $this->input->post('no_hp');

		$config['upload_path']   = './gambar_dosen/';
		$config['allowed_types'] = 'gif|jpg|png|pdf';
		$config['max_size']      = 9000;
		$config['max_width']     = 9000;
		$config['max_height']    = 9000;
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('profile')) {
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
			'nidn' => $nidn,
			'username' => $username,
			'email' => $email,
			'password' => $password,
			'no_hp' => $no_hp,
			'roles' => 2,
			'profile' => $dataUpload['upload_data']['file_name'],
		);

		$this->m->update($data, 'users');
		redirect('Admin/TambahDosen');
	}

	public function sessions()
	{
		print_r($this->session->userdata());
	}
}
