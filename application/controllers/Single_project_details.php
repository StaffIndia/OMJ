<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Single_project_details extends CI_Controller {


	public function index()
	{
		$this->load->model('home');
		$data['proposal']=$this->home->get_viewproposal($id);
		$data['proposal2']=$this->home->get_hire_details($id);


		$this->load->view('inc/header');
		$this->load->view('inc/navbar');
		$this->load->view('single-project-details',$data);
		$this->load->view('inc/footer');
		

	}

	public function view($id)
	{
		$this->load->library('pagination');

		$this->load->model('home');
		$data['project']=$this->home->project_details($id); /*project name*/
		$data['proposal2']=$this->home->get_hire_details($id); /*hire details*/
		//$data['proposal3']=$this->home->get_viewproposal_single($id); /*proposal details*/
		$data['bids']=$this->home->number_of_bids($id);
		$this->db->where('PID',$id);  
		$query=$this->db->get('scriptolutionprojects');  
		$data['result']=$query->result_array(); /*time open close*/

		

/*			$this->db->select('*');
			$this->db->from('scriptolutionprojectbids');
			$this->db->join('members', 'scriptolutionprojectbids.USERID = members.USERID');
			 $this->db->where('scriptolutionprojectbids.PID', $id);*/


		
			
        

		$config['base_url'] = site_url('Single_project_details/view/'.$id.'/');
        $config['total_rows'] = $this->db->select('*')->from('scriptolutionprojectbids')->join('members', 'scriptolutionprojectbids.USERID = members.USERID')->where('scriptolutionprojectbids.PID', $id)->get()->num_rows();
        $config['per_page'] =  1;
        $config['num_links'] = 2;
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
        if ($this->uri->segment(4)) {
            $data['segment'] = $this->uri->segment(4);
        } else {
            $data['segment'] = 0;
        }

        $this->pagination->initialize($config);


        	$query = $this->db->select('*')->from('scriptolutionprojectbids')->join('members', 'scriptolutionprojectbids.USERID = members.USERID')->where('scriptolutionprojectbids.PID', $id)->limit($config['per_page'], $data['segment'])->order_by('PID','asc')->get();

        	$data['proposal3'] = $query->result_array();


		$this->load->view('inc/header');
		$this->load->view('inc/navbar');
		$this->load->view('single-project-details',$data);
		$this->load->view('inc/footer');

	}
	
	
	
}
