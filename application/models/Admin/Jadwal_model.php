<?php
class Jadwal_model extends CI_Model
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
			->where('status_jp', null)
			->get();
		return $query->result();
	}

	public function getDataMahasiswa()
	{
		$query = $this->db->select('*')
			->from('users')
			->where('roles', 1)
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

	public function insertJadwal($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function ubahStatus($sts)
	{
		$this->db->where('nidn', $sts['nidn']);
		$this->db->update('users', $sts);
	}

	public function UbahJadwal($id_jadwal)
	{
		$query = $this->db->select('*')
			->from('jadwal_perwalian')
			->where('id_jadwal',$id_jadwal)
			->get();
			return $query->result();
	}

	public function Update ($data)
	{
		$this->db->where('id_jadwal',$data['id_jadwal']);
		$this->db->update('jadwal_perwalian',$data);
	}

	public function delete($where)
	{
		$this->db->where($where);
		$this->db->delete('jadwal_perwalian');
	}

	public function hapusJp($data)
	{
		$this->db->where('nidn', $data['nidn']);
		$this->db->update('users',$data);
	}

}
