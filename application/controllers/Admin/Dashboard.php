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
		$chart = $this->m->getChart();
		$monitoring = $this->m->getData();
		$data = array(
			'chart' => $chart,
			'monitoring' => $monitoring,
		);
		$this->load->view('Template/header');
		$this->load->view('Admin/DashboardAdmin',$data);
		$this->load->view('Template/footer');
	}

	public function chart()
	{
		$chart = $this->m->getChart();
		echo json_encode($chart);
	}
	public function sessions()
	{
		print_r($this->session->userdata());
	}
}
