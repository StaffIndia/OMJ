<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ip extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('model_ip');
    
    }

    public function add(){
        
      
        $this->form_validation->set_rules('addIp', 'Required', 'required|valid_ip');
        
        if($this->form_validation->run()==FALSE){
            $this->load->view('inc/admin_header');
            $this->load->view('view_addip');
            $this->load->view('inc/admin_footer');
            
        }else{
             $data['ip']=$this->input->post('addIp');
             $this->model_ip->insert($data);
             $msg='<div class="alert alert-success">Successfully Ip added!</div>';
					    $this->session->set_flashdata('addip_status',$msg);
					    redirect('ip/add');
            
        }
    }

    public function ban(){
        $this->load->view('inc/admin_header');
        $res['ip']=$this->model_ip->ip(); 
        $this->load->view('view_ip',$res);
        $this->load->view('inc/admin_footer');
        
    }
    public function del($ip){
        $res=$this->model_ip->deleteIP($ip);
        if($res){
             $msg='<div class="alert alert-danger">Your Ip is successfully deleted!</div>';
					        $this->session->set_flashdata('ip',$msg);
					        redirect('ip/ban');
            
        }
    }
    
}

?>
