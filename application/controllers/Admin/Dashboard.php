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
		$monitoring['data'] = $this->m->getData();

		// print_r($monitoring);
		// die;
		$this->load->view('Template/header');
		$this->load->view('Admin/DashboardAdmin',$monitoring);
		$this->load->view('Template/footer');
	}


	public function sessions()
	{
		print_r($this->session->userdata());
	}
}
