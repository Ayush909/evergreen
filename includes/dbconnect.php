<?php 
	$db_servername = "localhost";
	$db_username = "root";
	$db_pwd = "";
	$dbname ="loginsystem";

	$conn = mysqli_connect($db_servername,$db_username,$db_pwd,$dbname);

	if(!$conn){
		die("connection error hai: " . mysqli_connect_error());
	}
?>