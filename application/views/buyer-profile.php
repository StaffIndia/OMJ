

<section class="freelancerprofilearea forpaddingupdw">
        <div class="container">
            <div class="row">
<?php foreach($bInfo as $bIN){?>
                <div class="col-sm-12 col-md-8">
    
                    

                    <div class="freelancerproleftside">
                        <div class="freeprotoparea">
                            <figure>
                                <?php $im=$bIN['profilepicture'];?>
                                <img src="<?php echo site_url("user_image/$im"); ?>" 
                                class="img-fluid" alt="freelancer profile">
                            </figure>
                            
                            <div class="freetoptitledes">
                                <h2><?php echo $bIN['scriptolutionuserslogan']; ?></h2>
                                <h4><?php echo $bIN['fullname']; ?></h4>
                                
                            </div>
                        </div><!--end fre top -->
                        
                        <div class="overviewinfo">
                            <h4>Overview</h4>
                            <p> <?php echo $bIN['description']; ?> </p>
                        </div>
                        
                        
                        
                    </div>
                </div><!-- end col -->
                
                <div class="col-md-4">
                    <aside class="freelancerprsidebar">
                        <div class="contactinfo">
                            <h4>Contact</h4>
                            <p><i class="icofont icofont-social-google-map"></i>Country : <strong><?php echo $bIN['country']; ?></strong></p>
                            <p><i class="icofont icofont-clock-time"></i> member since: <?php  
                                $datestring = 'Year: %Y Month: %m Day: %d - %h:%i %a';
                                $time = $bIN['addtime'];
                                echo mdate($datestring, $time);
                                ?> </p>
                            
                            
                        </div>
                    </aside>
                </div>
         <?php }
         ?>       
            </div>
<!--            end row-->
            
           
            
        </div>
      </section>
      <!--end banner sec-->