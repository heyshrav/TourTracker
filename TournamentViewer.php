<?php
///////////////////////////////////////////////////////////
session_start();
    if(!isset($_SESSION['username']))
        {
          header('location:index.php');
          session_unset();
        }

///////////////////////////////////////////////////////////
include('Connection.php');

?>
<!doctype html>
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
  <body>

  <?php include('nav.php') ?>
<div  class="full-h ">
     <div class="jumbotron jumbotron-fluid bg-transparent homecont ">
       <div class="container register ">
         <h1 class="display-4 dashbtitle">List of all Tournaments</h1>
         <hr/>
         <div class="container">
                  <div class="row">


                      <table class="table table-light table-borderless viewertable">
                          <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Tournament Name</th>
                                  <th>Type of Sports</th>
                              </tr>
                          </thead>
                            <tbody>
                              <?php if ($con->connect_error) {
                                    die("Connection failed: " . $con->connect_error);
                                    }
                                $query = "SELECT id, TournamentName, sportype FROM tournament";
                                $result = $con->query($query);
                              if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                              echo "<tr>
                              <td>" . $row["id"]. "</td>
                              <td>" . $row["TournamentName"] . "</td>
                              <td>" . $row["sportype"]. "</td>
                              </tr>";
                              }
                              
                              } else { echo "0 results"; }
                              $con->close();
                              ?>

                            </tbody>
                        </table>
                              <div class="col-lg-12 teamCreateInput"><br/><br/>
                  <a href="home.php" class="btn btn-lg btn-outline-dark text-white border-white"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;&nbsp; Go back</a>
            <a href="TeamViewer.php" class="btn btn-lg btn-outline-dark text-white border-white">Open Team Viewer&nbsp;&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
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
