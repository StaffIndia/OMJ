<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer_profile extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('Model_BuyerProf');
        $this->load->helper('date');
    }

	
	public function index()
	{
	                    
	                  
                        $this->load->view('inc/header');
						$this->load->view('inc/navbar');
                        $id=$this->session->userdata('userid');  
                        $data['bInfo']=$this->Model_BuyerProf->getInfo($id);
                        $this->load->view('buyer-profile',$data);
						$this->load->view('inc/footer');
		
		
	}
	
}
