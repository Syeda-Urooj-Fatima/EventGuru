

<?php
	session_start();
	//echo "string";
	$user=$_SESSION["username"];
		$servername = "localhost";
		$username = "admin1";
		$password = "admin1";
		$database = "ravens_eventgru";
		$conn = mysqli_connect($servername, $username, $password, $database);
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}
	else{	
		$ccomment = $_POST["comment"];
				#$comment = "my commant";
				$eventid = $_POST["eventId"];
		//echo "hello";
				
				//$user = "raven";
				#$sql = "INSERT INTO feedback (Comments,username,Eventid) VALUES ('$comment','$user', '$Eventid')";
				$sql ="INSERT INTO feedback (Username,EventID,Comments) VALUES ('$user',$eventid,'$ccomment')";
				if (mysqli_query($conn, $sql)) {
				    echo "New record created successfully";
				} else {
				    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			}
			mysqli_close($conn);
?>


