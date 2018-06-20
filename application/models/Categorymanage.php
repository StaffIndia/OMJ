<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorymanage extends CI_Model {

	
	public function get_categories_home()
	{
		
		
		$this->db->limit(2);
		$query=$this->db->get('categories');
		$result=$query->result_array();
		
		return $result;
	}
	
	public function get_categories()
	{
		$this->db->order_by('name', 'asc');
		$query=$this->db->get('categories');
		$result=$query->result_array();
		
		return $result;
	}
	

	public function category_insert($data)
	{
		$this->db->insert('categories',$data);
	}

		public function skill_insert($data)
	{
		$this->db->insert('skillscriptolution',$data);
	}



		public function row_delete($id)
	{
		

	   $this->db->where('CATID', $id);
	   $this->db->delete('categories'); 
	}


    function search($keyword)
    {
        $this->db->like('name',$keyword);
        $query  =   $this->db->get('categories');
       	$result=$query->result_array();
		return $result;
    }
	
	
}
	