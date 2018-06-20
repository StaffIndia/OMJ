<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skill extends CI_Model {

	
	
	
	public function get_all_skills()
	{
		$this->db->order_by('scriptolutionskill', 'asc');
		$query=$this->db->get('skillscriptolution');
		$result=$query->result_array();
		return $result;
	}
	

	
	public function get_category_skills()
	{
		

		$query=$this->db->get('skillscriptolution');
		$result=$query->result_array();	
		return $result;
	}
	
	
	
}
	