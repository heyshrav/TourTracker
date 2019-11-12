<?php

$placenumber = $_POST['placenumber'];
$prizeamount = $_POST['prizeamount'];

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'project');
$q = "Insert into prize values($placenumber,$prizeamount)";
$i = mysqli_query($con,$q);
echo $i;
mysqli_close($con);

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Createprize.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <form id="prize" action="CreatePrize.php" method="post">
             <div class="card">
                    <div class="card-header">
                <div class="header-div">
                        <h1>Create Prize</h1>
                </div>
              </div>
            
            <div class="card-body">
                <div class="body-div">
                        <label class="placenum-label" for="">PlaceNumber :</label>
                        <input type="text" name="placenumber">
                        <label class="prizeamt-label" for="">PrizeAmount :</label>
                        <input type="text" name="prizeamount"><br>
                        <input type="submit" value="Create" class="btn btn-dark btn-lg createprize-button"/>
                     </div>
               </div>
         </div>
     </form>      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  
  </body>
</html>