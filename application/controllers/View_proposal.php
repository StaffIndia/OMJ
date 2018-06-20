<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_proposal extends CI_Controller {


	public function index()
	{

		

	}

	public function view($id)
	{

		$this->load->model('home');
		$data['proposal']=$this->home->get_viewproposal($id);
		$data['bids']=$this->home->number_of_bids($id);
		$this->db->where('PID',$id);  
		$query=$this->db->get('scriptolutionprojects');  
		$data['result']=$query->result_array(); /*time open close*/


		$this->load->view('inc/header');
		$this->load->view('inc/navbar');
		$this->load->view('view-proposal',$data);
		$this->load->view('inc/footer');

	}
	
	
	
}
