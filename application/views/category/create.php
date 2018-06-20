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
           
            <input class="form-control" type="text" name="name" value="<?=set_value('name')?>" placeholder="Category Name" >
            <div class="error"><?=form_error('name')?></div>
           </div>

          <div class="single_postjobelement">
           
            <input class="form-control" type="text" name="seo"  value="<?=set_value('seo')?>" placeholder="seo" >
            <div class="error"><?=form_error('seo')?></div>
          </div>

              <div class="custom-file">
                <input type="file" name="avatar" class="custom-file-input" id="customfile">
                <label class="custom-file-label" for="customfile">Choose file</label>
             </div>
			 <input style="float: left; margin-top: 6%;" type="submit" name="submit" value="submit">
        </form>

    </div>
</div>
</div>
</div>
</section>
