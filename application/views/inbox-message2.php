
      
      <!--START AWAREDE PROJECTS -->
      <section class="awardedProjectarea forpaddingupdw">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="awardedProjleftside">
                        <div class="allcattitle awaredeprotitle">
                            <h2>Conversations Inbox</h2>
                            <span>Communicate with other users</span>
                        </div><!--end my pro title-->
                     
                        
                        
                        
                          <div class="inboxMessageallinfo">
                                <div class="inboxmeleftside">
                                    <a class="currmessage" href="">all</a>
                                    <a href="">unread</a>
                                    <a href="">Archived</a>
                                </div>
                                <div class="inboxmerightside">
                              
                                      
                                      <?php
                                          $id=$this->session->userdata('userid');
                                          $name=$this->session->userdata('fname');
                                          $names=array();
                                          $id=array();
                                          $i=0;
                                          $j=0;   
                            foreach($res as $res){
                                         
                                 if($res['auser']==$name){
                                              
                                          }else{   
                                              $names[$i++] = $res['auser'];
                                                $id[$j++] = $res['auserid']; 
                                              
                                              
                                             
                                              
                                          }
                                          if($res['buser']==$name){
                                              
                                          }else{
                                              $names[$i++] = $res['buser'];
                                              $id[$j++] = $res['buserid']; 
                                             
                                          }
                            }
                                $fName=array_unique($names);
                                $userId=array_unique($id);
                                  
                                   
                                      ?>  
                                    <select class="custom-select">
                                        <?php
                                           foreach($fName as $fname)
                                               echo "<option>".$fname."</option>";
                                        
                                        ?>
                                    </select>
                                </div>
                            </div>

                        <!-- start awarded pro status -->
                        <div class="awardedProcstausmain">
                            
                            <div class="awardedProcstaus">
                                <div class="awardedorcrstautitle">
                                    <a href="">Recipient</a>
                                </div>
                                <div class="awardedorcrstautitle">
                                    <a href=""><i class="icofont icofont-caret-down"></i>&nbsp;Updated</a>
                                </div>
                            </div>
                            <!--end award pro status -->
                            
                            <div class="awardedorcrestDescri">
                                <p> 
                                <?php
                                   
                                    for($i=0;$i<sizeof($fName);$i++){
                                        echo  "<a>".$fName[$i]."</a>"." ";
                                        echo "ID".$userId[$i];  
                                        echo "<br>";
                                        
                                    }
                                   
                                   
                                ?>
                                
                                
                                </p>
                            </div>
                                    
                        </div><!--end awareded main -->
                        
                        
                        
                        
                    </div>
                </div><!--end col 8 -->
                
                 <div class="col-md-4 col-lg-3">
                    <aside class="awardedSidebar">
                        
                        <div class="awardesidepostajob">
                            <a href="post-a-job.html">Post a Job</a>
                        </div>
                        
                        <div class="awardedemenulist">
                            <h5>Employer</h5>
                            <ul>
                                <li><a href="<?=base_url()?>My_projects">open projects</a></li>
                                <li><a href="<?=base_url()?>awarded-projects">Awarded Projects</a></li>
                                <li><a href="payments.html">payment</a></li>
                            </ul>
                        </div>
                        
                         <div class="awardedemenulist">
                            <h5>Profile</h5>
                            <ul>
                                <li><a href="<?=base_url()?>setting">Settings</a></li>
                                <li><a href="membership.html">Membership</a></li>
                            </ul>
                        </div>
                        
                        
                        
                        
                        
                        
                    </aside>
                </div>
                
                
            </div>  
        </div>
      </section>
      <!--END AWAREDE PROJECTS -->
      
    
      
    