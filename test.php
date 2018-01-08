<?php session_start(); ?>
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
	<script  type="text/javascript" src="plugins/typeahead.bundle.js"></script>
 	<link rel="stylesheet" type="text/css" href="plugins/rateit.js-master/scripts/rateit.css"/>
	<!-- <script src="plugins/rateit.js-master/scripts/jquery.rateit.min.js"></script>
	<link rel="icon" href="images/icon.png">	 -->

	<?php
		$con = mysqli_connect("localhost","User1","user1.123","event_guru");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		  $sqlUni = "SELECT * FROM university";
		  $resultUni = $con->query($sqlUni);
		  $locate = $con->query("SELECT EventTitle, VenuLat, VenuLng FROM event");
		  $sql = "SELECT EventTitle, SocietyId, EventDate, EventTime, Category FROM event";
		  $result = $con->query($sql);
		  if ($result->num_rows > 0) {
		    $row = $result->fetch_assoc();
		  for($i=0; $i<$locate->num_rows; $i++)
		    $loca[$i] = $locate->fetch_array();
		} 
		else {
		    echo "0 results";
		}

	?>

<script type="text/javascript">
		window.initMap = function(){
	        var bounds = new google.maps.LatLngBounds();
	        var Center = {lat: 31.1234, lng: 71.1235};
	        var map = new google.maps.Map(document.getElementById('map'), {
		        zoom: 6,
		        center: Center,
		        mapTypeId: google.maps.MapTypeId.ROADMAP
	        });

	        var infowindow = new google.maps.InfoWindow();
			var marker, i;
			<?php $j=0; ?>;
			for( i = 0; i < <?php echo $locate->num_rows;  ?> ; i++ ) {
						
				var lati= "<?php echo $loca[$j]['VenuLat'];?>";
				var longi = "<?php echo $loca[$j]['VenuLng'];?>";
				var loci = "<?php echo $loca[$j]['EventTitle'];?>";
				console.log(lati);
				console.log(longi);
				console.log(loci);
				var loci;
				marker = new google.maps.Marker({
			        position: new google.maps.LatLng( lati, longi),
			        map: map
			    });

			    google.maps.event.addListener(marker, 'click', (function(marker, i) {
			        return function() {
			          infowindow.setContent(loci);
			          infowindow.open(map, marker);
			        }
			    })(marker, i)); 
			<?php $j=$j+1; ?>;
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
	<form id="comboBox">
		<div class="row">
		<div class="col-lg-2"></div>
		<div class="col-lg-4 col-lg-offset-2">
			<select class="form-control">
	  		    <option value="" disabled selected hidden>Choose a University</option>
			    <option value="All">All</option>
				<option value="NUST">National University of Science and Tech</option>
			    <option value="LUMS">Lahore University of Management Sciences</option>
			    <option value="FAST">FAST Nuces</option>
			    <option value="Comsats">Comsats Institute of Science and Tech</option>
			    <option value="Bahria">Bahria University, Islamabad</option>
			</select>
		</div>
		<div class="col-lg-4">
			<select class="form-control">
			    <option value="" disabled selected hidden>Choose a Category</option>
				<option value="Seminars">Seminars</option>
			    <option value="Sports">Sports</option>
			    <option value="E-Gaming">E-Gaming</option>
			    <option value="Concerts">Concerts</option>
			    <option value="Competitions">Competitions</option>
			    <option value="Mushairas">Mushairas</option>
			    <option value="All">All</option>
			</select>
		</div>
		</div>
	</form>
	</div>
	<div id="outerdiv" class="container"><br>
		<h3>Location of Events</h3>
		<div id="map" class="col-lg-12" style="overflow: visible; border: 2px solid black" data-toggle="tooltip" data-placement="top" title="You can See the Location of all Events">
	    	<script 
	   		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDucSpoWkWGH6n05GpjFLorktAzT1CuEc&callback=initMap">
			</script>
		</div>
	</div><br><br>
	<div class="container">
		<div class="row">
			<div class="col-lg-2">
			<h3 data-toggle="popover" title="Event Search Result" data-placement="top" data-content="These are the events based on you search Criteria">Events</h3>
		</div>
	</div>
	</div>
	<div class="container">
	<div class="row">
		<div class="card col-xs-12 col-lg-6 event" >
		    <img class="card-img-top" src="images\2.jpg" alt="Card image" style="width:100%">
		    <div class="card-body">
		      <h4 class="card-title"><?php echo $row["EventTitle"]; ?></h4>
		      <p class="card-text">
		      	<b><i class="fa fa-suitcase"></i> Organization Name: </b>TABA Youth Chapter NUST<br>
		      	<b><i class="fa fa-university"></i> University: </b>National University of Science and Technology<br>
		      	<b><i class="fa fa-calendar-o"></i> Time & Date: </b>5pm - 10pm : Dec 4, 2017<br>
		      	<b><i class="fa fa-star"></i> Host Rating: </b>
		      	<?php 
		      	$x=4; 
		      	while($x){ 
		      	echo "<span class='fa fa-star'></span>";
		      	$x = $x-1;
		      	}
		      	{
				echo "<span class='fa fa-star-o'></span>";
				}
				?>	
				 <br>
		      	<b><i class="fa fa-arrow-right"></i> Type: </b>E-Gaming <br>
		      </p>
		      <a href="eventpage.php" class="btn btn-danger personalbtn">Visit Event</a>
				<div class="dropdown" style="float: right">
					<select class="btn btn-danger personalbtn">
			  		    <option value="" disabled selected hidden>Interest</option>
					    <option value="Going"><i class="fa fa-thumbs-up"></i>Going</option>
						<option value="Interested"><i class="fa fa-star"></i>Interested</option>
					    <option value="NotGoing"><i class="fa fa-thumbs-down"></i>Not Going</option>
					</select>
				</div>
		    </div>
		</div>
<!-- 	    <div class="card col-xs-12 col-lg-6 event" >
		    <img class="card-img-top" src="images\3.jpg" alt="Card image" style="width:100%">
		    <div class="card-body">
		      <h4 class="card-title">Breast Cancer Awareness Seminar</h4>
		      <p class="card-text">
		      	<b><i class="fa fa-suitcase"></i> Organization Name: </b>TABA Youth Chapter NUST<br>
		      	<b><i class="fa fa-university"></i> University: </b>National University of Science and Technology<br>
		      	<b><i class="fa fa-calendar-o"></i> Time & Date: </b> 12pm - 2pm : Jan 1, 2017<br>
		      	<b><i class="fa fa-star"></i> Host Rating: </b>
		      		<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star-o"></span>
				 <br>
		      	<b><i class="fa fa-arrow-right"></i> Type: </b>Seminar <br>
		      </p>
		      <a href="eventpage.php" class="btn btn-danger personalbtn">Visit Event</a>
   				<div class="dropdown" style="float: right">
					<select class="btn btn-danger personalbtn">
			  		    <option value="" disabled selected hidden>Interest</option>
					    <option value="Going"><i class="fa fa-thumbs-up"></i>Going</option>
						<option value="Interested"><i class="fa fa-star"></i>Interested</option>
					    <option value="NotGoing"><i class="fa fa-thumbs-down"></i>Not Going</option>
					</select>
				</div>
	    	</div>
		</div>
		<div class="card col-xs-12 col-lg-6 event" >
		    <img class="card-img-top" src="images\4.jpg" alt="Card image" style="width:100%">
		    <div class="card-body">
		      <h4 class="card-title">Sirat Ul Jannah Orphanage Visit</h4>
		      <p class="card-text">
		      	<b><i class="fa fa-suitcase"></i> Organization Name: </b>UET Community Service Club<br>
		      	<b><i class="fa fa-university"></i> University: </b>University of Engineering and Technology<br>
		      	<b><i class="fa fa-calendar-o"></i> Time & Date: </b>9am - 2pm : Jan 23, 2018 <br>
		      	<b><i class="fa fa-star"></i> Host Rating: </b>
		      		<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star-o"></span>
					<span class="fa fa-star-o"></span>
				 <br>
		      	<b><i class="fa fa-arrow-right"></i> Type: </b>Community Service <br>
		      </p>
		      <a href="eventpage.php" class="btn btn-danger personalbtn">Visit Event</a>
		      <div class="dropdown" style="float: right">
					<select class="btn btn-danger personalbtn">
			  		    <option value="" disabled selected hidden>Interest</option>
					    <option value="Going"><i class="fa fa-thumbs-up"></i>Going</option>
						<option value="Interested"><i class="fa fa-star"></i>Interested</option>
					    <option value="NotGoing"><i class="fa fa-thumbs-down"></i>Not Going</option>
					</select>
				</div>
	    	</div>
		</div>
		<div class="card col-xs-12 col-lg-6 event" >
		    <img class="card-img-top" src="images\5.jpg" alt="Card image" style="width:100%">
		    <div class="card-body">
		      <h4 class="card-title">Saya School Visit 4.0</h4>
		      <p class="card-text">
		      	<b><i class="fa fa-suitcase"></i> Organization Name: </b>TABA Youth Chapter NUST<br>
		      	<b><i class="fa fa-university"></i> University: </b>National University of Science and Technology<br>
		      	<b><i class="fa fa-calendar-o"></i> Time & Date: </b>9am - 12pm : Dec 30, 2017 <br>
		      	<b><i class="fa fa-star"></i> Host Rating: </b>
		      		<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star-o"></span>
				 <br>
		      	<b><i class="fa fa-arrow-right"></i> Type: </b>Community Service <br>
		      </p>
		      <a href="eventpage.php" class="btn btn-danger personalbtn">Visit Event</a>
		      <div class="dropdown" style="float: right">
					<select class="btn btn-danger personalbtn">
			  		    <option value="" disabled selected hidden>Interest</option>
					    <option value="Going"><i class="fa fa-thumbs-up"></i>Going</option>
						<option value="Interested"><i class="fa fa-star"></i>Interested</option>
					    <option value="NotGoing"><i class="fa fa-thumbs-down"></i>Not Going</option>
					</select>
				</div>
	    	</div>
		</div>
		<div class="card col-xs-12 col-lg-6 event" >
		    <img class="card-img-top" src="images\6.jpg" alt="Card image" style="width:100%">
		    <div class="card-body">
		      <h4 class="card-title">SEECS Drama Fest</h4>
		      <p class="card-text">
		      	<b><i class="fa fa-suitcase"></i> Organization Name: </b>Student Government Association, SEECS<br>
		      	<b><i class="fa fa-university"></i> University: </b>FAST Nuces<br>
		      	<b><i class="fa fa-calendar-o"></i> Time & Date: </b>5pm - 9pm : Dec 21, 2017<br>
		      	<b><i class="fa fa-star"></i> Host Rating: </b>
		      		<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star-o"></span>
					<span class="fa fa-star-o"></span>
					<span class="fa fa-star-o"></span>
				 <br>
		      	<b><i class="fa fa-arrow-right"></i> Type: </b>Music <br>
		      </p>
		      <a href="eventpage.php" class="btn btn-danger personalbtn">Visit Event</a>
		      <div class="dropdown" style="float: right">
					<select class="btn btn-danger personalbtn">
			  		    <option value="" disabled selected hidden>Interest</option>
					    <option value="Going"><i class="fa fa-thumbs-up"></i>Going</option>
						<option value="Interested"><i class="fa fa-star"></i>Interested</option>
					    <option value="NotGoing"><i class="fa fa-thumbs-down"></i>Not Going</option>
					</select>
				</div>
	    	</div>
		</div>
		<div class="card col-xs-12 col-lg-6 event" >
		    <img class="card-img-top" src="images\7.jpg" alt="Card image" style="width:100%">
		    <div class="card-body">
		      <h4 class="card-title">SEECS Futsal League</h4>
		      <p class="card-text">
		      	<b><i class="fa fa-suitcase"></i> Organization Name: </b>Air Sports Club<br>
		      	<b><i class="fa fa-university"></i> University: </b>Air University, Islamabad<br>
		      	<b><i class="fa fa-calendar-o"></i> Time & Date: </b>Dec 18, 2017 - Dec 27, 2017 <br>
		      	<b><i class="fa fa-star"></i> Host Rating: </b>
		      		<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
				 <br>
		      	<b><i class="fa fa-arrow-right"></i> Type: </b>Music <br>
		      </p>
		      <a href="#" class="btn btn-danger personalbtn">Visit Event</a>
		      <div class="dropdown" style="float: right">
					<select class="btn btn-danger personalbtn">
			  		    <option value="" disabled selected hidden>Interest</option>
					    <option value="Going"><i class="fa fa-thumbs-up"></i>Going</option>
						<option value="Interested"><i class="fa fa-star"></i>Interested</option>
					    <option value="NotGoing"><i class="fa fa-thumbs-down"></i>Not Going</option>
					</select>
				</div>
	    	</div>
		</div> -->
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