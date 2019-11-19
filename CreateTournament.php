<?php
///////////////////////////////////////////////////////////
session_start();
    if(!isset($_SESSION['username']))
        {
          header('location:index.php');
          session_unset();
        }
        echo $_SESSION['username'];

///////////////////////////////////////////////////////////
echo "Welcome ".$_SESSION['username'];
include "Connection.php";
  if(isset($_REQUEST["Submit"]))
  {
    $tname = $_REQUEST["tournamentname"];
    $selectedsport = $_REQUEST["selectedSports"];

    $q = "INSERT INTO tournament (TournamentName,sportype) VALUES ('$tname','$selectedsport')";

    $i = mysqli_query($con,$q);
    if($i)
    {
      header('location:CreateTeam.php');
    }
  }
?>

<html lang="en">
  <head>
    <title>Tournament DashBoard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
  </head>
  <body class="full-h">

  <?php include('nav.php') ?>
  <form action="" method="post">
<div  class="">
     <div class="jumbotron jumbotron-fluid bg-transparent homecont">
       <div class="container register">
         <h1 class="display-4 dashbtitle">Create New Tournament</h1>
         <hr>


                
       <div class='container '>
          <div class='col-lg-12'>
              <div class='createTour'>
                <div class="justify-content-lg-center">
                    <form action="CreateTeam.php" method="post">
                      <div>
                            <h4 class="text-white"> Enter Tournament Name</h4>
                            <!-- Material input -->
                            <div class="text-input">
      <input id="TournamentName" type="text" name="tournamentname" placeholder="Enter Tournament Name" autocomplete="off" required />
                            </div>
                      </div>

                      <div>
                            <h4 class="text-white">Enter Tournament Type</h4>
                            <!-- Material input -->
                            <div class="text-select">
                                        <select name="selectedSports" required id="selectTeamName" Required class="validate[required]">
                              <option selected class='' value="hi" disabled="disabled" >Choose the Sports</option>
                              <option value="Basketball" required>BasketBall</option>
                              <option value="BaseBall" required>BaseBall</option>
                              <option value="BaseBall" required>BaseBall</option>
                              <option value="Chess" required>Chess</option>
                              <option value="Cricket" required>Cricket</option>
                              <option value="FootBall" required>Football</option>
                              <option value="Soccer" required>Soccer</option>
                              <option value="Kabbadi" required>Kabbadi</option>
                              <option value="Tennis" required>Tennis</option>     
                              
                              
                              </select>
                      </div></div>
                            <br/> 
                            
                      <a href="home.php" class=' btn btn-lg btn-outline-light'><i class="fa fa-chevron-left" aria-hidden="true"></i> &nbsp;&nbsp;Go Back</a>
                <input name="Submit" value="Create Tournament and Move to Create Teams" type="submit" class='btn-lg btn-outline-light btn'>
                </form>
                </div>
              </div>
          </div>
       </div>


       </div>


  </div>
</div>
</form>

    <!-- Optional JavaScript -->
  <script>
 var selector = document.getElementById("selectTeamName")[0].value;
if(selector.value == "hi") {
     alert('select one answer');
</script>
 
}
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>