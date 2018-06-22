<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Browse_freelancers extends CI_Controller {

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
		
		$this->load->library('pagination');
		
		
		
		if(!empty($_GET['freeusername'])){
		
		$query=$this->db->LIKE('fullname',$_GET['freeusername'],'both');
	
		}
		
		if(!empty($_GET['skill1'])){
		
		$query=$this->db->where('scriptolutionsk1',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk2',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk3',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk4',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk5',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk6',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk7',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk8',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk9',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk10',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk11',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk12',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk13',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk14',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk15',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk16',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk17',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk18',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk19',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk20',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk21',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk22',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk23',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk24',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk25',$_GET['skill1']);
	
		}
		
		if(!empty($_GET['skill2'])){
		
		$query=$this->db->where('scriptolutionsk1',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk2',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk3',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk4',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk5',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk6',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk7',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk8',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk9',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk10',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk11',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk12',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk13',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk14',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk15',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk16',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk17',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk18',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk19',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk20',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk21',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk22',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk23',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk24',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk25',$_GET['skill2']);
	
		}
		
		
		if(!empty($_GET['skill2'])){
		
		$query=$this->db->where('scriptolutionsk1',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk2',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk3',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk4',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk5',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk6',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk7',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk8',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk9',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk10',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk11',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk12',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk13',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk14',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk15',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk16',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk17',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk18',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk19',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk20',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk21',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk22',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk23',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk24',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk25',$_GET['skill3']);
	
		}
		
		if(!empty($_GET['country'])){
		
		$query=$this->db->where('country',$_GET['country']);
		
		}

		
		
		
		$this->db->where('scriptolution1',2);
		
		$config['suffix']="?". http_build_query($_GET, '', "&");
		$config['base_url'] = site_url('browse_freelancers/index');
		$config['total_rows'] = $this->db->get('members')->num_rows();
		$config['per_page'] = 6;
		$config['num_links'] = 5;
		$config['full_tag_open'] = '<ul class="">';
		$config['full_tag_close'] = '</ul>';
		$config['cur_tag_open'] = '<li class="active"><a href="/">';
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
		
		
		
		
		/*For Fatching Data with Get method user*/
		
		if(!empty($_GET['freeusername'])){
		
		$query=$this->db->LIKE('fullname',$_GET['freeusername'],'both');
	
		}
		
		if(!empty($_GET['skill1'])){
		
		$query=$this->db->where('scriptolutionsk1',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk2',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk3',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk4',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk5',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk6',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk7',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk8',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk9',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk10',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk11',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk12',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk13',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk14',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk15',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk16',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk17',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk18',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk19',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk20',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk21',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk22',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk23',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk24',$_GET['skill1']);
		$query=$this->db->or_where('scriptolutionsk25',$_GET['skill1']);
	
		}
		
		if(!empty($_GET['skill2'])){
		
		$query=$this->db->where('scriptolutionsk1',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk2',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk3',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk4',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk5',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk6',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk7',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk8',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk9',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk10',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk11',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk12',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk13',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk14',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk15',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk16',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk17',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk18',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk19',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk20',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk21',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk22',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk23',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk24',$_GET['skill2']);
		$query=$this->db->or_where('scriptolutionsk25',$_GET['skill2']);
	
		}
		
		
		if(!empty($_GET['skill2'])){
		
		$query=$this->db->where('scriptolutionsk1',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk2',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk3',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk4',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk5',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk6',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk7',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk8',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk9',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk10',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk11',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk12',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk13',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk14',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk15',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk16',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk17',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk18',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk19',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk20',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk21',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk22',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk23',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk24',$_GET['skill3']);
		$query=$this->db->or_where('scriptolutionsk25',$_GET['skill3']);
	
		}
		
		if(!empty($_GET['country'])){
		
		$query=$this->db->where('country',$_GET['country']);
		
		}
		
		$this->db->where('scriptolution1',2);
		
		
		$query = $this->db->limit($config['per_page'], $data['segment'])->order_by('USERID','desc')->get('members');

		$data['results']=$query->result_array();
		
		$this->load->model('country');
		$data['country']=$this->country->get_country();
		
		$this->load->model('skill');
		$data['skill']=$this->skill->get_all_skills();
		
		$this->load->view('inc/header');
		$this->load->view('inc/navbar');
		$this->load->view('browse-freelancers',$data);
		$this->load->view('inc/footer');
		
	
	}
}
