

<!--design-->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="contentheadflex content-header"  id="contentheid">
          <div class="row">
             <div class="col-sm-6">
                 <div class="contenttitle">
                     <h1>
                        Projects
                        <small> Manage Projects</small>
                      </h1>
                 </div>
             </div>
    
         </div>
         <!--end row -->
    </section>

    <!-- Main content -->

    <form method="get" enctype="multipart/form-data" action="<?=base_url()?>Project/index" id="mainform"> 
    <section class="content">
      <div class="row">
        <div class="col-sm-12">
           <div class="box">
            <div class="box_header_custom box-header">
              <h3 class="box-title">Manage Projects</h3>
            </div>
            
            <div class="managecateshowing">
                 <div class="singlemanacat">
                     <div class="contenttitle">
                         <p><strong>  Showing 1 - 18 of 21 Projects </strong></p>
                     </div>
                 </div>
                 <div class="singlemanacat">
                     <div class="savechangesbutton">
                          <button type="reset" id="">Reset Filter</button>
                          <button type="submit" id="">Search</button>
                      </div>
                 </div>
             </div>
            
  
                <!-- /.box-header -->
                <div class="settingstablebody box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody>
                    
                    
                     <colgroup>
                          <col width="100">
                          <col>
                          <col width="150">
                      </colgroup>
                      
                      <tr class="catmanageheader">
                          <th>ID</th>    
                          <th>Title</th>    
                          <th>Employer</th>    
                          <th>Date Created</th>    
                          <th>Active</th>    
                          <th>Action</th>    
                      </tr>
                      
                     
                       <!-- start tr -->
                        <tr>
                          <td>
                               <div class="settingsinf">
                                   <input type="text" placeholder="From">
                                   <input type="text" placeholder="To">
                              </div>
                          </td>
                          <td>
                               <div class="settingsinf">
                                   <input type="text" name="title" placeholder="Projects Title">
                              </div>
                          </td>
                          
                           <td>
                               <div class="settingsinf">
                                   <input type="text" placeholder="Employer Name">
                              </div>
                          </td>
                          
                          <td></td>
                          
                          <td>
                               <div class="settingsinf">
                                   <input type="checkbox" placeholder="">
                              </div>
                          </td>
                          <td> </td>
                          
                          
                        </tr> 
                        <!--end tr -->
<?php foreach($result as $row) { ?>
                        <tr>
                          <td>
                               <?=$row['PID']?>
                          </td>
                          <td>
                               <div class="settingsinf">
                                  <?=$row['scriptolutionfreelancertitle']?>
                              </div>
                          </td>
                          
                           <td>
                               <div class="settingsinf">
                                   <?=$row['username']?>
                                   
                              </div>
                          </td>
                          
                           <td>
                               <div class="settingsinf">
                                  <?php  echo date("F j, Y", $row['time_added']) ?>
                                   
                              </div>
                          </td>
                          <td>
                               <div class="settingsinf">
                                   <?php $status=$row['active'];
                                   if ($status==1) {
                                    	echo "Active";
                                    }
                                    elseif ($status==3) {
                                    	echo "Expired";
                                    }

                                    elseif ($status==6) {
                                    	echo "Deleted";
                                    }
                                    ?>
                              </div>
                          </td>
                           <td>
                              <div class="settinginfdetails">
                                  <p><a href="<?=base_url()?>Project/edit/<?=$row['PID']?>">edit</a> | <a href="<?=base_url()?>Project/delete/<?=$row['PID']?>">Delete</a></p>
                              </div>
                          </td>
                        </tr> 
                        <!--end tr -->
                       <?php }?>
         

                      </tbody>
                    </table>
                    
                    <!-- start pagination -->
                    <div class="paginationtables">
                        <ul>
                            <li><?php
                    
                     echo $this->pagination->create_links(); ?></li>
                           
                        </ul>
                    </div>
                    <!--end paginatioin -->
                    
                    
                    
                </div><!-- box header -->

            </form>
            
            <!-- /.box-body -->
          </div>
          <!-- /.box --> 
        </div>  
          
          
      </div>
      <!-- /.row -->
      <!-- Main row -->


    </section>
    <!-- /.content -->
  </div>
