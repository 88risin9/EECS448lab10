<?php
	$mysqli = new mysqli("mysql.eecs.ku.edu", "z715w673", "thuum7mi", "z715w673");

	$query="SELECT post_id, content, author_id from Posts";
 	$result = $mysqli -> query($query);


    while ($row = $result -> fetch_assoc())
		{
			
			
      if( $_REQUEST[$row["post_id"]]=="on")
			{
				$query="DELETE FROM Posts WHERE post_id='".$row["post_id"]."'";
				$mysqli -> query($query);
				echo "<p> The content has been deleted</p>"; 	
			}
		}
	
	$mysqli->close();
?>