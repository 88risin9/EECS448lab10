<?php

	$mysqli = new mysqli("mysql.eecs.ku.edu", "z715w673", "thuum7mi", "z715w673");
	$userID = $_POST["user"];

	if ($mysqli->connect_errno) { 
		printf("Connect failed: %s\n", $mysqli->connect_error); 
    exit();
	}


	if($userID==""){

			printf("Can not post empty. ");
      exit();
	
	}
	
$query= "INSERT INTO Users(user_id) VALUES ('"$userID"')";

if($mysqli->query($query))
	{
		echo "New user ".$userID." successfully stored. <br>";
	}
	else
	{
		echo "The user ".$userID." already exists.<br>";
	}


	$mysqli->close();
?>