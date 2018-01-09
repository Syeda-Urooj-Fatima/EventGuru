<?php session_start(); ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/styles.css">


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

		<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="bower_components/moment/min/moment.min.js"></script>
		<script type="text/javascript" src="bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
		<link rel="stylesheet" href="bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css"
		/>
		<!-- <link rel="stylesheet" href="plugins/rateit.js-master/scripts/rateit.css">
		<script src="plugins/rateit.js-master/scripts/jquery.rateit.min.js"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		<!-- <link rel="stylesheet" href="css/header.css" />
		<link rel="stylesheet" href="css/footer.css">
        <script src="head_foot.js"></script> -->
        
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
		<script  type="text/javascript" src="plugins/typeahead.bundle.js"></script>
		<script type="text/javascript">
			function googleTranslateElementInit() {
				new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
			}
        </script>

	</head>

	<body>
        <?php
            include "header.php"; 
        ?>
		<div id="google_translate_element">
		</div>
		<div class="container">
			<div class="row">

				<div class="event col-sm-12 col-md-7 col-xl-8">
					<br>
					<h1>
						<?php
								$eventId = $_GET["ID"];

								$servername = "localhost";
								$username = "admin1";
								$password = "admin1";
								$database = "ravens_eventgru";

								// Create connection
								$conn = mysqli_connect($servername, $username, $password, $database);

								if (!$conn) {
									die("Failed to connect to mysql" . mysqli_connect_error());
								}
								else
								{
									$result=mysqli_query($conn,"SELECT EventTitle FROM event WHERE Eventid = '$eventId'");
									if ($result->num_rows > 0) 
									{
									    // output data of each row

									    while($row = $result->fetch_assoc()) 
									    {
									        echo $row["EventTitle"]. "<br>";
										}
									}
								}
						?>
					</h1><input id="event-id" value="<?php echo $eventId; ?>" hidden>
					<hr>
					<i class="fa fa-bank" style="font-size:28px"></i>
						<?php
								if (!$conn) 
								{
									die("Failed to connect to mysql" . mysqli_connect_error());
								}
								else
								{

									$result=mysqli_query($conn,"SELECT UniversityName FROM university INNER JOIN society ON university.UniversityID =  society.UniversityID INNER JOIN event ON society.Societyid=event.Societyid WHERE Eventid = '$eventId'");
									if ($result->num_rows > 0) 
									{
									    // output data of each row

									    while($row = $result->fetch_assoc()) 
									    {
									        echo $row["UniversityName"]. "<br>";
										}
									}
								
								}
						?>
					<p>
						<i class="fa fa-suitcase" style="font-size:28px"></i>
						<?php
								if (!$conn) 
								{
									die("Failed to connect to mysql" . mysqli_connect_error());
								}
								else
								{

									$result=mysqli_query($conn,"SELECT SocietyName FROM society INNER JOIN event ON society.Societyid=event.Societyid WHERE Eventid = '$eventId'");
									if ($result->num_rows > 0) 
									{
									    // output data of each row

									    while($row = $result->fetch_assoc()) 
									    {
									        echo $row["SocietyName"]. "<br>";
										}
									}
								
								}
						?>
					</p>
					<p>
						<i class="fa fa-money"  style="font-size:28px"></i>
						<?php
								if (!$conn) 
								{
									die("Failed to connect to mysql" . mysqli_connect_error());
								}
								else
								{

									$result=mysqli_query($conn,"SELECT TicketPrice, ContactPhone,ContactEmail FROM society INNER JOIN event ON society.Societyid=event.Societyid WHERE Eventid = '$eventId'");
									if ($result->num_rows > 0) 
									{
									    // output data of each row

									    while($row = $result->fetch_assoc()) 
									    {
									        echo "Ticket Price: ". $row["TicketPrice"]. "<br>";
										}
									}
								
								}
						?>
						<i class="fa fa-fax"  style="font-size:28px"></i>
						<?php

									        echo "Contact Number: " .$row["ContactPhone"]. "<br>";
									        ?>
									        <i class="fa fa-fax" style="font-size:28px" ></i>
									       <?php 
									        echo "Contact Email: " .$row["ContactEmail"]. "<br>";?>
					</p>
					<hr>
					<img class="img-fluid rounded" src="
					<?php
								if (!$conn) 
								{
									die("Failed to connect to mysql" . mysqli_connect_error());
								}
								else
								{

									$result=mysqli_query($conn,"SELECT PosterPath FROM event WHERE Eventid = '$eventId'");
									if ($result->num_rows > 0) 
									{
									    // output data of each row

									    while($row = $result->fetch_assoc()) 
									    {
									        echo $row["PosterPath"];
										}
									}
								
								}
						?>
						" alt="dramafest cover">
					<!-- so that image scales with the parent element -->
					<hr>
					<iframe width="100%" height="250px">
						src="
						<?php
								if (!$conn) 
								{
									die("Failed to connect to mysql" . mysqli_connect_error());
								}
								else
								{

									$result=mysqli_query($conn,"SELECT VideoLink FROM event WHERE Eventid = '$eventId'");
									if ($result->num_rows > 0) 
									{
									    // output data of each row

									    while($row = $result->fetch_assoc()) 
									    {
									        echo $row["VideoLink"];
										}
									}
								
								}
						?>
						">
					</iframe>
					<p>
						<?php
								if (!$conn) 
								{
									die("Failed to connect to mysql" . mysqli_connect_error());
								}
								else
								{

									$result=mysqli_query($conn,"SELECT Description FROM event WHERE Eventid = '$eventId'");
									if ($result->num_rows > 0) 
									{
									    // output data of each row

									    while($row = $result->fetch_assoc()) 
									    {
									        echo $row["Description"]. "<br>";
										}
									}
								
								}
						?>
					</p>
					<hr>
				</div>
				<div class="Sidebars col-sm-12 col-md-5 col-xl-4">
					<div>
						<div class="header rounded">
							<h4>Ratings</h4>
						</div>
						<div class="rating rounded">
							<span class="rateit" id="rateitt" onclick="rrr()" data-rateit-step="1" data-rateit-resetable='false'> </span>
							<script type="text/javascript">
							    $("#rateitt").click(function () {
							        var data = {Rate: $(this).rateit('value')};
							        $.post("rate.php",data);
							    });
							</script>
							
						</div>
						<br>
					</div>
					<div>
						<div class="header rounded">
							<h4>Location</h4>
						</div>
						<div id="map">
						</div>
						<br>
					</div>
					<div>
						<div class="header rounded">
							<h4>
								<span class="month">
									<?php
								if (!$conn) 
								{
									die("Failed to connect to mysql" . mysqli_connect_error());
								}
								else
								{
									$result=mysqli_query($conn,"SELECT EventDate FROM event WHERE Eventid = '$eventId'");
									if ($result->num_rows > 0) 
									{
									    // output data of each row

									    while($row = $result->fetch_assoc()) 
									    {
									    	$date = date_create($row["EventDate"]);
									        echo date_format($date, 'F');
										}
									}
								}
								?>
								</span>
							</h4>
						</div>
						<div class="cal rounded">
							<h3>
								<span class="weekday">
									<?php
								 echo date_format($date, 'l');
								?>
								</span>
							</h3>
							<h1>
								<span class="day">
									<?php
								 echo date_format($date, 'jS');
								?>
								</span>
							</h1>
							<h4>
								<span class="year">
									<?php
								 echo date_format($date, 'Y');
								?>
								</span>
							</h4>
							<h4>
								<span class="year">
									<?php
								 if (!$conn) 
								{
									die("Failed to connect to mysql" . mysqli_connect_error());
								}
								else
								{
									$result=mysqli_query($conn,"SELECT EventTime FROM event WHERE Eventid = '$eventId'");
									if ($result->num_rows > 0) 
									{
									    // output data of each row

									    while($row = $result->fetch_assoc()) 
									    {
									        echo $row['EventTime'];
										}
									}
								}
								?>
								</span>
							</h4>
						</div>
					</div>

				</div>
				<div class="comments col-sm-12 col-md-7 col-xl-8 ">
					<div class="header rounded">
						<h4>Leave a comment</h4>
					</div>
					<script type="text/javascript">
						function submit()
						{
							var data = {comment: $("#comment-textarea").val(), eventId: $("#event-id").val()};
							$.post("comments.php",data);
							$('#comment-textarea').val('');
						}
					</script>
					<div class="comsub">
							<textarea class="form-control ta" id="comment-textarea"></textarea>
							<button type= "button" onclick="submit()" id="submit-comment">Submit</button>
					</div>
					<br>
					<?php
											if (!$conn) 
											{
												die("Failed to connect to mysql" . mysqli_connect_error());
											}
											else
											{
													$commentno = $result->num_rows;
													$result=mysqli_query($conn,"SELECT username,Comments FROM feedback WHERE Eventid ='$eventId'");
													for ($x = 0; $x <= $commentno; $x++) 
													{
														    // output data of each row

														    while($row = $result->fetch_assoc()) 
														    {
														        echo "<h5>". $row['username'] ."</h5>";
														        echo "<p>". $row['Comments'] ."</p>";
															}
												
													}
											}
					?>
					<br>

				</div>
			</div>

		</div>
	
        <?php
            include "footer.php"; 
        ?>

		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDTgO40Y5vq0UC2ymzR35tcriyGBTZ-JU&callback=initMap">
		</script>
        <script>
			function initMap() {
				// Map options
				var options = {
					zoom: 16,
					center: { lat: 	<?php
											if (!$conn) 
											{
												die("Failed to connect to mysql" . mysqli_connect_error());
											}
											else
											{
													$commentno = $result->num_rows;
													$result=mysqli_query($conn,"SELECT VenuLat FROM event WHERE Eventid = '$eventId'");
				if ($result->num_rows > 0) 
				{
				    // output data of each row

				    while($row = $result->fetch_assoc()) 
				    {
				        echo $row["VenuLat"];
					}
				}
													
											}
					?>

						, lng:<?php
											if (!$conn) 
											{
												die("Failed to connect to mysql" . mysqli_connect_error());
											}
											else
											{
													$commentno = $result->num_rows;
													$result=mysqli_query($conn,"SELECT VenuLng FROM event WHERE Eventid = 1");
				if ($result->num_rows > 0) 
				{
				    // output data of each row

				    while($row = $result->fetch_assoc()) 
				    {
				        echo $row["VenuLng"];
					}
				}
													
											}
					?>
						 }
				}

				// New map
				var map = new google.maps.Map(document.getElementById('map'), options);




				// Add marker
				var marker = new google.maps.Marker({
					position: { lat: <?php
											if (!$conn) 
											{
												die("Failed to connect to mysql" . mysqli_connect_error());
											}
											else
											{
													$commentno = $result->num_rows;
													$result=mysqli_query($conn,"SELECT VenuLat FROM event WHERE Eventid = '$eventId'");
				if ($result->num_rows > 0) 
				{
				    // output data of each row

				    while($row = $result->fetch_assoc()) 
				    {
				        echo $row["VenuLat"];
					}
				}
													
											}
					?>, lng: <?php
											if (!$conn) 
											{
												die("Failed to connect to mysql" . mysqli_connect_error());
											}
											else
											{
													$commentno = $result->num_rows;
													$result=mysqli_query($conn,"SELECT VenuLng FROM event WHERE Eventid = '$eventId'");
				if ($result->num_rows > 0) 
				{
				    // output data of each row

				    while($row = $result->fetch_assoc()) 
				    {
				        echo $row["VenuLng"];
					}
				}
													
											}
					?>},
					map: map,
				});

			}

		</script>
			<?php
			if(isset($_SESSION["userinfo"]))
			{
				if($_SESSION["userifno"]=="correct")
				{
					echo "<script type=\"text/javascript\">
						document.getElementById('comment-textarea').disabled=false;
						</script>";
				}
			}
			elseif(!isset($_SESSION["userinfo"]) or $_SESSION["userifno"]=="wrong")
			{
				echo "<script type=\"text/javascript\">
						document.getElementById('comment-textarea').disabled=true;
						</script>";
			}
		?>
		
	</body>

</html>