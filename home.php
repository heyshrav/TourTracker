<?php
    session_start();
    if(!isset($_SESSION['username']))
        {
          header('location:index.php');
          session_unset();
        }

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Tournament Tracker Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
  </head>
  <body class="full-h" >

  <?php include('nav.php') ?>
  <div class=" ">
     <div class="jumbotron jumbotron-fluid bg-transparent homecont">
       <div class="container register ">
         <h1 class="display-4 dashbtitle">Welcome to Dashboard</h1>
         <hr/>
         <div class="container">
            <div class="row">
              
             
              <a type=""  href="TournamentViewer.php" class="btnCreateTour">Load all Tournaments</a>
              <a type=""  href="CreateTournament.php" class="btnCreateTour2">Create New Tournament</a>
           
              <a type=""  href="TeamViewer.php" class="btnCreateTour">Load all Teams</a>
              
              </div>
        </div>
        
          </div>
     </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
