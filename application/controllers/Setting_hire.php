<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_hire extends CI_Controller {

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
	 
	public function __construct(){
    
          parent::__construct();
          $this->load->model('user');    
          $this->load->model('country');    
    }
    
	public function index()
	{
	
		// $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		// $this->form_validation->set_rules('pemail', 'Paypal Email', 'valid_email');
		// $this->form_validation->set_rules('aemail', 'Payza Email', 'valid_email');
		// $this->form_validation->set_rules('scriptolutionfreelancerskills', 'Skills', 'thisisnot');
		$this->form_validation->set_rules('fullname', 'Buiness Name', 'required|callback_alpha_dash_space');
		$this->form_validation->set_rules('country', 'Country', 'required');
		// $this->form_validation->set_rules('scriptolutionuserslogan', 'Profile Heading', 'required|callback_alpha_dash_space');
		// // $this->form_validation->set_rules('description', 'Description', 'required|callback_alpha_dash_space');
		
	
		
		
		
	if ($this->form_validation->run() == FALSE)
                {
				
						
						//Feteching Data Dynamically For Category//
						
						$f_data['email']=$this->session->userdata('email');
		
						$f_data['results']=$this->user->user_data_by_email($f_data);
						
						
						$f_data['country']=$this->country->get_country();

						$this->load->view('inc/header');
						$this->load->view('inc/navbar');
						$this->load->view('setting-hire',$f_data);
						$this->load->view('inc/footer');
                }
                else
                {
				
				
					
					// $data['email']=$this->input->post('email');
					// $data['pemail']=$this->input->post('pemail');
					// $data['aemail']=$this->input->post('aemail');
					$data['fullname']=$this->input->post('fullname');
					$data['country']=$this->input->post('country');
					$data['scriptolutionuserslogan']=$this->input->post('scriptolutionuserslogan');
					$data['description']=$this->input->post('description');
				
					 // echo $data['scriptolutionfreelancerskills'];
					// $this->load->model('user');
					// $this->user->user_insert($data);
					
					if($_FILES && $_FILES['avatar']['name']){
					//user select file

					  $config['upload_path'] = './user_image';
					  $config['allowed_types'] = 'gif|jpg|png';
					  $config['max_size'] = 1000;
					  $this->load->library('upload', $config);
					   if (!$this->upload->do_upload('avatar')) {
					   
					   $msg1=$this->upload->display_errors();
					   
					   $msg2=' <div class="alert alert-danger">'.$msg1.'</div>';
						 $this->session->set_flashdata('message',$msg2 );
						 redirect('setting_hire');
						
					 } else {
					  $avatar = $this->upload->data();
					  $avatar_name = $avatar['file_name'];
					  
					  $data['profilepicture']=$avatar_name;
					 }
					 
					 }
					 
					 $this->db->where('USERID',$this->session->userdata('userid'));
					 $this->db->update('members',$data);
					
					$msg='<div class="alert alert-success">Your Profile Upadted</div>';
					$this->session->set_flashdata('message',$msg);
					
					
					   redirect('setting_hire');
					
                        
                }
		
		
		
	
	}
	

	public function alpha_dash_space($str){
    if (! preg_match('/^[a-zA-Z\s]+$/', $str)) {
        $this->form_validation->set_message('alpha_dash_space', 'The %s field may only contain alpha characters & White spaces');
        return FALSE;
    } else {
        return TRUE;
    }
	}
	
}
