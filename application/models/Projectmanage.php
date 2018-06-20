<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projectmanage extends CI_Model {

	

	public function row_delete($id)
	{
	   $this->db->where('PID', $id);
	   $this->db->delete('scriptolutionprojects'); 
	}
	
	
	
}
	