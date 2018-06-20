

 <?php

/* $posted_time='1527844742';
$a=(strtotime("now"))."<br>"; 
$b=(strtotime("+1 week")); 

echo $a;
echo $b;*/

/*$posted_time = date('2018-05-20');
echo $posted_time."<br>";
$endtime = date('Y-m-d', strtotime($posted_time.'+7 days'));
echo $endtime."<br>";
$today = date('Y-m-d');
echo $today."<br>";
$today=date_create($today);
$endtime=date_create($endtime);
$diff=date_diff($endtime,$today);
$res=$diff->format("%R%a");
echo $res."<br>";

if ($res<=0) {
  echo 'expired';
}
else{
 echo 'not expired';
}*/


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


  
      <!--START MY PROJECTS -->
      <section class="myprojectmainarea forpaddingupdw">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">


                    <div class="allcattitle myprotitle">
                        <h2>My Bids</h2>
                        <a  href="<?=base_url()?>My_bids/">Active Bids</a>
                        <a class="currentitembid" href="">Expired Bids</a>
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
                      if (open_close($row['time_added'])=='Close') { ?>
                     
                      <?php $PID=$row['PID']; ?>
                    <div class="myallopenprodetails">
                        <div class="myallprtitle myallprtitleone">
                           <a href="<?=base_url()?>Single_project_details/view/<?=$row['PID']?>"><?=$row['scriptolutionfreelancertitle']?></a>        
                        </div>
                        
                        <div class="myallprtitle">

                            <!--bids count -->
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

                    <?php } } ?>
                    <!--end my all pro-->
                    
                    <!-- single all pro-->
                
                   
                </div>
            </div> <!--end row-->
            
            
        </div>
      </section>
      <!--END MY PROJECTS -->
      
    