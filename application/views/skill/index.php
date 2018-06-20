<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>    

<section class="postajobarea forpaddingupdw">
        <div class="container">


<form action="<?php echo site_url('Skill/search');?>" method = "post">
<input type="text" name = "keyword"  placeholder="search for skill" />
<input type="submit" value = "Search" />
</form>

 		<table border="1px">
 			<tr>
 				<th>Id</th>
 				<th>name</th>
 				<th>update</th>
 				<th>delete</th>
 			</tr>
 <?php foreach($skills as $row) { ?>
 			<tr>
 				<td><?=$row['SCRIPTOLUTIONSKID']?></td>
 				<td><p><?=$row['scriptolutionskill']?></p></td>
 				<td><a href="<?=base_url()?>Skill/edit/<?=$row['SCRIPTOLUTIONSKID']?>">update</a></td>
 				<td><a href="<?=base_url()?>Skill/delete/<?=$row['SCRIPTOLUTIONSKID']?>">delete</a></td>
 			</tr>
<?php }?>
 		</table>

           </div>

        </div>
</section>