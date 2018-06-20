   <section class="loginpagearea forpaddingupdw">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-7 offset-md-2 col-lg-6 offset-lg-3">
                    <div class="loginpageinner">
                       <div class="logintitle">
                            <h2>Set Up Your Account</h2>
                        </div>
                      
                        
                        <div class="loginemailuserarea">
                            <form method="post" action="">
                                 
                                
                                <input type="text" name="loginfname"  value="<?=set_value('loginfname')?>" id="fname" placeholder="Full Name">
                                <div class="error"><?=form_error('loginfname')?></div>
                                <input type="text" name="loginun" id="username"  value="<?=set_value('loginun')?>" placeholder="Username">
                                <div class="error"><?=form_error('loginun')?></div>
                                
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
                                <button type="submit">Set Up Account </button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>  
        </div>
      </section>