<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Browse_project extends CI_Controller {

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
		
		
		
		/* Fetching Data for pagination according to Filter */
		if(!empty($_GET['minamount'])&&!empty($_GET['minamount'])&&!empty($_GET['pronamefilter'])&&!empty($_GET['category'])&&!empty($_GET['skill1'])&&!empty($_GET['skill2'])&&!empty($_GET['skill3'])&&!empty($_GET['delivery'])){
		
		$this->db->where('scriptolutionfreemin>=',$_GET['minamount']);
		$this->db->where('scriptolutionfreemax<=',$_GET['maxamount']);
		$this->db->where('category',$_GET['category']);
		$this->db->where('scriptolutionfreelancerdays>=',$_GET['delivery']);
		$this->db->like('scriptolutionfreelancertitle',$_GET['pronamefilter'],'both');
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill1'],'both');
		$query=$this->db->or_like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		$query=$this->db->or_like('scriptolutionfreelancerskills',$_GET['skill3'],'both');
		
		
		}else if(!empty($_GET['minamount'])&&!empty($_GET['minamount'])&&!empty($_GET['pronamefilter'])&&!empty($_GET['category'])&&!empty($_GET['skill1'])&&!empty($_GET['skill2'])&&!empty($_GET['skill3'])&&!empty($_GET['delivery'])){
		
		$this->db->where('scriptolutionfreemin>=',$_GET['minamount']);
		$this->db->where('scriptolutionfreemax<=',$_GET['maxamount']);
		$this->db->where('category',$_GET['category']);
		$this->db->like('scriptolutionfreelancertitle',$_GET['pronamefilter'],'both');
			$this->db->where('scriptolutionfreelancerdays>=',$_GET['delivery']);
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill1'],'both');
		$query=$this->db->or_like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		$query=$this->db->or_like('scriptolutionfreelancerskills',$_GET['skill3'],'both');
		
		
		}else if(!empty($_GET['minamount'])&&!empty($_GET['minamount'])&&!empty($_GET['pronamefilter'])&&!empty($_GET['category'])&&!empty($_GET['skill1'])&&!empty($_GET['skill2'])&&!empty($_GET['delivery'])){
		
		$this->db->where('scriptolutionfreemin>=',$_GET['minamount']);
		$this->db->where('scriptolutionfreemax<=',$_GET['maxamount']);
		$this->db->where('category',$_GET['category']);
			$this->db->where('scriptolutionfreelancerdays>=',$_GET['delivery']);
		$this->db->like('scriptolutionfreelancertitle',$_GET['pronamefilter'],'both');
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill1'],'both');
		$query=$this->db->and_like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		
		
		}else if(!empty($_GET['minamount'])&&!empty($_GET['minamount'])&&!empty($_GET['pronamefilter'])&&!empty($_GET['category'])&&!empty($_GET['skill1'])&&!empty($_GET['delivery'])){
		
		$this->db->where('scriptolutionfreemin>=',$_GET['minamount']);
		$this->db->where('scriptolutionfreemax<=',$_GET['maxamount']);
			$this->db->where('scriptolutionfreelancerdays>=',$_GET['delivery']);
		$this->db->where('category',$_GET['category']);
		$this->db->like('scriptolutionfreelancertitle',$_GET['pronamefilter'],'both');
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill1'],'both');
		
		
		}else if(!empty($_GET['minamount'])&&!empty($_GET['minamount'])&&!empty($_GET['pronamefilter'])&&!empty($_GET['category'])&&!empty($_GET['skill1'])&&!empty($_GET['skill2'])&&!empty($_GET['skill3'])){
		
		$this->db->where('scriptolutionfreemin>=',$_GET['minamount']);
		$this->db->where('scriptolutionfreemax<=',$_GET['maxamount']);
		$this->db->where('category',$_GET['category']);
		$this->db->like('scriptolutionfreelancertitle',$_GET['pronamefilter'],'both');
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill1'],'both');
		$query=$this->db->or_like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		$query=$this->db->or_like('scriptolutionfreelancerskills',$_GET['skill3'],'both');
		
		
		}else if(!empty($_GET['minamount'])&&!empty($_GET['minamount'])&&!empty($_GET['pronamefilter'])&&!empty($_GET['category'])&&!empty($_GET['skill1'])&&!empty($_GET['skill2'])){
		
		$this->db->where('scriptolutionfreemin>=',$_GET['minamount']);
		$this->db->where('scriptolutionfreemax<=',$_GET['maxamount']);
		$this->db->where('category',$_GET['category']);
		$this->db->like('scriptolutionfreelancertitle',$_GET['pronamefilter'],'both');
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill1'],'both');
		$query=$this->db->and_like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		
		
		}else if(!empty($_GET['minamount'])&&!empty($_GET['minamount'])&&!empty($_GET['pronamefilter'])&&!empty($_GET['category'])&&!empty($_GET['skill1'])){
		
		$this->db->where('scriptolutionfreemin>=',$_GET['minamount']);
		$this->db->where('scriptolutionfreemax<=',$_GET['maxamount']);
		$this->db->where('category',$_GET['category']);
		$this->db->like('scriptolutionfreelancertitle',$_GET['pronamefilter'],'both');
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill1'],'both');
		
		
		}else if(!empty($_GET['minamount'])&&!empty($_GET['minamount'])&&!empty($_GET['pronamefilter'])&&!empty($_GET['category'])){
		
		$this->db->where('scriptolutionfreemin>=',$_GET['minamount']);
		$this->db->where('scriptolutionfreemax<=',$_GET['maxamount']);
		$this->db->where('category',$_GET['category']);
		$this->db->like('scriptolutionfreelancertitle',$_GET['pronamefilter'],'both');
		
		}else if(!empty($_GET['minamount'])&&!empty($_GET['minamount'])&&!empty($_GET['pronamefilter'])){
		
		$query=$this->db->where('scriptolutionfreemin>=',$_GET['minamount']);
		$query=$this->db->where('scriptolutionfreemax<=',$_GET['maxamount']);
		$query=$this->db->like('scriptolutionfreelancertitle',$_GET['pronamefilter'],'both');
		
		}if(!empty($_GET['minamount'])&&!empty($_GET['minamount'])){
		
		$query=$this->db->where('scriptolutionfreemin>=',$_GET['minamount']);
		$query=$this->db->where('scriptolutionfreemax<=',$_GET['maxamount']);
		
		}else if(!empty($_GET['pronamefilter'])&&!empty($_GET['delivery'])){
		
		$query=$this->db->where('scriptolutionfreelancerdays>=',$_GET['delivery']);
		$query=$this->db->like('scriptolutionfreelancertitle',$_GET['pronamefilter'],'both');
		
		}else if(!empty($_GET['pronamefilter'])){
		
		$query=$this->db->like('scriptolutionfreelancertitle',$_GET['pronamefilter'],'both');
		
		}else if(!empty($_GET['skill1'])&&!empty($_GET['skill2'])){
		
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		$query=$this->db->or_like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		
		}else if(!empty($_GET['category'])&&!empty($_GET['skill1'])&&!empty($_GET['skill2'])&&!empty($_GET['skill3'])){
		$query=$this->db->where('category',$_GET['category']);
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		$query=$this->db->or_like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		$query=$this->db->or_like('scriptolutionfreelancerskills',$_GET['skill3'],'both');
		
		}else if(!empty($_GET['category'])&&!empty($_GET['skill1'])&&!empty($_GET['skill2'])){
		$query=$this->db->where('category',$_GET['category']);
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		$query=$this->db->or_like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		
		}else if(!empty($_GET['category'])&&!empty($_GET['skill1'])){
		$query=$this->db->where('category',$_GET['category']);
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		
		}else if(!empty($_GET['skill1'])&&!empty($_GET['skill2'])&&!empty($_GET['skill3'])){
		
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		$query=$this->db->or_like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		$query=$this->db->or_like('scriptolutionfreelancerskills',$_GET['skill3'],'both');
		
		}else if(!empty($_GET['skill1'])&&!empty($_GET['delivery'])){
		
		$query=$this->db->where('scriptolutionfreelancerdays>=',$_GET['delivery']);
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill1'],'both');
		
		}else if(!empty($_GET['skill1'])&&!empty($_GET['skill2'])){
		
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		$query=$this->db->or_like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		
		}else if(!empty($_GET['category'])){
		
		$query=$this->db->where('category',$_GET['category']);
		
		}else if(!empty($_GET['skill1'])){
		
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill1'],'both');
		
		}else if(!empty($_GET['skill2'])){
		
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		
		}else if(!empty($_GET['skill3'])){
		
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill3'],'both');
		
		}else if(!empty($_GET['delivery'])){
		
		$query=$this->db->where('scriptolutionfreelancerdays>=',$_GET['delivery']);
		
		}
		
		/* Fetching Data for result according to Filter */
		
		
		/* Fetching Data for pagination according to Filter */
		
		$config['suffix']="?". http_build_query($_GET, '', "&");
		$config['base_url'] = site_url('browse_project/index');
		$config['total_rows'] = $this->db->get('scriptolutionprojects')->num_rows();;
		$config['per_page'] = 5;
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
		
		
		
		/* Fetching Data for result according to Filter */
		
		if(!empty($_GET['minamount'])&&!empty($_GET['minamount'])&&!empty($_GET['pronamefilter'])&&!empty($_GET['category'])&&!empty($_GET['skill1'])&&!empty($_GET['skill2'])&&!empty($_GET['skill3'])&&!empty($_GET['delivery'])){
		
		$this->db->where('scriptolutionfreemin>=',$_GET['minamount']);
		$this->db->where('scriptolutionfreemax<=',$_GET['maxamount']);
		$this->db->where('category',$_GET['category']);
		$this->db->where('scriptolutionfreelancerdays>=',$_GET['delivery']);
		$this->db->like('scriptolutionfreelancertitle',$_GET['pronamefilter'],'both');
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill1'],'both');
		$query=$this->db->or_like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		$query=$this->db->or_like('scriptolutionfreelancerskills',$_GET['skill3'],'both');
		
		
		}else if(!empty($_GET['minamount'])&&!empty($_GET['minamount'])&&!empty($_GET['pronamefilter'])&&!empty($_GET['category'])&&!empty($_GET['skill1'])&&!empty($_GET['skill2'])&&!empty($_GET['skill3'])&&!empty($_GET['delivery'])){
		
		$this->db->where('scriptolutionfreemin>=',$_GET['minamount']);
		$this->db->where('scriptolutionfreemax<=',$_GET['maxamount']);
		$this->db->where('category',$_GET['category']);
		$this->db->like('scriptolutionfreelancertitle',$_GET['pronamefilter'],'both');
			$this->db->where('scriptolutionfreelancerdays>=',$_GET['delivery']);
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill1'],'both');
		$query=$this->db->or_like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		$query=$this->db->or_like('scriptolutionfreelancerskills',$_GET['skill3'],'both');
		
		
		}else if(!empty($_GET['minamount'])&&!empty($_GET['minamount'])&&!empty($_GET['pronamefilter'])&&!empty($_GET['category'])&&!empty($_GET['skill1'])&&!empty($_GET['skill2'])&&!empty($_GET['delivery'])){
		
		$this->db->where('scriptolutionfreemin>=',$_GET['minamount']);
		$this->db->where('scriptolutionfreemax<=',$_GET['maxamount']);
		$this->db->where('category',$_GET['category']);
			$this->db->where('scriptolutionfreelancerdays>=',$_GET['delivery']);
		$this->db->like('scriptolutionfreelancertitle',$_GET['pronamefilter'],'both');
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill1'],'both');
		$query=$this->db->and_like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		
		
		}else if(!empty($_GET['minamount'])&&!empty($_GET['minamount'])&&!empty($_GET['pronamefilter'])&&!empty($_GET['category'])&&!empty($_GET['skill1'])&&!empty($_GET['delivery'])){
		
		$this->db->where('scriptolutionfreemin>=',$_GET['minamount']);
		$this->db->where('scriptolutionfreemax<=',$_GET['maxamount']);
			$this->db->where('scriptolutionfreelancerdays>=',$_GET['delivery']);
		$this->db->where('category',$_GET['category']);
		$this->db->like('scriptolutionfreelancertitle',$_GET['pronamefilter'],'both');
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill1'],'both');
		
		
		}else if(!empty($_GET['minamount'])&&!empty($_GET['minamount'])&&!empty($_GET['pronamefilter'])&&!empty($_GET['category'])&&!empty($_GET['skill1'])&&!empty($_GET['skill2'])&&!empty($_GET['skill3'])){
		
		$this->db->where('scriptolutionfreemin>=',$_GET['minamount']);
		$this->db->where('scriptolutionfreemax<=',$_GET['maxamount']);
		$this->db->where('category',$_GET['category']);
		$this->db->like('scriptolutionfreelancertitle',$_GET['pronamefilter'],'both');
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill1'],'both');
		$query=$this->db->or_like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		$query=$this->db->or_like('scriptolutionfreelancerskills',$_GET['skill3'],'both');
		
		
		}else if(!empty($_GET['minamount'])&&!empty($_GET['minamount'])&&!empty($_GET['pronamefilter'])&&!empty($_GET['category'])&&!empty($_GET['skill1'])&&!empty($_GET['skill2'])){
		
		$this->db->where('scriptolutionfreemin>=',$_GET['minamount']);
		$this->db->where('scriptolutionfreemax<=',$_GET['maxamount']);
		$this->db->where('category',$_GET['category']);
		$this->db->like('scriptolutionfreelancertitle',$_GET['pronamefilter'],'both');
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill1'],'both');
		$query=$this->db->and_like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		
		
		}else if(!empty($_GET['minamount'])&&!empty($_GET['minamount'])&&!empty($_GET['pronamefilter'])&&!empty($_GET['category'])&&!empty($_GET['skill1'])){
		
		$this->db->where('scriptolutionfreemin>=',$_GET['minamount']);
		$this->db->where('scriptolutionfreemax<=',$_GET['maxamount']);
		$this->db->where('category',$_GET['category']);
		$this->db->like('scriptolutionfreelancertitle',$_GET['pronamefilter'],'both');
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill1'],'both');
		
		
		}else if(!empty($_GET['minamount'])&&!empty($_GET['minamount'])&&!empty($_GET['pronamefilter'])&&!empty($_GET['category'])){
		
		$this->db->where('scriptolutionfreemin>=',$_GET['minamount']);
		$this->db->where('scriptolutionfreemax<=',$_GET['maxamount']);
		$this->db->where('category',$_GET['category']);
		$this->db->like('scriptolutionfreelancertitle',$_GET['pronamefilter'],'both');
		
		}else if(!empty($_GET['minamount'])&&!empty($_GET['minamount'])&&!empty($_GET['pronamefilter'])){
		
		$query=$this->db->where('scriptolutionfreemin>=',$_GET['minamount']);
		$query=$this->db->where('scriptolutionfreemax<=',$_GET['maxamount']);
		$query=$this->db->like('scriptolutionfreelancertitle',$_GET['pronamefilter'],'both');
		
		}if(!empty($_GET['minamount'])&&!empty($_GET['minamount'])){
		
		$query=$this->db->where('scriptolutionfreemin>=',$_GET['minamount']);
		$query=$this->db->where('scriptolutionfreemax<=',$_GET['maxamount']);
		
		}else if(!empty($_GET['pronamefilter'])&&!empty($_GET['delivery'])){
		
		$query=$this->db->where('scriptolutionfreelancerdays>=',$_GET['delivery']);
		$query=$this->db->like('scriptolutionfreelancertitle',$_GET['pronamefilter'],'both');
		
		}else if(!empty($_GET['pronamefilter'])){
		
		$query=$this->db->like('scriptolutionfreelancertitle',$_GET['pronamefilter'],'both');
		
		}else if(!empty($_GET['skill1'])&&!empty($_GET['skill2'])){
		
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		$query=$this->db->or_like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		
		}else if(!empty($_GET['category'])&&!empty($_GET['skill1'])&&!empty($_GET['skill2'])&&!empty($_GET['skill3'])){
		$query=$this->db->where('category',$_GET['category']);
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		$query=$this->db->or_like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		$query=$this->db->or_like('scriptolutionfreelancerskills',$_GET['skill3'],'both');
		
		}else if(!empty($_GET['category'])&&!empty($_GET['skill1'])&&!empty($_GET['skill2'])){
		$query=$this->db->where('category',$_GET['category']);
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		$query=$this->db->or_like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		
		}else if(!empty($_GET['category'])&&!empty($_GET['skill1'])){
		$query=$this->db->where('category',$_GET['category']);
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		
		}else if(!empty($_GET['skill1'])&&!empty($_GET['skill2'])&&!empty($_GET['skill3'])){
		
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		$query=$this->db->or_like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		$query=$this->db->or_like('scriptolutionfreelancerskills',$_GET['skill3'],'both');
		
		}else if(!empty($_GET['skill1'])&&!empty($_GET['delivery'])){
		
		$query=$this->db->where('scriptolutionfreelancerdays>=',$_GET['delivery']);
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill1'],'both');
		
		}else if(!empty($_GET['skill1'])&&!empty($_GET['skill2'])){
		
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		$query=$this->db->or_like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		
		}else if(!empty($_GET['category'])){
		
		$query=$this->db->where('category',$_GET['category']);
		
		}else if(!empty($_GET['skill1'])){
		
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill1'],'both');
		
		}else if(!empty($_GET['skill2'])){
		
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill2'],'both');
		
		}else if(!empty($_GET['skill3'])){
		
		$query=$this->db->like('scriptolutionfreelancerskills',$_GET['skill3'],'both');
		
		}else if(!empty($_GET['delivery'])){
		
		$query=$this->db->where('scriptolutionfreelancerdays>=',$_GET['delivery']);
		
		}
		
		/* Fetching Data for result according to Filter */
		
		if ($this->uri->segment(3)) {
		$data['segment'] = $this->uri->segment(3);
		} else {
		$data['segment'] = 0;
		}
		$this->pagination->initialize($config);

		$query = $this->db->limit($config['per_page'], $data['segment'])->order_by('PID','desc')->get('scriptolutionprojects');

		$data['results']=$query->result_array();
		
		
		$this->load->model('Categorymanage');
		$this->load->model('skill');
		
		$data['category']=$this->Categorymanage->get_categories();
		$data['skill']=$this->skill->get_all_skills();
		
		$this->load->view('inc/header');
		$this->load->view('inc/navbar');
		$this->load->view('browse-project',$data);
		$this->load->view('inc/footer');
		
	
	}
}
