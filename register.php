<?php
 echo "hello";
 $name =$_GET['name'];
 echo "got name";
 $username =$_GET['username'];
 echo "got username";
 $email =$_GET['email'];
 $password =$_GET['password'];

 $con = mysqli_connect('localhost','root');
 if($con)
 {
 echo "connection succes";
 }
   mysqli_select_db($con,'project');
 
 $q = "INSERT INTO login (username,email,password,name) VALUES ('$username','$email','$password','$name') ";
 $i = mysqli_query($con,$q);
 echo $i;
 mysqli_close($con);

?> 







<!DOCTYPE html>
<html lang="en">
<head>
	<title>TourTracker - Tournament Tracker</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
     <form action="register.php" method="GET">
	<div class="limiter">
		<div class="container-login100">
	

			<div class="wrap-login100 p-l-85 p-r-85 p-t-35 p-b-55">


				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-28">
						Register <br/>a new account
					</span>

					<span class="txt1 p-b-5">
						Username
					</span>
					<div class="wrap-input90 validate-input m-b-26" data-validate = "Username is required">
						<input class="input90" type="text" name="username" required>
						<span class="focus-input90"></span>
					</div>
					<span class="txt1 p-b-5">
					Name				
					</span>
					<div class="wrap-input90 validate-input m-b-26" data-validate = "Name is required">
						<input class="input90" type="text" name="name" required>
						<span class="focus-input90"></span>
					</div>
					<span class="txt1 p-b-5">
					Email
					</span>
					<div class="wrap-input90 validate-input m-b-26" data-validate = "Email is required">
						<input class="input90" type="email" name="email" required>
						<span class="focus-input90"></span>
					</div>
					
					<span class="txt1 p-b-5">
						Password
					</span>
					<div class="wrap-input90 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input90" type="password" name="password" required>
						<span class="focus-input90"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt3">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn ">
						<input type="submit" class="btn btn-outline-dark btn-lg"
							value="Create!">
                        
						<a class="login100-form-bt m-l-25 btn btn-lg btn-dark" href="index">
							Login to existing account
</a>
					</div>
				</form>
			</div>
		</div>
	<?php echo file_get_contents("masthead.php"); ?>
	</div>
	

	<div id="dropDownSelect1"></div>
	</form>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>