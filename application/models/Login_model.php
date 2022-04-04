<?php
class Login_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function login($user,$pass)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('email',$user);
		$this->db->where('password',$pass);
		$this->db->limit(1);

		$query = $this->db->get();

		if ($query->num_rows()==1) {
			return $query->result();
		}else{
			return false;
		}

	}
}
