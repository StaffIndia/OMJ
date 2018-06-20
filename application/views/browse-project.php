<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
      <section class="brosweprojectsarea forpaddingupdw">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <aside class="browserprosidebar">
                      <form method="get" action="<?=base_url()?>browse_project/index/">
                        <div class="single_browfilter single_browfilterone">
                            
                                <label>Project Name</label>
                                <input type="text" name="pronamefilter" value="<?php if(!empty($_GET['pronamefilter'])) echo $_GET['pronamefilter']; ?>" class="form-control" >
                                <input type="submit" value="search">
                   
                        </div><!--end single br filter -->
                        
                        <div class="single_browfilter">
                         
                                <label>Category</label>
                                 <select name="category" class="custom-select">
                                  <option value="">Select a category</option>
								  <?php foreach($category as $cat){ ?>
                                  <option <?php if(!empty($_GET['category'])&&($_GET['category']==$cat['CATID'])){ echo 'selected'; } ?> value="<?=$cat['CATID']?>"><?=$cat['name']?></option>
                                  <?php } ?>
                                </select>
                     
                      
                        </div><!--end single br filter -->
                        
                        <div class="single_browfilter">
                        
                                <label>Skills</label>
                                 <select name="skill1"class="custom-select" id="selecskillone">
                                    <option value="" >Select Skills</option>
									<?php foreach($skill as $sk){ ?>
									<option <?php if(!empty($_GET['skill1'])&&($_GET['skill1']==$sk['scriptolutionskill'])){ echo 'selected'; } ?> value="<?=$sk['scriptolutionskill']?>" ><?=$sk['scriptolutionskill']?></option>
									<?php } ?>
                                </select>
                                
                                 <select name="skill2"class="custom-select" id="selecskillone">
                                    <option value="" >Select Skills</option>
									<?php foreach($skill as $sk){ ?>
									<option <?php if(!empty($_GET['skill2'])&&($_GET['skill2']==$sk['scriptolutionskill'])){ echo 'selected'; } ?> value="<?=$sk['scriptolutionskill']?>" ><?=$sk['scriptolutionskill']?></option>
									<?php } ?>
                                </select>
                                
                                <select name="skill3"class="custom-select" id="selecskillone">
                                    <option  value="" >Select Skills</option>
									<?php foreach($skill as $sk){ ?>
									<option <?php if(!empty($_GET['skill3'])&&($_GET['skill3']==$sk['scriptolutionskill'])){ echo 'selected'; } ?> value="<?=$sk['scriptolutionskill']?>" ><?=$sk['scriptolutionskill']?></option>
									<?php } ?>
                                </select>
                     
                        </div><!--end single br filter -->
                        
                        
                        <div class="single_browfilter">
                         
                                <label>Delivery Time</label>
                                 <select name="delivery" class="custom-select">
									<option value="">Any</option>
                                    <option <?php if(!empty($_GET['delivery'])&&($_GET['delivery']==1)){ echo 'selected'; } ?> value="1">Up to 1 Day</option>
                                    <option <?php if(!empty($_GET['delivery'])&&($_GET['delivery']==3)){ echo 'selected'; } ?> value="3">Up to 3 days</option>
                                    <option <?php if(!empty($_GET['delivery'])&&($_GET['delivery']==5)){ echo 'selected'; } ?> value="5">Up to 5 days</option>
                                    <option <?php if(!empty($_GET['delivery'])&&($_GET['delivery']==7)){ echo 'selected'; } ?> value="7">Up to 7 days</option>
                                    <option <?php if(!empty($_GET['delivery'])&&($_GET['delivery']==14)){ echo 'selected'; } ?> value="14">Up to 14 days</option>
                                    
                    
                                </select>
                     
                         
                        </div><!--end single br filter -->
                        
                        <div class="single_browfilter">
                       
                                <label>Budget</label>
                                 <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                  </div>
                                  <input type="text" class="form-control" name="minamount" value="<?php if(!empty($_GET['minamount'])) echo $_GET['minamount']; ?>" aria-label="Amount (to the nearest dollar)" placeholder="Minimum Amount">
                                </div>
                                
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                  </div>
                                  <input type="text" class="form-control" name="maxamount" value="<?php if(!empty($_GET['maxamount'])) echo $_GET['maxamount']; ?>" aria-label="Amount (to the nearest dollar)" placeholder="Maximum Amount">
                                </div>
                                
                               
                     
                        </div><!--end single br filter -->
                          
                           <input type="submit" value="filter" class="filteringsubmitb">
                                <a href="<?=base_url()?>browse_project"><input type="button" value="reset all filters" class="resetallfilters"></a>
                        
                        
                        </form>
                    </aside>          
                </div><!--end col md 4-->   
                
                <div class="col-lg-8">
                    <section class="browseProRightarea">
                        <div class="brofiltitlearea">
                            <h2>Projects</h2>
                        </div>
                        
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
                        
						<?php foreach($results as $res) {?>
                        <div class="browfilteringsin singleRecentJpostarea">
                             <div class="browerecentsingarea recentproarealeft">
                                 <div class="singleRproarea">
                                    <h3><a href=""><?=$res['scriptolutionfreelancertitle']?></a></h3>
                                    <div class="singleSkills">
										
									       </div> 

                                     <div class="singleRprodetails">
                                         <ul>
											<li><i class="icofont icofont-clock-time"></i> <span>Posted</span><?=time_elapsed_string('@'.$res['time_added'].'');?></li>
											<li><i class="icofont icofont-social-google-map"></i> <span>Remote</span></li>
											<li><i class="icofont icofont-check-circled"></i> <span>Proposal</span>20</li>
											<li><i class="icofont icofont-tools"></i> <span>Experience</span><?=$res['experience']?></li>
											<li><i class="icofont icofont-delivery-time"></i><span>Delivery Time</span><?=$res['scriptolutionfreelancerdays']?> days</li>
										</ul>
                                     </div>


                                </div>
                            </div><!--end-->
                           <aside class="recentsidebarjob">
                               <div class="singleRjpostarea">
                                    <ul>
                                        <li><i class="icofont icofont-cur-dollar"></i> <span class="pricefsize"><?=$res['scriptolutionfreemin']?></span> - <i class="icofont icofont-cur-dollar"></i><span class="pricefsize"><?=$res['scriptolutionfreemax']?></span></li>
                                        <li class="pricecategoryara"> &nbsp </li>

                                    </ul>
									<?php if($this->session->userdata('userid')) { ?>
                                    <a href="<?=base_url()?>place_bid/bid/<?=$res['PID']?>"><button>Place Bid</button></a>
									<?php }else{ ?>
									  <a href="<?=base_url()?>login"><button>Place Bid</button></a>
									<?php } ?> 
                                </div>
                            </aside>
                       </div><!--end singe recent job -->
					   
					   <?php } ?>
                        
                   </div><!--end singe recent job -->
                        
                        
                    </section>  <!--end sec-->     
                    
                    <div class="paginationList">
                      <?php echo $this->pagination->create_links(); ?>
                    </div>
                    
                    
                    
                </div><!--end col md 8--> 
              
            </div>  
        </div>
      </section>
      <!--end banner sec-->
      
      

