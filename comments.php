<html>
<body>

<?php

	//echo "string";

		$servername = "localhost";
		$username = "sql";
		$password = "sql";
		$database = "ravens_raven1";
		$conn = mysqli_connect($servername, $username, $password, $database);
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}
	else{	
		$ccomment = $_POST["comment"];
				#$comment = "my commant";
				$eventid = 1;
		//echo "hello";
				
				$user = "raven";
				#$sql = "INSERT INTO feedback (Comments,username,Eventid) VALUES ('$comment','$user', '$Eventid')";
				$sql ="INSERT INTO feedback (username,eventid,Comments) VALUES ('$user',$eventid,'$ccomment')";
				if (mysqli_query($conn, $sql)) {
				    echo "New record created successfully";
				} else {
				    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			}
			mysqli_close($conn);
?>


</body>
</html>
