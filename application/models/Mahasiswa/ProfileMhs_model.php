<?php
class ProfileMhs_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function getuser($id_user)
	{
		$query=$this->db->select('*')
			->from('users')
			->where('id_user',$id_user)
			->get();
		return $query->row();
	}

	
	
}
