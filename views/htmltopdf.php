<html>
<head>
	<title>HTML to PDF</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container box">
		<br/>
		<h3 align="center">CONVERT</h3>
		<br/>
		<?php
			if(isset($customer_data)){
		?>
		<div class="table-responsive">
			<table class="table table-striped table-bordered">
				<tr>
					<th>id</th>
					<th>Title</th>
					<th>price</th>
					<th>Date</th>
					<th>View in PDF</th>
				</tr>
				<?php
				foreach($customer_data->result()as $row){
					echo '<tr>
					<td>'.$row->id.'</td>
					<td>'.$row->title.'</td>
					<td>'.$row->price.'</td>
					<td>'.$row->date_created.'</td>
					
					';
					}
				?>
				
				</table>
			</div>
		<div></div>
	</body>
</html>