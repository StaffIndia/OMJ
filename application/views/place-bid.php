<?php 


function time_left_check($get_time){

date_default_timezone_set("Europe/London");

$date = strtotime('+7 days',$get_time);

$rem = $date - time();

$day = floor($rem / 86400);
$hr = floor(($rem % 86400) / 3600);
$min = floor(($rem % 3600) / 60);

if($day<0){
$day=0;
}

if($hr<0){
$hr=0;
}
if($min<0){
$min=0;
}
if($min<0&&$hr<0&&$day<0){
$check=false;
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
							
								$msg=$this->session->flashdata('pBidMessage');
								
								if(!empty($msg)){
								echo  $msg;
								}
							?>
                        <div class="singlepdtitle">
                            <h3>Place a Bid</h3>
                        </div>
                        
                        <div class="singlepbudtimearea">
                            <div class="singbudgetonly">
                                <ul>
                                    <li>bids <span><?=$count?></span></li>
                                    <li>Project Budget <span>$<?=$result[0]['scriptolutionfreemin']?>-$<?=$result[0]['scriptolutionfreemax']?></span></li>
                                </ul>
                            </div>
                            <div class="bordertopareamobile"></div>
                            <div class="singtimeframonly" style="border-right:none;">
                                <div class="singletimeopen">
                                    <p><?php  echo time_left_check($result[0]['time_added']);?> </p>
                                    <h4> <?php echo open_close($result[0]['time_added']); ?></h4>
                                </div>
                            </div>
                        
                        </div><!--end single pr time budget -->
                        
                        
                            <!-- start main place bid-->
                         <div class="mainplacebidarea">
                            <form method="post" action="">
                                <div class="placebidarea">
                                    <div class="placebidLabelarea">
                                        <h6>Title of proposal :</h6>
                                    </div>  
                                    

                                    <div class="placebidinputarea">
                                        <div class="deliverinputbox input-group mb-3">
                                            <div class="input-group">
                                              <input type="text" class="form-control"  name="titleOfPro" value="<?=set_value('titleOfPro')?>" >
                                              
                                             
                                            </div>
                                            <div class="error"><?=form_error('titleOfPro')?></div> 
                                        </div>

                                    </div><!--end place a bid-->
                                </div><!--end -->
                                

                                

                                 

                               
                                
								

                                  <div class="placebidarea">
                                    <div class="placebidLabelarea">
                                        <h6>Cover Letter:</h6>
                                    </div>    

                                    <div class="placebidinputarea">
                                        <textarea name="cover_letter" value="<?=set_value('cover_letter')?>" ></textarea>
                                        <div class="error"><?=form_error('cover_letter')?></div> 
                                    </div><!--end place a bid-->
                                     
                                </div><!--end -->
                                
                                <p><strong>Note: The project fee will be taken from your earnings if you get awarded the project.
</strong></p>
                                
                                <div class="bidbuttonarea">
                                    <input  <?php if(open_close($result[0]['time_added'])=="Close") { echo 'type="submit"'; echo 'disabled'; }else { echo 'type="submit"'; }; ?>  value="Place Bid">
                                </div>


                            </form><!--end form-->
                        </div><!--end main -->
                    
                    </div><!--end col md--> 
              
                </div> <!--end row-->
            </div>    
        </div>
      </section>
      <!--end banner sec-->
      
      
