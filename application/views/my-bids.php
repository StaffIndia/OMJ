<?php function open_close($get_time){

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

      
      <!--START MY PROJECTS -->
      <section class="myprojectmainarea forpaddingupdw">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">


                    <div class="allcattitle myprotitle">
                        <h2>My Bids</h2>
                        <a class="currentitembid" href="">Active Bids</a>
                        <a href="<?=base_url()?>My_bids/expired/">Expired Bids</a>
                    </div><!--end my pro title-->
                     <?php 
                     if(!empty($mybids)){ ?> 
                        <div class="myprojecaltileopenpro">
                        <div class="myprsinglttile myprsinglttileone">
                            <h5>Project</h5>
                        </div>
                        
                        <div class="myprsinglttile">
                            <h5>bids</h5>
                        </div>
                        
                        <div class="myprsinglttile">
                            <h5>actions</h5>
                        </div>
                        
                    </div>

                     <?php } 


                      else{ ?>
                     <br> <br>
                     <div class="alert alert-success">
                    <p><strong>your Bid list is empty!</strong></p>
                      </div>
                    <?php }  ?> 
       
                    <!--end my projects all -->
                    
                    
                    <!-- single all pro-->
                    <?php
                    foreach($mybids as $row) { 
                    if (open_close($row['time_added'])=='Open') { ?> 


                      <?php $PID=$row['PID']; ?>
                    <div class="myallopenprodetails">
                        <div class="myallprtitle myallprtitleone">
                           <a href="<?=base_url()?>Single_project_details/view/<?=$row['PID']?>"><?=$row['scriptolutionfreelancertitle']?></a>
                        </div>
                        

                        <div class="myallprtitle">

                        <?php  
                        $bids=0; 
                        foreach($bidscnt as $row) { 
                               
                                 $bids_PID=$row['PID']; 

                                 if ($PID == $bids_PID) {
                                     
                                    $bids++;
                                     
                                    
                                }
                        }?> 


                            <span><?php echo $bids; ?></span>
                        </div>
                        
                        <div class="myallprtitle">
                           <?php echo anchor('My_bids/delete_row?id='.$PID, 'Delete Bid', 'id="$PID"'); ?>
                        </div>
                    </div>

                    <?php } }
                    ?>
                    <!--end my all pro-->
                    
                    <!-- single all pro-->
                
                      

                </div>
            </div> <!--end row-->

                    <div class="paginationList">
                 
                   <?php
                    
                     echo $this->pagination->create_links(); ?>

                    </div>

                  

            
            
        </div>


      </section>

      <!--END MY PROJECTS -->
      
    