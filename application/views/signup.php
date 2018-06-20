
      
      
      <section class="loginpagearea forpaddingupdw">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-7 offset-md-2 col-lg-6 offset-lg-3">
                    <div class="loginpageinner">
                       <div class="logintitle">
                            <h2>Sign Up</h2>
                            <h4>are you member already? <a href="login.html">Log In</a></h4>
							
							<?php  
							
								$msg=$this->session->flashdata('message');
								
								if(!empty($msg)){
								echo  $msg;
								}
							?>
                        </div>
                        <div class="socialmedisignin">
                            <a href="" class="loginfacebook"><i class="icofont icofont-social-facebook"></i>&nbsp; sign up with facebook</a>
                            <a href="" class="loginlinkedin"><i class="icofont icofont-brand-linkedin"></i>&nbsp; sign up with Linkedin</a>
                        </div>
                        
                        <div class="alternativenextor">
                            <span>or</span>
                        </div>
                        
                        <div class="loginemailuserarea">
                            <form method="post" action="" enctype="multipart/form-data" >
                                <input type="text" name="fname" value="<?=set_value('fname')?>" placeholder="Full Name" >
								<div class="error"><?=form_error('fname')?></div>
                                <input type="text" name="username" value="<?=set_value('username')?>" placeholder="Username" >
								<div class="error"><?=form_error('username')?></div>
                                <input type="email" name="loginemail" value="<?=set_value('loginemail')?>"  placeholder="Your Email" >
								<div class="error"><?=form_error('loginemail')?></div>
                                <input type="password" name="loginpass" value="<?=set_value('loginpass')?>"  placeholder="Your Password">
								<div class="error"><?=form_error('loginpass')?></div>
                                <input type="password" name="loginpassconf" value="<?=set_value('loginpassconf')?>"  placeholder="Your Confirm Password">
                               <div class="error"><?=form_error('loginpassconf')?></div>
							   <div class="hireworkinput">
                                    <h6>I want to</h6>
                                   
                                    <div class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" id="customRadioInline1" name="customRadioInline1" <?php if(set_value('customRadioInline1')==1) {echo 'checked'; } ?> value="1" class="custom-control-input">
                                      <label class="custom-control-label" for="customRadioInline1">Hire</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" id="customRadioInline2" name="customRadioInline1" <?php if(set_value('customRadioInline1')==2) {echo 'checked'; } ?> value="2" class="custom-control-input" >
                                      <label class="custom-control-label" for="customRadioInline2">Work</label>
                                    </div>
									 
                                </div>
								<div class="error"><?=form_error('customRadioInline1')?></div>
                                <div class="remembermearea">
                                    <label for="remembeme"><input type="checkbox" <?php if(set_value('agree')==1) {echo 'checked'; } ?> value="1" name="agree" >&nbsp;I agree to the terms of service</label>
                                    
                                </div>
								<div class="error"><?=form_error('agree')?></div>
                                <button type="submit">Sign Up </button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>  
        </div>
      </section>
      <!--end banner sec-->
      