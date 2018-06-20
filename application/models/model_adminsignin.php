<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class model_adminsignin extends CI_Model{
    
    public function user($data){
     
        $this->db->where('username',$data['un']);
        $this->db->where('password',$data['pass']);
        $query=$this->db->get('administrators');
        $res=$query->result_array();
        return $res; 
    }
    
}