			<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>    

<section class="postajobarea forpaddingupdw">
        <div class="container">
		
					
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
					
                    <div class="postajobareainner">
	
		<?php  
				
					$msg=$this->session->flashdata('message');
					$msg2=$this->session->flashdata('message');
					
					if(!empty($msg)){
					echo  $msg;
					}

		?>			


        <form method="post" action="" enctype="multipart/form-data" >

        


          <div class="single_postjobelement">
           
            <input class="form-control" type="text" name="scriptolutionskill" value="<?=set_value('scriptolutionskill')?>" placeholder="Skill Name" >
            <div class="error"><?=form_error('scriptolutionskill')?></div>
           </div>

          <div class="single_postjobelement">
           
            <input class="form-control" type="text" name="scriptolutionseo"  value="<?=set_value('scriptolutionseo')?>" placeholder="seo" >
            <div class="error"><?=form_error('scriptolutionseo')?></div>
          </div>

            <div class="single_postjobelement">
                        
                        <select name="category" class="custom-select">
                          <option selected value="">Select a category for this skill</option>
                  <?php foreach($categories as $result){?>
                                    <option <?php if(set_value('category')==$result['CATID']){ echo 'selected'; } ?> value="<?=$result['CATID']?>"><?=$result['name']?></option>
                  <?php } ?>
                                </select>
            </div><!--end single job element-->

			 <input style="float: left; margin-top: 6%;" type="submit" name="submit" value="submit">
        </form>

    </div>
</div>
</div>
</div>
</section>
