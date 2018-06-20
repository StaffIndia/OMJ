<?php
defined('BASEPATH') OR exit('No direct script access allowed');


if($this->session->userdata('user_type')) {
    
         $userType=$this->session->userdata('user_type');
}else {
    
         $userType="front";

}


date_default_timezone_set("Europe/London");

function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}





?>


      
      
      <?php  if($userType=="front"){ ?>  
      <section class="bannerarea forpaddingupdw">
     
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="bannerinnform">
                        <h1>Outsource My Job</h1>
                        <p> Hire expert freelancers for your online job. Turn your ideas into reality.</p>
                        <div class="searchformbanner">
                            <form method="get" action="<?=base_url()?>browse_project?">
                                <input type="search" name="pronamefilter"  placeholder="Search Your Projects">
                                <button type="submit" class="submitbutton">find projects</button>
                            </form>
                        </div>
                   
                    </div>
                </div>
            </div>  
        </div>
      </section>

   <!--end banner sec-->
<?php  } if($userType=="hire"|| $userType=="work" || $userType=="front"){ ?>
      
      
      
      <section class="allcategoriesarea forpaddingupdw">
        <div class="container">
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="allcattitle">
                         <h2> Hire Freelancers. Find Freelance Jobs.</h2>    
                        <p>Work with someone perfect for your project.</p>
                    </div>
                </div>
            </div>
            <!--end row-->
            <!-- start row-->
			<div class="row marginRow">
           <?php foreach($categories as $row) { ?>
		   
                <div class="col-sm-6 col-md-3">
                    <div class="single_catarea">
                        <figure>
                            <a href="<?=base_url()?>browse_project?category=<?=$row['CATID']?>"><img src="<?=base_url()?>img/<?=$row['scriptolution_catimage']?>" class="img-fluid"></a>
                        </figure>
                        <h5><a href="<?=base_url()?>browse_project?category=<?=$row['CATID']?>"><?=$row['name']?></a></h5>
                    </div>
                </div><!--end col-md-3-->
		   <?php }?>
            </div>
            
          
            
             <div class="row marginRow">
                <div class="col-sm-12">
                    <div class="allcategorieslink">
                         <a href="<?=base_url()?>Browse_categories" class="seecatbutton">Browse all categories</a>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
      </section>
      <!--end sec-->
          
      
      <section class="recentlypostedarea forpaddingupdw">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="allcattitle">
                         <h2> Recently Posted Projects</h2>  
                           
                    </div>
                </div><!--end col- 12-->
            </div> <!--end row-->
            
            <div class="row marginRow">
                <div class="col-sm-12">
                    <div class="recentjobfiltering">
                        <div class="filteringtitle">
                            <span>filter by:</span>
                        </div>
                        <div class="filteringdetailsb">
                            <a href="">date</a>
                            <a href="">popularity</a>
                            <a href="">budget</a>
                        </div>
                    </div>
                </div>
            </div>
            
         <?php foreach($scriptolutionprojects as $row) { ?>
            
            <div class="row marginRow">
               <div class="col-md-12">
                   <div class="singleRecentJpostarea">
                         <div class="recentproarealeft">
                             <div class="singleRproarea">

                                <h3><a href="Single_project_details/view/<?=$row['PID']?>"><?=$row['scriptolutionfreelancertitle']?></a></h3>
                   
                   <?php $PID=$row['PID']; ?>           

                  <?php  
                    
                    $new_array=array();
                    $new_array=explode(",",$row['scriptolutionfreelancerskills']); ?>
                    

                    <div class="singleSkills">

							<?php foreach($new_array as $links) {
										
										?>
                                        <span><a href="<?=base_url()?>/browse_project/?skill1=<?=$links ?>"><?=$links ?></a></span>
										<?php }?>
                      </div> 

                                 <div class="singleRprodetails">
                                    <ul>
                                        <li><i class="icofont icofont-clock-time"></i> <span>Posted</span><?=time_elapsed_string('@'.$row['time_added'].'');?></li>
                                        <li><i class="icofont icofont-social-google-map"></i> <span>Remote</span></li>
                                        <li>

     <?php  
        $bids=0; 
        foreach($scriptolutionprojectbids as $row2) { 
               
                 $bids_PID=$row2['PID']; 
                 if ($PID == $bids_PID) {
                     
                    $bids++;                 
                } 
              }?> 
                                        <i class="icofont icofont-check-circled"></i> <span>Proposal</span><?php echo $bids; ?></li>
                                        <li><i class="icofont icofont-tools"></i> <span>Experience</span><?=$row['experience']?></li>
                                        <li><i class="icofont icofont-delivery-time"></i><span>Delivery Time</span><?=$row['scriptolutionfreelancerdays']?> days</li>
                                     </ul>
                                 </div>


                            </div>
                        </div><!--end-->
                       <aside class="recentsidebarjob">
                           <div class="singleRjpostarea">
                                <ul>
                                    <li><i class="icofont icofont-cur-dollar"></i><span class="pricefsize"><?=$row['scriptolutionfreemin']?>-<?=$row['scriptolutionfreemax']?></span></li>
                                    <li class="pricecategoryara">&nbsp </li>
                                    
                                </ul>
                                <button>Place Bid</button>
                            </div>
                        </aside>
                   </div><!--end singe recent job -->
                   <?php }?>
                   
                   
                   
                    
                   
                </div><!--end -->
             
            </div><!--end row-->
            
            
            
        </div>
      </section>
      <!-- END RECENT JOBS CATEGORIES -->
       <?php } //end if?>
    