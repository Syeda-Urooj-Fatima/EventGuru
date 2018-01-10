<?php
	//header('Content-type: text/plain');

	$servername='localhost';
	$username='admin1';
	$password='admin1';
	$database='ravens_eventgru';
	$conn= mysqli_connect($servername,$username,$password,$database);
	if (!$conn)
	{
		die("Failed to connect to MySQL: " . mysqli_connect_error());
	}
	//echo $_REQUEST['name'];

	$userString = mysqli_escape_string($conn, $_REQUEST['name']);
	$query='SELECT UserName FROM Accounts WHERE UserName = "'.$userString.'"';
	if($result=mysqli_query($conn,$query))
	{
		$rows=array();
	    if(mysqli_num_rows($result)>0)
		{
		    echo "Yes";
		    mysqli_free_result($result);
		    mysqli_close($conn);
		    exit();
    	}
    	else
    		echo "No";
    }	
?>