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
				<th>cost</th>
			</tr>		
		<?php
	}
	while($row = mysqli_fetch_object($show_result)){?>
		<tr>
			<td>
				<?php echo $row->id ?>
			</td>
			<td><?php echo $row->input_date ?></td>
			<td>&nbsp &nbsp<?php echo $row->input_items ?></td>
			<td><?php echo $row->input_cost ?></td>
		</tr>

	<?php

	}?>
	</table>
	<a href="index1.php">back</a>
	<?php

?>