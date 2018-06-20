<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class category_insert extends CI_Controller {



	public function index(){

	if (isset($_POST['submit'])) {

		
		$this->form_validation->set_rules('name', 'name', 'required|is_unique[categories.name]');
		$this->form_validation->set_rules('seo', 'seo', 'required|is_unique[categories.seo]');


			 if ($this->form_validation->run() == FALSE)
	                { 
	                	    $this->load->view('inc/header');
							$this->load->view('inc/navbar');
							$this->load->view('category-insert');
							$this->load->view('inc/footer');
	                }
             
             else{
                


					$data['name']=$this->input->post('name');
					$data['seo']=$this->input->post('seo');

					if($_FILES && $_FILES['avatar']['name']){
								//user select file

					  $config['upload_path'] = './img';
					  $config['allowed_types'] = 'gif|jpg|png';
					  $config['max_size'] = 1000;
					  $this->load->library('upload', $config);

					   if (!$this->upload->do_upload('avatar')) {
					   
					   $msg1=$this->upload->display_errors();
					   
					   $msg2=' <div class="alert alert-danger">'.$msg1.'</div>';
						 $this->session->set_flashdata('message',$msg2 );
						 redirect('category_insert');
						
					 } 

						 else {
						  $avatar = $this->upload->data();
						  $avatar_name = $avatar['file_name'];
						  
						  $data['scriptolution_catimage']=$avatar_name;
						 }
				 
	}



		$this->load->model('Category');
		$this->Category->category_insert($data);

		$msg='<div class="alert alert-success">Category Added Successfully!</div>';
					
		$this->session->set_flashdata('message',$msg);
					
		  redirect('category_insert');


			} //end of else
}	//end of first if condition

				else{
							$this->load->view('inc/header');
							$this->load->view('inc/navbar');
							$this->load->view('category-insert');
							$this->load->view('inc/footer');
				}
		

		
	} //end of function

	
}
