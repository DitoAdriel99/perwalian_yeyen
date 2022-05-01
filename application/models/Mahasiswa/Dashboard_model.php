<?php
class Dashboard_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function getDataPerwalian($nim)
	{
		$query = $this->db->select('tp.*, tu.username')
			->from('perwalian tp')
			->join('users tu','tu.nidn = tp.nidn')
			->where('tp.nim',$nim)
			->get();
		return $query->result();
	}

	public function getJadwalPerwalian($angkatan)
	{
		$query = $this->db->select('*')
			->from('jadwal_perwalian')
			->where('angkatan', $angkatan)
			->get();
		return $query->result();
	}

	public function cekJadwal()
	{
		$query = $this->db->select('*')->from('jadwal_perwalian')->get();
		return $query->num_rows();
	}

	public function getUser($nim)
	{
		$query = $this->db->select('*')->from('users')->where('nim',$nim)->get();
		return $query->result();
	}

	
	
}
