<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Change_password extends CI_Controller {

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
	
	
			$this->form_validation->set_rules('newpass', 'Password', 'required');
			$this->form_validation->set_rules('confirmnewpass', 'Confirm Password', 'required|matches[newpass]');
			
	
			 if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('inc/header');
						$this->load->view('inc/navbar');
						$this->load->view('change-password');
						$this->load->view('inc/footer');
                }
                else
                {
				
				

					$data['password']=$this->input->post('newpass');
					
					$this->db->where('USERID',$this->session->userdata('userid'));
					$this->db->update('members',$data);
					$msg='<div class="alert alert-success">Your Password Changed Successfully!</div>';
					
					$this->session->set_flashdata('message',$msg);
					
					redirect('Change_password');
					
                        
                }
		
		
		
	
	}
	
	
	
}

