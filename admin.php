<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin HomePage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>	

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <!-- <link rel="stylesheet" type="text/css" href="plugins/rateit.js-master/scripts/rateit.css"/>
	<script src="plugins/rateit.js-master/scripts/jquery.rateit.min.js"></script> -->
	<link rel="icon" href="images/icon.png">	
	<link rel="stylesheet" href="css/test1.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/footer.css">
	<script src="js/header.js"></script>
	<script src="js/footer.js"></script>

    <script>
    	$("#search").keypress(function(event) { /*When enter button is clicked within the search box*/
		    if (event.keyCode === 13) {
		        $("#search-btn").click();
		    }
		});

		$(document).ready(function(){
			$("#search-btn").click(function(){
				alert("Search button clicked");
			})
		});

		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip(); 
		});
    </script>
</head>
<body>
		<nav id="nav-top" class="navbar navbar-expand-lg">
					<a class="navbar navbar-brand logo" href="index.php">
				<img src="images/Logo 3.png" alt="logo">
				</a>
			
			<span class="navbar-text">All events at one place</span>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar1">
				<span class="navbar-toggler-icon"></span>
				</button>

			
			<!-- Navbar links-->
			<div class="collapse navbar-collapse" id="collapsibleNavbar1">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
							<form action="" onsubmit="submitform()">
								<div class="input-group">
									<input type="text" id="search" class="form-control form-control-sm" placeholder="Search an event">
									<span class="input-group-btn">
											<button id="search-btn" class="btn btn-success btn-sm" type="submit"><i class="fa fa-search"></i></button>
									</span>
							</div>
						</form>
					</li>
				</ul>
			</div>
		</nav>

			
		<nav id="nav-mid" class="navbar navbar-expand-lg">
				<button class="navbar-toggler col-xs-2" type="button" data-toggle="collapse" data-target="#collapsibleNavbar2">
				<span class="navbar-toggler-icon"></span>
			</button>

				<!-- Navbar links -->
			<div class="collapse navbar-collapse" id="collapsibleNavbar2">
				<ul class="navbar-nav">
						<li class="nav-item">
							<a href="test.php" class="nav-link">Musical  <i class="fa fa-music"></i></a>
						</li>
						<li class="nav-item">
							<a href="test.php" class="nav-link">Workshop  <i class="fa fa-pencil"></i></a>
						</li>
						<li class="nav-item">
							<a href="test.php" class="nav-link">Food  <i class="fa fa-cutlery"></i></a>
						</li>
						<li class="nav-item">
							<a href="test.php" class="nav-link">Education  <i class="fa fa-book"></i></a>
						</li>
						<li class="nav-item">
							<a href="test.php" class="nav-link">Games  <i class="fa fa-gamepad"></i></a>
						</li>
						<li class="nav-item">
							<a href="test.php" class="nav-link">Entertainment  <i class="fa fa-film"></i></a>
						</li>
						<li class="nav-item">
							<a href="test.php" class="nav-link">More  <i class="fa fa-chevron-circle-right"></i></a>
						</li>
				</ul>

				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
							<button class="btn btn-success btn-sm" type="submit" onclick="location.href='create_event.html'"><i class="fa fa-plus"></i> Create Event</button>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about">About</i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contact">Contact Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#rate">Rate Us</a>
						</li>
				</ul>
			</div>
		</nav>
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