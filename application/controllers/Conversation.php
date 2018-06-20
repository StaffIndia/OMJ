<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conversation extends CI_Controller {

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
		
		
	}
	public function user($id){
	
					
					
					
		$this->form_validation->set_rules('message', 'Message', 'required');
		
	if ($this->form_validation->run() == FALSE)
                {
				
					$sdata['id']=$id;
					$userid=$this->session->userdata('userid');
					
			
					$query1=$this->db->select('*,a.fullname as auser,b.fullname buser,b.profilepicture as bpic,inbox.time as mtime');
					$query1=$this->db->from('inbox');
					$query1=$this->db->join('members a', 'a.USERID = inbox.MSGTO');
					$query1=$this->db->join('members b', 'b.USERID = inbox.MSGFROM');
					$query1=$this->db->join('files', 'files.FID = inbox.FID','left');
					$query1=$this->db->where('MSGTO = '.$id.' AND MSGFROM='.$userid.'');
					$query1=$this->db->or_where('MSGTO = '.$userid.' AND MSGFROM='.$id.'');
					$query1=$this->db->order_by('MID','desc');
					$query1=$this->db->get()->num_rows();
					
			
					
					$this->load->library('pagination');
					$config['base_url'] = site_url('conversation/user/'.$id.'/');
					 $config['total_rows'] = $query1;
					 $config['per_page'] = 10;
					 $config['num_links'] = 5;
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
					
					$this->pagination->initialize($config);
						
						
					 if ($this->uri->segment(4)) {
					 $data['segment'] = $this->uri->segment(4);
					 } else {
					 $data['segment'] = 0;
					 }
					
					
					$query =$this->db->select('*,inbox.MID as MSID, a.fullname as auser,b.fullname buser,b.profilepicture as bpic,inbox.time as mtime');
					$query =$this->db->from('inbox');
					$query =$this->db->join('members a', 'a.USERID = inbox.MSGTO');
					$query =$this->db->join('members b', 'b.USERID = inbox.MSGFROM');
					$query =$this->db->join('files', 'files.FID = inbox.FID','left');
					$query1=$this->db->join('inbox_reports', 'inbox_reports.MID = inbox.MID','left');
					$query =$this->db->where('MSGTO = '.$id.' AND MSGFROM='.$userid.'');
					$query =$this->db->or_where('MSGTO = '.$userid.' AND MSGFROM='.$id.'');
					
					$query = $this->db->limit($config['per_page'], $data['segment'])->order_by('inbox.MID','desc')->get();

					$sdata['result']=$query->result_array();
					
					
					
				
					
					$this->load->view('inc/header');
					$this->load->view('inc/navbar');
					$this->load->view('conversation',$sdata);
					$this->load->view('inc/footer');
                }
                else
                {
				
					$data['message']=$this->input->post('message');
					
					if($_FILES && $_FILES['avatar']['name']){
					//user select file

					  $config['upload_path'] = './user_file';
					  $config['allowed_types'] = '*';
					  $config['max_size'] = 1000;
					  $this->load->library('upload', $config);
					   if (!$this->upload->do_upload('avatar')) {
					   
					   $msg1=$this->upload->display_errors();
					   
					   $msg2=' <div class="alert alert-danger">'.$msg1.'</div>';
						 $this->session->set_flashdata('message',$msg2 );
						redirect('conversation/user/'.$id.'');
						
					 } else {
					  $avatar = $this->upload->data();
					  $avatar_name = $avatar['file_name'];
					  
					  $fdata['fname']=$avatar_name;
					  $fdata['time']=time();
					  $fdata['ip']=$this->input->ip_address;
					  
					  $this->db->insert('files',$fdata);
					  
					  $data['FID']= $this->db->insert_id();
					  
					 }
					 
					 }
					  $data['time']=time();
					  $data['MSGTO']=$id;
					  $data['MSGFROM']=$this->session->userdata('userid');
					$this->db->insert('inbox',$data);
					 
						$msg2=' <div class="alert alert-success">Message Sent</div>';
						 $this->session->set_flashdata('message',$msg2 );
					   redirect('conversation/user/'.$id.'');
					
                        
                }
	
	}
	
	public function report(){
	
	$mid= $this->uri->segment(3);
		
		$query=$this->db->where('MID',$mid)->get('inbox_reports')->num_rows();
		
		if($query>=1){
		
		
					$id= $this->uri->segment(4);
					$msg2=' <div class="alert alert-warning">Already Reported</div>';
					$this->session->set_flashdata('message',$msg2 );
					redirect('conversation/user/'.$id.'');
		
		}else{
		
		$data['USERID']=$this->session->userdata('userid');
		$data['MID']=$mid;
		$data['time']=time();
		
		$this->db->insert('inbox_reports',$data);
		
					$id= $this->uri->segment(4);
					$msg2=' <div class="alert alert-danger">Reported Successfully</div>';
					$this->session->set_flashdata('message',$msg2 );
					redirect('conversation/user/'.$id.'');
		
		
		}
		
	
	
	}
	
}
