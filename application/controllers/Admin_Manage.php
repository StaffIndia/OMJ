<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');
class Admin_Manage extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('model_managemem');
        
    }
    public function index(){
          
           $this->load->view('template/dash_header');
           $data['res']=$this->model_managemem->getMem(); 
       
           $this->load->view('view_manageadmin',$data);
           $this->load->view('template/dash_footer');
        
    }
}
?>