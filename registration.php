<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $username = $_POST["username"];
    $email = $_POST["email"];
    $Phone = $_POST["Phone"];
	$password = $_POST["password"];
	$c_password = $_POST["c_password"];
    $exists=false;
	$existSql = "SELECT * FROM registration WHERE username = '$username' AND Phone = '$Phone'LIMIT 1";
	$result = mysqli_query($conn, $existSql);
	$numExistRows = mysqli_num_rows($result);
	if($numExistRows > 0)
	{
		//$exists = true;
		$showError = "Username and phone number already exist";

	}
	else
	{
		//$exists = false;
        if(($password == $c_password) && $exists==false){
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `registration`(`username`, `Email`, `Phone`, `password`,`dt`) VALUES ('$username', '$email', '$Phone', '$hash',current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
			header("location: login.php");
			
        }
    }
    else{
        $showError = "Passwords do not match";
    }
}
}
//'$username', '$email', '$Phone', '$hash',current_timestamp())
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="registration.css">
</head>
<body>

    <div class="container">
        <form method="post" action="registration.php" id="registration-form">
            <h1>Registration</h1>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" maxlength="11" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label>Phone</label> 
            <input type="" name="Phone"  value="" required>
              </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" maxlength="11" required>
                
            </div>
            <div class="input-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="c_password" required>
                <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong>Your Account is created
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"></span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"></span>
        </button>
    </div> ';
    }
    ?>
            </div>
            <p>
                <a href="login.php">Existing user? please Sign in</a>
                </p>
                <br>
            <button type="submit" class="btn">Register</button>
             

        </form>
    </div>
</body>
</html>
