<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include_once('header.php');?>

	<div class="container">
		<h3 style="text-align: center;">List Items</h3>

		<?php if($msg = $this->session->flashdata('msg')):?>
			<?php echo $msg; ?>
		<?php endif;?>
		<table class="table table-hover">
		  <thead>
		    <tr>
		      <!-- <th scope="col">Type</th> -->
		      <th scope="col">Item Id</th>
		      <th scope="col">Title</th>
		      <th scope="col">Price</th>
		      <th scope="col">Date_modified</th>
		       <!-- <th scope="col">Action</th> -->
		    </tr>
		  </thead>
		  <tbody>
		   <?php if(count($posts)):?>
		   	<?php foreach ($posts as $post ):?>
		    <tr class="table-light">
		      <!-- <th scope="row">Light</th> -->
		      <td><?php echo $post->id;?></td>
		      <td><?php echo $post->title;?></td>
		      <td><?php echo $post->price;?></td>
		      <td><?php echo $post->date_created;?></td>
		     
		    </tr>
		<?php endforeach;?>
		   <?php else : ?>
		   	<tr>
		   		<td>NO ITEMS</td>
		   	</tr>
		   <?php endif;?>
		  </tbody>
		</table> 
		<td>
			<?php echo anchor('welcome','Back',['class'=> 'btn btn-primary ']);?>
			
		</td>
		
	</div>
	<br>
<?php include_once('footer.php');?>