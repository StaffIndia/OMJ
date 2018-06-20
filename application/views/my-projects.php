
    
     
      <!--START MY PROJECTS -->
      <section class="myprojectmainarea forpaddingupdw">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="allcattitle myprotitle">
                        <h2>My Projects</h2>
                        <a class="currentitembid" href="my-projects.html">Open for Bidding</a>
                        <a href="">Awarded Projects</a>
                    </div><!--end my pro title-->
   
    <?php 
     if(!empty($scriptolutionprojects)){ ?>

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
                    <!--end my projects all -->

        <?php }

             else{ ?>
                     <br> <br>
                     <div class="alert alert-success">
                     <strong>Sorry!</strong> You did not post any job yet
                      </div>
        <?php }  ?> 
       

 <?php foreach($scriptolutionprojects as $row) { ?>                   
                    
                    <!-- single all pro-->
                    <div class="myallopenprodetails">
                        <div class="myallprtitle myallprtitleone">
                            <?php $PID=$row['PID']; ?>

                            <a href="<?=base_url()?>Single_project_details/view/<?=$row['PID']?>"><?=$row['scriptolutionfreelancertitle']?></a>
                        </div>
  <?php  

        $bids=0; 
        foreach($scriptolutionprojectbids as $row) { 
               
                 $bids_PID=$row['PID']; 
                 if ($PID == $bids_PID) {
                     
                    $bids++;
                     
                    
                }


  ?>                        


   <?php }?>  

                     <div class="myallprtitle">
                            <span><?php echo $bids; ?></span>
                       </div>

                        
                        <div class="myallprtitle">

                            <?php echo anchor('View_proposal/view/'.$PID, 'View Proposals', 'id="$PID"'); ?>

                              <?php echo anchor('My_projects/delete_row?id='.$PID, 'delete', 'id="$PID"'); ?>
  
                            <a href="">Close</a>
                        </div>
                    </div>

      <?php } ?>

                </div>
            </div>  
        
                    <div class="paginationList">
                 
                   <?php
                    
                     echo $this->pagination->create_links(); ?>

                    </div>

        </div>


      </section>

      