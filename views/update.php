<?php include_once('header.php');?>
	<div class="container">
 <!-- <form> -->
 	<?php echo form_open("welcome/change/{$post->id}");?>	
		  <fieldset>
		    <legend>Update Item</legend>
		    <div class="form-group">
		      <label for="exampleInputEmail1">Title</label>
		      <?php echo form_input(['name'=>'title','placeholder'=>'Title','class'=>'form-control','value'=>set_value('title',$post->title)]);?>
		      <?php echo form_error('title','<div class="text-danger>','</div>');?>
		    </div>

			<div class="form-group">
		      <label for="Desciption">Price</label>
<!-- 		      <textarea class="form-control" id="Date" 
		      aria-describedby="emailHelp" placeholder="Enter the Date here"rows="1"></textarea> -->	
		      <?php echo form_input(['name'=>'price','placeholder'=>'Price','class'=>'form-control','value'=>set_value('price',$post->price)]);?>  
		      <?php echo form_error('title','<div class="text-danger>','</div>');?>
			</div>

		      <div class="form-group">
		      <!-- <label for="Desciption">Date</label>
		      <textarea class="form-control" id="Date" 
		      aria-describedby="emailHelp" placeholder="Enter the Date here"rows="1"></textarea> -->	
		      <?php echo form_input(['name'=>'date_created','placeholder'=>'Date','class'=>'form-control','value'=>set_value('date_created',$post->date_created)]);?>  
		      <?php echo form_error('title','<div class="text-danger>','</div>');?>
			</div>

		    </fieldset>
		     <?php echo form_submit(['name'=>'submit','value'=>'Update','class'=>'btn btn-primary']);?>
		     <?php echo anchor('welcome','Back',['class'=>'btn btn-primary']);?>
		  </fieldset>
<?php echo form_close();?> 
</div>
<?php include_once('footer.php');?>