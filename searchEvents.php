<?php
	header('Content-Type: application/json');

	if(!isset($_GET['query'])){
		echo json_encode([]);
		exit();
	}

	$servername='localhost';
	$username='admin1';
	$password='admin1';
	$database='event_gru';
	$conn= mysqli_connect($servername,$username,$password,$database);
	if (!$conn)
	{
		die("Failed to connect to MySQL: " . mysqli_connect_error());
	}

	$eventString = mysqli_escape_string($conn, $_GET['query']);
	$query='SELECT EventTitle FROM Event WHERE EventTitle LIKE "'.'%'.$eventString.'%"';
	if($result=mysqli_query($conn,$query))
	{
		$rows=array();
	    if(mysqli_num_rows($result)>0)
		{
		    $rows=mysqli_fetch_all($result, MYSQLI_ASSOC);
		    echo "\n".json_encode($rows);
		    mysqli_free_result($result);
		    mysqli_close($conn);
		    exit();
    	}
    }	
?>