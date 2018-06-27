<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class model_ip extends CI_Model{
    
    public function ip(){
     
        $query=$this->db->get('bans_ips');
        $res=$query->result_array();
        return $res; 
    }
    public function insert($data){
     
        $this->db->insert('bans_ips',$data);
    }
    public function deleteIP($ip){
     
        $res=$this->db->delete('bans_ips', array('ip' => $ip)); 
        return $res;
 
    }
   
}