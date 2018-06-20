<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {


	public function index()
	{
	
		$query=$this->db->select('*')->from('scriptolutionprojects')->join('members', 'scriptolutionprojects.USERID = members.USERID')->get();
		$data['result']=$query->result_array();

		$this->load->view('inc/header');
		$this->load->view('inc/navbar');
		$this->load->view('Project/index',$data);
		$this->load->view('inc/footer');
		
		
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
               'active' =>3
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
