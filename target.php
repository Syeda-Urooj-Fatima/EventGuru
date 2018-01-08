<?php

	session_start();
	if(isset($_SESSION["username"]))
	{
		$admin = $_SESSION["username"];
	}

	$name = $_POST["name"];
	$category = $_POST["category"];
	$description = $_POST["description"];
	$poster = $_POST["poster"];
	$date = $_POST["date"];
	$time = $_POST["time"];
	$address = $_POST["address"];
	$lat = $_POST["lat"];
	$lng = $_POST["lng"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$ticketPrice = $_POST["ticketPrice"];
	$videoLink = $_POST["videoLink"];

	$lat = round($lat,5);
	$lng = round($lng,5);

	$servername = "localhost";
	$username = "root";
	$password = "safe";
	$dbname = "raven1_eventgru";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password,$dbname);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " .  mysqli_connect_error());
	}

	$date = date("Y-m-d", strtotime($date));

	if ($poster==""){
		$posterPath = "";
	}
	else{
		$posterPath = "Posters/".$name.".png";
		base64_to_jpeg($poster,$posterPath);
	}

	function base64_to_jpeg($base64_string, $output_file) {
	    // open the output file for writing
	    $ifp = fopen( $output_file, "wb" ) or die("unable"); 

	    // split the string on commas
	    // $data[ 0 ] == "data:image/png;base64"
	    // $data[ 1 ] == <actual base64 string>
	    $data = explode( ',', $base64_string );

	    // we could add validation here with ensuring count( $data ) > 1
	    fwrite( $ifp, base64_decode( $data[ 1 ] ) );

	    // clean up the file resource
	    fclose( $ifp );
	}

	$sql1 = "select SocietyId from Admin where username='$admin';"
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
	    while($row = mysqli_fetch_assoc($result)) {
	        $SocietyId = $row["SocietyId"]
	    }
	} else {
	    echo "0 results";
	}

	$sql = "insert into Event (EventTitle,Description,Category,PosterPath,VenueAddress,VenuLat,VenuLng,ContactPhone,VideoLink,ContactEmail,EventDate,EventTime,SocietyId) values ('$name','$description','$category','$posterPath','$address','$lat','$lng','$phone','$videoLink','$email','$date','$time','$SocietyId')";

	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

?>