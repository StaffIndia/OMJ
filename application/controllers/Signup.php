<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

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
	
	
	
	
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[members.username]');
		$this->form_validation->set_rules('loginemail', 'Email', 'required|valid_email|is_unique[members.email]');
		$this->form_validation->set_rules('loginpass', 'Password', 'required');
		$this->form_validation->set_rules('loginpassconf', 'Confirm Password', 'required|matches[loginpass]');
		$this->form_validation->set_rules('customRadioInline1', 'Account type', 'required');
		$this->form_validation->set_rules('agree', 'TOC', 'required');
	
		
	
			 if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('inc/header');
						$this->load->view('inc/navbar');
						$this->load->view('signup');
						$this->load->view('inc/footer');
                }
                else
                {
				
				
					$data['fullname']=$this->input->post('fname');
					$data['username']=$this->input->post('username');
					$data['email']=$this->input->post('loginemail');
					$data['password']=$this->input->post('loginpass');
					$data['scriptolution1']=$this->input->post('customRadioInline1');
					$data['ip']=$this->input->ip_address;
					$data['lip']=$this->input->ip_address;
					$data['addtime']=time();
					$data['lastlogin']=time();
					$data['pin_code']= mt_rand(100000,999999);
					
					
					
					
					
					
				
					
					
					$this->load->model('user');
					$this->user->user_insert($data);
						
						
						//sending Email to user//
					
					$semail='noreply@outsourcemyjob.com';
					
						$remail=$data['email'];
						$username=$data['fullname'];
						$pin=$data['pin_code'];
		
						$headers  = 'MIME-Version: 1.0' . "\r\n";
						$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
						$headers .= 'From: '.$semail . "\r\n" .
						'Reply-To: '.$semail . "\r\n" .
						// 'CC: '. $CCemail . "\r\n" .
						'X-Mailer: PHP/' . phpversion();
						// Subject //
						$mail_subject = "Your Account Information From OMJ";


						
						$messagbody = "<p style='color:black;font-family:arial; font-size:14px;'> Hi,".$username." <br > <br > 
						Your Account has been created on OMJ. 
						<br ><br >
						Please Verify By Clicking Below. 
						<a href='".base_url()."/verify?e=".$remail."&p=".$pin."'>Verify Now</a>
						<br ><br >
						Regards
						<br ><br >
						Outsoucemyjob
						"; 
	

		

						mail($remail, $mail_subject, $messagbody, $headers);
					
					
					$msg='<div class="alert alert-success">Your Account Created Successfully!</div>';
					
					$this->session->set_flashdata('message',$msg);
					
					
					redirect('signup');
					
                        
                }
			
			
			
		
	}
}
