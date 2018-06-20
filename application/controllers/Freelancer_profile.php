<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Freelancer_profile extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('model_fprf');
        $this->load->helper('date');
        
    }

	public function freelancer($id)
	{
	                    
	
                        $this->load->view('inc/header');
						$this->load->view('inc/navbar');
                       
                        $data['fInfo']=$this->model_fprf->getInfo($id);
                        $data['skills']=$this->model_fprf->skill(); 
                       
                       //print_r($data['skills']);
                       
						$this->load->view('freelancer-profile',$data);
						$this->load->view('inc/footer');
		
		
	}
	
}
