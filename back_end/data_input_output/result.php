<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>result</title>
	<style>
		table, th, td{
			border:solid 1px black;
		}
		th, td{
			padding:5px;
			text-align: center;
		}

	</style>
</head>
<body>
	<?php 
		include "db.php";

		$show_result = mysqli_query($con, "SELECT * FROM data_input");

		if ($show_result){
			?> 
			<table>
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
			$new_result = mysqli_query($con, "SELECT input_cost FROM data_input");
			while ($new = mysqli_fetch_array($new_result)) {
				$sum += $new['input_cost'];
			}
				// echo $sum;			}
			// var_dump($sum);
			echo "<h2> total cost of this month is $".$sum. "</h2>";

		 ?>
		 <br>
		<a href="index1.php">back</a>
		<?php

	?>
	
</body>
</html>