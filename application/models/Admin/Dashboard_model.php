<?php
class Dashboard_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}


	public function getData()
	{
		$query = $this->db->select('*')
			->from('users')
			->where('roles',1)
			->get();
		return $query->result();
	}
}
