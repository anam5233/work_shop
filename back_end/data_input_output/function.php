<?php 
	include "db.php";
?>
<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$input_date = $_POST['date'];
		$input_items = $_POST['items'];
		$input_cost = $_POST['cost'];

		$data_input = mysqli_query($con , "INSERT INTO data_input ( input_date, input_items, input_cost )
						VALUES ('$input_date', '$input_items', '$input_cost' )");
		if (empty($input_date) || empty($input_items) || empty($input_cost)) {
			echo "please fill the form correctly";
		}
		else{
			if ($data_input) {
				echo "added a record successfully";?>
				<a href="result.php">show results</a>
			<?php
			}
			else{
				echo "something went wrong";
			}
		}
	}

?>