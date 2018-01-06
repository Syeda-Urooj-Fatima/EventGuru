
<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>	

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <!-- <link rel="stylesheet" type="text/css" href="plugins/rateit.js-master/scripts/rateit.css"/>
	<script src="plugins/rateit.js-master/scripts/jquery.rateit.min.js"></script>	 -->
    <link rel="icon" href="images/icon.png">

    <link rel="stylesheet" type="text/css" href="css/login.css"/>

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

		function strength_check(password)
		{
			var count=0;
			var pattern1=new RegExp("[a-z]");
			var pattern2=new RegExp("[A-Z]");
			var pattern3=new RegExp("[~`!@#$%^&*()_+-]");
			var pattern4=new RegExp("[0-9]");
			var colour;
			var strength="";

			if(pattern1.test(password))
			{
				count++;
			}

			if(pattern2.test(password))
			{
				count++;
			}

			if(pattern3.test(password))
			{
				count++;
			}	

			if(pattern4.test(password))
			{
				count++;
			}	

			if(password.length>0 && password.length<6)
				count=100;

			switch(count)
			{
				case 100:
					$("#sign-password").removeClass("poor bad good strong");
					$("#sign-password").addClass("short");
					$("#strengthShow").css('color', 'maroon');
					strength="Length too short";
					break;

				case 1:
					$("#sign-password").removeClass("short bad good strong");
					$("#sign-password").addClass("poor");
					$("#strengthShow").css('color', 'red');
					strength="Poor";
					break;

				case 2:
					$("#sign-password").removeClass("short poor good strong");
					$("#sign-password").addClass("bad");
					$("#strengthShow").css('color', 'orange');
					strength="Bad";
					break;

				case 3:
					$("#sign-password").removeClass("short poor bad strong");
					$("#sign-password").addClass("good");
					$("#strengthShow").css('color', "#ffd400");
					strength="Good";
					break;

				case 4:
					$("#sign-password").removeClass("short poor bad good");
					$("#sign-password").addClass("strong");
					$("#strengthShow").css('color', 'green');
					strength="Strong";
					break;

				default: 
					$("#sign-password").removeClass("short poor bad good strong");
					break;
			}

			document.getElementById("strengthShow").innerHTML=strength;
		}


    
    </script>
</head>
<body>
    <?php
    include "header.php";
    ?>
    <!--INSERT YOUR CONTENT HERE-->
    <div class="container-fluid bg-light">
    	<br/>
		<div class="row">
		    <div class="col-xs-12 col-md-6">
		        <form action="authenticate.php" class="login"  method="post">
		        	<h2>Log in</h2>
		        	<div class="row">
				        <div class="col-sm-12 form-group">
				        	<label for="log-username">User Name</label>
				        	<div class="input-group">
							    <span class="input-group-addon"><i class="fa fa-user"></i></span>
							    <input class="form-control form-control-sm" id="log-username" name="log-username" placeholder="UserName" type="text" required>
							</div>
					    </div>
					</div>

					<div class="row">
					    <div class="col-sm-12 form-group">
					    	<label for="log-password">Password</label>
					    	<div class="input-group">
							    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
							    <input class="form-control form-control-sm" id="log-password" name="log-password" placeholder="Password" type="password" required>
							</div>
					    </div>
					</div>

					<div class="row">
				        <div class="col-sm-12 form-group">
				          	<button class="btn btn-default btn-sm pull-right" type="submit">Log in</button>
				        </div>
				    </div>
					<?php

							if(isset($_SESSION["userinfo"]))
							{

								if($_SESSION["userinfo"]=="wrong")
								{
								?>
									<div class="row">
				       					 <div class="col-sm-12 form-group">
				          				<span>Incorrect username/password.</span>
				       					 </div>
				    				</div>
									<?php
									unset($_SESSION["userinfo"]);
								}
							}
					?>
			    </form>
		    </div>
	
			<div class="col-xs-12 col-md-6">
				<form action="" class="signup" onsubmit="submitform()">
					<h2>Sign Up</h2>
					<div class="row">
				        <div class="col-sm-12 col-md-6 form-group">
				        	<label for="sign-firstname">First Name</label>
				            <input class="form-control form-control-sm" id="sign-firstname" name="sign-firstname" placeholder="First Name" type="text" required>
					    </div>

					    <div class="col-sm-12 col-md-6 form-group">
					    	<label for="sign-lastname">Last Name</label>
				            <input class="form-control form-control-sm" id="sign-lastname" name="sign-lastname" placeholder="Last Name" type="text" required>
					    </div>
					</div>

					<div class="row">
						<div class="col-sm-12 form-group">
				        	<label for="sign-username">User Name</label>
				        	<div class="input-group">
							    <span class="input-group-addon"><i class="fa fa-user"></i></span>
							    <input class="form-control form-control-sm" id="sign-username" name="sign-username" placeholder="UserName" type="text" required>
							</div>
						</div>
					</div>

					<div class="row">
					    <div class="col-sm-12 form-group">
					    	Gender&nbsp;&nbsp;
					    	<label class="radio-inline"><input type="radio" name="sign-gender" required>Male</label>
							<label class="radio-inline"><input type="radio" name="sign-gender">Female</label>
					    </div>
					</div>

					<div class="row">
					    <div class="col-sm-12 form-group">
					    	<label for="sign-email">Email</label>
					    	<div class="input-group">
							    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
							    <input class="form-control form-control-sm" id="sign-email" name="sign-email" placeholder="Email" type="email" required>
							</div>
					    </div>
					</div>

					<div class="row">
					    <div class="col-sm-12 form-group">
					    	<label for="sign-password">Password</label>
					    	<div class="input-group">
							    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
							    <input class="form-control form-control-sm" id="sign-password" name="sign-password" placeholder="Password" type="password" oninput="strength_check(this.value)" required>&nbsp;&nbsp;
							    <span id="strengthShow"></span>
							</div>
					    </div>
					</div>

					<div class="row">
				        <div class="col-sm-12 form-group">
				          	<button class="btn btn-default btn-sm pull-right" type="submit">Sign up</button>
				        </div>
				    </div>
			    </form>
		    </div>

		</div> 
	</div> 
	<!--YOUR CONTENT ENDS HERE-->

    <?php
    include "footer.php";
    ?>
</body>
</html>