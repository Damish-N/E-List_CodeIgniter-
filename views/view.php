<?php include_once('header.php');?>

	<div class="container">
		<h2 style="text-align: center; font-family: sans-serif;">View Item</h2>
		<br>

		<div class="card border-light mb-3" style="max-width: 20rem;">
  			<div class="card-header"><h2>ITEM ID:<?php echo $post -> id;?></h2></div>
  				<div class="card-body">
    				<!-- <h4 class="card-title">Light card title</h4> -->
			 			<h3><?php echo $post -> title;?></h3>
						<br>
						<h4>Price Rs =<?php echo $post -> price;?>/=</h4>
						<h4><?php echo $post -> date_created;?></h4>
    			</div>
		</div>
		</fieldset>
		    <?php echo anchor('welcome','Back',['class'=>'btn btn-primary']);?>
		  </fieldset>
</div>

<br>
<br>
<br>
<br>

<?php include_once('footer.php');?>