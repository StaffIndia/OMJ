<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot_password extends CI_Controller {

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
						$this->load->view('forgot-password');
						$this->load->view('inc/footer');
                }
                else
                {
				
				
					$data['email']=$this->input->post('email');
					$this->load->model('user');
					$results=$this->user->user_data_by_email($data);
                    
					if(!empty($results)){
					
						$message='<div class="alert alert-success">User Name and Password Sent to Your Email</div>';
					
						$this->session->set_flashdata('show_message',$message);
						
						$results[0]['password'];
						
						
						
						$semail='noreply@outsourcemyjob.com';
					
						$remail=$results[0]['email'];
						$username=$results[0]['username'];
						$pwd=$results[0]['password'];
		
		
			
						$headers  = 'MIME-Version: 1.0' . "\r\n";
						$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
						$headers .= 'From: '.$semail . "\r\n" .
						'Reply-To: '.$semail . "\r\n" .
						// 'CC: '. $CCemail . "\r\n" .
						'X-Mailer: PHP/' . phpversion();
						// Subject //
						$mail_subject = "Your Account Information From OMJ";


						
						$messagbody = "<p style='color:black;font-family:arial; font-size:14px;'> Hi, <br > <br > 
						Your Request at Outsoucemyjob for Password recovery have been approved. Your password Is Given Below. 
						<br ><br >
						User Name : 
						<strong>".$username."</strong>
						<br ><br >
						Password : 
						<strong>".$pwd."</strong>
						<br ><br >
						Regards
						<br ><br >
						Outsoucemyjob
						"; 
	

		

						mail($remail, $mail_subject, $messagbody, $headers);
						
						redirect('forgot_password');
					
					}else{
					
						$message='<div class="alert alert-danger">Sorry No Email Found!.</div>';
					
						$this->session->set_flashdata('show_message',$message);
						
						redirect('forgot_password');
					
					}
					
					
                }
		

		
	
	}
}
