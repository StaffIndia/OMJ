<?php 

	function skill_name($id,$skill){
			
			foreach($skill as $sk){ 
									
					if($sk['SCRIPTOLUTIONSKID']==$id){
					
						return $sk['scriptolutionskill'];
					}
			}
	
	}

?>



      <section class="brosweprojectsarea forpaddingupdw">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <aside class="browserprosidebar">
                      <form method="get" action="">
                        <div class="single_browfilter single_browfilterone">
                            
                                <label><strong>Freelancer Username</strong></label>
                                <input type="text" name="freeusername" class="form-control" >
                                <input type="submit" value="Filter">
                  
                        </div><!--end single br filter -->
                        
                        
                        <div class="single_browfilter">
                         
                                <label>Skills</label>
                                 <select name="skill1"class="custom-select" id="selecskillone">
                                    <option value="" >Select Skills</option>
									<?php foreach($skill as $sk){ ?>
									<option <?php if(!empty($_GET['skill1'])&&($_GET['skill1']==$sk['SCRIPTOLUTIONSKID'])){ echo 'selected'; } ?> value="<?=$sk['SCRIPTOLUTIONSKID']?>" ><?=$sk['scriptolutionskill']?></option>
									<?php } ?>
                                </select>
                                
                                 <select name="skill2"class="custom-select" id="selecskillone">
                                    <option value="" >Select Skills</option>
									<?php foreach($skill as $sk){ ?>
									<option <?php if(!empty($_GET['skill2'])&&($_GET['skill2']==$sk['SCRIPTOLUTIONSKID'])){ echo 'selected'; } ?> value="<?=$sk['SCRIPTOLUTIONSKID']?>" ><?=$sk['scriptolutionskill']?></option>
									<?php } ?>
                                </select>
                                
                                <select name="skill3"class="custom-select" id="selecskillone">
                                    <option  value="" >Select Skills</option>
									<?php foreach($skill as $sk){ ?>
									<option <?php if(!empty($_GET['skill3'])&&($_GET['skill3']==$sk['SCRIPTOLUTIONSKID'])){ echo 'selected'; } ?> value="<?=$sk['SCRIPTOLUTIONSKID']?>" ><?=$sk['scriptolutionskill']?></option>
									<?php } ?>
                                </select>
                        </div><!--end single br filter -->
                        
                      
                        
                         <div class="single_browfilter">
                                
								<select name="country" class="custom-select">
								 <option value="">Select Your Country</option>
								<?php foreach($country as $res) {?>
								
								
                                    <option <?php if(!empty($_GET['country'])&&($_GET['country']==$res['country'])){ echo 'selected'; } ?> value="<?=$res['country']?>"><?=$res['country_name']?></option>
                                   
								<?php } ?>
                                </select>
                   
                            </div><!--end single job element-->
                        
                        <div class="single_browfilter">
                    
                                 
                                <input type="reset" value="reset all filters" class="resetallfilters">
                     
                          
                        </div><!--end single br filter -->
                        
                        </form>  
                       
                    </aside>          
                </div><!--end col md 4-->   
                
                <div class="col-lg-8">
                    <section class="browseProRightarea">
                        <div class="brofiltitlearea">
                            <h2>Freelancers</h2>
                        </div>
                        
                         <div class="recentjobfiltering">
                            <div class="filteringtitle">
                                <span>filter by:</span>
                            </div>
                            <div class="filteringdetailsb">
                                <a href="">Rating</a>
                                <a href="">Hourly Rate</a>
                                <a href="">Date Joined</a>
                            </div>
                        </div>
                        <!--end filter-->
                        
                        
                        <!-- start single freelancer section -->
                        <div class="signeFreelancerSec">
						
						<?php foreach ($results as $row) { ?>
                            
                            <div class="singleFreelancerpro">
								<a href=""><img src="<?=base_url()?>user_image/<?=$row['profilepicture']?>" class="img-fluid"></a>
                                <div class="singlefreereviews">
                                    <h6><a href=""><?=$row['fullname']?></a></h6>
                                    <span class="sflocation"><i class="icofont icofont-social-google-map"></i><?=$row['country']?></span>
                                     <ul class="">
                                        <li><a href=""><i class="icofont icofont-star"></i></a></li>
                                        <li><a href=""><i class="icofont icofont-star"></i></a></li>
                                        <li><a href=""><i class="icofont icofont-star"></i></a></li>
                                        <li><a href=""><i class="icofont icofont-star"></i></a></li>
                                        <li><a href=""><i class="icofont icofont-star"></i></a></li>
                                    </ul>
                                </div>
                                
                                 <div class="singleFreeSkills">
                                    <ul>
									
									
									<?php for($i=1;$i<=25;$i++){ ?>
									
									<?php if($row["scriptolutionsk$i"]!=0){ ?>
                                        <li><a href="<?=base_url()?>Browse_freelancers?skill1=<?=$row["scriptolutionsk$i"]?>"><?php echo skill_name($row["scriptolutionsk$i"],$skill); ?></a></li>
                                        
										<?php } } ?>
                                    </ul>
                                </div>
                                
                                <div class="sfrcbutton">
								<?php if($this->session->userdata('user_type')=='hire'){ ?>
                                    <a href="<?=base_url()?>conversation/user/<?=$row['USERID']?>" class="contactbusfr">Contact</a>
                                    <?php  }else { ?>
									  <a href="<?=base_url()?>login" class="contactbusfr">Contact</a>
									<?php }  ?>
									
									
									
									<a href="<?=base_url()?>Freelancer_profile/freelancer/<?=$row['USERID']?>" class="vieportfolio">portfolio</a>
                                </div>
						
						</div><!--end single free pro -->
                            
								<?php } ?>
                                
                    
                        </div><!--end -->    
                        
                    </section>  <!--end sec-->     
                    
                    <div class="paginationList">
                         <?php echo $this->pagination->create_links(); ?>
                    </div>
                    
                    
                    
                </div><!--end col md 8--> 
              
            </div>  
        </div>
      </section>
      <!--end banner sec-->
      
      
