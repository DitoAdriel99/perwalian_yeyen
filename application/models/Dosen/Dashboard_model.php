<?php
class Dashboard_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function getMahasiswaPerwalian($id_dosen)
	{
		$query = $this->db->select('tp.*, tu.username')
			->from('perwalian tp')
			->join('users tu','tu.nim = tp.nim')
			->where('tp.nidn',$id_dosen)
			->get();
		return $query->result();
	}

	public function InputCatatan($data)
	{
		$this->db->where('id_perwalian',$data['id_perwalian']);
		$this->db->update('perwalian', $data);
	}

	public function getJadwal($nidn)
	{
		$query = $this->db->select('*')
			->from('jadwal_perwalian')
			->where('nidn',$nidn)
			->get();
		return $query->result();
	}

	public function getId($nim)
	{
		$query = $this->db->select('tp.*,tu.*')
			->from('perwalian tp')
			->join('users tu', 'tu.nim = tp.nim')
			->where('tp.nim', $nim)
			->get();
		return $query->row();
	}

	public function getPerwalian()
	{
		$query = $this->db->select('*')->from('perwalian')->get();
		return $query->result();
	}
	
}
