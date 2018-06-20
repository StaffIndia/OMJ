<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_bids extends CI_Controller {

	
    
    
	public function index()
	{    
		$this->load->library('pagination');

		$id=$this->session->userdata('userid');

		$this->load->model('Work');

		$data['mybids']=$this->Work->My_bids($id
		);
		$data['bidscnt']=$this->Work->number_of_bids();


	

			$this->db->select('*');
			$this->db->from('scriptolutionprojects');
			$this->db->join('scriptolutionprojectbids', 'scriptolutionprojects.PID = scriptolutionprojectbids.PID');
			$this->db->where('scriptolutionprojectbids.USERID', $id);



			$config['base_url'] = site_url('My_bids/index');
			 $config['total_rows'] = $this->db->get()->num_rows();
			 $config['per_page'] = 1;
			 $config['num_links'] = 1;
			 $config['full_tag_open'] = '<ul class="pagination no-margin">';
			 $config['full_tag_close'] = '</ul>';
			 $config['cur_tag_open'] = '<li class="active"><a href="/">';
			 $config['cur_tag_close'] = '</a></li>';
			 $config['prev_tag_open'] = '<li>';
			 $config['prev_tag_close'] = '</li>';
			 $config['next_tag_open'] = '<li>';
			 $config['next_tag_close'] = '</li>';
			 $config['num_tag_open'] = '<li>';
			 $config['num_tag_close'] = '</li>';
			 $config['last_tag_open'] = '<li>';
			 $config['last_tag_close'] = '</li>';
			 $config['first_tag_open'] = '<li>';
			 $config['first_tag_close'] = '</li>';
			 $config['next_link'] = 'Next >';
			 $config['prev_link'] = '< Prev';

			 if ($this->uri->segment(3)) {
			 $data['segment'] = $this->uri->segment(3);
			 } else {
			 $data['segment'] = 0;
			 }
			$this->pagination->initialize($config);

				$query =$this->db->select('*');
						$this->db->from('scriptolutionprojects');
						$this->db->join('scriptolutionprojectbids', 'scriptolutionprojects.PID = scriptolutionprojectbids.PID');
						$this->db->where('scriptolutionprojectbids.USERID', $id);
				$query = $this->db->limit($config['per_page'], $data['segment'])->order_by('scriptolutionprojects.PID','desc')->get();




    			$data['mybids']=$query->result_array();

                       $this->load->view('inc/header');
		               $this->load->view('inc/navbar');  
		               $this->load->view('my-bids', $data);
		               $this->load->view('inc/footer');		
	
	}



	 public function delete_row()
	{
		$id=$this->input->get('id'); 
	   $this->load->model('Work');
	   $this->Work->row_delete($id);
	   redirect('my-bids');  
	}



	public function expired()
	{    
		$id=$this->session->userdata('userid');

		$this->load->model('Work');

		$data['mybids']=$this->Work->My_bids($id
		);
		$data['bidscnt']=$this->Work->number_of_bids();
    
                       $this->load->view('inc/header');
		               $this->load->view('inc/navbar');  
		               $this->load->view('expired-bids', $data);
		               $this->load->view('inc/footer');		
	
	}


}

