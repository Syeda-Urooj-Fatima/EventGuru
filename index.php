<?php session_start();
 ?>
<html>
<head>
<meta charset="utf-8">
		<title>Event Guru</title>
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
<!-- Carousel -->

<div id="myCarousel" class="carousel slide" data-interval="2000" data-pause="hover" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<img class="first-slide d-block img-fluid" src="images/event1.png" alt="First slide">
				</div>
					<div class="container">
						<div class="carousel-caption">
					</div>
				</div>
				<div class="carousel-item">
					<img class="second-slide d-block img-fluid" src="images/event2.png" alt="Second slide">
					<div class="container">
						<div class="carousel-caption">
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img class="third-slide d-block img-fluid" src="images/event3.png" alt="Third slide">
					<div class="container">
						<div class="carousel-caption">
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img class="forth-slide d-block img-fluid" src="images/event4.png" alt="Forth slide">
					<div class="container">
						<div class="carousel-caption">
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img class="fifth-slide d-block img-fluid" src="images/event7.png" alt="Fifth slide">
					<div class="container">
						<div class="carousel-caption">
						</div>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>

		</div>

		<!-- /.carousel -->


		<!--website name-->
		<!-- <div class="university container">
		<div class="row">
		  <div class="col-lg-12">
			<h2 id="name">Event Guru</h2>
		  </div>
		</div>
	  </div> -->
		<hr id="top-line">

		<!--Browse By University -->

		<div class="university-category container">
			<div class="row">
				<div class="col-lg-12 text-center browse-category">
					<h3>Browse By University</h3>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<div class="uni nust">

						<a href='test.php?ID=1'>
							<img class="img-circle center-block img-fluid" src="images/nust.jpeg" alt="Generic placeholder image" width="120" height="120">
						</a>
						<h4>NUST</h4>
					</div>
				</div>
				<!-- /.col-lg-4 -->
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<div class="uni">
						<a href='test.php?ID=3'>
							<img class="img-circle center-block" src="images/fast.png" alt="Generic placeholder image" width="120" height="120">
						</a>
						<h4>FAST</h4>
					</div>
				</div>
				<!-- /.col-lg-4 -->
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<div class="uni lums">
						<a href='test.php?ID=2'>
							<img class="img-circle  center-block" src="images/lums.png" alt="Generic placeholder image" width="120" height="120">
						</a>
						<h4>LUMS</h4>
					</div>
				</div>
				<!-- /.col-lg-4 -->
				<!-- </div> -->


				<!-- <div class="row"> -->
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<div class="uni giki">
						<a href='test.php?ID=6'>
							<img class="img-circle  center-block" src="images/giki.png" alt="Generic placeholder image" width="120" height="120">
						</a>
						<h4>GIKI</h4>
					</div>
				</div>
				<!-- /.col-lg-4 -->
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<div class="uni">
						<a href='test.php?ID=7'>
							<img class="img-circle center-block" src="images/air.gif" alt="Generic placeholder image" width="120" height="120">
						</a>
						<h4>Air University</h4>
					</div>
				</div>
				<!-- /.col-lg-4 -->
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<div class="uni more">
						<a href="universities.php">
							<img class="img-circle center-block" src="images/search.png" alt="Generic placeholder image" width="120" height="120">
						</a>
						<h4>More</h4>
					</div>
				</div>
			</div>
		</div>

		<!--  -->

		<!-- browse by category -->

		<hr class="horizontal-line">

		<div class="event-category container">
			<div class="row">
				<div class="col-lg-12 text-center browse-category">
					<h3>Browse By Category</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<div class="category">
						<a href="test.php?cat=Concert">
							<img class="img-circle center-block" src="images/concert.svg" alt="Generic placeholder image" width="120" height="120">
						</a>
						<h4>Concert</h4>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-lg-4">
					<div class="category">
						<a href="test.php?cat=Sports">
							<img class="img-circle center-block" src="images/sports.png" alt="Generic placeholder image" width="120" height="120">
						</a>
						<h4>Sports</h4>
					</div>
				</div>
				<!-- /.col-lg-4 -->
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<div class="category">
						<a href="test.php?cat=EGaming">
							<img class="img-circle center-block" src="images/egaming.png" alt="Generic placeholder image" width="120" height="120">
						</a>
						<h4>EGaming</h4>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-lg-4">
					<div class="category">
						<a href="test.php?cat=Seminar">
							<img class="img-circle center-block" src="images/seminar.png" alt="Generic placeholder image" width="120" height="120">
						</a>
						<h4>Seminar</h4>
					</div>
				</div>
				<!-- /.col-lg-4 -->
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<div class="category">
						<a href="test.php?cat=Hackathon">
							<img class="img-circle center-block" src="images/hack.png" alt="Generic placeholder image" width="120" height="120">
						</a>
						<h4>Hackathon</h4>
					</div>
				</div>
				<!-- /.col-lg-4 -->
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<div class="category">
						<a href="" data-toggle="modal" data-target="#mymodal">
							<img class="img-circle center-block" src="images/search.png" alt="Generic placeholder image" width="120" height="120">
						</a>
						<h4>More</h4>
					</div>
				</div>
				<!-- /.col-lg-4 -->
			</div>
		</div>

		<!-- Modal -->
		<div id="mymodal" class="modal fade" role="dialog" aria-labelledby="title" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title" id="title">Events</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-xs-6 col-sm-3">
								<ul>
									<a href="test.php">
										<li>Concerts</li>
									</a>
									<a href="test.php">
										<li>Sports</li>
									</a>
								</ul>
							</div>
							<div class="col-xs-6 col-sm-3">
								<ul>
									<a href="test.php">
										<li>Hackathons</li>
									</a>
									<a href="test.php">
										<li>Seminars</li>
									</a>
								</ul>
							</div>
							<div class="col-xs-6 col-sm-3">
								<ul>
									<a href="test.php">
										<li>Debate</li>
									</a>
									<a href="test.php">
										<li>National Day</li>
									</a>
								</ul>
							</div>
							<div class="col-xs-6 col-sm-3">
								<ul>
									<a href="test.php">
										<li>Olympiad</li>
									</a>
									<a href="test.php">
										<li>Community Service</li>
									</a>
								</ul>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>



		<hr id="bottom-line">

<?php
include "footer.php";
?>
</body>
</html>