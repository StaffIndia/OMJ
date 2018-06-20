<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Change_email extends CI_Controller {

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
	
	
			$this->form_validation->set_rules('email', 'Email', 'required|is_unique[members.email]');
			$this->form_validation->set_rules('retemail', 'Retype Email', 'required|matches[email]');
			
	
			 if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('inc/header');
						$this->load->view('inc/navbar');
						$this->load->view('change-email');
						$this->load->view('inc/footer');
                }
                else
                {
				
				

					$data['email']=$this->input->post('email');
					
					$this->db->where('USERID',$this->session->userdata('userid'));
					$this->db->update('members',$data);
					$this->session->set_userdata('email',$data['email']);
					$msg='<div class="alert alert-success">Your Email Changed Successfully!</div>';
					
					$this->session->set_flashdata('message',$msg);
					
					redirect('Change_email');
					
                        
                }
		
		
		
	
	}
	
}
