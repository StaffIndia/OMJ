
      
      <!--START AWAREDE PROJECTS -->
      <section class="awardedProjectarea forpaddingupdw">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="awardedProjleftside">
                        <div class="allcattitle awaredeprotitle">
                            <h2>Conversations Inbox</h2>
                            <span>Communicate with other users</span>
                        </div><!--end my pro title-->
                     
                        
                        
                        
                          <div class="inboxMessageallinfo">
                                <div class="inboxmeleftside">
                                    <a type="submit" class="currmessage" href="">all</a>
                                    <a href="">unread</a>
                                    <a href="">Archived</a>
                                </div>
                                <div class="inboxmerightside">
                              
                                    <form action="" method="post">
                                    <select name="userID" class="custom-select">
                                        <?php
                                           foreach($result as $row){ if($row['MSGTO']==$this->session->userdata('userid')){}else{
                                               echo "<option value=".$row['USERID'].">".$row['fullname']."</option>";
                                        }}
                                        ?>
                                    </select>
                                </div>
                            </div>

                        <!-- start awarded pro status -->
                        <div class="awardedProcstausmain">
                            
                            <div class="awardedProcstaus">
                                <div class="awardedorcrstautitle">
                                    <a href="">Recipient</a>
                                </div>
                                <div class="awardedorcrstautitle">
                                    <a href=""><i class="icofont icofont-caret-down"></i>&nbsp;Updated</a>
                                </div>
                            </div>
                            <!--end award pro status -->
                            
                            <div class="awardedorcrestDescri">
								<div class="row text-left">
								 <?php foreach($result as $row){  if($row['MSGTO']==$this->session->userdata('userid')){}else{?>
								  <div class="col-md-6"> 
								  
									<p><a href="<?=base_url()?>conversation/user/<?=$row['MSGTO']?>"><?=$row['fullname']?></a></p>
								  </div>
								  
								  <div class="col-md-6"> 
								  
									<p> &nbsp </p>
								  </div>
								  
								   <?php }
									}								  
 ?>
								  
								

								  </div>
							  </div>
							
                                    
                        </div><!--end awareded main -->
                        
                        
                        
                        
                    </div>
                </div><!--end col 8 -->
                
                 <div class="col-md-4 col-lg-3">
                    <aside class="awardedSidebar">
                        
                        <div class="awardesidepostajob">
                            <a href="post-a-job.html">Post a Job</a>
                        </div>
                        
                        <div class="awardedemenulist">
                            <h5>Employer</h5>
                            <ul>
                                <li><a href="<?=base_url()?>My_projects">open projects</a></li>
                                <li><a href="<?=base_url()?>awarded-projects">Awarded Projects</a></li>
                                <li><a href="payments.html">payment</a></li>
                            </ul>
                        </div>
                        
                         <div class="awardedemenulist">
                            <h5>Profile</h5>
                            <ul>
                                <li><a href="<?=base_url()?>setting">Settings</a></li>
                                <li><a href="membership.html">Membership</a></li>
                            </ul>
                        </div>
                        
                        
                        
                        
                        
                        
                    </aside>
                </div>
                
                
            </div>  
        </div>
      </section>
      <!--END AWAREDE PROJECTS -->
      
    
      
    