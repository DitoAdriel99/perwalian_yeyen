<?php
class Krs_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function getDataMahasiswa()
	{
		$query = $this->db->select('*')
			->from('users')
			->where('roles', 1)
			->get();
		return $query->result();
	}

	public function uploadKrs($data)
	{
		$this->db->where('nim', $data['nim']);
		$this->db->update('users', $data);
	}

	

}
