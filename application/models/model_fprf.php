<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class model_fprf extends CI_Model{
    
    public function getInfo($id){
        $this->db->where('USERID',$id);
        $query=$this->db->get('members');
        return $query->result_array();
    }
    
    public function skill(){
       
        $query=$this->db->get('skillscriptolution');
        return $query->result_array();
        
    } 
}