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
	public function getPerwalian($nim)
	{
		$query = $this->db->select('*')->from('perwalian')->where('nim',$nim)->get();
		return $query->row();
	}

	public function getpesan($test)
	{
		$query = $this->db->select('tp.*, tu.username')
			->from('pesan tp')
			->join('users tu','tu.id_user = tp.id_user')
			->where('id_perwalian',$test)
			->get();
		return $query->result();
	}

	public function tambahcatatan($data)
	{
		$this->db->insert('pesan', $data);
	}
	
}
