
      <section class="loginpagearea forpaddingupdw">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <div class="loginpageinner">
                         <div class="logintitle">
                            <h2>Change Password</h2>
							<?php  
							
								$msg=$this->session->flashdata('message');
								
								if(!empty($msg)){
								echo  $msg;
								}
							?>
                        </div>
                        <div class="loginemailuserarea">
                            <form method="post" action="">
                                <input type="password" name="newpass" id="newpass"  value="<?=set_value('newpass')?>" placeholder="New Password"  >
                                <div class="error"><?=form_error('newpass')?></div>
								<input type="password" name="confirmnewpass" id="confirmnewpass" value="<?=set_value('confirmnewpass')?>" placeholder="Confirm New Password"  >
								<div class="error"><?=form_error('confirmnewpass')?></div>
                                
                                <button type="submit">Change Password</button>
                            </form>
                        </div>
                        
                    </div>
                </div><!--end col-->
                
               
            </div>  
        </div>
      </section>
      <!--end banner sec-->
      
      

    