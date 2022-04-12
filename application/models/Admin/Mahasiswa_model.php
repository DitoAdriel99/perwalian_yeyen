<?php
class Mahasiswa_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function getDataDosen()
	{
		$query = $this->db->select('*')
			->from('users')
			->where('roles', 2)
			->get();
		return $query->result();
	}

	public function getDataMahasiswa()
	{
		$query = $this->db->select('*')
			->from('users')
			->where('roles', 1)
			->where('status_perwalian', null)
			->get();
		return $query->result();
	}

	public function getById($nim)
	{
		$this->db->where('nim', $nim);
		$query = $this->db->get('users');
		return $query->row();
	}

	public function insertData($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function ubahStatus($data, $table)
	{
		$this->db->where('nim', $data['nim']);
		$this->db->update($table, $data);
	}
}
