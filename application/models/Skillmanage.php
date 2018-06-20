<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skillmanage extends CI_Model {

	
	
	public function get_skill()
	{
		$this->db->order_by('scriptolutionskill', 'asc');
		$query=$this->db->get('skillscriptolution');
		$result=$query->result_array();
		
		return $result;
	}
	

	public function skill_insert($data)
	{
		$this->db->insert('skillscriptolution',$data);
	}

		

	public function row_delete($id)
	{
	   $this->db->where('SCRIPTOLUTIONSKID', $id);
	   $this->db->delete('skillscriptolution'); 
	}


    function search($keyword)
    {
        $this->db->like('scriptolutionskill',$keyword);
        $query  =   $this->db->get('skillscriptolution');
       	$result=$query->result_array();
		return $result;
    } 
	
	
}
	