<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
      <!--START MY PROJECTS -->
      <section class="myprojectmainarea forpaddingupdw">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 offset-md-2">
                    <div class="allcattitle myprotitle myskilltitle">
                        <h2>My Skills</h2>
                        <?php  
							
								$msg=$this->session->flashdata('$skillmsg');
								
								if(!empty($msg)){
								echo  $msg;
								}
				        ?>
                        <span>You can only bid on projects if you have at least one of the required skills listed on it.</span>
                    </div><!--end my pro title-->
                     
                                

                    
                    
                    <div class="selectallskillsarea">
                        <h4> Select your skills </h4>
                    <form method="post" action="">    
                        <select name="userskill_1" class="custom-select" id="selectmysone">
                                     <option  selected value="">Select skill</option>
                                <?php foreach($skills as $sk){?>
                                       <option <?php if($user[0]['scriptolutionsk1']==$sk['SCRIPTOLUTIONSKID']){ echo 'selected'; } ?> value="<?=$sk['SCRIPTOLUTIONSKID']?>"><?php echo $sk['scriptolutionskill']; ?></option>
                               <?php } ?>
                        </select> 
                      
                        
                         <select name="userskill_2" class="custom-select" id="selectmysone">
                                     <option selected value="">Select skill</option>
                                 <?php foreach($skills as $sk){?>
                                       <option <?php if($user[0]['scriptolutionsk2']==$sk['SCRIPTOLUTIONSKID']){ echo 'selected'; } ?> value="<?=$sk['SCRIPTOLUTIONSKID']?>"><?php echo $sk['scriptolutionskill']; ?></option>
                               <?php } ?>
                        </select>  
                      
                        
                        <select name="userskill_3" class="custom-select" id="selectmysone">
                                     <option selected value="">Select skill</option>
                                 <?php foreach($skills as $sk){?>
                                       <option <?php if($user[0]['scriptolutionsk3']==$sk['SCRIPTOLUTIONSKID']){ echo 'selected'; } ?> value="<?=$sk['SCRIPTOLUTIONSKID']?>"><?php echo $sk['scriptolutionskill']; ?></option>
                               <?php } ?>
                        </select> 
                       
                        
                        <select name="userskill_4" class="custom-select" id="selectmysone">
                                     <option selected value="">Select skill</option>
                                 <?php foreach($skills as $sk){?>
                                       <option <?php if($user[0]['scriptolutionsk4']==$sk['SCRIPTOLUTIONSKID']){ echo 'selected'; } ?> value="<?=$sk['SCRIPTOLUTIONSKID']?>"><?php echo $sk['scriptolutionskill']; ?></option>
                               <?php } ?>
                        </select> 
                        <div class="error"><?=form_error('userskill_4')?></div>
                        
                        <select name="userskill_5" class="custom-select" id="selectmysone">
                                     <option selected value="">Select skill</option>
                                <?php foreach($skills as $sk){?>
                                       <option <?php if($user[0]['scriptolutionsk5']==$sk['SCRIPTOLUTIONSKID']){ echo 'selected'; } ?>if() value="<?=$sk['SCRIPTOLUTIONSKID']?>"><?php echo $sk['scriptolutionskill']; ?></option>
                               <?php } ?>
                        </select> 
                        
                        
                            <div class="upgradeskilllink">
                                <a href="membership.html"> Upgrade your membership to add more skills. </a>
                            </div>
                            <input name="submit" type="submit" value="submit">
                        
                        </form>
                    </div><!--end -->
                    
                   
                </div>
            </div> <!--end row-->
       
            
            
        </div>
      </section>
      <!--END MY PROJECTS -->