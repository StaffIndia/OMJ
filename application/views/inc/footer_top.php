<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    
    <section class="browsetopcatarea forpaddingupdw">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="allcattitle brtsjtitle">
                         <h2> Browse Top Skills Jobs</h2>  
                           
                    </div>
                </div><!--end col- 12-->
            </div> <!--end row-->
         
            <div class="row marginRow">
               <?php foreach($skillscriptolution as $row) { ?>   
                <div class="col-sm-6 col-md-3">

                    <div class="single_brtocatarea">

                        <ul>
                            <li><a href="<?=base_url()?>/browse_project/?skill1=<?=$row['scriptolutionskill']?>"><i class="icofont icofont-hand-drawn-right"></i><?=$row['scriptolutionskill']?></a></li> 
                        </ul>
                    </div>

                </div><!--end col3--> 
                 <?php }?> 
            </div>
             
              
        </div>
      </section>
      <!--end banner sec-->   
      