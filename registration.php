<?php
    include('connection.php'); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="css/bs/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="fontawesome/css/all.css">

    <!-- Bootstrap scripts -->
    <script src="js/bsjs/bootstrap.bundle.min.js"></script>
</head>

<body>
<?php


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email =    $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];


$sql = "INSERT INTO tbl_users (firstname, lastname, email, phone, password)
VALUES ('$firstname', '$lastname', '$email', '$phone', '$password' )";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
    <div>
        <form action="" method="POST" novalidate>
            <div class="container">

                <div class="row">
                    <div class="col-sm-3">
                        <h1>Registration</h1>
                        <p>Please fill up the form.</p>
                        <hr class="mb-3">
                        <label for="firstname"><b>First Name</b></label>
                        <input class="form-control" type="text" name="firstname" required>

                        <label for="lastname"><b>Last Name</b></label>
                        <input class="form-control" type="text" name="lastname" required>

                        <label for="email"><b>Email</b></label>
                        <input class="form-control" type="email" name="email" required>

                        <label for="phone"><b>Phone</b></label>
                        <input class="form-control" type="text" name="phone" required>

                        <label for="password"><b>Password</b></label>
                        <input class="form-control" type="password" name="password" required>
                        <hr class="mb-3">

                        <div class="d-grid">
                            <input class="btn btn-dark btn-lg" type="submit" value="Sign-Up" name="submit">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>

</html>