
      <!--START AWAREDE PROJECTS -->
      <section class="awardedProjectarea forpaddingupdw">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="awardedProjleftside">
                        <div class="allcattitle awaredeprotitle">
                            <h2>Awarded Projects</h2>
                            <span>Track and manage your ordered projects</span>
                        </div><!--end my pro title-->
                        
						<?php  
							
								$msg=$this->session->flashdata('message');
								
								if(!empty($msg)){
								echo  $msg;
								}
							?>	

                        <!--start awarded pro-->
                        <div class="awardedprallinfo">
                            <div class="awardedsiinfo">
                                <a href="">0</a>
                                <span>Active</span>
                            </div>
                            
                            <div class="awardedsiinfo">
                                <a href="">3</a>
                                <span>pending my review</span>
                            </div>
                            
                             <div class="awardedsiinfo">
                                <a href="">2</a>
                                <span>completed</span>
                            </div>
                            
                             <div class="awardedsiinfo">
                                <a href="">0</a>
                                <span>cancelled</span>
                            </div>
                            
                        </div>
                        <!--end awarded pr-->
                        
                        
                        <!-- start awarded pro status -->
                        <div class="awardedProcstausmain">
                            <div class="awardedProcstaus">
                                <div class="awardedorcrstautitle">
                                    <a href="">order</a>
                                </div>

                                <div class="awardedorcrstautitle">
                                    <a href="">created</a>
                                </div>

                                <div class="awardedorcrstautitle">
                                    <a href="">status</a>
                                </div>
                            </div>
                            <!--end award pro status -->
                            <?php foreach($result as $row){ ?>
                             <div class="awardedorcrestDescritwo">
                                <div class="orderavpro"><a href="<?=base_url()?>conversation/project/<?=$row['USERID']?>/<?=$row['PID']?>"><?=$row['scriptolutionfreelancertitle']?> </a></div>
                                <div class="orderavpro"><?=date('d,M,Y',$row['time_added'])?></div>
                                <div class="orderavpro pending"><?=$row['active']?></div>
								<div class="orderavpro awaredchooseoption">
								<ul>
									<li class="active"><a href="" title="Active"><i class="icofont icofont-bell"></i></a></li>
									<li><a href="" title="Pending"><i class="icofont icofont-hour-glass"></i></a></li>
									<li><a href="" title="Completed"><i class="icofont icofont-check"></i></a></li>
									<li><a href="" title="Cancelled"><i class="icofont icofont-close"></i></a></li>
								</ul>
								</div>
                            </div>
							
							<?php } ?>
                                    
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
      
    
      