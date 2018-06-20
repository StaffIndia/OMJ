<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userskill extends CI_Model {
    
    public function show_skills(){
    
        
        $query=$this->db->get('skillscriptolution');
		$results=$query->result_array();
		
		return $results;
    
    }
	public function skill_insert($id,$data2){
      
        $this->db->where('USERID',$id);
        $status=$this->db->update('members',$data2);
       
        
    }
}
?>