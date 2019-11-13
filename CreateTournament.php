
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
<div  class="">
     <div class="jumbotron jumbotron-fluid bg-transparent homecont">
       <div class="container register">
         <h1 class="display-4 dashbtitle">Create New Tournament</h1>
         <hr/>


                
       <div class='container '>
          <div class='col-lg-12'>
              <div class='createTour'>
                <div class="justify-content-lg-center">
                    <form action="" method="get">
                      <div>
                            <h4 class="text-white"> Enter Tournament Name</h4>
                            <!-- Material input -->
                            <div class="text-input">
      <input id="TournamentName" type="text" placeholder="Enter Tournament Name" autocomplete="off" required />
                            </div>
                      </div>

                      <div>
                            <h4 class="text-white">Enter Tournament Type</h4>
                            <!-- Material input -->
                            <div class="text-select">
                                        <select  id="selectTeamName" >
                              <option selected class=''>Choose the Sports</option>
                              <option value="1">BasketBall</option>
                              <option value="2">BaseBall</option>
                              <option value="3">Chess</option>
                              <option value="4">Cricket</option>
                              <option value="5">Football</option>
                              <option value="6">Soccer</option>
                              <option value="7">Kabbadi</option>
                              <option value="8">Tennis</option>     
                              <option value="9">Chess</option>
                              
                              </select>
                      </div></div>
                            <br/> 
                      <a href="createTeam.php" class='btn-lg btn-outline-light btn'>Next &nbsp; &nbsp;<span class="fa fa-arrow-right" aria-hidden="true"></span></a>
                </form>
                </div>
              </div>
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