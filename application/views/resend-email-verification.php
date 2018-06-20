
      <section class="loginpagearea forpaddingupdw">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <div class="loginpageinner">
                         <div class="logintitle">
                            <h2>Resend Email Verification</h2>
							
							 <?php  
							
								$msg=$this->session->flashdata('show_message');
								
								if(!empty($msg)){
								echo  $msg;
								}
							?>
                           
                        </div>
                        <div class="loginemailuserarea">
                            <form method="post" action="">
                                <input type="email" name="email" value="<?=set_value('email')?>" placeholder="Resend Email Verification" >
								<div class="error"><?=form_error('email')?></div>
                                
                                <button type="submit">Resend</button>
                            </form>
                        </div>
                        
                    </div>
                </div><!--end col-->
                
               
            </div>  
        </div>
      </section>
      <!--end banner sec-->
      
      

      
      
      <section class="footerlisttoparea forpaddingupdw">
        <div class="container">
            <div class="row marginRow">
                <div class="col-sm-6 col-md-3">
                    <div class="singleFoterlistarea">
                        <h4><span>Outsource</span>myjob</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    </div>
                </div><!--end col3-->
                
                <div class="col-sm-6 col-md-3">
                    <div class="singleFoterlistarea">
                        <h4>our company</h4>
                        <ul>
                            <li><a href="">about us</a></li>
                            <li><a href="">careers</a></li>
                            <li><a href="">our team</a></li>
                            <li><a href="">Terms of Service</a></li>
                            <li><a href="privacy-policy.html"> Privacy Policy</a></li>
                            <li><a href="">Advertising</a></li>
                            <li><a href="referel.html">Refer a Friend</a></li>
                  

                        </ul>
                    </div>
                </div><!--end col3-->
                
                 <div class="col-sm-6 col-md-3">
                    <div class="singleFoterlistarea">
                        <h4>help</h4>
                        <ul>
                            <li><a href="">how it works</a></li>
                            <li><a href="">support</a></li>
                            <li><a href="">trust & safety</a></li>
                        </ul>
                    </div>
                </div><!--end col3-->
                
                <div class="col-sm-6 col-md-3">
                    <div class="singleFoterlistarea">
                        <h4>resources</h4>
                        <ul>
                            <li><a href="">Find local freelancers</a></li>
                            <li><a href="">find tutorials</a></li>
                            <li><a href="">stories</a></li>
                            <li><a href="">hiring freelancers</a></li>
                        </ul>
                    </div>
                </div><!--end col3-->
                
                
       
            </div>  
        </div>
      </section>
      <!--end banner sec-->  
      
      <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copyright">
                        <p>Copyright &copy; 2017 OutsourcemyJob</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="socialmedifooter">
                        <ul>
                            <li><a href=""><i class="icofont icofont-social-facebook"></i></a></li>
                            <li><a href=""><i class="icofont icofont-social-twitter"></i></a></li>
                            <li><a href=""><i class="icofont icofont-brand-linkedin"></i></a></li>
                            <li><a href=""><i class="icofont icofont-social-youtube"></i></a></li>
                            <li><a href=""><i class="icofont icofont-social-tumblr"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
          </div>
      </footer>
       

    
      
    <!-- All Scripts here -->
      
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/scripts.js"></script>
      

   
  </body>
</html>