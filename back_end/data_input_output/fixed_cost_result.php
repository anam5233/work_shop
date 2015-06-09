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
			<h2>Monthly fixed_cost Info</h2>
			<a href="index1.php" class="btn btn-success">Home</a>
		</div>
	</div>
</header>

<section>
	<div class="container">

	<?php 
		include "db.php";

		$show_result = mysqli_query($con, "SELECT * FROM fixed_cost");
		$row_count = mysqli_num_rows($show_result);
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

			if ($row_count === 0) {?>

			<tr>
				<td colspan="6">
					<?php echo "no data found"; ?>
				</td>
			</tr>
				<?php
			}

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
			$per_person = 0;
			if ($show_result) {
				$new_result = mysqli_query($con, "SELECT input_cost FROM fixed_cost");
				// $sum = 0;
				while ($new = mysqli_fetch_array($new_result)) {

					$sum += $new['input_cost'];
					$per_person = $sum/3;
				}
					
				echo "<h2> total cost of this month is $".$sum. " and cost per person $".$per_person . "</h2>";
			}
			else{
				// echo "no data found";
			}

			

		 ?>
		 <br>
		<a href="fixed_cost.php" class="btn btn-default">Back</a>
		<?php

	?>

	</div>
</section>
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>