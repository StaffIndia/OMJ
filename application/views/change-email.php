
      
      <section class="loginpagearea forpaddingupdw">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <div class="loginpageinner">
                         <div class="logintitle">
                            <h2>Change Email Address</h2>
							<?php  
							
								$msg=$this->session->flashdata('message');
								
								if(!empty($msg)){
								echo  $msg;
								}
							?>
                        </div>
                        <div class="loginemailuserarea">
                            <form method="post" action="">
                                <input type="email" name="email" id="email" value="<?=set_value('email')?>" placeholder="Email Address" >
								
								<div class="error"><?=form_error('email')?></div>
                                <input type="email" name="retemail" id="retemail" value="<?=set_value('retemail')?>" placeholder="Re-Type Email Address" >
								
								<div class="error"><?=form_error('retemail')?></div>
                               
                                <button type="submit">Change Email</button>
                            </form>
                        </div>
                        
                    </div>
                </div><!--end col-->
                
               
            </div>  
        </div>
      </section>
      <!--end banner sec-->
      
      

      
  