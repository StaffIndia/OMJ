<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_projects extends CI_Controller {

	
	public function index()
	{	

		$this->load->library('pagination');
		$id=$this->session->userdata('userid');

		$this->load->model('home');
		/*$data['scriptolutionprojects']=$this->home->get_jobs(
		);*/

		/*$data['scriptolutionprojects']=$this->home->get_user_jobs($id
		);*/

		$this->db->where("USERID", $id);
		$this->db->get('scriptolutionprojects');
		

		$data['scriptolutionprojectbids']=$this->home->get_bids();

		$config['base_url'] = site_url('My_projects/index/');
        $config['total_rows'] = $this->db->where("USERID", $id)->get('scriptolutionprojects')->num_rows();
        $config['per_page'] =  2;
        $config['num_links'] = 3;
        $config['full_tag_open'] = '<ul class="pagination no-margin">';
        $config['full_tag_close'] = '</ul>';
        $config['cur_tag_open'] = '<li class="active"><a href="">';
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

        $query = $this->db->where("USERID", $id)->limit($config['per_page'], $data['segment'])->get('scriptolutionprojects');

        	$data['scriptolutionprojects'] = $query->result_array();
		
		$this->load->view('inc/header');
		$this->load->view('inc/navbar');
		$this->load->view('my-projects',$data);
		$this->load->view('inc/footer');
		
	
	}
 
	 public function delete_row()
	{
		 $id=$this->input->get('id'); 
	   $this->load->model('home');
	   $this->home->row_delete($id);
	   redirect('my-projects');  
	}

}
