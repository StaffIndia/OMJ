<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skill extends CI_Controller {



	public function index(){

				$this->load->model('Skillmanage');
				$data['skills']=$this->Skillmanage->get_skill();

				$this->load->view('inc/header');
				$this->load->view('inc/navbar');
				$this->load->view('skill/index', $data);
				$this->load->view('inc/footer');
				
	} //end of function


public function create(){

	if (isset($_POST['submit'])) {

		$this->form_validation->set_rules('scriptolutionskill', 'scriptolutionskill', 'required|is_unique[categories.name]');
		$this->form_validation->set_rules('scriptolutionseo', 'scriptolutionseo', 'required|is_unique[categories.seo]');


			 if ($this->form_validation->run() == FALSE)
	                { 

                	$this->load->model('Categorymanage');
					$data['categories']=$this->Categorymanage->get_categories();

					
	                	    $this->load->view('inc/header');
							$this->load->view('inc/navbar');
							$this->load->view('skill/create',$data);
							$this->load->view('inc/footer');
	                }
             
             else{
                	$data['scriptolutionparent']=$this->input->post('category');
					$data['scriptolutionskill']=$this->input->post('scriptolutionskill');
					$data['scriptolutionseo']=$this->input->post('scriptolutionseo');

		$this->load->model('Categorymanage');
		$this->Categorymanage->skill_insert($data);

		$msg='<div class="alert alert-success">skill Added Successfully!</div>';
					
		$this->session->set_flashdata('message',$msg);
					
		  redirect('Skill/create');


			} //end of else
}	//end of first if condition

				else{		$this->load->model('Categorymanage');
							$data['categories']=$this->Categorymanage->get_categories();
							$this->load->view('inc/header');
							$this->load->view('inc/navbar');
							$this->load->view('skill-insert', $data);
							$this->load->view('inc/footer');
				}
		

		
	} //end of function
		



	public function edit($id){

		$this->form_validation->set_rules('scriptolutionskill', 'scriptolutionskill', 'required|is_unique[categories.name]');
		$this->form_validation->set_rules('scriptolutionseo', 'scriptolutionseo', 'required|is_unique[categories.seo]');
		
			
		
	if ($this->form_validation->run() == FALSE)
                {
 
                    

                	$this->load->model('Categorymanage');
					$data['categories']=$this->Categorymanage->get_categories();
				

				        $this->db->where('SCRIPTOLUTIONSKID', $id);
				        $this->db->order_by('scriptolutionskill', 'asc');
						$query=$this->db->get('skillscriptolution');
						$data['skills'] = $query->result_array();

						$this->load->view('inc/header');
						$this->load->view('inc/navbar');
						$this->load->view('skill/edit',$data);
						$this->load->view('inc/footer');
                }
                else
                {
					
                	$data['scriptolutionparent']=$this->input->post('category');
					$data['scriptolutionskill']=$this->input->post('scriptolutionskill');
					$data['scriptolutionseo']=$this->input->post('scriptolutionseo');

					$this->db->where('SCRIPTOLUTIONSKID', $id);
					$this->db->update('skillscriptolution',$data);

				$msg='<div class="alert alert-success">skill updated Successfully!</div>';
					
				$this->session->set_flashdata('message',$msg);
					
		  			redirect('Skill/index');

					
                        
                }	
	
	}


	 public function delete($id)
	{
		
	   $this->load->model('Skillmanage');
	   $this->Skillmanage->row_delete($id);
	   redirect('Skill/index');  
	}


	   public function search()
    {	

    	$this->load->model('Skillmanage');
        $keyword    =   $this->input->post('keyword');
        $data['skills']    =   $this->Skillmanage->search($keyword);

		$this->load->view('inc/header');
		$this->load->view('inc/navbar');
		$this->load->view('skill/index', $data);
		$this->load->view('inc/footer');
    }

	
}
