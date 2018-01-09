<!DOCTYPE html>
<html lang="en">
<html>
<head>
	
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/test1.css">
	<title>Event Search Page</title>
	<script src="js/header.js"></script>
	<script src="js/footer.js"></script>
 	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
 	<link rel="stylesheet" type="text/css" href="plugins/rateit.js-master/scripts/rateit.css"/>

	<?php
		$con = mysqli_connect("localhost","admin1","admin1","ravens_eventgru");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		  $sqlUni = "SELECT * FROM university";
		  $resultUni = $con->query($sqlUni);

		  $locate = $con->query("SELECT EventTitle, VenuLat, VenuLng FROM event");
	?>

<script>
	console.log("consoling");
		window.initMap = function(){
	        var bounds = new google.maps.LatLngBounds();
	        var Center = {lat: 31.1234, lng: 71.1235};
	        var map = new google.maps.Map(document.getElementById('map'), {
		        zoom: 6,
		        center: Center,
		        mapTypeId: google.maps.MapTypeId.ROADMAP
	        });

	        var infowindow = new google.maps.InfoWindow();
			var posit = [];
			console.log("bla bla1");
			<?php
			$k=0;
			while ($loca = $locate->fetch_array()){
				echo "posit.push([]);";
				echo "posit[".$k."].push('".$loca[0]."');";
				echo "posit[".$k."].push(".$loca[1].");";
				echo "posit[".$k."].push(".$loca[2].");";
				$k=$k+1;
			};
			?>
			console.log(posit);

			console.log("bla bla2");
			for(var i = 0; i < posit.length; i++ ) {
				console.log(i, posit, posit.length);
				var lati= posit[i][1];
				var longi = posit[i][2];
				var loci = posit[i][0];
				console.log(lati);
				console.log(longi);
				console.log(loci);
				marker = new google.maps.Marker({
			        position: new google.maps.LatLng( lati, longi),
			        map: map
			    });
				marker.abc = loci;
			    google.maps.event.addListener(marker, 'click', (function(marker, i) {
			        return function() {
			          infowindow.setContent(marker.abc);
			          infowindow.open(map, marker);
			        }
			    })(marker, i)); 
			}
	    }
	    $(document).ready(function(){
			$("#header").load("header.html");
			$("#footer").load("footer.html");
			$('[data-toggle="popover"]').popover();
			$('[data-toggle="tooltip"]').tooltip();
		});
	</script>
</head>
<body>
		
<!-- HEADER -->
    <?php
        include "header.php"; 
    ?>
	
<!--  My file starts here -->	

<br><br>
 	<div class="container">
	<form action="" method="post">
		<!-- <div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-4"> -->
			<select name="ID" required class="form-control">
	  		    <option value="" disabled selected hidden>Choose a University</option>
			    <option value="">All</option>
				<?php 
					$universities = $con->query('Select * FROM University');
					if ($universities->num_rows > 0) {
				  		 while($uni = $universities->fetch_array()) {
				    		echo "<option value=".$uni[0].">".$uni[1]."</option>";
					}
				}
				?>
			</select>

			<br>
		<!-- </div>
		<div class="col-lg-4"> -->
			<select  name="cat" required class="form-control">
			    <option value="" disabled selected hidden>Choose a Category</option>
			    <option value="">All</option>
				<option value="Community Service">Community Service</option>
			    <option value="Concerts">Concert</option>
			    <option value="Debate">Debate</option>
			    <option value="Hackathons">Hackathon</option>
			    <option value="National Day">National Day</option>
			    <option value="Olympiad">Olympiad</option>
			    <option value="Seminars">Seminar</option>
			    <option value="Sports">Sports</option>
			    <option value="EGaming">E-Gaming</option>
			</select>
			<br>
		<!-- </div>
		<div class="col-lg-1"> -->
			<button class="btn btn-danger " type="submit" name="submit" value="submit"><b>Submit</b></button>
		<!-- </div>
		
		</div> -->
	</form>
	</div>
	<hr>
	<div id="outerdiv" class="container"><br>
		<h3>Location of Events</h3>
		<div id="map" class="col-lg-12" style="overflow: visible; border: 2px solid black" data-toggle="tooltip" data-placement="top" title="You can See the Location of all Events">
	    	<script 
	   		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDucSpoWkWGH6n05GpjFLorktAzT1CuEc&callback=initMap">
			</script>
		</div>
	</div><br><hr><br>
	<div class="container">
		<div class="row">
			<div class="col-lg-2">
			<h3 data-toggle="popover" title="Event Search Result" data-placement="top" data-content="These are the events based on you search Criteria">Events</h3>
		</div>
	</div>
	</div>
	<div class="container">
	<div class="row">
		
		<?php 
		if (!isset($_POST['submit'])&& (!isset($_GET['ID'])) && (!isset($_GET['cat']))) { ?>
		    <br>
		    <p align="center"> Please Select from the above search criteria in order to display events <br> Thank You :) </p>
		<?php } else{
			// print_r($_POST);
			if (isset($_GET['ID'])){
				$sql = "SELECT PosterPath, EventTitle,EventId, SocietyName, UniversityName, EventDate, EventTime, S_Rating, Category FROM event Natural Join University Natural Join Society WHERE UniversityId = ".$_GET["ID"];
			}
			else if (isset($_GET['cat'])){
				$sql = "SELECT PosterPath, EventTitle,EventId, SocietyName, UniversityName, EventDate, EventTime, S_Rating, Category FROM event Natural Join University Natural Join Society WHERE Category = '".$_GET["cat"]."'";
			}
			if (isset($_POST['submit'])){
			if($_POST['ID']=="" && $_POST['cat']==""){
				$sql = "SELECT PosterPath ,EventTitle, EventId, SocietyName, UniversityName, EventDate, EventTime, S_Rating, Category FROM event Natural Join University Natural Join Society"; 
			}
			else if ($_POST['ID']==""){
				$sql = "SELECT PosterPath, EventTitle,EventId, SocietyName, UniversityName, EventDate, EventTime, S_Rating, Category FROM event Natural Join University Natural Join Society WHERE Category = '".$_POST["cat"]."'";
			}
			else if ($_POST['cat']==""){
				$sql = "SELECT PosterPath, EventTitle,EventId, SocietyName, UniversityName, EventDate, EventTime, S_Rating, Category FROM event Natural Join University Natural Join Society WHERE UniversityId = ".$_POST["ID"];
			}
			else if ($_GET['ID']){
				$sql = "SELECT PosterPath, EventTitle,EventId, SocietyName, UniversityName, EventDate, EventTime, S_Rating, Category FROM event Natural Join University Natural Join Society WHERE UniversityId = ".$_GET["ID"];
			}
			else if ($_GET['cat']){
				$sql = "SELECT PosterPath, EventTitle,EventId, SocietyName, UniversityName, EventDate, EventTime, S_Rating, Category FROM event Natural Join University Natural Join Society WHERE Category = '".$_POST["cat"]."'";
			}
			else{
			$sql = "SELECT PosterPath, EventTitle,EventId, SocietyName, UniversityName, EventDate, EventTime, S_Rating, Category FROM event Join University Join Society Where UniversityId = ".$_POST["ID"]." AND Category = '".$_POST["cat"]."'";
			}
		}
		
		if ($result = $con->query($sql)){
			if ($result->num_rows > 0) {
		    	while($row = $result -> fetch_array()){
		    		echo "<div class='card col-xs-12 col-lg-6 event' >
		    				<img class='card-img-top' src='".$row['PosterPath']."' alt='Card image' style='width:100%'>
							<div class='card-body'>
					      	<h4 class='card-title'>".$row['EventTitle']."</h4>
					      	<p class='card-text'>
								<b><i class='fa fa-suitcase'></i> Organization Name: </b>".$row['SocietyName']."<br>
						      	<b><i class='fa fa-university'></i> University: </b>".$row['UniversityName']."<br>
						      	<b><i class='fa fa-calendar-o'></i> Time: </b>".$row['EventTime']."<br>
						      	<b><i class='fa fa-star'></i> Host Rating: </b>"; 
						      	$x = (int)$row['S_Rating']; 
						      	while($x){ 
						      	echo "<span class='fa fa-star'></span>";
						      	$x = $x-1;
						      	}
						      	$y = 5 - (int)$row['S_Rating'];
								while($y){ 
						      	echo "<span class='fa fa-star-o'></span>";
						      	$y = $y - 1;
						      	}

						      	echo "<br>
							      	<b><i class='fa fa-arrow-right'></i> Type: </b>".$row['Category']. "<br>
							      </p>
							      <a href= 'eventpage.php?ID=".$row['EventId']."' class='btn btn-danger personalbtn'>Visit Event</a>
							    </div>
							</div>";
		    	}
		  	} 
		  }
		  else {
		    echo "No results were returned on basis of your search criteria";
		  }  	
		}
		 
		?>
		  
	</div>
</div>

	<!--My CONTENT ENDS HERE--> 
<br/><br/>
	<div id="footer_bottom">
       &copy; All rights reserved
	</div>
<?php
     $con->close();
?>
	
</body>
</html>