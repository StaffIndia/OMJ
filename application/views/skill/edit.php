
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
                  
                   <input class="form-control" type="name" name="scriptolutionskill" placeholder="update skill" value="<?php if(set_value('scriptolutionskill')){ echo set_value('scriptolutionskill'); }else { echo $skills[0]['scriptolutionskill']; } ?>" >
                               
                <div class="error"><?=form_error('scriptolutionskill')?></div>
               </div>


              <div class="settingspagesingelinfo single_postjobelement">
                
                <input class="form-control" type="name" name="scriptolutionseo" placeholder="seo" value="<?php if(set_value('scriptolutionseo')){ echo set_value('scriptolutionseo'); }else { echo $skills[0]['scriptolutionseo']; } ?>" >
                               
                <div class="error"><?=form_error('scriptolutionseo')?></div>
               </div>

                <div class="single_postjobelement">
                        
                        <select name="category" class="custom-select">
                         
                  <?php foreach($categories as $result){?>
                                    <option <?php if(set_value('category')==$result['CATID']){ echo "selected";} elseif ($result['CATID']==$skills[0]['scriptolutionparent']){ echo "selected"; } ?> value="<?=$result['CATID']?>"><?=$result['name']?></option>

                                    
                  <?php } ?>


              </select>
            </div><!--end single job element-->
                    
       <input style="float: left; margin-top: 6%;" type="submit" name="submit" value="submit">
                
            </form>
                    </div>
                </div><!--end col-->    
              
            </div>  
        </div>
      </section>
      <!--end banner sec-->
      
      