<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Header</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"/>

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

		<!-- <link rel="stylesheet" type="text/css" href="plugins/rateit.js-master/scripts/rateit.css"/>
		<script src="plugins/rateit.js-master/scripts/jquery.rateit.min.js"></script> -->
		<link rel="icon" href="images/icon.png"/>

		<link rel="stylesheet" href="css/header.css"/>

		<script>
			$("#search").keypress(function (event) { /*When enter button is clicked within the search box*/
				if (event.keyCode === 13) {
					$("#search-btn").click();
				}
			});

			$(document).ready(function () {
				$("#search-btn").click(function () {
					alert("Search button clicked");
				})
			});

			$(document).ready(function () {
				$('[data-toggle="tooltip"]').tooltip();
			});
		</script>
		<style>
			#logout{
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
		}
	?>
	
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
									<button id="search-btn" class="btn btn-success btn-sm" type="submit">
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