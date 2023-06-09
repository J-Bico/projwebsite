<?php
session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];


	//save to database
	$user_id = random_num(20);
	$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

	mysqli_query($con, $query);

	header("Location: login.php");
	die;

}
?>


<!DOCTYPE html>
<html>

<head>
	<title>Signup</title>
	<!-- CSS Stylesheets -->
	<link rel="stylesheet" href="css/bs/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="fontawesome/css/all.css">

	<!-- Bootstrap scripts -->
	<script src="js/bsjs/bootstrap.bundle.min.js"></script>
</head>

<body class="signup">

	<div>
		<form class="form-container" action="" method="post" onsubmit="return validate()">
			<div class="container ">

				<div class="row r-1">
					<div class="col-sm-3 bgform">
						<h1 class="loginh" >Registration</h1>
						<p class="p">Please fill up the form.</p>
						<hr class="mb-3">
						<input type="hidden" name="id">
						<label class="lblform" for="firstname"><b>Username</b></label>
						<input class="form-control mb-3 mt-3" id="user" type="text" name="user_name">

						<label class="lblform" for="password"><b>Password</b></label>
						<input class="form-control mb-3 mt-3" id="pass" type="password" name="password">
						<hr class="mb-3">

						<div class="d-grid">
							<input class="btn btn-dark btn-lg" type="submit" value="Sign-Up" name="submit">
						</div>

						<div class="d-grid mt-2">
							<a class="nav-link clck" href="login.php">Already have an account? Click here to login</a><br><br>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>

	<script src="js/bsjs/index.js"></script>
</body>

</html>