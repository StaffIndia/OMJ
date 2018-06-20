<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PlaceBid extends CI_Model {

	
	public function bid_insert($data)
	{
		
		
		$this->db->insert('scriptolutionprojectbids',$data);
		
	}
	
	
}
