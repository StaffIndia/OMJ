<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verify extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if(isset($_GET['p'])){
		
			$data['email']=$_GET['e'];
			$data['pin_code']=$_GET['p'];
			
			$this->load->database();
			
			
			$this->db->where('pin_code',$data['pin_code']);
			$this->db->where('email',$data['email']);
			$this->db->set('verified','1');
			$query=$this->db->update('members');
			// echo $this->db->last_query();
		
			$msg='<div class="alert alert-success">Your Account Has been Verified. Please Login</div>';
			
			$this->session->set_flashdata('message_login',$msg);
			
			redirect('login');
		
		}
	}
	
	
	
}
