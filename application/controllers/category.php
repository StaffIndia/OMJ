<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class category extends CI_Controller {



	public function index(){

				$this->load->model('Categorymanage');
				$data['categories']=$this->Categorymanage->get_categories();

				$this->load->view('inc/header');
				$this->load->view('inc/navbar');
				$this->load->view('category/index', $data);
				$this->load->view('inc/footer');
		

		
	} //end of function


public function create(){

	if (isset($_POST['submit'])) {

		
		$this->form_validation->set_rules('name', 'name', 'required|is_unique[categories.name]');
		$this->form_validation->set_rules('seo', 'seo', 'required|is_unique[categories.seo]');


			 if ($this->form_validation->run() == FALSE)
	                { 
	                	    $this->load->view('inc/header');
							$this->load->view('inc/navbar');
							$this->load->view('category/create');
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
						 redirect('Category/create');
						
					 } 

						 else {
						  $avatar = $this->upload->data();
						  $avatar_name = $avatar['file_name'];
						  
						  $data['scriptolution_catimage']=$avatar_name;
						 }
				 
	}



		$this->load->model('Categorymanage');
		$this->Categorymanage->category_insert($data);

		$msg='<div class="alert alert-success">Category Added Successfully!</div>';
					
		$this->session->set_flashdata('message',$msg);
					
		  redirect('Category/create');


			} //end of else
}	//end of first if condition

				else{
							$this->load->view('inc/header');
							$this->load->view('inc/navbar');
							$this->load->view('category/create');
							$this->load->view('inc/footer');
				}
		

		
	} //end of function



	public function edit($id){

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('seo', 'seo', 'required');
		
			
		
	if ($this->form_validation->run() == FALSE)
                {
				

				        $this->db->where('CATID', $id);
				        $this->db->order_by('name', 'asc');
						$query=$this->db->get('categories');
						$data['categories'] = $query->result_array();

						$this->load->view('inc/header');
						$this->load->view('inc/navbar');
						$this->load->view('category/edit',$data);
						$this->load->view('inc/footer');
                }
                else
                {
				

					$data['name']=$this->input->post('name');
					$data['seo']=$this->input->post('seo');
					
					
					if($_FILES && $_FILES['avatar']['name']){

					  $config['upload_path'] = './img';
					  $config['allowed_types'] = 'gif|jpg|png';
					  $config['max_size'] = 1000;
					  $this->load->library('upload', $config);

					   if (!$this->upload->do_upload('avatar')) {
					   
					   $msg1=$this->upload->display_errors();
					   
					   $msg2=' <div class="alert alert-danger">'.$msg1.'</div>';
						 $this->session->set_flashdata('message',$msg2 );
						 redirect('Category/index');
						
					 } 

						 else {
						  $avatar = $this->upload->data();
						  $avatar_name = $avatar['file_name'];
						  
						  $data['scriptolution_catimage']=$avatar_name;
						 }
				 
						}
					//$this->load->model('Categorymanage');
					$this->db->where('CATID', $id);
					$this->db->update('categories',$data);

				$msg='<div class="alert alert-success">Category Added Successfully!</div>';
					
				$this->session->set_flashdata('message',$msg);
					
		  			redirect('Category/index');

					
                        
                }
		
		
		
	
	}


	 public function delete_cat($id)
	{
		
	   $this->load->model('Categorymanage');
	   $this->Categorymanage->row_delete($id);
	   redirect('category/index');  
	}


	   public function search_category()
    {	

    	$this->load->model('Categorymanage');
        $keyword    =   $this->input->post('keyword');
        $data['categories']  = $this->Categorymanage->search($keyword);

		$this->load->view('inc/header');
		$this->load->view('inc/navbar');
		$this->load->view('category/index', $data);
		$this->load->view('inc/footer');
    }

	
}
