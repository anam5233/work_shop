
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>data_input_output</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
	<header>
		<div class="jumbotron text-center">
			<div class="container">
				<h2>Fixed cost</h2>
				
				<a href="fixed_cost_result.php" class="btn btn-info">Show this month info</a>
				<a href="index1.php" class="btn btn-success">Home</a>
				<form action="fixed_cost_search.php" method="post" class="form-inline">
					<input type="text" name="name" class="form-control" id="name" required placeholder="search by name)">
					<input type="submit" value="Search" class="btn btn-default">
				</form>
			</div>
		</div>
	</header>

	<section>
		<?php include "fixed_cost_function.php"; ?>
		<div class="container">
			<div class="row">
				

				<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="text-center">

					<div class="row">
						<label for="date" class="col-lg-4">date</label>
						<input type="date" name="date" id="date" class="form-control col-lg-8" required placeholder="date format 01/01/2015">
					</div>
					<div class="row">
						<label for="items" class="col-lg-4">items</label>
						<input type="text" name="items" id="items" class="form-control col-lg-8" required placeholder="write number of items">
					</div>

					

					<div class="row">
						<label for="description" class="col-lg-4">item_description</label>					 
						<textarea name="description" id="description" class="form-control col-lg-8" cols="30" rows="2" required placeholder="write your item description here"></textarea>
					</div>
					<!-- <div class="clearfix"></div> -->
					
					<div class="row">
						<label for="cost" class="col-lg-4">cost</label>
						<input type="text" name="cost" id="cost" class="form-control col-lg-8" required placeholder="write your purchase cost">
					</div>

					

					<div class="row">
						<label for="person" class="col-lg-4">person</label>
						<input type="text" name="person" id="person" class="form-control col-lg-8" required placeholder="who buy the items">
					</div>					
					

					<input type="submit" value="Submit" class="btn btn-default">

				</form>

				
			</div>
		</div>
	</section>

	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>