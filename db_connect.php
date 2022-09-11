<?php
$connection = mysqli_connect("localhost","root","","contentdb");
	if(!$connection){
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	printf("Welcome to Our Database");
?>