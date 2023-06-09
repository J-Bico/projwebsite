<?php

session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];


		//read from database
		$query = "select * from users where user_name = '$user_name' limit 1";
		$result = mysqli_query($con, $query);

		if ($result) {
			if ($result && mysqli_num_rows($result) > 0) {

				$user_data = mysqli_fetch_assoc($result);

				if ($user_data['password'] === $password) {

					$_SESSION['user_id'] = $user_data['user_id'];
					header("Location: index.php");
					die;
				}
			}
		}

}

?>


<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<!-- CSS Stylesheets -->
	<link rel="stylesheet" href="css/bs/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="fontawesome/css/all.css">

	<!-- Bootstrap scripts -->
	<script src="js/bsjs/bootstrap.bundle.min.js"></script>
</head>

<body class="login">


	<div>
		<form class="form-container" action="" method="post" onsubmit="return validate()">
			<div class="container ">

				<div class="row r-2">
					<div class="col-sm-3">
						<h1 class="loginh"  >Login</h1>
						<hr class="mb-3">
						<input type="hidden" name="id">
						<label class="lblform" for="firstname"><b>Username</b></label>
						<input class="form-control mb-3 mt-3" id="user" type="text" name="user_name">

						<label class="lblform" for="password"><b>Password</b></label>
						<input class="form-control mb-3 mt-3" id="pass" type="password" name="password">
						<hr class="mb-3">

						<div class="d-grid">
							<input class="btn btn-dark btn-lg" type="submit" value="Login" name="submit">
						</div>

						<div class="d-grid mt-2">
							<a class="btn btn-dark btn-lg" href="signup.php">Sign-Up</a><br><br>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>

<script src="js/bsjs/index.js"></script>
</body>

</html>