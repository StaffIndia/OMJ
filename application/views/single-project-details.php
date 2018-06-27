<?php function time_left_check($get_time){
    date_default_timezone_set("Europe/London");
    $date = strtotime('+7 days',$get_time);$rem = $date - time();
    $day = floor($rem / 86400);
    $hr = floor(($rem % 86400) / 3600);
    $min = floor(($rem % 3600) / 60);
    if($day<0){$day=0;}if($hr<0){$hr=0;
    }
    if($min<0){$min=0;
    }
    $str=$day." Days, ".$hr." Hours, ".$min." minutes left ";
    return $str;
 }




function open_close($get_time){

date_default_timezone_set("Europe/London");

$date = strtotime('+7 days',$get_time);

$rem = $date - time();

$day = floor($rem / 86400);
$hr = floor(($rem % 86400) / 3600);
$min = floor(($rem % 3600) / 60);

if($min<0&&$hr<0&&$day<0){

$str="Close";
return $str;

}else{

$str="Open";
return $str;

}
}

 ?>

      <section class="singleProDetarea forpaddingupdw">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="singleProDeinarea">
                    
                      
                      <?php
                       foreach($project as $row) { ?> 
                        <div class="singlepdtitle">
                            <h3><?=$row['scriptolutionfreelancertitle']?></h3>

                         </div>

                        <div class="singlepbudtimearea">
                            <div class="singbudgetonly">
                                <ul>
                                    <li>bids <span><?=$bids ?></span></li>
                                   
                                    <li>Project Budget <span><?=$row['scriptolutionfreemin']?>-<?=$row['scriptolutionfreemax']?></span></li>
                                </ul>
                            </div>
                            <div class="singtimeframonly">
                                <div class="singletimeopen">
                                    <p> <?php  echo time_left_check($result[0]['time_added']);?></p>
                                    <h4><?php echo open_close($row['time_added']); ?></h4>
                                </div>
                            </div>
                            
                            <div class="singleprbidbutton">
                                <div class="spbidbutton">
                                    <a href="">Bid on Project</a>                                </div>
                            </div>
                        </div><!--end single pr time budget -->                        

                       <div class="sprojobdetailsmainare">
                        <div class="sprojectDescription">

                                <h5>Job Description</h5>
                                <div class="sprdeslist">
                                    <ul>
                                        <li>Experience Level:<span><?=$row['experience']?></span></li>
              <?php  
                    
                    $new_array=array();
                    $new_array=explode(",",$row['scriptolutionfreelancerskills']); ?>

                                        <li>Skills Required:<?php  foreach($new_array as $links) { ?>
                                            <span>
                                            
                                            <a href="<?=$links ?>"><?=$links ?></a></span>
                                        <?php }?></li>

                                    </ul>
                                </div>

                                <p>
                                    <?=$row['scriptolutionfreelancerdesc']?> 
                                </p>
                                 
                                 <figure>
                                    <?php $image=$row['p1'];
                                    ?>
                                    
                                    <?php if(!empty($image)) { ?>
                                    <a href=""> <img src="<?=base_url()?>project_image/<?=$row['p1']?>" class="img-fluid" alt="optional image"></a>
                                 </figure>                                        
                                   <?php } ?>

                        
                        </div><!--end s pr des-->

                         <?php } ?>
                         
                      <?php foreach($proposal2 as $row) { ?>
                            <div class="sprobuyerinfoarea">
                                 
                                <figure>
                                    <img src="<?=base_url()?>user_image/<?=$row['profilepicture']?>" class="img-fluid rounded-circle" alt="buyer">
                                    <figcaption><?=$row['username']?></figcaption>
                                </figure>

                                
                                <div class="buyerreviews">
                                    <span>Buyer Reviews</span>
                                    <ul>
                                        <li><i class="icofont icofont-star"></i></li>
                                        <li><i class="icofont icofont-star"></i></li>
                                        <li><i class="icofont icofont-star"></i></li>
                                        <li><i class="icofont icofont-star"></i></li>
                                        <li><i class="icofont icofont-star"></i></li>
                                    </ul>
                                </div>

                            </div><!--end buyer info-->
                             <?php } ?>
                              
                           
                        </div><!--end job d marea-->
                        
                        
                        <div class="adthisocialshareicons">
                            <!-- HERE IS ADDTHIS PLUGIN -->
                            
                            <!-- Go to www.addthis.com/dashboard to customize your tools -->
                            <div class="addthis_inline_share_toolbox">
                                
                                 <div id="share-button-2" class="need-share-button-default" data-share-icon-style="box" data-share-networks="Facebook,Twitter,Linkedin,GooglePlus"></div>
                            </div>

                        </div>
                        
                        
                    </div>
                </div><!--end col md--> 
              
            </div> <!--end row-->
            


            <div class="row marginRow">
                <div class="col-lg-10 offset-lg-1">
           <?php $i=0; 
           foreach($proposal3 as $row) {
            $i++;
            if ($i==1) { ?>
             
            
                    <div class="freebidtitlearea">
                        <div class="freebidtitlefr">
                            <h4>Freelancers Bidding</h4>
                        </div>
                        <div class="reputationtitlefree">
                            <h4>Reputation</h4>
                        </div>
                    </div>
                    <?php  } ?>
                <?php  } ?>
                    
                    
                    <!-- start single freelancer bid -->

                <?php 
                foreach($proposal3 as $row) { ?>
                   

                        <div class="freebidareadetails">
                        <div class="freebidavatar">
                            <a href="">
                                <img src="<?=base_url()?>user_image/<?=$row['profilepicture']?>" class="img-fluid">
                                <figcaption><?=$row['username']?></figcaption>
                            </a>
                        </div>
                        <div class="freebidreputation">
                            <ul>
                                <li><i class="icofont icofont-star"></i></li>
                                <li><i class="icofont icofont-star"></i></li>
                                <li><i class="icofont icofont-star"></i></li>
                                <li><i class="icofont icofont-star"></i></li>
                                <li><i class="icofont icofont-star"></i></li>
                            </ul>
                            <a href="">0 reviews</a>
                        </div>
                      
                    </div>  
                    <?php 
                        }?>          
                      <div class="paginationList">                
                   <?php
                     echo $this->pagination->create_links();
                     ?>
        </div>
                    
                </div><!--end col-->

                
            </div><!--end row-->
            
            
            
        </div>

      
      </section>

     

      
      
