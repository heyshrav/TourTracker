<?php
 include "Connection.php";
 if(isset($_REQUEST['submit']))
 {
   $name =$_REQUEST['name'];
   echo "got name";
   $username =$_REQUEST['username'];
   echo "got username";
   $email =$_REQUEST['email'];
   $password =$_REQUEST['password'];
 $q = "INSERT INTO login (username,email,password,name) VALUES ('$username','$email','$password','$name') ";
 $i = mysqli_query($con,$q);
 echo $i;
 mysqli_close($con);
 }
 else
 {
   echo "Connection Failed";
 }
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
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body class="bglogin">
<?php include('nav.php') ?>
<form action="" method="post">
<div class="container register ">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <i class="fa fa-user-plus fa-4x" aria-hidden="true"></i>
                        <h3>Welcome</h3>
                        <p class="text-white">Register to manage your own tournament</p>
                        <a  href="/tourtracker/" name="" class="btn btn-block btn-dark" value="Login to Existing Account"/>Login to Existing Account</a><br/>
                    </div>
 
                    <div class="col-md-9 register-rightinv">
                
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Register using below form</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Enter your Name *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control" placeholder="Enter a Username *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" placeholder="Enter a Password *" value="" />
                                        </div> 
                                      
                                    </div>
                                    <div class="col-md-6">
									
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Enter Your Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10"name="phone" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Enter a Phone *" value="" />
                                        </div>
										<div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Confirm Password *" value="" />
                                        </div>
                                        <input type="submit" name="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            </div>
                       
                        </div>
                    </div>
                   
                </div>
             

            </div>
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