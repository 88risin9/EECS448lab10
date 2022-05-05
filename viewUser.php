<?php

	$mysqli = new mysqli("mysql.eecs.ku.edu", "z715w673", "thuum7mi","z715w673");


	if ($mysqli->connect_errno)	
	{
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}
	
	$query = "SELECT user_id from Users";
	$result = $mysqli->query($query);


	echo "<table style='border: 2px solid black; font-size: 20px'>";
	echo "<tr>";
	echo "<td>" ."user_id". "</td>";
	echo "</tr>";


		while ($row = $result -> fetch_assoc())
		{
			echo "<tr>";
			echo "<td style='border: 2px solid black; color: black; font-size: 15px'>" . $row["user_id"] . "</td>";
			echo "</tr>";
		}
	
	echo "</table>";
 
	$mysqli->close();
?>