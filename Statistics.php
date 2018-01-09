<?php session_start();
 ?>
<html>
<head>
<meta charset="utf-8">
		<title>Website Statistics</title>
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
		<link href="css/Statistics.css" rel="stylesheet" />
		<link rel="icon" href="images/icon.png">

	<?php
		$con = mysqli_connect("localhost","admin1","admin1","ravens_eventgru");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		  $Users = $con->query("SELECT count(UserName) FROM accounts WHERE isAdmin = 0");
		  $Users = $Users->fetch_array();

		  $University = $con->query("SELECT count(UniversityId) FROM university");
		  $University = $University->fetch_array();

		  $Society = $con->query("SELECT count(SocietyId) FROM society");
		  $Society = $Society->fetch_array();

		  $Event = $con->query("SELECT count(EventId) FROM event");
		  $Event = $Event->fetch_array();
	?>
	
</head>
<body>
<?php
	include "header.php";
?>


		<div class="event-category container">
			<br>
			<h3>Website Statistics</h3>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-lg-6">
					<div class="category">
						<img class="img-circle center-block" src="images/Users.png" alt="Generic placeholder image" width="300" height="300">
						<h4>Our Site contains <?php echo "<b  style='color:red'>". $Users[0]. "</b>"; ?> Registered Users</h4>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-lg-6">
					<div class="category">
						<img class="img-circle center-block" src="images/Society.png" alt="Generic placeholder image" width="300" height="300">
						<h4>Our Site contains <?php echo "<b  style='color:red'>". $Society[0]. "</b>"; ?> Registered Societies</h4>
					</div>
				</div>

				<!-- /.col-lg-4 -->

				<div class="col-xs-12 col-sm-6 col-lg-6">
					<div class="category">
						<img class="img-circle center-block" src="images/University.png" alt="Generic placeholder image" width="300" height="300">
						<h4>Our Site contains <?php echo "<b  style='color:red'>". $University[0]. "</b>"; ?> Registered Universities</h4>
					</div>
				</div>
				

				<div class="col-xs-12 col-sm-6 col-lg-6">
					<div class="category">
						<img class="img-circle center-block" src="images/Event.png" alt="Generic placeholder image" width="300" height="300">
						<h4>Our Site contains <?php echo "<b  style='color:red'>". $Event[0]. "</b>"; ?> Registered Events</h4>
					</div>
				</div>
			</div>
		</div>



<hr>
<?php
	include "footer.php";
?>
</body>
</html>