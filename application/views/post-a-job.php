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
                                <select id="cat_select" name="category" class="custom-select">
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
											
											echo '<option  value="'.$test.'" selected>'.$test.'</option>';
											
																					
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
                            
                            <!-- <div class="single_postjobelement">
                                <label>What budget do you have in mind?</label>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                  </div>
                                  <input type="text" class="form-control"  value="<?=set_value('minbudget')?>" name="minbudget" aria-label="Amount (to the nearest dollar)" placeholder="Minimum Budget" >
									
								</div>
                                <div class="error"><?=form_error('minbudget')?></div>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                  </div>
                                  <input type="text" class="form-control" value="<?=set_value('maxbudget')?>" name="maxbudget" aria-label="Amount (to the nearest dollar)" placeholder="Maximum Budget" >
									
								</div>
								<div class="error"><?=form_error('maxbudget')?></div>
                                
                            </div> -->
                            
                            <!--end single job element--> 

                            


                            <div class="single_postjobelement">
                            <label>What budget do you have in mind?</label>
                                <span class="subtitlespan job_info_holder">

                                <span class="req_catagory">Please Select A Catagory</span>

                                <span  class="cat_has_val" style="display:none">
                                    <span class="job_name" ></span> jobs require a fixed rate pay of $ <span class="job_cost"></span> </span>
                                </span>
                                
                                <label>How many hours of work is this?”</label>

                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                  </div>
                                  <input type="number" id="hour_input" class="form-control"  value="" name="total_hour" aria-label="Amount (to the nearest dollar)" placeholder="Approximate Hous" >
                                  <input type="hidden" id="total_cost" class="form-control"  value="" name="total_cost">
                                  
                                
                            </div><!--end single job element--> 

                                <span class="subtitlespan total_cost_text_field_holder" style="opacity:0">Total Cost Will Be $ <span id="total_cost_text_field"></span> </span>

                            </div>

                            
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

      <div class="valuesOfCatagories" style="display:none;">
      <?php foreach($categories as $result){ ?>
        <input value="<?= $result['rate']?>" type="hidden">
        <?php } ?>
      </div>

      <div class="CatagoriesList" style="display:none;">
      <?php foreach($categories as $result){ ?>
        <input value="<?= $result['name']?>" type="hidden">
        <?php } ?>
      </div>

      
      <!--end banner sec-->

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://use.fontawesome.com/fa2c145b6a.js"></script>
      

      <script>
      $( document ).ready(function() {

        isSelected = false;
        var costs = $('.valuesOfCatagories').find('input');
        var CostArray = new Array();
        costs.each(function(){
            CostArray.push($(this).val());
        });


        var catNames = $('.CatagoriesList').find('input');
        var CatNameArray = new Array();
        catNames.each(function(){
            CatNameArray.push($(this).val());
        });

        $('#cat_select').on('change', function (e) {
            var optionSelected = $(this).find("option:selected").index();
            
           if(optionSelected>0){

            lastcost =  CostArray[optionSelected-1];
            isSelected = true;
            $('.job_name').text(CatNameArray[optionSelected-1]);
            $('.job_cost').text(CostArray[optionSelected-1]);
            $('.req_catagory').css({"display": "none"});
            $('.cat_has_val').css({"display": "block"});
            
            if($('#hour_input').val().length > 0){
              $('.total_cost_text_field_holder').css({"opacity": "1"});
              $('#total_cost_text_field').text($('#hour_input').val() * lastcost);
              $("#total_cost").val($('#hour_input').val() * lastcost);
            }
           }else{
            lastcost =  0;
            $('.req_catagory').css({"display": "block"});
            $('.cat_has_val').css({"display": "none"});
            isSelected = false;
            $('.total_cost_text_field_holder').css({"opacity": "0"});
           }
            
        });

            $("#hour_input").on("change paste keyup", function() {

                if(isSelected){
                    $('.total_cost_text_field_holder').css({"opacity": "1"});
                   
                    
                }else{
                    $('.total_cost_text_field_holder').css({"opacity": "0"});
                }

                $('#total_cost_text_field').text($(this).val() * lastcost);
                $("#total_cost").val($(this).val() * lastcost);
               
            });


        });
      </script>
	  
		