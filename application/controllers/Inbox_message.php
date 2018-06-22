<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox_message extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Model_Inbox');
    }
    
	public function index()
	{
	
						 $id=$this->session->userdata('userid');
	
						$sql=" SELECT * FROM ((SELECT DISTINCT(MSGTO) FROM inbox WHERE MSGTO='".$id."' OR MSGFROM='".$id."') UNION (SELECT DISTINCT(MSGFROM) FROM inbox WHERE MSGTO='".$id."' OR MSGFROM='".$id."')) AS A JOIN members ON A.MSGTO=members.USERID  ";
						
						$query=$this->db->query($sql);

						
						$data['result']=$query->result_array();

                        $this->load->view('inc/header');
						$this->load->view('inc/navbar');
                        // $data['res']=$this->Model_Inbox->allMessage(); 
                        // $data['res2']=$this->Model_Inbox->allMessage(); 
                        $this->load->view('inbox-message',$data);
						$this->load->view('inc/footer');
		
		
	}
	
}
