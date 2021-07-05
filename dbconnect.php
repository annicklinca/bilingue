<?php
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "lepetit_prince";
	 error_reporting(0);
	$con =  mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	if(mysqli_connect_error()){
		echo 'connect to database failed';
	}
	$dbi = new mysqli($db_host,$db_user,$db_pass,$db_name);

	$servername = "localhost";
	$usern = "root";
	$pass = "";
	$dbname = "lepetit_prince";
	// $db_host = "localhost";
	// $db_user = "gss";
	// $db_pass = "1as*jO21";
	// $db_name = "gssaintaloysrgna_rw";
	//  error_reporting(0);
	// $con =  mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	// if(mysqli_connect_error()){
	// 	echo 'connect to database failed';
	// }
	// $dbi = new mysqli($db_host,$db_user,$db_pass,$db_name);

	// $servername = "localhost";
	// $usern = "gss";
	// $pass = "1as*jO21";
	// $dbname = "gssaintaloysrgna_rw";
?>