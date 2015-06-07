<?php 
	include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>function</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

	<?php 
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$input_date = $_POST['date'];
			$input_items = $_POST['items'];
			$input_description = $_POST['description'];
			$input_cost = $_POST['cost'];
			$input_person = $_POST['person'];

			

			if (empty($input_date) || empty($input_items) || empty($input_description) || empty($input_cost) || empty($input_person)) {
				echo "please fill the form correctly";
			}
			else{	
				$data_input = mysqli_query($con , "INSERT INTO data_input ( input_date, input_items, input_description, input_cost, input_person )
							VALUES ('$input_date', '$input_items', '$input_description', '$input_cost', '$input_person' )");


				if ($data_input) {

					 echo "<script type'text/javascript'> alert('added data successfully'); </script>";
					 ?>
		

				<?php
				}
				else{
					echo "something went wrong";
				}
			}
		}

	?>		


	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>																				
	
</body>
</html>