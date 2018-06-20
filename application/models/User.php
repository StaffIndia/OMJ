<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	
	public function user_insert($data)
	{
		
		
		$this->db->insert('members',$data);
		
	}
	
	public function user_data_by_email($data)
	{
		
		
		$this->db->where('email',$data['email']);
		$query=$this->db->get('members');
		$results=$query->result_array();
		
		return $results;
		
	}
	
	
	
	
	
	
	
}
