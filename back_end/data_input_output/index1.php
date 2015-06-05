
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>data_input_output</title>
</head>
<body>
	<?php 
		include "function.php";
	 ?>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		date <input type="text" name="date" id="date" required><br>
		items <input type="text" name="items" id="items" required><br>
		item_description 
			<textarea name="description" id="description" cols="30" rows="10"></textarea>
		<br>
		cost <input type="text" name="cost" id="cost" required><br>
		person <input type="text" name="person" id="person">
		<input type="submit" value="submit">
	</form>
</body>
</html>