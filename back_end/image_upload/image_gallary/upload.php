<?php 
	include('db.php');
	if (isset($_POST['submit'])) {
		
		$name = $_FILES['file']['name'];
		$tmp_name = $_FILES['file']['tmp_name'];
		$location = 'uploads/';
		$target = 'uploads/'.$name;

		if (move_uploaded_file($tmp_name, $location.$name)) {
			echo "file uploaded";
			$nam = $_POST['nam'];
			$query = mysqli_query($con, "INSERT INTO image_item(img_item, img_title) VALUES('".$target."','$nam')");

		}else{
			echo "file not uploaded";
		}

	}
	$result = mysqli_query($con , "SELECT *  FROM image_item");
	while ($row = mysqli_fetch_array($result, 1)) {	
		echo "<img src=".$row['img_item']." &nbsp; class='im'>";
	}
 ?>