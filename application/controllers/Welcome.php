<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->model('home');
		$this->load->model('Skill');
		$this->load->model('Model_Inbox');
		$data['categories']=$this->home->get_categories_home();
		$data['scriptolutionprojects']=$this->home->get_jobs();
		$skill['skillscriptolution']=$this->Skill->get_all_skills();
		$data['scriptolutionprojectbids']=$this->home->get_bids();
    
		if($this->session->userdata('userid')){
			$Userid =  $this->session->userdata('userid');

			$count = $this->Model_Inbox->getUnreadMsgCount();

			$this->session->set_userdata('unreadMsg',$count);
		}

		//echo $this->session->userdata('unreadMsg');

		//var_dump( $sql);
		
		
		$this->load->view('inc/header');

		$this->load->view('inc/navbar');



		$this->load->view('home',$data);
		$this->load->view('inc/footer_top', $skill);
		$this->load->view('inc/footer');
		
	
	}
}
