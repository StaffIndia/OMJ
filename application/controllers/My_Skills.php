<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_Skills extends CI_Controller {

	 public function __construct(){
    
          parent::__construct();
          $this->load->model('userskill');       
          $this->load->model('user');       
    }
    
    
	public function index()
	{
        
       // $this->form_validation->set_rules();
       // $this->form_validation->set_rules();
        //$this->form_validation->set_rules();
      //  $this->form_validation->set_rules();
       // $this->form_validation->set_rules();
	   
					$data['email']=$this->session->userdata('email');
                     
                       $data['skills']=$this->userskill->show_skills();
                       $data['user']=$this->user->user_data_by_email($data);
        
       if (empty($this->input->post('submit'))){
                       $this->load->view('inc/header');
		               $this->load->view('inc/navbar');
					   
					  
					  
		               $this->load->view('my-skills',$data);
		               $this->load->view('inc/footer');
		
                
				}else{
				
					$data2['scriptolutionsk1']=$this->input->post('userskill_1');
					$data2['scriptolutionsk2']=$this->input->post('userskill_2');
                    $data2['scriptolutionsk3']=$this->input->post('userskill_3');
					$data2['scriptolutionsk4']=$this->input->post('userskill_4');
                    $data2['scriptolutionsk5']=$this->input->post('userskill_5');
                    
					
					$userID=$this->session->userdata('userid');
          
					
					$this->userskill->skill_insert($userID,$data2);
					
					$msg='<div class="alert alert-success">Your Skill Inserted Successfully!</div>';
					
					$this->session->set_flashdata('$skillmsg',$msg);
					
					
					redirect('My_Skills');
					
                    }    
                }
        
        
		
		
	
	}


