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
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$search_name = $_POST['name'];
		}

		$show_result = mysqli_query($con, "SELECT * FROM fixed_cost where input_person = '$search_name' ");
		// var_dump($show_result);
		$row_count = mysqli_num_rows($show_result);
		// echo $row_count;

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
		
		<a href="fixed_cost.php" class="btn btn-default">Back</a>
		<?php

	?>

	</div>
</section>
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>