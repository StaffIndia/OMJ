<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Work extends CI_Model {



public function my_bids($id)
	
		{	


			$sql='SELECT * FROM (scriptolutionprojects INNER JOIN scriptolutionprojectbids ON scriptolutionprojects.PID = scriptolutionprojectbids.PID) WHERE scriptolutionprojectbids.USERID ="'.$id.'" ';

			$result=$this->db->query($sql);
			$result=$result->result_array();
			return $result;
	}

		public function number_of_bids()
	
	{

		$query=$this->db->get('scriptolutionprojectbids');
		$result=$query->result_array();
		return $result;
	}



	public function row_delete($id)
	{
		$userid=$this->session->userdata('userid');
	   $this->db->where('PID', $id);
	   $this->db->where('USERID', $userid);
	   $this->db->delete('scriptolutionprojectbids'); 
	}


}
	