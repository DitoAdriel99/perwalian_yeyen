<?php
class Dosenwali_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function getDosen($nidn)
	{
		$query = $this->db->select('*')
			->from('users')
			->where('nidn', $nidn)
			->get();
		return $query->result();
	}
	
}
