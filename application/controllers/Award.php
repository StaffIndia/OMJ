<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Award extends CI_Controller {

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
	
	public function project($id)
	{
	
						$data['time']=time();
						$data['MSGTO'] = $this->uri->segment(4);
						$data['PID']=$id;
						$data['MSGFROM']=$this->session->userdata('userid');
						$data['message']='Hi, I would Like to Add You on my Project.';
						$this->db->insert('inbox',$data);
						
						$odata['time_added']=time();
						$odata['SCRIPTOLUTIONLANCER'] = $this->uri->segment(4);
						$odata['PID']=$id;
						$odata['USERID']=$this->session->userdata('userid');
						$this->db->insert('orders',$odata);
						
						
						$pdata['active']='0';
						$this->db->where('PID',$id);
						$this->db->update('scriptolutionprojects',$pdata);
						
						$msg='<div class="alert alert-success">Your Job Awarded Successfully!</div>';
					
						$this->session->set_flashdata('message',$msg);
					
						redirect('Awarded_projects');
						
	
	}
	
}
