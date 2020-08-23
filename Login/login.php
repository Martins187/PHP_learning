<?php
	
	$conn = new mysqli('localhost', 'Martins', 'password', 'login');
	if(!$conn){
		echo"Connection error: " . mysqli_connect_error();
	}

	
	
?>

