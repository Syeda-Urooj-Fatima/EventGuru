<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>Event Guru</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css" />
	<script src="jquery/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script src="bootstrap4/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
	/>

	<link rel="stylesheet" type="text/css" href="plugins/rateit.js-master/scripts/rateit.css"/>
	<script src="plugins/rateit.js-master/scripts/jquery.rateit.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script  type="text/javascript" src="plugins/typeahead.bundle.js"></script>

	<link href="css/carousel.css" rel="stylesheet" />
	<link rel="icon" href="images/icon.png">
</head>
<body>
	<?php
	include "header.php";
	?>
	<br><br>
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
			<h3 data-toggle="popover" title="Event Search Result" data-placement="top" data-content="These are the events based on you search Criteria">Events You are Currently Hosting</h3>
		</div>
	</div>
	</div>
	<div class="container">
	<div class="row">
		<div class="card col-xs-12 col-lg-6 event" >
				<img class="card-img-top" src="images/2.jpg" alt="Card image" style="width:100%">
				<div class="card-body">
					<h4 class="card-title">NUST E-Gaming Competition</h4>
					<p class="card-text">
						<b><i class="fa fa-suitcase"></i> Organization Name: </b>TABA Youth Chapter NUST<br>
						<b><i class="fa fa-university"></i> University: </b>National University of Science and Technology<br>
						<b><i class="fa fa-calendar-o"></i> Time & Date: </b>5pm - 10pm : Dec 4, 2017<br>
						<b><i class="fa fa-star"></i> Host Rating: </b>
							<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star-o"></span>
				<br>
						<b><i class="fa fa-arrow-right"></i> Type: </b>E-Gaming <br>
					</p>
					<a href="#" class="btn btn-danger personalbtn">Visit Event</a>
				</div>
		</div>
			<div class="card col-xs-12 col-lg-6 event" >
				<img class="card-img-top" src="images/3.jpg" alt="Card image" style="width:100%">
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
					<a href="#" class="btn btn-danger personalbtn">Visit Event</a>
				</div>
		</div>
		<div class="card col-xs-12 col-lg-6 event" >
				<img class="card-img-top" src="images/4.jpg" alt="Card image" style="width:100%">
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
					<a href="#" class="btn btn-danger personalbtn">Visit Event</a>
				</div>
		</div>
		<div class="card col-xs-12 col-lg-6 event" >
				<img class="card-img-top" src="images/5.jpg" alt="Card image" style="width:100%">
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
					<a href="#" class="btn btn-danger personalbtn">Visit Event</a>
				</div>
		</div>
	</div>
	</div>
	
			<!-- Footer -->
		<?php
		include "footer.php"; 
		?>

</body>
</html>