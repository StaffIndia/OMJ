<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>    

<section class="postajobarea forpaddingupdw">
        <div class="container">


<form action="<?php echo site_url('category/search_category');?>" method = "post">
<input type="text" name = "keyword"  placeholder="search category" />
<input type="submit" value = "Search" />
</form>

 		<table border="1px">
 			<tr>
 				<th>Id</th>
 				<th>name</th>
 				<th>update</th>
 				<th>delete</th>
 			</tr>
 <?php foreach($categories as $row) { ?>
 			<tr>
 				<td><?=$row['CATID']?></td>
 				<td><p><?=$row['name']?></p></td>
 				<!-- <td><img src="<?=base_url()?>img/<?=$row['scriptolution_catimage']?>" class="img-fluid"></td> -->
 				<td><a href="<?=base_url()?>category/edit/<?=$row['CATID']?>">update</a></td>
 				<td><a href="<?=base_url()?>category/delete_cat/<?=$row['CATID']?>">delete</a></td>
 			</tr>
<?php }?>
 		</table>

           </div>

        </div>
</section>