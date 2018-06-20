<!-- linkedin start -->
<script type="text/javascript" src="//platform.linkedin.com/in.js">
         api_key: 81c1b2nznosgwf
         authorize: true
         onLoad: onLinkedInLoad
         scope: r_basicprofile r_emailaddress
</script> 

<script type="text/javascript">
    // Setup an event listener to make an API call once auth is complete
    function onLinkedInLoad() {
        IN.Event.on(IN, "auth", getProfileData);
    }
    
    // Use the API call wrapper to request the member's profile data
    function getProfileData() {
        IN.API.Profile("me").fields("id", "first-name", "last-name", "headline", "location", "picture-url", "public-profile-url", "email-address").result(displayProfileData).error(onError);
    }

    // Handle the successful return from the API call
    function displayProfileData(data){
        var user = data.values[0];
        
        //document.getElementById("name").innerHTML = user.firstName+' '+user.lastName;
        var name= user.firstName+' '+user.lastName;
        var mail = user.emailAddress;
        mail=mail.replace("@", "attherateof");
        
        window.location= "<?php echo base_url();?>Login/socialSiteLogin/"+mail;
        document.getElementById('profileData').style.display = 'block';
    }

    // Handle an error response from the API call
    function onError(error) {
        console.log(error);
    }
    
    // Destroy the session of linkedin
    function logout(){
        IN.User.logout(removeProfileData);
    }
    
    // Remove profile data from page
    function removeProfileData(){
        document.getElementById('profileData').remove();
    }
</script>

 <!-- linkedin end -->
      
      
       <section class="loginpagearea forpaddingupdw">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-7 offset-md-2 col-lg-6 offset-lg-3">
                    <div class="loginpageinner">
                       <div class="logintitle">
                            <h2>Log in</h2>
                            <h4>Don't have account? <a href="<?=base_url()?>Signup">sign up</a></h4>
                        </div>
                        <div class="socialmedisignin">
                            <script type="in/Login"></script>
<!--                            <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>-->
<!--                            <a href="" class="loginfacebook"><i class="icofont icofont-social-facebook"></i>&nbsp; sign in with facebook</a>
                            <a href="" class="loginlinkedin"><i class="icofont icofont-brand-linkedin"></i>&nbsp; sign in with Linkedin</a>-->
                        </div>
                        
                        <div class="alternativenextor">
                            <span>or</span>
                        </div>
                        <?php  
							
								$msg=$this->session->flashdata('message_login');
								
								if(!empty($msg)){
								echo  $msg;
								}
							?>
                        
                        <div class="loginemailuserarea">
                            <form method="post" action="">
                                <input type="email" name="loginemail"  value="<?=set_value('loginemail'); if(isset($_COOKIE["loginemail"])) { echo $_COOKIE["loginemail"];}?>" id="loginid" placeholder="Your Email">
                                <div class="error"><?=form_error('loginemail')?></div>
                                <input type="password" name="loginpass" value="<?=set_value('loginpass'); if(isset($_COOKIE["loginpass"])) { echo $_COOKIE["loginpass"];}?>" id="loginpas" placeholder="Your Password">
                                <div class="error"><?=form_error('loginpass')?></div>
                                 
                                <div class="remembermearea">
                                    <label for="remembeme"><input type="checkbox" id="remembeme" name="remembeme"  <?php if(isset($_COOKIE["remembeme"])) { echo "checked";?> <?php } ?> >&nbsp;Remember me</label>
                                    <span><a href="<?=base_url()?>Forgot_password">forgot password?</a></span>
                                </div>
                                <button type="submit">Log in </button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>  
        </div>
      </section>
    
      
      
