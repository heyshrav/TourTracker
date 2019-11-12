<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="TournamentViewer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="bodypart">
              <div class="row">
          <div class="col-lg-6">
                <div class="card">
                        <div class="card-header">
                             <h1 class="header-div">TournamentViewer</h1>
                        </div>
              
                        <div class="card-body >
                            <div class="bodyofcard">                             
                                <label style="display: block; font-size:35px;" for="">Tournament</label>
                             <label style="display: inline-block" for="">Round :</label>
                             <select name="" class="dropdown">
                                 <option value="roundone"></option>
                                 <option value="roundtwo"></option>
                                 <option value="roundthree"></option>
                                 <option value="roundfour"></option>
                             </select>
                            <label style="display: block;" class="matchup-label" for="">MatchupListBox :</label>
                            <input   type="text" style="height: 200px; width: 200px; border-radius: 20px;">
                            <label style="display: block; margin-top: 5px;" for="">TeamOneScore</label>
                            
                                    <input  type="text">
                        
                            
                            <label style="display: block;" for="">TeamTwoScore</label>
                            <input type=""><br>
                            <button  class="btn btn-dark btn-lg score-button">Score</button>
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