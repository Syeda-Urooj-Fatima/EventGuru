
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Header</title>
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"/>
		
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>-->

		<!-- <link rel="stylesheet" type="text/css" href="plugins/rateit.js-master/scripts/rateit.css"/>
		<script src="plugins/rateit.js-master/scripts/jquery.rateit.min.js"></script> -->
		<!--<script  type="text/javascript" src="plugins/typeahead.bundle.js"></script>-->
		<link rel="icon" href="images/icon.png"/>

		<link rel="stylesheet" href="css/header.css"/>

		<script>

			$(document).ready(function () {
				$('[data-toggle="tooltip"]').tooltip();
			});

			$(document).ready(function(){
			    // Sonstructs the suggestion engine
			    var events = new Bloodhound({
			        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('EventTitle'),
			        queryTokenizer: Bloodhound.tokenizers.whitespace,
			        remote: {
			        url: 'searchEvents.php?query=%QUERY',
			        wildcard: '%QUERY'
			      }
			    });
			    
			    events.initialize();
			    // Initializing the typeahead with remote dataset
			    $('.typeahead').typeahead({
			        highlight:true,
			      }, {
			        name: 'events',
			        displayKey:'EventTitle',
			        source: events,
			        limit: 10 /* Specify maximum number of suggestions to be displayed */
			    });
			});  
		</script>
	
		
		<style>
			#logout,#create_event,#google_signout{
				display:none;
			}
			a {
    			text-decoration: none !important;
			}
		</style>
			 
	</head>

	<body>
	<?php
		if(isset($_SESSION["userinfo"]))
		{
			if($_SESSION["userinfo"]=="correct")
			{
				echo "<style> #login,#signup{display:none;}</style>";
				echo "<style>#logout{display:inline;}</style>";	
			}
			if(isset($_SESSION["admin"]))
			{
			if($_SESSION["admin"]==true)
			{
				echo "<style>#create_event{display:inline;}</style>";	
			}
		}
		}
		// if(isset($_SESSION["google"]))
		// {
		// 	if($_SESSION["google"]==true)
		// 	{
		// 		echo "<style>#google_signout{display:inline;}</style>";
		// 	}
		// 	if($_SESSION["google"]==false)
		// 	{
		// 		echo "<style>#google_signout{display:none;}</style>";
		// 	}
		// }
	?>
		<nav id="nav-top" class="navbar navbar-expand-lg">
			<a class="navbar navbar-brand logo" href="index.php">
				<img src="images/Logo 3.png" alt="logo">
			</a>

			<span class="navbar-text">All events at one place</span>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar1">
				<span data-toggle="tooltip" title="Click to login/signup">
					<span class="navbar-toggler-icon"></span>
				</span>
			</button>


			<!-- Navbar links-->
			<div class="collapse navbar-collapse" id="collapsibleNavbar1">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<form action="" method="GET" onsubmit="submitform()">
							<div class="input-group input-group-sm">
								<input type="text" name='query' id="search" class="typeahead" placeholder="Search an event" autocomplete="off" spellcheck="false">
								<span class="input-group-btn">
									<button id="search-btn" class="btn btn-success btn-sm" type="submit" formaction="searchEvents.php">
										<i class="fa fa-search"></i>
									</button>
								</span>
							</div>
						</form>
					</li>
					<li class="nav-item">
						<button class="btn btn-success btn-sm" type="submit" id="login" data-toggle="tooltip" title="For an existing account" onclick="location.href='login.php'">
							<i class="fa fa-user"></i> Log in</button>
					</li>
					<li class="nav-item">
						<button class="btn btn-success btn-sm" type="submit" id="signup" data-toggle="tooltip" title="To create a new account" onclick="location.href='login.php'">
							<i class="fa fa-sign-in"></i> Sign up</button>
					</li>
					<li class="nav-item">
					<a href="logout.php?logout">	
					<button class="btn btn-success btn-sm" type="submit" id="logout" data-toggle="tooltip" title="Logout" >
							<i class="fa fa-sign-out"></i>Log out</button>
					</a>
					</li>
					<li class="nav-item">
					<a href="create_event.html">	
					<button class="btn btn-success btn-sm" type="submit" id="create_event" data-toggle="tooltip" title="Create Event" >
							<i class="fa fa-calendar"></i>Create Event</button>
					</a>
					</li>
					
				</ul>
			</div>
		</nav>
		<nav id="nav-mid" class="navbar navbar-expand-lg">
			<button class="navbar-toggler col-xs-2" type="button" data-toggle="collapse" data-target="#collapsibleNavbar2">
				<span data-toggle="tooltip" title="Click to see more">
					<span id="navbar-collapse-title">Event Categories&nbsp;&nbsp;&nbsp;</span>
					<span class="navbar-toggler-icon"></span>
				</span>
			</button>

			<!-- Navbar links -->
			<div class="collapse navbar-collapse" id="collapsibleNavbar2">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="test.php" class="nav-link">Musical
							<i class="fa fa-music"></i>
						</a>
					</li>
					<li class="nav-item">
						<a href="test.php" class="nav-link">Workshop
							<i class="fa fa-pencil"></i>
						</a>
					</li>
					<li class="nav-item">
						<a href="test.php" class="nav-link">Food
							<i class="fa fa-cutlery"></i>
						</a>
					</li>
					<li class="nav-item">
						<a href="test.php" class="nav-link">Education
							<i class="fa fa-book"></i>
						</a>
					</li>
					<li class="nav-item">
						<a href="test.php" class="nav-link">Games
							<i class="fa fa-gamepad"></i>
						</a>
					</li>
					<li class="nav-item">
						<a href="test.php" class="nav-link">Entertainment
							<i class="fa fa-film"></i>
						</a>
					</li>
					<li class="nav-item">
						<a href="test.php" class="nav-link">More
							<i class="fa fa-chevron-circle-right"></i>
						</a>
					</li>
				</ul>

				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a  class="nav-link" href="#about">About</i>
						</a>
					</li>
					<li class="nav-item">
						<a  class="nav-link" href="#contact">Contact Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#rate">Rate Us</a>
					</li>
				</ul>
			</div>

		</nav>

	</body>

</html>