<html>
<body>

<?php
		$servername = "localhost";
		$username = "sql";
		$password = "sql";
		$database = "ravens_eventgru";
		$conn = mysqli_connect($servername, $username, $password, $database);
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}
	else{	
		//$rrate = $_POST["Rate"];
			$rrate = 3;
			$society = 1;
			$sql = "INSERT INTO Rate (SocietyId,Rating) VALUES ('$society','$rrate')";
				if (mysqli_query($conn, $sql)) {
				    echo "New record created successfully";
				} else {
				   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}	
				
		}	
			mysqli_close($conn);
		
?>


</body>
</html