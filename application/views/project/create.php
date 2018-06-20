<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>    
	<section class="postajobarea forpaddingupdw">
        <div class="container">
		
					
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
					
                    <div class="postajobareainner">
					
					<?php  
							
								$msg=$this->session->flashdata('message');
								
								if(!empty($msg)){
								echo  $msg;
								}
							?>
							
                        <form method="post" action="" enctype='multipart/form-data' >
                            <div class="single_postjobelement">
                                <label> What type of work do you require? </label>
                                <select name="category" class="custom-select">
                                  <option selected value="">Select a category of work (optional)</option>
								  <?php foreach($categories as $result){?>
                                    <option <?php if(set_value('category')==$result['CATID']){ echo 'selected'; } ?> value="<?=$result['CATID']?>"><?=$result['name']?></option>
									<?php } ?>
                                </select>
                            </div><!--end single job element-->
                            
                            <div class="single_postjobelement">
                                <label>  What is your project about?  </label>
                                <input class="form-control" type="text" name="proname" value="<?=set_value('proname')?>" placeholder="Project Name" >
                                <div class="error"><?=form_error('proname')?></div>
                            </div><!--end single job element--> 
                            
                            <div class="single_postjobelement">
                                <label> Tell us more about your project. </label>
                                <!---<input class="form-control" type="text" name="skillname" placeholder=" What skills are required? " required>-->
                                
								
								
								 <select class="multipleSelect" placeholder="What skills are required?" multiple name="scriptolutionfreelancerskills[]" >
										
										<?php if(set_value('scriptolutionfreelancerskills')){
											
											// var_dump($this_value);
										
											
											foreach ($this_value as $test){
											
											echo '<option  value="'.$test.'" selected></option>';
											
																					
											}
										}

										?>
										
										
										 <?php foreach($skills as $result){?>
										<option  value="<?=$result['scriptolutionskill']?>" ><?=$result['scriptolutionskill']?></option>
										<?php } ?>
									   
								</select>
       
								<div class="error"><?=form_error('scriptolutionfreelancerskills')?></div>
           
								
								<textarea class="form-control" name="describepro" placeholder="Describe your project"><?=set_value('describepro')?></textarea>
                <div class="error"><?=form_error('describepro')?></div>
								
                                <span class="subtitlespan"> Add an image that might help desribe your project (optional) </span>        
                                 <div class="custom-file">
                                    <input type="file" name="avatar" class="custom-file-input" id="customfile">
                                    <label class="custom-file-label" for="customfile">Choose file</label>
                                  </div>

                            </div><!--end single job element-->
                            
                            <div class="single_postjobelement">
                                <label>What budget do you have in mind?</label>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                  </div>
                                  <input type="text" class="form-control"  value="<?=set_value('minbudget')?>" name="minbudget" aria-label="Amount (to the nearest dollar)" placeholder="Minimum Budget" >
									
								</div>
                                <div class="error"><?=form_error('maxbudget')?></div>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                  </div>
                                  <input type="text" class="form-control" value="<?=set_value('maxbudget')?>" name="maxbudget" aria-label="Amount (to the nearest dollar)" placeholder="Maximum Budget" >
									
								</div>
								<div class="error"><?=form_error('maxbudget')?></div>
                                
                            </div><!--end single job element--> 
                            
                             <div class="single_postjobelement">
                                <label>When do you need this project completed?</label>
                                 <span class="subtitlespan"> Number of days the freelancer has to complete the project: </span>
                                
                                <div class="input-group mb-3">
                                  <input class="form-control" type="text" name="produration" placeholder="Project Duration" value="<?=set_value('produration')?>" >
                                  <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">Days</span>
                                  </div>
								  
                                </div>
								<div class="error"><?=form_error('produration')?></div>
                            </div><!--end single job element--> 
                            
                            <div class="single_postjobelement">
                                <label>Experience Level of Seller/Worker</label>
                                 <select name="experience" class="custom-select">
                                     <option value="">Select Experience Level</option>
                                      <option <?php if(set_value('experience')=="Beginner"){ echo 'selected'; } ?> value="Beginner">Beginner</option>
                                      <option <?php if(set_value('experience')=="Intermediate"){ echo 'selected'; } ?> value="Intermediate">Intermediate</option>
                                      <option <?php if(set_value('experience')=="Expert"){ echo 'selected'; } ?> value="Expert">Expert</option>
                                  
                                </select>
                                <div class="error"><?=form_error('experience')?></div>
                            </div><!--end single job element--> 
                            
                            <input type="submit" name="submitform" value="submit">
                            
                        </form>
                    </div>
                </div><!--end col-->    
              
            </div>  
        </div>
      </section>
      <!--end banner sec-->
	  
		