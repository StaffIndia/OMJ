<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_BuyerProf extends CI_Model{
      
     public function getInfo($id){
          
          $this->db->where('USERID',$id);
          $query=$this->db->get('members');
          $res=$query->result_array();
          return $res;
         
     }
    
}
