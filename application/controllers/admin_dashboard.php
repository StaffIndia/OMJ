<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');
class Admin_dashboard extends CI_Controller{
    public function __construct(){
        parent::__construct();
        
//        if(!$this->session->userdata('aID')){
//             redirect('Admin');
//        }
//        
        $this->load->model('model_adminsignin');
        
    }
    public function index(){
           $this->load->view('admin/admin_header');
           $this->load->view('view_admindash');
           $this->load->view('admin/admin_footer');
       
    }
}
?>