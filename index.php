<?php
session_start();
$usernameerror = "";
$passworderror = "";
 include"Connection.php";
 if(isset($_REQUEST['submit']))
 {
     if(empty($_REQUEST['username']))
      {
        $usernameerror = "Username is Required";
      }
      else{
        $username = $_REQUEST['username'];
      }
  
      if(empty($_REQUEST['pass']))
      {
        $passworderror = "password is Required";
      }
      else{
        $password = $_REQUEST['pass'];
      }
 
    $q = "SELECT username,password FROM login where username = '$username' AND password ='$password'";

    $i = mysqli_query($con,$q);
    echo '$i';
    $count = mysqli_num_rows($i);
    echo $count;
    if($count==true)
    {
      $_SESSION['username'] = $username;
      header('location:home.php');
    }
     else
    {
	    echo 'login Failed';
    }
   
 }
  else{
  }
  mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>TourTracker - Tournament Tracker</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico">
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!--===============================================================================================-->
</head>

<body class="bglogin ">
<form method="post">
  <div class="logincontainer ">
    <div class="container ">
      <div class="row register">
        <div class="col-lg-6 register-leftlogin">
          <div class="main-title"><br/>
            <h1 class="display-4 main-titleh1">Welcome to <b>TourTracker</b></h1>
            <br/>
                        
            <p class="lead subtextlogin text-white">An app to track all the tournaments</p>
            <hr class="my-1 bg-white subtextlogin">
            <br>
            <p class="text-white subtextlogin">Don't Have an Account?</p><br>
            <p class="subtextlead "><a class="btn btn-primary btn btn-dark subtextlogin" href="register" role="button">Create an Account!</a></p>
          </div>
        </div>
        <div class="col-lg-6 ">
          <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55 register-rightinv">
            <form class="login100-form validate-form flex-sb flex-w">
              <span class="login100-form-title p-b-32">Login to get started!</span><br/><br/> <span class="txt1 m-t-5 p-b-11">Username</span>
              <div class="wrap-input100 validate-input m-b-36" data-validate="Username is required">
                <input class="input100" type="text" name="username" required <?php  echo $usernameerror ?> > <span class="focus-input100"></span>
              </div><span class="txt1 p-b-11">Password</span>
              <div class="wrap-input100 validate-input m-b-12" data-validate="Password is required">
                <span class="btn-show-pass"><i class="fa fa-eye"></i></span> <input class="input100" type="password" name="pass" required  <?php echo $passworderror  ?>  > <span class="focus-input100"></span>
              </div>
              <div class="flex-sb-m w-full p-b-48">
                <div class="contact100-form-checkbox">
                  <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me"> <label class="label-checkbox100" for="ckb1">Remember me</label>
                </div>
                <div>
                  <a href="#" class="txt3">Forgot Password?</a>
                </div>
              </div>
              <div class="container-login100-form-btn">
                <input type="submit" name="submit" value="Login" class="login100-form-btn">
              </div>
            </form>
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
