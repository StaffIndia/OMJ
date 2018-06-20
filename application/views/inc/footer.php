<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  

      
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
                            <li><a href=""> Privacy Policy</a></li>
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
      
      <script src="<?=base_url()?>asset/js/jquery.min.js"></script>
      <script src="<?=base_url()?>asset/js/popper.min.js"></script>
      <script src="<?=base_url()?>asset/js/bootstrap.bundle.min.js"></script>
      <script src="<?=base_url()?>asset/js/bootstrap.min.js"></script>
      <script src="<?=base_url()?>asset/js/scripts.js"></script>
      
 <link rel="stylesheet" href="<?=base_url()?>asset/dist/fastselect.min.css">
   <script src="<?=base_url()?>asset/dist/multiselect.js"></script>
        <script src="<?=base_url()?>asset/dist/fastselect.standalone.js"></script>
		 <script>

                $('.multipleSelect').fastselect();
                $('.attireMainNav').hide();
			
            </script>
			
		<script>
            $('#customfile').on('change',function(){
                //get the file name
                var fileName = $(this).val();
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })
        </script>
		
		
		 <script>
            $('#customfile2').on('change',function(){
                //get the file name
                var fileName = $(this).val();
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })
           
           // avatar shows after select file
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#avatarupload')
                            .attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
		
		<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=342104502980983&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <div id="fb-root"></div>
  </body>
</html>