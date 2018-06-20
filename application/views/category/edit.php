
      <section class="postajobarea forpaddingupdw">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="postajobareainner">
                      
              <?php  
              
                $msg=$this->session->flashdata('message');
                
                if(!empty($msg)){
                echo  $msg;
                }
              ?>            
             <form method="post" action="" enctype='multipart/form-data' >
                            
                <div class="settingspagesingelinfo single_postjobelement">
                  
                                <input class="form-control" type="name" name="name" placeholder="name" value="<?php if(set_value('name')){ echo set_value('name'); }else { echo $categories[0]['name']; } ?>" >
                               
                <div class="error"><?=form_error('name')?></div>
               </div>


              <div class="settingspagesingelinfo single_postjobelement">
                
                <input class="form-control" type="name" name="seo" placeholder="seo" value="<?php if(set_value('seo')){ echo set_value('seo'); }else { echo $categories[0]['seo']; } ?>" >
                               
                <div class="error"><?=form_error('seo')?></div>
               </div>
                    
              <div class="custom-file">
                <input type="file" name="avatar" class="custom-file-input" id="customfile">
                <label class="custom-file-label" for="customfile">Choose file</label>
             </div>
       <input style="float: left; margin-top: 6%;" type="submit" name="submit" value="submit">
                
            </form>
                    </div>
                </div><!--end col-->    
              
            </div>  
        </div>
      </section>
      <!--end banner sec-->
      
      