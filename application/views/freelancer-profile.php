<section class="freelancerprofilearea forpaddingupdw">
        <div class="container">
            <div class="row">
   <?php foreach ($fInfo as $finfo){ ?>
                <div class="col-sm-12 col-md-8">
                    <div class="freelancerproleftside">
                        <div class="freeprotoparea">
                            <figure>
                                 <?php $im=$finfo['profilepicture'];?>
                                <img src="<?php echo site_url("user_image/$im"); ?>" 
                                class="img-fluid" alt="freelancer profile">
                            </figure>
                            
                            <div class="freetoptitledes">
                                <h2><?php echo $finfo['fullname'];?></h2>
                                <h4></h4>
                                <ul>
                                    <li><?php 
                                    foreach($skills as $sk){
                                        if($fInfo[0]['scriptolutionsk1']==$sk['SCRIPTOLUTIONSKID']){ 
                                              ?><a href=""><?php
                                              echo $sk['scriptolutionskill']; 
                                              ?></a><?php 

                                        } }?></li>
                                     <li><?php
                                    foreach($skills as $sk){
                                        if($fInfo[0]['scriptolutionsk2']==$sk['SCRIPTOLUTIONSKID']){ 
                                              ?><a href=""><?php
                                              echo $sk['scriptolutionskill']; 
                                              ?></a><?php 
    

                                        } }?></li>
                                     <li><?php 
                                    foreach($skills as $sk){
                                        if($fInfo[0]['scriptolutionsk3']==$sk['SCRIPTOLUTIONSKID']){ 
                                             ?><a href=""><?php
                                              echo $sk['scriptolutionskill']; 
                                              ?></a><?php 
    

                                        } }?></li>
                                     <li><?php 
                                    foreach($skills as $sk){
                                        if($fInfo[0]['scriptolutionsk4']==$sk['SCRIPTOLUTIONSKID']){ 
                                              ?><a href=""><?php
                                              echo $sk['scriptolutionskill']; 
                                              ?></a><?php 
    

                                        } }?></li>
                                     <li><?php 
                                    foreach($skills as $sk){
                                        if($fInfo[0]['scriptolutionsk5']==$sk['SCRIPTOLUTIONSKID']){ 
                                              ?><a href=""><?php
                                              echo $sk['scriptolutionskill']; 
                                              ?></a><?php 
    

                                        } }?></li>
                                </ul>
                            </div>
                        </div><!--end fre top -->
                        
                        <div class="overviewinfo">
                            <h4>Overview</h4>
                            <p> <?php echo $finfo['description']; ?> </p>
                        </div>
                        
                        
                        
                    </div>
                </div><!-- end col -->
                
                <div class="col-md-4">
                    <aside class="freelancerprsidebar">
                        <div class="contactinfo">
                            <h3>Contact</h3>
<!--                            <span>$15 / Per Hour</span>-->
                            <p><i class="icofont icofont-social-google-map"></i>Country : <strong><?php echo $finfo['country'];?></strong></p>
                            <p><i class="icofont icofont-clock-time"></i> member since: 
                            <?php  
                                $datestring = 'Year: %Y Month: %m Day: %d - %h:%i %a';
                                $time = $finfo['addtime'];
                                echo mdate($datestring, $time);
                            ?>
                            
                            </p>
                            
<!--
                            <ul>
                                <li><i class="icofont icofont-star"></i></li>
                                <li><i class="icofont icofont-star"></i></li>
                                <li><i class="icofont icofont-star"></i></li>
                                <li><i class="icofont icofont-star"></i></li>
                                <li><i class="icofont icofont-star"></i></li>
                            </ul>
-->
                        </div>
                    </aside>
                </div>
             <?php   
                                   }
            ?>   
            </div> <!--end row -->
           
            
            
        </div>
      </section>
      <!--end banner sec-->
      
      
