<?php session_start();
 ?>
<html>
<head>
<meta charset="utf-8">
		<title>Meet The Team</title>
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
		<link href="css/MeetTeam.css" rel="stylesheet" />
		<link rel="icon" href="images/icon.png">

	
</head>
<body>
<?php
	include "header.php";
?>


		<div class="event-category container">
			<br>
			<h3>Meet The Hard Working Team</h3>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-lg-6">
					<div class="category">
						<img class="img-circle center-block" src="Files/AbdulQadir.jpg" alt="Generic placeholder image" width="300" height="300">
						<?php
						 	 $fp = fopen("Files/AbdulQadir.txt", "r");
						 	 while (!feof($fp)){
							  echo fgets($fp)."<br>";
							} 
						?>						
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-lg-6">
					<div class="category ">
						<img class="img-circle center-block" src="Files/AyeshaAnjum.jpg" alt="Generic placeholder image" width="300" height="300">
						<?php
						 	 $fp = fopen("Files/AyeshaAnjum.txt", "r");
						 	 while (!feof($fp)){
							  echo fgets($fp)."<br>";
							}
							fclose($fp); 
						?>
					</div>
				</div>

				<!-- /.col-lg-4 -->
				<div class="col-xs-3 col-sm-3 col-lg-3"></div>
				<div class="col-xs-12 col-sm-6 col-lg-6">
					<div class="category">
						<img class="img-circle center-block" src="Files/SyedaUroojFatima.jpg" alt="Generic placeholder image" width="300" height="300">
						<?php
						 	 $fp = fopen("Files/SyedaUroojFatima.txt", "r");
						 	 while (!feof($fp)){
							  echo fgets($fp)."<br>";
							}
							fclose($fp); 
						?>	
					</div>
				</div>
				

				<div class="col-xs-12 col-sm-6 col-lg-6">
					<div class="category">
						<img class="img-circle center-block" src="Files/DanialAhmed.jpg" alt="Generic placeholder image" width="300" height="300">
						<?php
						 	 $fp = fopen("Files/DanialAhmed.txt", "r");
						 	 while (!feof($fp)){
							  echo fgets($fp)."<br>";
							} 
							fclose($fp);
						?>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-lg-6">
					<div class="category">
						<img class="img-circle center-block" src="Files/HaseebAwan.jpg" alt="Generic placeholder image" width="300" height="300">
						<?php
						 	 $fp = fopen("Files/HaseebAwan.txt", "r");
						 	 while (!feof($fp)){
							  echo fgets($fp)."<br>";
							} 
							fclose($fp);
						?>
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