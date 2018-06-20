
      
      <section class="loginpagearea forpaddingupdw">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-7 col-lg-6">
                    <div class="loginpageinner">
                         <div class="logintitle">
                            <h2>Forgot Password</h2>
                           
                        </div>
						
						  <?php  
							
								$msg=$this->session->flashdata('show_message');
								
								if(!empty($msg)){
								echo  $msg;
								}
							?>
                        <div class="loginemailuserarea">
                            <form method="post" action="">
                                <input type="email" name="email" id="forgotpass" value="<?=set_value('email')?>" placeholder="Your Email" >
								<div class="error"><?=form_error('email')?></div>
                                
                                <button type="submit">Submit</button>
                            </form>
                        </div>
                        
                    </div>
                </div><!--end col-->
                
                <div class="col-sm-12 col-md-4 offset-md-1 col-lg-4 offset-lg-2">
                    <div class="advertisementspace">
                        <h2>Insert Your Advertisement Here</h2>
                    </div>
                </div>
            </div>  
        </div>
      </section>
      <!--end banner sec-->
      
      
