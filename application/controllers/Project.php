<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}


	public function index()
	{	

		$query=$this->load->library('pagination');

	if(!empty($_GET['title'])){
		
		$query=$this->db->LIKE('scriptolutionfreelancertitle',$_GET['title'],'both');
	}

	if(!empty($_GET['username'])){
		
		$query=$this->db->LIKE('username',$_GET['username'],'both');
	}



	if(!empty($_GET['from'])){
		
		$query=$this->db->where('scriptolutionprojects.PID >=', $_GET['from']);
	}

	if(!empty($_GET['to'])){
		
		$query=$this->db->where('scriptolutionprojects.PID <=', $_GET['to']);
	}

	if(!empty($_GET['checkbox'])){
		
		$query=$this->db->where('active', 1);
	}

		$query=$this->db->select('*')->from('scriptolutionprojects')->join('members', 'scriptolutionprojects.USERID = members.USERID')->where('active !=6')->order_by('PID', 'asc')->get();

		$data['result']=$query->result_array();

		$config['suffix']="?". http_build_query($_GET, '', "&");
		$config['base_url'] = site_url('Project/index/');
        $config['total_rows'] = $this->db->get('scriptolutionprojects')->num_rows();
        $config['per_page'] =  10;
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

	if(!empty($_GET['title'])){
		
		$query=$this->db->LIKE('scriptolutionfreelancertitle',$_GET['title'],'both');
	}

	if(!empty($_GET['username'])){
		
		$query=$this->db->LIKE('username',$_GET['username'],'both');
	}




		if(!empty($_GET['from'])){
		
		$query=$this->db->where('scriptolutionprojects.PID >=', $_GET['from']);
	}

	if(!empty($_GET['to'])){
		
		$query=$this->db->where('scriptolutionprojects.PID <=', $_GET['to']);
	}


		if(!empty($_GET['checkbox'])){
		
		$query=$this->db->where('active',1);
	}

        	$query = $this->db->limit($config['per_page'], $data['segment'])->select('*')->from('scriptolutionprojects')->join('members', 'scriptolutionprojects.USERID = members.USERID')->where('active !=6')->order_by('PID', 'asc')->get();

        	$data['result'] = $query->result_array();

		$this->load->view('admin/admin_header');
		$this->load->view('Project/index',$data);
		$this->load->view('admin/admin_footer');
	
		}



	public function create()
	{
	

		$this->form_validation->set_rules('proname', 'Project name', 'required');
		// $this->form_validation->set_rules('scriptolutionfreelancerskills', 'Skills', 'thisisnot');
		$this->form_validation->set_rules('minbudget', 'Minimum budget', 'required|numeric');
		$this->form_validation->set_rules('maxbudget', 'Maximum budget', 'required|numeric');
		$this->form_validation->set_rules('describepro', 'Description', 'required');
		$this->form_validation->set_rules('produration', 'Project Duration', 'required|numeric');
		$this->form_validation->set_rules('experience', 'Project Experinece', 'required');
	
	
		$this->form_validation->set_message('thisisnot', 'Skill Required');
		
		
	
	
			 if ($this->form_validation->run() == FALSE)
                {
				
						
						//Feteching Data Dynamically For Category//
						
						$this->load->model('Categorymanage');
						$data['categories']=$this->Categorymanage->get_categories();
						
						$this->load->model('Skill');
						$data['skills']=$this->Skill->get_all_skills();
							
						$array=$this->input->post('scriptolutionfreelancerskills');
						if(!empty($array)){
						$array=array_unique($array);
						}
						
						
						$data['this_value']=$array;
                        $this->load->view('inc/header');
						$this->load->view('inc/navbar');
						$this->load->view('Project/create',$data);
						$this->load->view('inc/footer');
                }
                else
                {
				
				
					
					$data['scriptolutionfreelancertitle']=$this->input->post('proname');
					$array=$this->input->post('scriptolutionfreelancerskills');
					$data['scriptolutionfreelancerskills']=implode(',', $array);
					$data['scriptolutionfreelancerdesc']=$this->input->post('describepro');
					$data['category']=$this->input->post('category');
					$data['scriptolutionfreelancerdays']=$this->input->post('produration');
					$data['scriptolutionfreemin']=$this->input->post('minbudget');
					$data['scriptolutionfreemax']=$this->input->post('maxbudget');
					$data['experience']=$this->input->post('experience');
					
					 // echo $data['scriptolutionfreelancerskills'];
					// $this->load->model('user');
					// $this->user->user_insert($data);
					
					if($_FILES && $_FILES['avatar']['name']){
					//user select file

					  $config['upload_path'] = './project_image';
					  $config['allowed_types'] = 'gif|jpg|png';
					  $config['max_size'] = 1000;
					  $this->load->library('upload', $config);
					   if (!$this->upload->do_upload('avatar')) {
					   
					   $msg1=$this->upload->display_errors();
					   
					   $msg2=' <div class="alert alert-danger">'.$msg1.'</div>';
						 $this->session->set_flashdata('message',$msg2 );
						 redirect('post_jobs');
						
					 } else {
					  $avatar = $this->upload->data();
					  $avatar_name = $avatar['file_name'];
					  
					  $data['p1']=$avatar_name;
					 }
					 
					 }

					$host= gethostname();
					$data['pip']=gethostbyname($host);
					 
					 $data['time_added ']=time();
					 $data['date_added ']=date('Y-m-d');
					 $data['USERID ']=$this->session->userdata('userid');

					
					$this->db->insert('scriptolutionprojects',$data);
					
					$msg='<div class="alert alert-success">Your Job Added Successfully!</div>';
					
					$this->session->set_flashdata('message',$msg);
					
					
					  redirect('Project/create');
					
                        
                }
			
			
			
		
	}


public function edit($id)
	{

	

	
		$this->form_validation->set_rules('proname', 'Project name', 'required');
		// $this->form_validation->set_rules('scriptolutionfreelancerskills', 'Skills', 'thisisnot');
		$this->form_validation->set_rules('minbudget', 'Minimum budget', 'required|numeric');
		$this->form_validation->set_rules('maxbudget', 'Maximum budget', 'required|numeric');
		$this->form_validation->set_rules('describepro', 'Description', 'required');
		$this->form_validation->set_rules('produration', 'Project Duration', 'required|numeric');

		
		
	
	
			 if ($this->form_validation->run() == FALSE)
                {
				
						
						//Feteching Data Dynamically For Category//
						
						$this->load->model('Categorymanage');
						$data['categories']=$this->Categorymanage->get_categories();
						
						$this->load->model('Skill');
						$data['skills']=$this->Skill->get_all_skills();
							
						$array=$this->input->post('scriptolutionfreelancerskills');
						if(!empty($array)){
						$array=array_unique($array);
						}

						$query=$this->db->select('*')->from('scriptolutionprojects')->join('members', 'scriptolutionprojects.USERID = members.USERID')->where("PID", $id)->get();
					$data['result']=$query->result_array();



						//$data['this_value']=$array;
                        $this->load->view('inc/header');
						$this->load->view('inc/navbar');
						$this->load->view('Project/edit',$data);
						$this->load->view('inc/footer');
                }
                else
                {
				
				
					
					$data['scriptolutionfreelancertitle']=$this->input->post('proname');
					$array=$this->input->post('scriptolutionfreelancerskills');
					$data['scriptolutionfreelancerskills']=implode(',', $array);
					$data['scriptolutionfreelancerdesc']=$this->input->post('describepro');
					$data['category']=$this->input->post('category');
					$data['scriptolutionfreelancerdays']=$this->input->post('produration');
					$data['scriptolutionfreemin']=$this->input->post('minbudget');
					$data['scriptolutionfreemax']=$this->input->post('maxbudget');
					$data['experience']=$this->input->post('experience');
					$data['active']=$this->input->post('status');
					
					 // echo $data['scriptolutionfreelancerskills'];
					// $this->load->model('user');
					// $this->user->user_insert($data);
					
					if($_FILES && $_FILES['avatar']['name']){
					//user select file

					  $config['upload_path'] = './project_image';
					  $config['allowed_types'] = 'gif|jpg|png';
					  $config['max_size'] = 1000;
					  $this->load->library('upload', $config);
					   if (!$this->upload->do_upload('avatar')) {
					   
					   $msg1=$this->upload->display_errors();
					   
					   $msg2=' <div class="alert alert-danger">'.$msg1.'</div>';
						 $this->session->set_flashdata('message',$msg2 );
						 redirect('post_jobs');
						
					 } else {
					  $avatar = $this->upload->data();
					  $avatar_name = $avatar['file_name'];
					  
					  $data['p1']=$avatar_name;
					 }
					 
					 }

					 $data['USERID ']=$this->session->userdata('userid');

					$this->db->where('PID', $id);
					$this->db->update('scriptolutionprojects',$data);
					
					$msg='<div class="alert alert-success">Your Job Added Successfully!</div>';
					
					$this->session->set_flashdata('message',$msg);
					
					
					  redirect('Project/index');
					
                        
                }
			
			
			
		
	}


	 public function delete_permanent($id)
	{
		
	   $this->load->model('Projectmanage');
	   $this->Projectmanage->row_delete($id);
	   redirect('Project/index');  
	}




	 public function delete($id)
	{
		$data = array(
               'active' =>6
            );

$this->db->where('PID', $id);
$this->db->update('scriptolutionprojects', $data);
	   redirect('Project/index');  
	}

	

		public function deletedproject()
	{
	
		$query=$this->db->select('*')->from('scriptolutionprojects')->join('members', 'scriptolutionprojects.USERID = members.USERID')->where('scriptolutionprojects.active', 3)->get();
		$data['result']=$query->result_array();

		$this->load->view('inc/header');
		$this->load->view('inc/navbar');
		$this->load->view('Project/deletedproject',$data);
		$this->load->view('inc/footer');
		
		
	}

	
	
	
}
