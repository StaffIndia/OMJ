
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="contentheadflex content-header"  id="contentheid">
          <div class="row">
             <div class="col-sm-6">
                 <div class="contenttitle">
                     <h1>
                        IPs
                        <small>IP Banning</small>
                      </h1>
                 </div>
             </div>
            <!-- <div class="col-sm-6">
                 <div class="savechangesbutton">
                      <button type="submit" id="mainform"><i class="fa fa-check-circle"></i>&nbsp;&nbsp;Submit</button>
                  </div>
             </div>-->
         </div>
         <!--end row -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-sm-12">
           <div class="box">
            <div class="box_header_custom box-header">
              <h3 class="box-title">IP Banning</h3>
            </div>
            <div class="managecateshowing">
                 <div class="singlemanacat">
                     <div class="contenttitle">
                         <p><strong> Showing 1 - 1 of 1 IPs </strong></p>
                     </div>
                 </div>
                  <?php  
							
								    $msg=$this->session->flashdata('ip');
								
								    if(!empty($msg)){
								      echo  "  ".$msg;
								    }
                  ?>
               
                 <div class="singlemanacat">
                     <div class="savechangesbutton">
                          <button type="reset" id="">Reset Filter</button>
                          <button type="submit" id="">Search</button>
                      </div>
                 </div>
             </div>
            
            
            <form method="get" enctype="multipart/form-data" action="" id="mainform">   
                <!-- /.box-header -->
                <div class="settingstablebody box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody>
                       
                       
                       <tr class="catmanageheader">
                          <th>ID</th>    
                          <th>Action</th>    
                      </tr>

                       <!-- start tr -->
                        <tr>
                          
                          <td>
                              <div class="settingsinf">
                                  <input type="text">
                              </div>
                          </td>
                          <td>
                          </td>
                        </tr> 
                        <!--end tr -->
                        
                        <!-- start tr -->
                    <?php foreach ($ip as $row)
                    {?>
                        
                        <tr>
                          
                          <td>
                              <div class="settingsinf">
                                  <p> <?php echo $row['ip'];?></p>
                              </div>
                          </td>
                          <td>
                              <div class="settinginfdetails">
                                  <p><a href="<?=base_url()?>/ip/del/<?php echo $row['ip'];?>">Delete</a></p>
                              </div>
                          </td>
                        </tr> 
                    <?php
                    }?>
                        
                        <!--end tr -->
           

                      </tbody>
                    </table>
                    
                    <!-- start pagination -->
                    <div class="paginationtables">
                        <ul>
                            <li><a href="">prev</a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href="">5</a></li>
                            <li><a href="">Next</a></li>
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
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2018 <a href="https://outsourcemyjob.com">OMJ</a>&nbsp;.</strong> All rights
    reserved.
  </footer>


</div>
<!-- ./wrapper -->






