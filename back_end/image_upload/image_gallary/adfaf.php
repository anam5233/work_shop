<?php 
	include(upload.php);

 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>my timer</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/reset.css">
</head>
<body>

	<form action="index.php" method="POST" enctype="multipart/form-data">
		Choose File: 
		<input type="file" name="file" id="file">
		title
		<input type="text" name="nam" id="nam">
		<input type="submit" value="submit" name="submit">
	</form>
	

	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>