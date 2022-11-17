<?php

	$conn = mysqli_connect("localhost:3307" , "root" , "" , "bank_system") or die("connection faild");

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>