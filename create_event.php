<?
	session_start();
	if(!isset($_SESSION["username"]))
	{
		header("Location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Event Guru - Create Event</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="jquery/jquery-3.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="bower_components/moment/min/moment.min.js"></script>
	<script type="text/javascript" src="bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
	<link rel="stylesheet" href="bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
	
	<script type="text/javascript" src="js/create_event_script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/create_event_style.css">
	<link rel="stylesheet" href="croppie/croppie.css" />
	<script src="croppie/croppie.js"></script>
	<link rel="icon" href="images/icon.png">
</head>

<body>


	<div class="container" id="pageHead">
		<div style="height: 30px; background-color: #b20a0a; margin-bottom: 20px;"></div>
		<ul class="md-friendly nav nav-tabs" style="margin-bottom: 10px;">
			<li id="tab1" class="active" onclick="goTo('1')"><a href="#step1" style="color: #b20a0a">Name and Poster</a></li>
			<li id="tab2" onclick="goTo('2')"><a href="#step2" style="color: #b20a0a">Time and Date</a></li>
			<li id="tab3" onclick="goTo('3')"><a href="#step3" style="color: #b20a0a">Event Venue</a></li>
			<li id="tab4" onclick="goTo('4')"><a href="#step4" style="color: #b20a0a">Other Information</a></li>
		</ul>
		<div class="progress md-friendly">
	  		<div class="progress-bar progress-bar-danger" style="width:25%"></div>
	    </div>
		<div class="btn-group btn-grp-custom">
			<button id="nextButton" class="btn btn-custom" onclick="save()">Save &amp Proceed</button>
			<button id="prevButton" class="btn btn-default" onclick="cancel()">Cancel</button>		
		</div>
		<hr style="margin-top: 70px;">
	</div>

	<div id="step1" class="container step">
		<h2>Name and Poster</h2>
		<hr>
		<div class="row" style="margin-left: 10px; margin-right: 10px">
			<div class="col-md-5">			
				<h5><b>Event Name:</b></h5>
				<input type="text" class="form-control" id="event-name"><br>
				<h5><b>Event Category:</b></h5>
				<select class="form-control" id="event-cat">
					<option value="Seminar">Seminar</option>
				    <option value="Music">Music</option>
				    <option value="Gala">Gala</option>
				    <option value="Competition">Competition</option>
			  	</select><br>
				<h5><b>Description:</b></h5>
				<textarea class="form-control" rows="5" id="event-desc"></textarea><br>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-6">
				<h5><b>Poster:</b></h5>
				<div id="poster-area"></div>
				<button class="btn btn-sm btn-browse btn-basic btn-file">
				    Choose From Files<input id="file-input" type="file">
				</button>
			</div>
		</div>
	</div>

	<div id="step2" class="container step">
		<hr>
		<h2>Time and Date</h2>
		<hr>
	    <div class="form-group">
            <div id="datetimepicker12"></div>
	    </div>
	    <script type="text/javascript">
	        $(function () {
	            $('#datetimepicker12').datetimepicker({
	                inline: true,
	                sideBySide: true
	            });
	        });
	    </script>
	</div>

	<div id="step3" class="container step">
		<hr>
		<h2>Event Venue</h2>
		<hr>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h5><b>Choose event location from the map:</b></h5>
		    	<div id="map"></div>
				<input id="pac-input" class="controls" type="text" placeholder="Search Box">
			    <br>
			    <div class="input-group">
			    	<span class="input-group-addon">Address</span>
			        <input id="address" type="text" class="form-control" disabled>
			        <span class="input-group-addon" onclick="enableAddress()"><i class="glyphicon glyphicon-pencil"></i></span>
			    </div>
			</div>
			<div class="col-md-2"></div>
		</div>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUFxv5_uG8unIX4Tn15U0cgFtegQw6xTQ&libraries=places&callback=initMap"
		 async defer></script>
		<script type="text/javascript" src="js/map_script.js"></script>
	    </script>
	    <script type="text/javascript">
	    	function enableAddress(){
	    		$("#address").removeAttr('disabled');
	    	}
	    </script>
	</div>

	<div id="step4" class="container step">
		<hr>
		<h2>Other Information</h2>
		<hr>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-4">
				<h5><b>Contact Email:</b></h5>
				<input type="email" class="form-control" id="contact-email">
			</div>
		</div>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-4">
				<h5><b>Contact Phone:</b></h5>
				<input type="tel" class="form-control" id="contact-phone">
			</div>
		</div>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-4">
				<h5><b>Ticket Price:</b></h5>
				<input type="number" class="form-control" id="ticket-price">
			</div>
		</div><div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-4">
				<h5><b>Video Link:</b></h5>
				<input type="url" class="form-control" id="video-link">
			</div>
		</div>
	</div>
	<div style="height: 30px; background-color: #b20a0a; margin-top: 20px;"></div>

	<form action="target.php" method="post" hidden id="myform">
		<input id="form-name" name="name">
		<input id="form-category" name="category">
		<input id="form-description" name="description">
		<input id="form-poster" name="poster">
		<input id="form-date" name="date">
		<input id="form-time" name="time">
		<input id="form-address" name="address">
		<input id="form-lat" name="lat">
		<input id="form-lng" name="lng">
		<input id="form-email" name="email">
		<input id="form-phone" name="phone">
		<input id="form-ticketPrice" name="ticketPrice">
		<input id="form-videoLink" name="videoLink">
	</form>

</body>
</html>