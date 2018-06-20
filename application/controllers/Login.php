<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
    public function __construct(){
    
          parent::__construct();
          $this->load->model('Login_model');
          $this->load->helper('date');       
    }
     public function socialSiteLogin($mail){
       
        
               $mail=str_replace("attherateof","@",$mail);
               $result=$this->Login_model->checkSocialUser($mail);
          
               if(!empty($result)){
                   
//               echo "yes sign up";
                               $this->session->set_userdata('userid',$result[0]['USERID']);
                               $this->session->set_userdata('email',$result[0]['email']);
                               $this->session->set_userdata('fname',$result[0]['fullname']);
                               $this->session->set_userdata('un',$result[0]['username']);
                               $this->session->set_userdata('profilepicture',$result[0]['profilepicture']);
                       
                               $this->session->set_userdata('usertype',$result[0]['scriptolution1']);
                               $userType = $this->session->userdata('usertype',$result[0]['scriptolution1']);
                               if($userType==2){
                                  $this->session->set_userdata('user_type',"work");
                                   
                               }else{
                                   $this->session->set_userdata('user_type',"hire");
                               }
                            
                            
                            
                               $userId = $this->session->userdata('userid',$result[0]['USERID']);
                               $lIp = $this->input->ip_address(); //last login ip
                              
                               $format = 'DATE_RFC822';
                               $time = time();
                               $lastLogin = standard_date($format, $time); //last login time
                               $this->Login_model->storeIpDate($userId,$lIp,$lastLogin);
                            
                               redirect('welcome');
               
           
               
           }else{
                
                $this->form_validation->set_rules('loginfname', 'Full Name', 'required');
		        $this->form_validation->set_rules('loginun', 'Username', 'required|is_unique[members.username]');
                $this->form_validation->set_rules('customRadioInline1', 'Account type', 'required');
		        $this->form_validation->set_rules('agree', 'TOC', 'required');
                       
                   
                if ($this->form_validation->run() == FALSE){
                
                         $this->load->view('inc/header');
				         $this->load->view('inc/navbar');
				         $this->load->view('lsignup');
				         $this->load->view('inc/footer'); 
                        
                }else{
                    
                    
                    $data['fullname']=$this->input->post('loginfname');
					$data['username']=$this->input->post('loginun');
					$data['email']=$mail;
                    $data['password']=12345;
                    $data['verified']=1;
                    $data['scriptolution1']=$this->input->post('customRadioInline1');
					$data['ip']=$this->input->ip_address;
					$data['lip']=$this->input->ip_address;
					$data['addtime']=time();
					$data['lastlogin']=time();
				
					
					$this->Login_model->user_insert($data);
                    
                    redirect('login');
                    
                 
                }

                       
        
           }
    
    }
    
    
	public function index()
	{
	
	
	
		
        $this->form_validation->set_rules('loginemail', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('loginpass','Password','required');
		
	
		if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('inc/header');
						$this->load->view('inc/navbar');
						$this->load->view('login');
						$this->load->view('inc/footer');
                        
                }else{
               
                
				
				
					$data['mail']=$this->input->post('loginemail');
					$data['pass']=$this->input->post('loginpass');
                    $result=$this->Login_model->checkUser($data);
                    if(!empty($result)){
                        
                       
                        $this->session->set_userdata('verified',$result[0]['verified']);
                        $mailStatus = $this->session->userdata('verified',$result[0]['verified']);
                        
                       
                        
                      
                        if($mailStatus>0){
                                  
                        
                               $this->session->set_userdata('userid',$result[0]['USERID']);
                               $this->session->set_userdata('email',$result[0]['email']);
                               $this->session->set_userdata('fname',$result[0]['fullname']);
                               $this->session->set_userdata('un',$result[0]['username']);
                               $this->session->set_userdata('profilepicture',$result[0]['profilepicture']);
                       
                               $this->session->set_userdata('usertype',$result[0]['scriptolution1']);
                               $userType = $this->session->userdata('usertype',$result[0]['scriptolution1']);
                               if($userType==2){
                                  $this->session->set_userdata('user_type',"work");
                                   
                               }else{
                                   $this->session->set_userdata('user_type',"hire");
                               }
                            
                            
                            
                               $userId = $this->session->userdata('userid',$result[0]['USERID']);
                               $lIp = $this->input->ip_address(); //last login ip
                              
                               $format = 'DATE_RFC822';
                               $time = time();
                               $lastLogin = standard_date($format, $time); //last login time
                               $this->Login_model->storeIpDate($userId,$lIp,$lastLogin);
                            
                            
                               if(!empty($_POST["remembeme"])) {
				                   setcookie ("loginemail",$_POST["loginemail"],time()+ (10 * 365 * 24 * 60 * 60));
				                   setcookie ("loginpass",$_POST["loginpass"],time()+ (10 * 365 * 24 * 60 * 60));
			                    } else {
				                  if(isset($_COOKIE["loginemail"])) {
					              setcookie ("loginemail","");
				                }
				                 if(isset($_COOKIE["loginpass"])) {
					             setcookie ("loginpass","");
				                }
			                  }
                               
                            
                               redirect('welcome');
                        }else{
                            
                            $msg_login='<div class="alert alert-danger">Your E-mail is not verified yet!</div>';
					        $this->session->set_flashdata('message_login',$msg_login);
					        redirect('login');
                            
                        }
                       
                        
                    }else{
                        
                        
                        $msg_login='<div class="alert alert-danger">Invalid Username or Password!</div>';
					    $this->session->set_flashdata('message_login',$msg_login);
					    redirect('login');
                    }
                    
                }
			
			
			
		
	}
}
