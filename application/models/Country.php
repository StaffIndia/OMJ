<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Country extends CI_Model {

	
	public function get_country()
	{
		
		$query=$this->db->get('country');
		$result=$query->result_array();
		
		return $result;

	}
	
}
	