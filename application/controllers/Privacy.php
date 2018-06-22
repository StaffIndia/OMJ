<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privacy extends CI_Controller {


	public function index()
	{
		
		
		$this->load->view('inc/header');

		$this->load->view('inc/navbar');

		$this->load->view('Privacy-policy');

		$this->load->view('inc/footer');
		
	
	}
}
