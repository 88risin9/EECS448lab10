<?php
	$mysqli = new mysqli("mysql.eecs.ku.edu", "z715w673", "thuum7mi", "z715w673");
	$userID=$_REQUEST["user_id"];
	echo"<p>Posts of ".$userID."<br></p>";

	$query = "SELECT content from Posts where author_id='$userID'";
	$result = $mysqli -> query($query);

	echo "<table style='border: 2px solid black; color: Black; font-size:15px'>";

        	while ($row = $result -> fetch_assoc())
		{
            		echo "<tr>";
            		echo "<td>" . $row["content"] . "</td>";
            		echo "</tr>";
        	}

    	echo "</table>";

$mysqli->close();
?>
