
      <section class="postajobarea forpaddingupdw">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="postajobareainner">
                        <h2>Settings</h2>
							<?php  
							
								$msg=$this->session->flashdata('message');
								
								if(!empty($msg)){
								echo  $msg;
								}
							?>						
                        <form method="post" action="" enctype='multipart/form-data' >
                            
                             <div class="settingspagesingelinfo single_postjobelement">
                                <label><strong>Your Email</strong> </label>
                                <input class="form-control" type="email" name="email" placeholder="Email Address" value="<?php if(set_value('email')){ echo set_value('email'); }else { echo $results[0]['email']; } ?>" >
                                <!--<a href="resend-email-confirmation.html">Resend Email Confirmation</a>-->
								<div class="error"><?=form_error('email')?></div>
						   </div><!--end single job element--> 
                            
                            
                            <div class="single_postjobelement">
                               <label><strong>Country</strong> </label>
                                <select name="country" class="custom-select">
								 <option value="">Select Your Country</option>
								<?php foreach($country as $res) {?>
								
								
                                    <option <?php if(set_value('country')) { if($res['country']==set_value('country')){ echo 'selected'; } }else { if($res['country']==$results[0]['country']){ echo 'selected'; } } ?> value="<?=$res['country']?>"><?=$res['country_name']?></option>
                                   
								<?php } ?>
                                </select>
								<div class="error"><?=form_error('country')?></div>
                            </div><!--end single job element-->
                            
                         
                            <div class="single_postjobelement">
                                <label><strong>Your Name / Business Name</strong></label>
                                <input class="form-control" type="text" name="fullname" value="<?php if(set_value('fullname')){ echo set_value('fullname'); }else { echo $results[0]['fullname']; } ?>" placeholder="Your/Business Name" >
								 <div class="error"><?=form_error('fullname')?></div>
							</div><!--end single job element-->
                            
                            <div class="single_postjobelement">
                                <label><strong>Profile Heading</strong></label>
                                <input class="form-control" type="text" name="scriptolutionuserslogan"  value="<?php if(set_value('scriptolutionuserslogan')){ echo set_value('scriptolutionuserslogan'); }else { echo $results[0]['scriptolutionuserslogan']; } ?>" placeholder="Your Profile Heading" >
								<div class="error"><?=form_error('scriptolutionuserslogan')?></div>
						   </div><!--end single job element-->
                            
                            <div class="single_postjobelement">
                                <label><strong>Profile Description</strong></label>
                                <textarea class="form-control" name="description" placeholder="Profile Descriptin"><?php if(set_value('description')){ echo set_value('description'); }else { echo $results[0]['description']; } ?></textarea>
								<div class="error"><?=form_error('description')?></div>
						   </div><!--end single job element-->
                            
                             <div class="settingsprofilepicture single_postjobelement">
                                <label><strong>Profile Picture</strong></label><br>
                                <img id="avatarupload" src="user_image/<?=$results[0]['profilepicture']?>" class="img-fluid" alt="your image" />
                                 <div class="custom-file">
                                    <input type="file" name="avatar" class="custom-file-input" id="customfile2" onchange="readURL(this);">
                                    <label class="custom-file-label" for="customfile">Select Your Profile Picture</label>
                                  </div>

                            </div><!--end single job element-->

                            
                            <input type="submit" name="updatepro" value="Update Profile">
                            
                            <div class="changepassord">
                                <a href="<?=base_url()?>change_password">Change Your Password</a>
                            </div>
                            
                        </form>
                    </div>
                </div><!--end col-->    
              
            </div>  
        </div>
      </section>
      <!--end banner sec-->
      
      