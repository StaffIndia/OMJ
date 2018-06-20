
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
                 <div class="single_postjobelement">
                  
             <select name="status" class="custom-select">
            <option value="1">Active</option>
            <option value="2">Not Active</option>
            <option value="3">Expired</option>
            <option value="4">Closed</option>
            <option value="5">Bid Accepted</option>
            <option value="6">Deleted</option>
             </select>
                </div>               
               <div class="settingspagesingelinfo single_postjobelement">
              <p>date  <?php echo date("F j, Y", $result[0]['time_added']) ?></p>

               </div>

              <div class="settingspagesingelinfo single_postjobelement">
              <p>ip posted with <?php echo $result[0]['pip'] ?></p>

               </div>




               <div class="settingspagesingelinfo single_postjobelement">
              <input class="form-control" type="name" name="produration" placeholder=" Duration" value="<?php if(set_value('produration')){ echo set_value('produration'); }else { echo $result[0]['scriptolutionfreelancerdays']; } ?>" >
                               
                <div class="error"><?=form_error('produration')?></div>
               </div>

               <div class="settingspagesingelinfo single_postjobelement">
              <input class="form-control" type="name" name="minbudget" placeholder=" Maximum Budget" value="<?php if(set_value('minbudget')){ echo set_value('minbudget'); }else { echo $result[0]['scriptolutionfreemin']; } ?>" >
                               
                <div class="error"><?=form_error('minbudget')?></div>
               </div>


               <div class="settingspagesingelinfo single_postjobelement">
              <input class="form-control" type="name" name="maxbudget" placeholder=" Maximum Budget" value="<?php if(set_value('maxbudget')){ echo set_value('maxbudget'); }else { echo $result[0]['scriptolutionfreemax']; } ?>" >
                               
                <div class="error"><?=form_error('maxbudget')?></div>
               </div>

             <div class="settingspagesingelinfo single_postjobelement">

              <input class="form-control" type="name" name="proname" placeholder=" project name" value="<?php if(set_value('proname')){ echo set_value('proname'); }else { echo $result[0]['scriptolutionfreelancertitle']; } ?>" >
                               
                <div class="error"><?=form_error('proname')?></div>
               </div>


             <div class="settingspagesingelinfo single_postjobelement">

              <input class="form-control" type="name" name="describepro" placeholder=" Description" value="<?php if(set_value('scriptolutionfreelancerdesc')){ echo set_value('scriptolutionfreelancerdesc'); }else { echo $result[0]['scriptolutionfreelancerdesc']; } ?>" >
                               
                <div class="error"><?=form_error('describepro')?></div>
               </div>



                <div class="single_postjobelement">
                        
                        <select name="category" class="custom-select">
                         
                  <?php foreach($categories as $result){?>
                                    <option <?php if(set_value('category')==$result['CATID']){ echo "selected";} elseif ($result['CATID']==$skills[0]['scriptolutionparent']){ echo "selected"; } ?> value="<?=$result['CATID']?>"><?=$result['name']?></option>

                                    
                  <?php } ?>


                     </select>
              </div>

              <div >
                <select class="multipleSelect" placeholder="What skills are required?" multiple name="scriptolutionfreelancerskills[]" >
                    
                    <?php if(set_value('scriptolutionfreelancerskills')){
                      
                      foreach ($this_value as $test){
                      
                      echo '<option  value="'.$test.'" selected>'.$test.'</option>';                    
                      }
                    }

                    else{
                      echo $result[0]['scriptolutionfreelancerskills'];
                    }

                    ?>
                    
                     <?php foreach($skills as $result2){?>
                    <option  value="<?=$result2['scriptolutionskill']?>" ><?=$result2['scriptolutionskill']?></option>
                    <?php } ?>
                     
              </select>
              </div>

         <input type="submit" name="submitform" value="submit">
                
            </form>
                    </div>
                </div><!--end col-->    
              
            </div>  
        </div>
      </section>
      <!--end banner sec-->
      
      