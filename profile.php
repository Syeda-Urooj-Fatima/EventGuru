<?php session_start();?>
<html>
<head>
	<title>Event Guru - Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- google login -->
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<meta name="google-signin-client_id" content="698968730284-cvp920b6ipmgukv1o2k1nm3hmv0053gl.apps.googleusercontent.com"> 
    
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css" />
	<script src="jquery/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script src="bootstrap4/js/bootstrap.min.js"></script>	

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <link rel="stylesheet" type="text/css" href="plugins/rateit.js-master/scripts/rateit.css"/>
	<script src="plugins/rateit.js-master/scripts/jquery.rateit.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script  type="text/javascript" src="plugins/typeahead.bundle.js"></script>

	<link rel="stylesheet" type="text/css" href="css/profile.css"/>
    <link rel="icon" href="images/icon.png">
</head>

<body>
	<?php
		$servername='localhost';
		$username='admin1';
		$password='admin1';
		$database='ravens_eventgru';
		$conn= mysqli_connect($servername,$username,$password,$database);
		if (!$conn)
		{
			die("Failed to connect to MySQL: " . mysqli_connect_error());
		}

		$query="SELECT * FROM Accounts WHERE UserName = '".$_SESSION['username']."'";
		if($result=mysqli_query($conn,$query))
		{
			if(mysqli_num_rows($result)>0)
			{
			    $row=mysqli_fetch_assoc($result);
			    $username=$row["UserName"];
      			$Fname=$row["FirstName"];
      			$Lname=$row["LastName"];
      			$gender=$row["Gender"];
      			$email=$row["Email"];
			    mysqli_free_result($result);
			    mysqli_close($conn);
	    	}
	    }
	?>
	<?php include "header.php"; ?>
	<div class="container">
		<br>
		<h1>Account Profile</h1>
		<hr>
		<div class="profile col-xs-12 col-md-6">
			<div class="row">
		        <div class="col-sm-12 col-md-6 form-group">
		        	<label for="sign-firstname">First Name</label>
		            <input class="form-control form-control-sm" id="sign-firstname" name="sign-firstname" placeholder="First Name" type="text" pattern="[a-zA-Z ']*" maxlength="30" value=<?php echo "'".$Fname."'"?> disabled required>
			    </div>

			    <div class="col-sm-12 col-md-6 form-group">
			    	<label for="sign-lastname">Last Name</label>
		            <input class="form-control form-control-sm" id="sign-lastname" name="sign-lastname" placeholder="Last Name" type="text" pattern="[a-zA-Z ']*" maxlength="30" value=<?php echo "'".$Lname."'"?> disabled required>
			    </div>
			</div>

			<div class="row">
				<div class="col-sm-12 form-group">
		        	<label for="sign-username">User Name</label>
		        	<div class="input-group">
					    <span class="input-group-addon"><i class="fa fa-user"></i></span>
					    <input class="form-control form-control-sm" id="sign-username" name="sign-username" placeholder="UserName (Letters, digits, hyphens, underscores allowed)" type="text" pattern="[a-zA-Z0-9-_]*" maxlength="30" required disabled value=<?php echo "'".$username."'"?><br/>
					    <!--<span id="message"></span><br/>-->
					</div>
				</div>
			</div>

			<div class="row">
			    <div class="col-sm-12 form-group">
			    	Gender&nbsp;&nbsp;
			    	<label class="radio-inline"><input type="radio" name="sign-gender" value="Male"  <?php if($gender=="Male") echo "checked"?> disabled required>Male</label>
					<label class="radio-inline"><input type="radio" name="sign-gender" value="Female" <?php if($gender=="Female") echo "checked"?> disabled>Female</label>
			    </div>
			</div>

			<div class="row">
			    <div class="col-sm-12 form-group">
			    	<label for="sign-email">Email</label>
			    	<div class="input-group">
					    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
					    <input class="form-control form-control-sm" id="sign-email" name="sign-email" placeholder="Email" type="email" value=<?php echo "'".$email."'"?> disabled required>
					</div>
			    </div>
			</div>
		</div>
	</div>

	<?php include "footer.php"; ?>
</body>
</html>