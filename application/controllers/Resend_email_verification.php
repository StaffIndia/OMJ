<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resend_email_verification extends CI_Controller {

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
	
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		
		
		
		if ($this->form_validation->run() == FALSE)
                {
						$this->load->view('inc/header');
						$this->load->view('inc/navbar');
						$this->load->view('resend-email-verification');
						$this->load->view('inc/footer');
                }
                else
                {
				
				
					$data['email']=$this->input->post('email');
					$this->load->model('user');
					$results=$this->user->user_data_by_email($data);
                    
					if(!empty($results)){
					
						$message='<div class="alert alert-success"> Resend Email Verifation Code Sent Successfully </div>';
					
						$this->session->set_flashdata('show_message',$message);
						
					
						//sending Email to user//
					
						$semail='noreply@outsourcemyjob.com';
					
						$remail=$results[0]['email'];
						$username=$results[0]['fullname'];
						$pin=$results[0]['pin_code'];
		
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
						
						redirect('resend_email_verification');
					
					}else{
					
						$message='<div class="alert alert-danger">Sorry No Email Found!.</div>';
					
						$this->session->set_flashdata('show_message',$message);
						
						redirect('resend_email_verification');
					
					}
					
					
                }
		
	
	}
}
