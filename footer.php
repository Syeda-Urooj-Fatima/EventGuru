<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Footer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>	
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <link rel="stylesheet" type="text/css" href="plugins/rateit.js-master/scripts/rateit.css"/>
	<script src="plugins/rateit.js-master/scripts/jquery.rateit.min.js"></script>
	<link rel="icon" href="images/icon.png">	

    <link rel="stylesheet" href="css/footer.css">
	

    <script>
	    $(window).scroll(function() {
		    $(".slideanim").each(function(){
		    	var pos = $(this).offset().top;
			    var winTop = $(window).scrollTop();
			    if (pos < winTop + 500) {
			      $(this).addClass("slide");
			    }
		  	});
		});

		function locationMap() {
		var myCenter = new google.maps.LatLng(33.6423643,72.9831311);
		var mapProp = {center:myCenter, zoom:17, scrollwheel:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
		var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
		var marker = new google.maps.Marker({position:myCenter});
		marker.setMap(map);
		}
    </script>
</head>
<body>
	
	<div class="container-fluid bg-light border border-default border-bottom-0 border-right-0 border-left-0">
	    <div id="contact">
	    	<br/>
			<h2 class="text-center">Contact</h2>
			<div class="row">
			    <div class="col-xs-12 col-md-5">
			      <p>Contact us and we'll get back to you within 24 hours.</p>
			      <p><i class="fa fa-map-marker"></i> CIE, NUST H-12, Islamabad, Pakistan</p>
			      <p><i class="fa fa-phone"></i> 090078601</p>
			      <p><i class="fa fa-envelope"></i> eventguru@gmail.com</p> 
			    </div>
				<div class="col-xs-12 col-md-7">
					<form onsubmit="submitform()">
					    <div class="row">
					      <div class="col-sm-12 form-group slideanim">
					        <input class="form-control form-control-sm" name="name" placeholder="Name" type="text" required>
					      </div>
					    </div>
					    <textarea class="form-control form-control-sm slideanim" name="comments" placeholder="Comment" rows="5" required></textarea><br>
				        <div class="row">
				          <div class="col-sm-12 form-group">
				          	<button class="btn btn-default pull-right" type="submit">Send</button>
				          </div>
				        </div> 
				    </form>
			    </div>
			</div>
		</div>

	    <div id="about" class="text-center">
	    	<br/>
			<div class="row">
			    <div class="col-xs-12 col-md-7 slideanim">
			      <div id="googleMap"></div>
			    </div>
				<div class="col-xs-12 col-md-5 slideanim border border-default border-bottom-0 border-right-0 border-left-0">
					<br/>
				    <h2>About</h2>
				    <p>We at EventGuru promise to provide you with timely updates regarding the events around you</p>
				    <br/>
				    <h2>Rate Us</h2>
				    <span id="rate" class="rateit">
	  				</span>
			    </div>
			</div>
		</div>

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkNKS956vWGn1THMSpYKDJxLEwA1OjC2Q&callback=locationMap"></script>

	</div> <!--Closing the container-fluid body-->
	<br/><br/>
	<div id="footer_bottom">
       &copy; All rights reserved
	</div>
</body>
</html>