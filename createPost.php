<?php
	$mysqli = new mysqli("mysql.eecs.ku.edu", "z715w673", "thuum7mi","z715w673");

	$userID = $_POST["user"];
	$post = $_POST["content"];
	
	if ($mysqli->connect_errno)		
	{
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}


	if ($post == "")
	{
        	echo "Cannot post empty.";
        	exit();
	}
    
  $query = "SELECT user_id from Users";
  $result = $mysqli->query($query);

	$search = FALSE;
	if ($result -> num_rows > 0)
	{
        	while ($row = $result -> fetch_assoc())
		{
            		if ($row["user_id"] == $userID)
			{
                		$search = TRUE;
            		}
        	}
    	}

    	if (!$search)
	{
        	echo "The user is not in the Users table.";
        	exit();
    	}

    	$query = "INSERT INTO Posts (content, author_id) VALUES ('$post ', ' $userID')";
    	if ($result = $mysqli->query($query))
	{
        	echo "$userID's text has been posted.";
    	}
    	else
	{
        	echo "Failed to post the text. Please try again!";
    	}
	
$mysqli->close();
?>