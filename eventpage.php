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
					<h1>Drama Fest</h1>
					<hr>
					<i class="fa fa-bank" style="font-size:28px"></i>
					<a href="#">National University of Sciences and Technology</a>
					<br>
					<p>
						<i class="fa fa-suitcase" style="font-size:28px"></i>
						Student Government Assosiation</p>
					<hr>
					<img class="img-fluid rounded" src="images/dramafest.jpg" alt="dramafest cover">
					<!-- so that image scales with the parent element -->
					<hr>
					<video width="100%" height="250" controls>
						<source src="images/drama.mp4" type="video/mp4">
					</video>
					<p>Here comes the last event of the academic calender , FJMU Dramatics Society Proudly presents Performing Arts & Annual
						Theatre: DRAMAFEST '17 Details About Performances: -Tareek Chandani (Serious Theatre) -Chodah Jama Sattar (Comedy Theatre)
						- Jahan Mai jaati Houn (Human Puppet Show) -Kathak Dance Performance -Save Water, Save Life (Mime Performance) -Hip
						Hop Dance Performance -Sing out loud (Singing Show) VENUE : FJMU Auditorium DATE : 24th May , 2017 TIMINGS : 3pm -
						5pm We warmly welcome you all to join us!!!</p>
					<hr>
				</div>
				<div class="Sidebars col-sm-12 col-md-5 col-xl-4">
					<div>
						<div class="header rounded">
							<h4>Ratings</h4>
						</div>
						<div class="rating rounded">
							<span class="rateit"> </span>
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
								<span class="month">September</span>
							</h4>
						</div>
						<div class="cal rounded">
							<h3>
								<span class="weekday">Wednesday</span>
							</h3>
							<h1>
								<span class="day">24</span>
							</h1>
							<h4>
								<span class="year">2014</span>
							</h4>
						</div>
					</div>

				</div>
				<div class="comments col-sm-12 col-md-7 col-xl-8 ">
					<div class="header rounded">
						<h4>Leave a comment</h4>
					</div>
					<div class="comsub">
						<form>
							<textarea class="form-control ta" id="comment-textarea"></textarea>
							<button id="submit-comment">Submit</button>
						</form>
					</div>
					<br>
					<h5>User Name</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt
						tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>
					<br>
					<h5>User Name</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt
						tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>
					<br>
					<h5>User Name</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt
						tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>

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
					center: { lat: 33.6502423, lng: 73.0791017 }
				}

				// New map
				var map = new google.maps.Map(document.getElementById('map'), options);




				// Add marker
				var marker = new google.maps.Marker({
					position: { lat: 33.6502423, lng: 73.0791017 },
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