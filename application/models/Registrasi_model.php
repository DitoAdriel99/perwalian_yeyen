<?php
class Registrasi_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function regis($data,$table)
	{
		$this->db->insert($table, $data);
	}
	public function insert($data,$table)
	{
		$this->db->insert($table, $data);
	}
}
