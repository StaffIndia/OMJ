<?php
class Model_Inbox extends CI_Model{
    public function allMessage(){
      
      
      $userid=$this->session->userdata('userid');
  
      $this->db->select('*, a.USERID as auserid,a.fullname as auser,a.USERID as auserid, b.USERID as buserid,b.fullname buser,b.profilepicture as bpic,inbox.time as mtime');
      
      $this->db->from('inbox');
      $this->db->join('members a', 'a.USERID = inbox.MSGTO');
      $this->db->join('members b', 'b.USERID = inbox.MSGFROM');
      $this->db->join('files', 'files.FID = inbox.FID','left');
      $this->db->where('MSGTO = '.$userid.' OR MSGFROM='.$userid.'');
      //$this->db->group_by('a.fullname.unique_coloumn_Name');    
      //  $this->db->group_by('category_master.Category_Id,business_profile_details.Business_Id');
      $this->db->group_by('a.fullname');   
      //$this->db->group_by('b.fullname');  
      $this->db->order_by('MID','desc');
      $query = $this->db->get();    
      $query=$query->result_array();  
      return $query;     
    }
    
    public function getUnreadMsgCount(){
      $userid = $this->session->userdata('userid');
      $Msgcount = $this->db->select('*');
      $Msgcount = $this->db->from('inbox');
      $Msgcount = $this->db->where('MSGTO = '.$userid.' AND unread = 0');

      
     
      $Msgcount = $this->db->get();
      

     // echo $Msgcount -> num_rows();

     // var_dump($Msgcount);

      //var_dump($this->db->get());
      //$query=$query->result_array();  
      return  $Msgcount -> num_rows(); 

    }


  
//    public function message($id){
//       // $sdata['id']=$id;
//      $id=2;
//     // $userid=$this->session->userdata('userid');
//      $userid=3;    
//      $this->db->select('*,a.fullname as auser,b.fullname buser,b.profilepicture as bpic,inbox.time as mtime');
//      $this->db->from('inbox');
//      $this->db->join('members a', 'a.USERID = inbox.MSGTO');
//      $this->db->join('members b', 'b.USERID = inbox.MSGFROM');
//      $this->db->join('files', 'files.FID = inbox.FID','left');
//      $this->db->where('MSGTO = '.$id.' AND MSGFROM='.$userid.'');
//      $this->db->or_where('MSGTO = '.$userid.' AND MSGFROM='.$id.'');
//      $this->db->order_by('MID','desc');
//      $query = $this->db->get();    
//          
//      $query=$query->result_array();  
//      return $query;     
//      
//        
//        
//    }
}