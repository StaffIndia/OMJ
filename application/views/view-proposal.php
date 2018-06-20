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
                       <?php $i=1;
                       foreach($proposal as $row) { ?> 
                        <div class="singlepdtitle">
                            <h3<?php
                            if($i==1){   

                            echo $row['scriptolutionfreelancertitle'];
                              $i++;

                    } ?></h3>
                        </div>
                         <?php } ?>
          
                      <?php $i=1;
                       foreach ($proposal as $row) { ?>
                        
                        <div class="singlepbudtimearea">
                          <?php if($i==1){?>
                            <div class="singbudgetonly">
                                <ul>
                                    <li>bids <span><?=$bids ?></span></li>
                                    <li>Avg. Bid <span>$230</span></li>
                                    <li>Project Budget <span><?=$row['scriptolutionfreemin']?>-<?=$row['scriptolutionfreemax']?></span></li>
                                </ul>
                            </div>
                            <div class="bordertopareamobile"></div>
                            <div class="singtimeframonly" style="border-right:none;">
                                <div class="singletimeopen">
                                    <p> <?php  echo time_left_check($result[0]['time_added']);?></p>
                                    <h4><?php echo open_close($row['time_added']); ?></h4>
                                </div>
                            </div>
                         <?php  $i++; ?>
                            <?php  } ?>
                        </div><!--end single pr time budget -->
                         <?php  } ?>
                        
                        <!-- start view proposal -->
                         <?php foreach($proposal as $row) { ?>     
                        <div class="viewProposalarea">
                            
                            <div class="viewproleftsidebare">
                                <div class="viewpromainavataer">
                                    <a href="" class="viewproavatar"><img src="<?=base_url()?>user_image/<?=$row['profilepicture']?>" class="img-fluid" alt="ken thomas"></a>
                                </div>
                                <div class="viewpropsaltitledesc">
                                    <a href="" class="viewprotitle"><?=$row['username']?></a>
                                    <p>                                  
                                         <?=$row['scriptolutionbidproposal']?> 
                                    </p>
                             
                                    <a href="<?=base_url()?>Award/project/<?=$row['PID']?>/<?=$row['USERID']?> " class="award-project-bt">Award Project</a>
                                </div>
                            </div>
                            <!--end -->
                            
                            
                            <div class="viewprorightsidearea">
                                <span><strong>$165.00</strong></span>
                                <ul>
                                    <li><a href=""><i class="icofont icofont-star"></i></a></li>
                                    <li><a href=""><i class="icofont icofont-star"></i></a></li>
                                    <li><a href=""><i class="icofont icofont-star"></i></a></li>
                                    <li><a href=""><i class="icofont icofont-star"></i></a></li>
                                    <li><a href=""><i class="icofont icofont-star"></i></a></li>
                                </ul>
                                
                                <p>4 reviews</p>
                                
                            </div>
                        </div>
                        <!--end view proposal -->
                         <?php } ?>
                        
                    
                        
                        

                    
                    </div><!--end col md--> 
              
                </div> <!--end row-->
            </div>    
        </div>
      </section>
      <!--end banner sec-->
      
      


