<?php
session_start();

	include("connection.php");
	include("function.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_email = $_POST['user_email'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];

		if(!empty($user_email) && !empty($password) && !is_numeric($user_email))
		{
			if($password == $repassword){
				//save to database
			$query = "update users set password = '".$password."' where user_email = '".$user_email."'";
            mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else{
			echo "Password doesnt match!";
		}
		}else
		{
			echo "Please enter valid information!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<link href="img/favicon.ico" rel="icon">
        <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600|Pacifico" rel="stylesheet"> 

        <!-- Bootstrap CSS File -->
        <link href="vendor/bootstrap/css/bootstrapp.min.css" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="vendor/animate/animate.min.css" rel="stylesheet">
        <link href="vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="vendor/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Main Stylesheet File -->
        <link href="css/style1.css" rel="stylesheet">
</head>
<body>

	<section id="login">
            <div class="container">
                <div class="section-header">
                    <h3>Change Password</h3>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="login-col-2">
                            <div class="login-form">
                                <form method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="user_email" placeholder="Your Email" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="New Password" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="repassword" placeholder="Retype New Password" required="required" />
                                    </div>
                                    <div><button type="register" name="chagepsw">UpdatePassword</button></div>
                                    <a href="login.php" type="loginFpsw">Login</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>
