<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>    

<section class="postajobarea forpaddingupdw">
        <div class="container">


 		<table border="1px">
 			<tr>
 				<th>Id</th>
 				<th>Title</th>
 				<th>Employer</th>
 				<th>Date created</th>
 				<th>Active</th>
 				<th>Action</th>
 				
 			</tr>

 			 <?php foreach($result as $row) { ?>
 			<tr>

 				<td><?=$row['PID']?></td>
 				<td><?=$row['scriptolutionfreelancertitle']?></td>
 				<td><?=$row['username']?></td>
 				<td><?php  echo date("F j, Y", $row['time_added']) ?></td>
 				<td><?=$row['active']?></td>
 				<td><a href="<?=base_url()?>Project/edit/<?=$row['PID']?>">edit</a> 
 					<a href="<?=base_url()?>Project/delete/<?=$row['PID']?>">delete</a> 
 					<a href="<?=base_url()?>Project/delete_permanent/<?=$row['PID']?>">delete forever</a>
 				</td>
 			</tr>
<?php }?>
 		</table>

           </div>

        </div>
</section>