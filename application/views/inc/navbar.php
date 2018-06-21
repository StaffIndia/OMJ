<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if($this->session->userdata('user_type')) {
    
         $userType=$this->session->userdata('user_type');
}else {
    
         $userType="front";

}



?> 

     <header class="sticky-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                          <!-- NAV -->
							   <nav class="mainavbararea navbar navbar-expand-lg navbar-light">
                           <a class="navbar-brand logoarea" href="<?=base_url()?>"><img src="<?=base_url()?>img/new-omj-logo.png" class="img-fluid" alt="OMJ"></a>
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>

                          <div class="maincollapsearea collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    
                                       
                                 <?php  if($userType=="hire"|| $userType=="front"){ ?> 
                                    <li class="nav-item dropdown mainDropDownlist">
                                             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              Hire
                                             </a>
                                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
											<?php if($userType=="hire"){ ?>
                                              <a class="dropdown-item" href="<?=base_url()?>Post_jobs">Post a Project</a>
											  <?php }else{ ?>
                                              <a class="dropdown-item" href="<?=base_url()?>login">Post a Project</a>
                                             <?php } ?>
											 <a class="dropdown-item" href="<?=base_url()?>Browse_freelancers">Browse Freelancers</a>
                                             </div>
                                    </li>
                                  <?php }if($userType=="work"|| $userType=="front"){  ?>
                                      <li class="nav-item dropdown mainDropDownlist">        
                                             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownw" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                               Work
                                             </a>
                                             <div class="dropdown-menu" aria-labelledby="navbarDropdownw">
                                              <a class="dropdown-item" href="<?=base_url()?>Browse_project">Browse Projects</a>
                                              <a class="dropdown-item" href="<?=base_url()?>Browse_categories">Browse Categories</a>
                                             </div>
                                       </li>
                              
                                  <?php }?>
                             
                                 </ul>

                                <ul class="navbar-nav mr-left">
                                    
                                 <?php   if(($userType=="work") || ($userType=="hire")){ ?>
                                    
                                    <li class="afloginnaven afloginnavenfirst"><a href="<?=base_url()?>inbox_message"><i class="icofont icofont-envelope"></i><sap>
                                        <?php

                                        if( $this->session->userdata('unreadMsg')){

                                            echo  $this->session->userdata('unreadMsg');

                                        }
                                         ?>
                                    </sap></a></li>
                                    <li class="notificationlistmain afloginnaven"><a class="notificationbell innavpaddingless" ><i class="icofont icofont-bell-alt"></i></a>
                                    
                                    
                                    <!-- start notifi -->
                                    <div class="notificationDetails">
                                        <ul>
                                            <li>Nigel awarded <a href="">Boostrap website</a> project to MalcolmLancer</li>
                                            <li>Nigel awarded <a href="">WP Website</a> project to Dereklancer</li>
                                            <li>Nigel awarded <a href="">Boostrap website</a> project to MalcolmLancer</li>
                                            <li>Nigel awarded <a href="">WP Website</a> project to Dereklancer</li>
                                            <li><a href="">Nigel Message you about current projects</a></li>
                                        </ul>
                                    </div>
                                    <!--end notification -->
                                  </li><!--end li -->
								  
                                    <li class="nav-item dropdown mainDropDownlist">
                                 <?php }   ?> 
                                        
                                        
                                 <?php   if($userType=="hire"){ ?>   
                                            <a class="nav-link dropdown-toggle" href="<?=base_url()?>" id="navbarDropdownw" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Employer
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownw">
                                            <a class="dropdown-item" href="<?=base_url()?>Post_jobs">Post a Job</a>
                                            <a class="dropdown-item" href="<?=base_url()?>My_projects">Open Projects</a>
                                            <a class="dropdown-item" href="<?=base_url()?>Awarded_projects">Awarded Projects</a>
                                            <a class="dropdown-item" href="<?=base_url()?>Hire_payments">Payments</a>
                                           </div>
                                 <?php }if($userType=="work"){  ?>
                                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownw" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Freelancer
                                           </a>
                                           <div class="dropdown-menu" aria-labelledby="navbarDropdownw">
                                           <a class="dropdown-item" href="<?=base_url()?>my_bids">My Bids</a>
                                           <a class="dropdown-item" href="<?=base_url()?>My_projects">My Work</a>
                                           <a class="dropdown-item" href="<?=base_url()?>Revenue">Revenues</a>
                                           <a class="dropdown-item" href="<?=base_url()?>Work_membership_payment">Membership Payments</a>
                                           </div>
                                       <?php }?>
                                     </li>
                                  
                               

                                     <li class="nav-item dropdown mainDropDownlist">
                                       <?php  if($userType=="hire"){ ?> 
                                             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownw" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                 <img src="<?=base_url()?>user_image/<?=$this->session->userdata('profilepicture')?>" class="profilephotosize img-fluid" alt="profilep"> 
                                              Profile
                                             </a>
                                             <div class="dropdown-menu" aria-labelledby="navbarDropdownw">
                                             <a class="dropdown-item" href="<?=base_url()?>setting_hire">Settings</a>
											 <a class="dropdown-item" href="<?=base_url()?>Change_Email">Change Email</a>
                                             <a class="dropdown-item" href="<?=base_url()?>Change_password">Change Password</a>
                                             <a class="dropdown-item" href="<?=base_url()?>Hire_membership">Membership</a>
                                             <a class="dropdown-item" href="<?=base_url()?>LogOut">Log out</a>
                                             </div>
                                       <?php } if($userType=="work"){  ?>
                                             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownw" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                 <img src="<?=base_url()?>user_image/<?=$this->session->userdata('profilepicture')?>" class="profilephotosize img-fluid" alt="profilep"> 
                                             Profile
                                             </a>
                                             <div class="dropdown-menu" aria-labelledby="navbarDropdownw">
                                             <a class="dropdown-item" href="<?=base_url()?>setting">Settings</a>
                                             <a class="dropdown-item" href="<?=base_url()?>Change_Email">Change Email</a>
                                             <a class="dropdown-item" href="<?=base_url()?>Change_password">Change Password</a>
                                             <a class="dropdown-item" href="<?=base_url()?>My_Skills">My Skills</a>
                                             <a class="dropdown-item" href="<?=base_url()?>Work_membership">Membership</a>
                                             <a class="dropdown-item" href="<?=base_url()?>LogOut">Log out</a>
                                             </div>
                                       <?php }?>
                                            
                                  </li>
                                  <?php if($userType=="front"){?>
                                    <ul class="navbar-nav mr-left">
                                    <li><a href="<?=base_url()?>Login">Login</a></li>
                                    <li><a href="<?=base_url()?>Signup">Sign up</a></li>
                                    <li><a href="<?=base_url()?>Post_jobs" class="postajobbutton">Post a Job</a></li>
                                  </ul>
                                  <?php }?>
                              </ul>

                          </div>
                       </nav>

<!-- NAV -->
                </div>
            </div>    
        </div>
      </header>



