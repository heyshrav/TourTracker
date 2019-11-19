<?php
   include "Connection.php";
    echo "Connection done";
       if(isset($_REQUEST['submit']))
    {
   $tdynamic = array($_REQUEST['teamone'], $_REQUEST['teamtwo'], $_REQUEST['teamall']);
   echo "before Foreach";
   $x = 20;
    foreach($tdynamic as $i)
    {
       if($i >= $x)
       {
         echo "error Loading";
       }
     
        echo "script is running";
        $q = "INSERT INTO teams (TeamName) VALUES ('$i')";
        echo "working";
        $z=mysqli_query($con,$q);
        echo $z;
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

<div  class="">
     <div class="jumbotron jumbotron-fluid bg-transparent homecont">
       <div class="container register">
         <h1 class="dashbtitle">Add teams to Tournament</h1>
         <br/>
          <hr class="bg-white"/>
         
        <br/>

  <form action="" method="post">            
       <div class=''>
                <input type="hidden" name="count" value="">
                <div class="col-lg-12">
                             <div class="teamCreateInput">
                                <p class="text-white">Enter Team #1 name</p>
      <input id="TeamName[]" type="text" placeholder="Enter Team Name" name="teamone" autocomplete="off" required />
                            </div>

                            <div class="teamCreateInput addnewteam">
                                <p class="text-white">Enter Team #2 name</p>
      <input id="TeamName" type="text" placeholder="Enter Team Name" name="teamtwo" autocomplete="off" required />
      <button href="#" value="" class="add_team_button"><span class="fa fa-plus-circle fa-3x " aria-hidden="true"></span></button>
                            </div><br/>
                            <hr class="bg-white"/>
                            <div class="teamCreateInput">     
                    <a href="CreateTournament.php" class='btn-lg btn-outline-light btn '><span class="fa fa-arrow-left" aria-hidden="true"></span>&nbsp; &nbsp;GO Back </a>  
                            <input type="submit" name="submit" value="Finish Creating Tournament" href="home.php" class='btn-lg btn-outline-light btn '> &nbsp; &nbsp;<span class="fa fa-check" aria-hidden="true"></span>  
                            </div>
                               
                  </div>

                  
          
        </div>
</form>  
    <!-- Optional JavaScript -->
    <script>
    $(document).ready(function() {
	var max_fields      = 20; //maximum input boxes allowed
	var wrapper   		= $(".addnewteam"); //Fields wrapper
	var add_button      = $(".add_team_button"); //Add button Class
	
	var x = 2; //initlal text box count
  
	$(add_button).click(function(e){ //on add input button click
		e.preventDefault();
		if(x < max_fields){ //max input box allowed
			x++; //text box increment
      $('input[name="count"]').val(x);    
      $(wrapper).append('<div class="teamCreateInput newteamdynamic"><p class="text-white">Enter Team #'+ x +' name'+'</p><input id="TeamName" type="text" placeholder="Enter Team Name" name="teamall" autocomplete="on" required /><a href="#" class="remove_team_field btn btn-sm btn-warning">Remove</a></div>')
		}
	});
	
	$(wrapper).on("click",".remove_team_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove();
     x--;
     
	})
});
</script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>