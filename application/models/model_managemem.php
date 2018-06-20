<?php
class model_managemem extends CI_Model {
 
    public function getMem(){
        
        $query = $this->db->get('administrators');
        $res = $query->result_array();
        return $res;
    }
    
    
}