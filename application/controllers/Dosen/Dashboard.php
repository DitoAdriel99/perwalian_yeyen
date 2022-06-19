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
		$this->load->helper(array('form', 'url', 'string'));

		if ($this->session->userdata('roles') != "2") {
			redirect(base_url());
		}
	}

	public function index()
	{
		$id_dosen = $this->session->userdata('nidn');
		$queryMahasiswaPerwalian = $this->m->getMahasiswaPerwalian($id_dosen);

		$data = array(
			'perwalian' => $queryMahasiswaPerwalian,
		
		);
		$this->load->view('Template/header');
		$this->load->view('Dosen/DashboardDosen', $data);
		$this->load->view('Template/footer');
	}

	public function ViewTambahCatatan($nim)
	{

		$mahasiswa = $this->m->getId($nim);
		$chart = $this->m->getChart($nim);
		$getperwalian = $this->m->getPerwalianCatatan($nim);
		$getcatatan = $this->m->getCatatan($getperwalian);
		$tess = $this->m->getAngkatan($nim);
		$angkatan = $tess->angkatan;
		
		$getKrs = $this->m->getKrs($angkatan);
		$cekKrs = $this->m->cekKrs($angkatan);

		$id_user = $this->session->userdata('nidn');

		$test = $mahasiswa->id_perwalian;
		$pesan = $this->m->getPesan($test);


		// print_r($pesan);
		// die;
		$data = array(
			'mahasiswa' => $mahasiswa,
			'chart' => $chart,
			'catatan' => $getcatatan,
			'pesan' => $pesan,
			'krs' => $getKrs,
			'cekkrs' => $cekKrs,
		);
		$this->load->view('Template/header');
		$this->load->view('Dosen/V_TambahCatatan', $data);
		$this->load->view('Template/footer');
	}

	public function ViewJadwal()
	{
		$nidn = $this->session->userdata('nidn');
		$jadwal['jadwal'] = $this->m->getJadwal($nidn);
		$this->load->view('Template/header');
		$this->load->view('Dosen/Jadwal', $jadwal);
		$this->load->view('Template/footer');
	}

	public function TambahCatatan($id_perwalian)
	{
		$catatan = $this->input->post('catatan');
		$tanggal = format_indo(date('Y-m-d'));
		$data = array(
			'id_perwalian' => $id_perwalian,
			'catatan' => $catatan,
			'tanggal' => $tanggal
		);

		$this->m->tambahcatatan($data);
		redirect('Dosen/Dashboard/');
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
		redirect('Dosen/Dashboard/');

	}


	public function HapusCatatan($id_perwalian)
	{
		$data = array(
			'id_perwalian' => $id_perwalian,
		);
		$this->m->HapusCatatan($data);
		redirect('Dosen/Dashboard/');
	}

	public function VIewTambahJadwal()
	{
		$this->load->view('Template/header');
		$this->load->view('Dosen/V_Tambahjadwal');
		$this->load->view('Template/footer');
	}

	public function TambahJadwal()
	{
		$tanggal = $this->input->post('tanggal');
		$nidn = $this->session->userdata('nidn');
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
		redirect('Dosen/Dashboard/ViewJadwal');
	}

	public function ViewEditJadwal($id_jadwal)
	{
		$data['jadwal'] = $this->m->UbahJadwal($id_jadwal);
		$this->load->view('Template/header');
		$this->load->view('Dosen/EditJadwal',$data);
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
		redirect('Dosen/Dashboard/ViewJadwal');


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
		redirect('Dosen/Dashboard/ViewJadwal');

	}

	public function sessions()
	{
		print_r($this->session->userdata());
	}
}
