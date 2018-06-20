<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class skill_insert extends CI_Controller {



	public function index(){

	if (isset($_POST['submit'])) {

		$this->form_validation->set_rules('scriptolutionskill', 'scriptolutionskill', 'required|is_unique[categories.name]');
		$this->form_validation->set_rules('scriptolutionseo', 'scriptolutionseo', 'required|is_unique[categories.seo]');


			 if ($this->form_validation->run() == FALSE)
	                { 

                	$this->load->model('Category');
					$data['categories']=$this->Category->get_categories();

					
	                	    $this->load->view('inc/header');
							$this->load->view('inc/navbar');
							$this->load->view('skill-insert',$data);
							$this->load->view('inc/footer');
	                }
             
             else{
                	$data['scriptolutionparent']=$this->input->post('category');
					$data['scriptolutionskill']=$this->input->post('scriptolutionskill');
					$data['scriptolutionseo']=$this->input->post('scriptolutionseo');

		$this->load->model('Category');
		$this->Category->skill_insert($data);

		$msg='<div class="alert alert-success">skill Added Successfully!</div>';
					
		$this->session->set_flashdata('message',$msg);
					
		  redirect('skill_insert');


			} //end of else
}	//end of first if condition

				else{		$this->load->model('Category');
							$data['categories']=$this->Category->get_categories();
							$this->load->view('inc/header');
							$this->load->view('inc/navbar');
							$this->load->view('skill-insert', $data);
							$this->load->view('inc/footer');
				}
		

		
	} //end of function

	
}
