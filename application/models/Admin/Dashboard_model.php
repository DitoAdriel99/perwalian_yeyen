<?php
class Dashboard_model extends CI_Model
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
			->where('status', null)
			->get();
		return $query->result();
	}

	public function getDataJadwal()
	{
		$query = $this->db->select('*')->from('jadwal_perwalian')->get();
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

	public function uploadKrs($data)
	{
		$this->db->where('nim', $data['nim']);
		$this->db->update('users', $data);
	}

	public function status($status,$nim)
	{
		$this->db->trans_start();
		$this->db->query("UPDATE users SET status = $status, WHERE nim = $nim");
		$this->db->trans_complete();
	}

	public function insertJadwal($data, $table)
	{
		$this->db->insert($table, $data);
	}
}
