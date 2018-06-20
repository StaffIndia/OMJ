
      
      <section class="browsecatareamain forpaddingupdw">
          <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="allcattitle">
                        <h2> Browse all Categories </h2>
                    </div>
                </div>
            </div><!--end row -->
            
             <div class="row">
                <div class="col-sm-12">
                <?php foreach($categories as $row) { ?> 
                    <div class="singleProCat singleProCat2">
                        <h4><?=$row['name']; $catid=$row['CATID'] ?></h4>
                        <ul>

                          <?php foreach($skillscriptolution as $row) { 

                             $parentid=$row['scriptolutionparent']; 

                             if ($parentid == $catid) { ?>

                            <li><a href="<?=base_url()?>browse_project/?skill1=<?=$row['scriptolutionskill']?>"><i class="icofont icofont-hand-drawn-right"></i><?=$row['scriptolutionskill']?></a></li>
                            <?php } }?>
                        </ul> 
                    </div><!--end singe cat --> 
                    <?php } ?> 
                 </div>
              </div>
          </div>
      </section>
      
