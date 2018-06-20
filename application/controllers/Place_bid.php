<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Place_bid extends CI_Controller {
    
    
    
    
    public function index(){
	
	
	
			
		
        
         $this->load->view('inc/header');
         $this->load->view('inc/navbar');
		 $this->load->view('place-bid');
		 $this->load->view('inc/footer');
		 
		 
    
    
    
    }

	
	 public function bid($pid)
	 {
        $this->form_validation->set_rules('titleOfPro', 'Title Of Project', 'required');
		
		$this->form_validation->set_rules('cover_letter','Cover Letter','required');
		
		$this->db->where('PID',$pid);
		$query=$this->db->get('scriptolutionprojects');
		$datas['result']=$query->result_array();
		
		
		
		$this->db->where('PID',$pid);
		$datas['count']=$this->db->get('scriptolutionprojectbids')->num_rows();
        
        if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('inc/header');
		                $this->load->view('inc/navbar');
		                $this->load->view('place-bid',$datas);
		                $this->load->view('inc/footer');
		
                }else
                {
            
                    
				    
                    $pid=$pid;
					$userId=$this->session->userdata('userid'); 
            
				    $data['PID']=$pid;
                    $data['USERID']=$userId;
            
					$data['proposal_title']=$this->input->post('titleOfPro');

					$data['scriptolutionbidproposal']=$this->input->post('cover_letter');
					$data['	scriptolutiontime']=time();
					
					
					$this->load->model('PlaceBid');
					$this->PlaceBid->bid_insert($data);
					
					$msg='<div class="alert alert-success">Your Proposal Submitted Successfully!</div>';
					
					$this->session->set_flashdata('pBidMessage',$msg);
					
					
					redirect('Place_bid/bid/'.$data['PID'].'');
            
                    
                    
					
                        
                }
        
        
		
		
	
	}
}