<?php
class Login_model extends CI_Model {
 
    
    public function storeIpDate($userId,$lIp,$lastLogin){
        
       $data = array(
        'USERID' => $userId,
        'lip' => $lIp,
        'lastlogin' => $lastLogin
       );

    $this->db->where('USERID', $userId);
    $this->db->update('members', $data);      
        
    }
    public function checkSocialUser($mail){
        $this->db->where('email',$mail);
        $query=$this->db->get('members');
        $res=$query->result_array();
        return $res;
        
        
    }
    
    public function user_insert($data)
	{
		$this->db->insert('members',$data);
		
	}
    
    public function checkUser($data){
        
        $this->db->where('email',$data['mail']);
        $this->db->where('password',$data['pass']);
        $query=$this->db->get('members');
        $res=$query->result_array();
        return $res; 
    }
    
        
}