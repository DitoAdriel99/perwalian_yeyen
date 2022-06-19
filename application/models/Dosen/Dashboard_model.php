<?php
class Dashboard_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function getMahasiswaPerwalian($id_dosen)
	{
		$query = $this->db->select('tp.*, tu.*')
			->from('perwalian tp')
			->join('users tu','tu.nim = tp.nim')
			->where('tp.nidn',$id_dosen)
			->where('status_akun','1')
			->get();
		return $query->result();
	}

	public function getEmail($id_perwalian)
	{
		$query = $this->db->select('tp.*, tu.*')
			->from('perwalian tp')
			->join('users tu', 'tu.nim = tp.nim')
			->where('id_perwalian', $id_perwalian)
			->get();
		return $query->row();
	}

	public function InputCatatan($data)
	{
		$this->db->where('id_perwalian',$data['id_perwalian']);
		$this->db->update('perwalian', $data);
	}

	// public function HapusCatatan($data, $table)
	// {
	// 	$this->db->where('id_perwalian', $data['id_perwalian']);
	// 	$this->db->update($table, $data);
	// }

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

	public function getPerwalianCatatan($nim)
	{
		$query = $this->db->select('*')->from('perwalian')
			->where('nim',$nim)->get();
		return $query->row()->id_perwalian;
	}

	public function getCatatan($getperwalian)
	{
		$query = $this->db->select('catatan,tanggal')
			->from('catatan')
			->where('id_perwalian',$getperwalian)
			->get();
		return $query->result();
	}
	
	public function getChart($nim)
	{
		$query = $this->db->select('*')
			->from('matakuliah')
			->where('nim',$nim)
			->get();
		return $query->result();
	}

	public function tambahcatatan($data)
	{
		$this->db->insert('pesan', $data);
	}

	public function HapusCatatan($data)
	{
		$this->db->where('id_perwalian', $data['id_perwalian']);
		$this->db->delete('catatan');
	}

	public function getKrs($angkatan)
	{
		$query = $this->db->select('*')
			->from('krs_prediksi')
			->where('angkatan', $angkatan)
			->get();
		return $query->row();
	}

	public function getAngkatan($nim)
	{
		$query = $this->db->select('*')->from('users')->where('nim',$nim)->get();
		return $query->row();
	}

	public function cekKrs($angkatan)
	{
		$query = $this->db->select('*')
			->from('krs_prediksi')
			->where('angkatan', $angkatan)
			->get();
		return $query->num_rows();
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
	
	public function ubahStatus($sts)
	{
		$this->db->where('nidn', $sts['nidn']);
		$this->db->update('users', $sts);
	}
	
	public function insertJadwal($data, $table)
	{
		$this->db->insert($table, $data);
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

	
}
