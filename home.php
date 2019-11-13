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
<div  class="full-h">
     <div class="jumbotron jumbotron-fluid bg-transparent homecont">
       <div class="container register">
         <h1 class="display-4 dashbtitle">Dashboard</h1>
         <hr/>
         <div class="container">
                  <div class="row">
             <div class="col-lg-6">

               <div class="card" style="background-color:; border-color:white;">


                 <div class="card-body">
                   <h4 class="card-title">Load Tournament</h4>

                   <form class="form-inline">
                       <label class="my-1 mr-5" for="selectTeamName">Select a team</label>
                       <select class="custom-select my-1 mr-2" id="selectTeamName">
                   <option selected class=''>Choose...</option>
                   <option value="1">One</option>
                   <option value="2">Two</option>
                   <option value="3">Three</option>
                       </select>

                  <input type="submit" value="Submit" class="btn btn-outline-light btn-dark">
                  </form>

                 </div>
               </div>
             </div>
              <div class="col-lg-6 register-right">

              <a type="button"  href="CreateTournament.php" class=" btnCreateTour">Create New Tournament</a>
                 
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
