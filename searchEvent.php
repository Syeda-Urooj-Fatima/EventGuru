<?php
	if(!isset($_GET['query'])){
		echo json_encode([]);
		/*exit();*/
	}

	$servername='localhost';
	$username='admin1';
	$password='admin1';
	$database='ravens_eventgru';
	$conn= mysqli_connect($servername,$username,$password,$database);
	if (!$conn)
	{
		die("Failed to connect to MySQL: " . mysqli_connect_error());
	}

	$eventString = mysqli_escape_string($conn, $_GET['query']);
	$row=array();
	$query="SELECT PosterPath, EventTitle,EventId, SocietyName, UniversityName, EventDate, EventTime, S_Rating, Category FROM event Natural Join University Natural Join Society WHERE EventTitle IN (SELECT EventTitle FROM Event WHERE EventTitle LIKE '%".$eventString."%')";
	if($result=mysqli_query($conn,$query))
	{
	    if(mysqli_num_rows($result)>0)
		{
			$i=0;
			while ( $row[$i]=mysqli_fetch_array($result, MYSQLI_ASSOC) ){
		    // echo $row[$i]['EventTitle'];
		    $i=$i+1;
			}
			$num_of_rows = $i;
    	}
    }
?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>Event Guru - Event Search</title>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">	
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css" />
	<script src="jquery/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script src="bootstrap4/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script  type="text/javascript" src="plugins/typeahead.bundle.js"></script>

	<link rel="stylesheet" type="text/css" href="css/searchEvent.css">
 	<link rel="icon" href="images/icon.png">


</head>
<body>
		
<!-- HEADER -->
    <?php
        include "header.php"; 
        echo "<br><br><h3>Search Result</h3>";
   	for ($k=0; $k < $num_of_rows ; $k++) { 
   			echo "<div class='card col-xs-12 col-lg-6 event' >
    				<img class='card-img-top' src='".$row[$k]['PosterPath']."' alt='Card image' style='width:100%'>
					<div class='card-body'>
			      	<h4 class='card-title'>".$row[$k]['EventTitle']."</h4>
			      	<p class='card-text'>
						<b><i class='fa fa-suitcase'></i> Organization Name: </b>".$row[$k]['SocietyName']."<br>
				      	<b><i class='fa fa-university'></i> University: </b>".$row[$k]['UniversityName']."<br>
				      	<b><i class='fa fa-calendar-o'></i> Time: </b>".$row[$k]['EventTime']."<br>
				      	<b><i class='fa fa-star'></i> Host Rating: </b>"; 
				      	$x = (int)$row[$k]['S_Rating']; 
				      	while($x){ 
				      	echo "<span class='fa fa-star'></span>";
				      	$x = $x-1;
				      	}
				      	$y = 5 - (int)$row[$k]['S_Rating'];
						while($y){ 
				      	echo "<span class='fa fa-star-o'></span>";
				      	$y = $y - 1;
				      	}

				      	echo "<br>
					      	<b><i class='fa fa-arrow-right'></i> Type: </b>".$row[$k]['Category']. "<br>
					      </p>
					      <a href= 'eventpage.php?ID=".$row[$k]['EventId']."' class='btn btn-danger personalbtn'>Visit Event</a>
					    </div>
					</div>";
    	}
		  	

        echo "<br style='text-align: center;'>End of Results<br>";
	include "footer.php";
?>
	
</body>
</html>