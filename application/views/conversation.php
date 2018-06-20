
      <!--START AWAREDE PROJECTS -->
      <section class="awardedProjectarea forpaddingupdw">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-10 offset-md-1">
                      <div class="conversationmainarea">
                        <div class="awardedProjleftside">
                            <div class="allcattitle conversattintile">
                                <h2>Conversation with <a  href="">Derak</a></h2>
                            </div><!--end my pro title-->
							
							<?php  
							
								$msg=$this->session->flashdata('message');
								
								if(!empty($msg)){
								echo  $msg;
								}
							?>	

                        </div>


                        <div class="conversationall">
							
                            <div class="hidefrominbox">
                                <a href=""> Hide from Inbox (archive) </a>
                                <p> Started May 24, 2018 • Last update by nigel1 </p>
                            </div>    
							
							
							<?php  foreach($result as $row) { ?>
							
							<?php if($this->session->userdata('userid')==$row['MSGTO']){ ?>
							  <div class="singleConversationbuyer">
							<?php } else {  ?>
							   <div class="singleConversationfre">
							<?php } ?>
                                <div class="singleconleft">
                                    <a href=""><img src="<?=base_url()?>user_image/<?=$row['bpic']?>" class="img-fluid"></a>
                                   <h6><?=$row['buser']?></h6>
                                    <p><?=$row['message']?></p>
                                    <p><?php if(!empty($row['scriptolutionfreelancertitle'])){ echo "Project Name:".$row['scriptolutionfreelancertitle']; }?></p>
                                    <a download href="<?=base_url()?>user_file/<?=$row['fname']?>"><?=$row['fname']?></a>
                                </div>

                                <div class="singlecoright">
								
							<?php if($this->session->userdata('userid')!=$row['MSGTO']){}else{ ?>
								<?php if(empty($row['RID'])){ ?>
                                    <a href="<?=base_url()?>conversation/report/<?=$row['MSID']?>/<?=$id?>">report spam or misuse</a>
                                   <?php } ?>
								   
								  <?php  } if(!empty($row['RID'])){  ?>
								   <a href=""><i class="icofont icofont-warning">Spam Message</i></a>
								  <?php } ?>
									<p>
									
									<?php 
									
										echo date('M d, Y  h:i:s ',$row['mtime']);
								
									?>
									
									</p>
                                </div>

                            </div><!--end single con -->
							
							<?php  } ?>
                            
                            
                            
                        </div>


                        <div class="conversationmessboxx">
                           <form method="post" action="<?=base_url()?>Conversation/user/<?=$id?>" enctype='multipart/form-data' >
                                 <textarea name="message" placeholder="Message" ><?=set_value('message')?></textarea>
								  <div class="error"><?=form_error('message')?></div>
                                
                                
                                 <div class="confilearea custom-file">
                                    <input type="file" name="avatar" class="custom-file-input" id="cfile">
                                    <label class="custom-file-label" for="cfile">Add a File Attachment</label>
									  <div class="error"><?=form_error('avatar')?></div>
                                  </div>
								  
								   <input type="submit" name="submit" value="Submit">
                            </form>
                        </div>
						
						<div class="paginationList">
						<?php echo $this->pagination->create_links(); ?>
						</div>

                    </div>
                </div><!--end col 8 -->
                
            </div>  
        </div>
      </section>
      <!--END AWAREDE PROJECTS -->
      
    
    