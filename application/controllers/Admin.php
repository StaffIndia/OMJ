<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');
class Admin extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('model_adminsignin');
        
    }
    public function index(){
       $this->form_validation->set_rules('un', 'Username', 'required');
       $this->form_validation->set_rules('pass', 'Password', 'required');    
        
        
        if($this->form_validation->run()==FALSE){
           $this->load->view('admin/admin_header');
           $this->load->view('view_adminsign');
           $this->load->view('admin/admin_footer');
        }else{
            $data['un']=$this->input->post('un');
            $data['pass']=$this->input->post('pass');
            $res=$this->model_adminsignin->user($data);
            if(!empty($res))
            {
                $this->session->set_userdata('aID',$result[0]['ADMINID']);
                $this->session->set_userdata('mail',$res[0]['email']);
                $this->session->set_userdata('userName',$result[0]['username']);
                redirect('admin_dashboard');
                
            }else{
                        $msg_login='<div class="alert alert-danger">Invalid Username or Password!</div>';
					    $this->session->set_flashdata('admin_message_login',$msg_login);
					    redirect('Admin');
            }
            
        }
    }
}
?>