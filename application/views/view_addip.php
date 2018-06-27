<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="contentheadflex content-header"  id="contentheid">
          <div class="row">
             <div class="col-sm-6">
                 <div class="contenttitle">
                     <h1>
                        IPs
                        <small>Add IP</small>
                      </h1>
                 </div>
             </div>
            <div class="col-sm-6">
<!--
                 <div class="savechangesbutton">
                      <button type="submit" id="mainform"><i class="fa fa-check-circle"></i>&nbsp;&nbsp;Submit</button>
                  </div>
-->
             </div>
         </div>
         <!--end row -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-sm-12">
           <div class="box">
            <div class="box_header_custom box-header">
              <h3 class="box-title">Add IP</h3>
            </div>
            
            <form method="post">   
                <!-- /.box-header -->
                <div class="settingstablebody box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td></td>
                            <td>
                                 <?php  
							
								    $msg=$this->session->flashdata('addip_status');
								
								    if(!empty($msg)){
								      echo  "  ".$msg;
								    }
							     ?>
                        
                            
                            
                            
                            </td>
                            <td>
                               
                            </td>
                        </tr>
                       
<!--                    required pattern="^([0-9]{1,3}\.){3}[0-9]{1,3}$"-->
                        
                        <!-- start tr -->
                        <tr>
                         
                         <td>IP</td>
                          
                          <td>
                              <div class="settingsinf">
                                  <input type="text" placeholder="192.168.6.17" name="addIp" value="<?php echo set_value('addIp'); ?>">
                                  <div class="error"><?=form_error('addIp')?></div>
                                  
                              </div>
                          </td>
                          <td>
                              <div class="settinginfdetails">
                                  <span>[IP YOU WANT TO BAN]</span>
                              </div>
                              <div class="savechangesbutton">
                               <button type="submit" id="mainform"><i class="fa fa-check-circle"></i>&nbsp;&nbsp;Submit</button>
                               </div>
                          </td>
                        </tr> 
                        <!--end tr -->
           

                      </tbody>
                      
                    </table>
                    
                    <!-- start pagination -->
<!--
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
-->
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






