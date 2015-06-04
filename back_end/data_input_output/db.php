<?php 
	$server = "localhost";
	$dbname = "data_input_output";
	$user   = "root";
	$pass	= "";

	$con 	= mysqli_connect($server, $user, $pass, $dbname);

	if (!$con) {
		die("mysqli error : ". mysqli_connect_error());
	}


?>