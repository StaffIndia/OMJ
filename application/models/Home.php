<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Model {

	
	public function get_categories_home()
	{
		
		
		$this->db->limit(8);
		$query=$this->db->get('categories');
		$result=$query->result_array();
		
		return $result;
	}
	

	public function get_jobs()
	
	{
		
	
		$this->db->order_by("PID", "desc");
		$this->db->limit(10);
		$query=$this->db->get('scriptolutionprojects');
		$result=$query->result_array();
		
		return $result;
	}

public function get_user_jobs($id)
	
	{
		
	
		$this->db->where("USERID", $id);
		$query=$this->db->get('scriptolutionprojects');
		$result=$query->result_array();
		
		return $result;
	}




	public function get_bids()
	
	{
		
	
		$this->db->order_by("SCRIPTOLUTIONOFID", "asc");
		$query=$this->db->get('scriptolutionprojectbids');
		$result=$query->result_array();
		
		return $result;
	}
	

	public function row_delete($id)
	{
	   $this->db->where('PID', $id);
	   $this->db->delete('scriptolutionprojects'); 
	}

	public function get_viewproposal($id)
	
	{	
		
			$sql='SELECT * FROM ((scriptolutionprojects INNER JOIN scriptolutionprojectbids ON scriptolutionprojects.PID = scriptolutionprojectbids.PID) INNER JOIN members ON scriptolutionprojectbids.USERID = members.USERID) WHERE scriptolutionprojects.PID ="'.$id.'" ';

			$result=$this->db->query($sql);
			$result=$result->result_array();
			return $result;
	}



	public function get_hire_details($id)
	
	{	
		
			$sql='SELECT * FROM (scriptolutionprojects INNER JOIN members ON scriptolutionprojects.USERID = members.USERID) WHERE scriptolutionprojects.PID ="'.$id.'" ';

			$result=$this->db->query($sql);
			$result=$result->result_array();
			return $result;
	}

		public function get_viewproposal_single($id)
	
	{	
		
			$sql='SELECT * FROM (scriptolutionprojectbids INNER JOIN members ON scriptolutionprojectbids.USERID = members.USERID) WHERE scriptolutionprojectbids.PID ="'.$id.'" ';

			$result=$this->db->query($sql);
			$result=$result->result_array();
			return $result;
	}


	public function project_details($id)
	
	{
		
	
		$this->db->where("PID", $id);
		$query=$this->db->get('scriptolutionprojects');
		$result=$query->result_array();
		
		return $result;
	}



	public function number_of_bids($id)
	
	{
		
	
		$this->db->where("PID", $id);
		$query=$this->db->get('scriptolutionprojectbids');
		$result=$query->num_rows();
		
		return $result;
	}



		
}
	