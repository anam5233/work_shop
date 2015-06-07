<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>result</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<style>
		

	</style>
</head>
<body>
<header>
	<div class="jumbotron text-center">
		<div class="container">
			<h2>Monthly Info</h2>
		</div>
	</div>
</header>

<section>
	<div class="container">

	<?php 
		include "db.php";

		$show_result = mysqli_query($con, "SELECT * FROM data_input");

		if ($show_result){
			?> 

			<table class="table table-bordered table-striped">

				<tr>
					<th>id</th>
					<th>date</th>
					<th>items</th>
					<th>description</th>
					<th>cost</th>
					<th>person</th>
				</tr>		
			<?php
		}
		while($row = mysqli_fetch_object($show_result)){?>
			<tr>
				<td>
					<?php echo $row->id ?>
				</td>
				<td><?php echo $row->input_date ?></td>
				<td><?php echo $row->input_items ?></td>
				<td><?php echo $row->input_description ?></td>
				<td><?php echo "$".$row->input_cost ?></td>
				<td><?php echo $row->input_person ?></td>
			</tr>

		<?php


		}?>
		</table>
		<?php 
			$sum = 0;
			$new_result = mysqli_query($con, "SELECT input_cost FROM data_input");
			// $sum = 0;
			while ($new = mysqli_fetch_array($new_result)) {

				$sum += $new['input_cost'];
			}
				
			echo "<h2> total cost of this month is $".$sum. "</h2>";

		 ?>
		 <br>
		<a href="index1.php" class="btn btn-default">Back</a>
		<?php

	?>

	</div>
</section>
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>