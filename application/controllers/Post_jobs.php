<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_jobs extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	
	
	
	
		$this->form_validation->set_rules('proname', 'Project name', 'required');
		// $this->form_validation->set_rules('scriptolutionfreelancerskills', 'Skills', 'thisisnot');
		$this->form_validation->set_rules('minbudget', 'Minimum budget', 'required|numeric');
		$this->form_validation->set_rules('maxbudget', 'Maximum budget', 'required|numeric|callback_check_greater');
		$this->form_validation->set_rules('describepro', 'Description', 'required');
		$this->form_validation->set_rules('produration', 'Project Duration', 'required|numeric');
		$this->form_validation->set_rules('experience', 'Project Experinece', 'required');
	
	
		$this->form_validation->set_message('thisisnot', 'Skill Required');
		
		
	
	
			 if ($this->form_validation->run() == FALSE)
                {
				
						
						//Feteching Data Dynamically For Category//
						
						$this->load->model('category');
						$data['categories']=$this->category->get_categories();
						
						$this->load->model('Skill');
						$data['skills']=$this->Skill->get_all_skills();
							
						$array=$this->input->post('scriptolutionfreelancerskills');
						if(!empty($array)){
						$array=array_unique($array);
						}
						
						
						$data['this_value']=$array;
                        $this->load->view('inc/header');
						$this->load->view('inc/navbar');
						$this->load->view('post-a-job',$data);
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
					 
					 $data['time_added ']=time();
					 $data['date_added ']=date('Y-m-d');
					 $data['USERID ']=$this->session->userdata('userid');

					
					$this->db->insert('scriptolutionprojects',$data);
					
					$msg='<div class="alert alert-success">Your Job Added Successfully!</div>';
					
					$this->session->set_flashdata('message',$msg);
					
					
					  redirect('post_jobs');
					
                        
                }
			
			
			
		
	}
	
		public function check_greater($str){
		
		$test=$this->input->post('minbudget');
		
		if($test>$str){
		$this->form_validation->set_message('check_greater', 'The %s field should Greater than Minimum Budget');
		return false;
		}else{
		return true;
		}
		
		}
		
	
		
	
	
}
