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

	public function getAngkatan()
	{
		$query = $this->db->select('*')
			->from('krs_prediksi')
			->get();
		return $query->result();
	}

	public function uploadKrs($data)
	{
		$this->db->insert('krs_prediksi',$data);
	}

	

	

}
