<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Browse_categories extends CI_Controller {

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
	
		$this->load->model('Category');
		$this->load->model('Skill');
		$data['categories']=$this->Category->get_categories();
		$data['skillscriptolution']=$this->Skill->get_all_skills();

		$this->load->view('inc/header');
		$this->load->view('inc/navbar');
		$this->load->view('browse-categories', $data);
		$this->load->view('inc/footer_top', $data);
		$this->load->view('inc/footer');
		
	
	}
}
