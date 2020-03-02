<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock Paper Scissors Game</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<h2 align="center">Rock Paper Scissors Game <span class="badge badge-secondary"></span></h2>

<p align="center">In this game, you will compete in a round of rock-paper-scissors game with 
	the computer. Good Luck.</p>

<form action="game2.php" method="post" align="center"> 
    <div class="form-group">
        <label for="label">Player Move: </label>
        <select class="form-control-sm" name="player_move">
            <option>ROCK</option>
            <option>PAPER</option>
            <option>SCISSORS</option>
        </select>
  </div>

  <button type="submit" class="btn btn-dark">PLAY</button>

</form>

<br>


<?php	

define('SCISSORS', 'SCISSORS');
define('ROCK', 'ROCK');
define('PAPER', 'PAPER');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

   if (isset($_POST['player_move'])) {

      $player_move = trim($_POST['player_move']); 

       if ($player_move == 'SCISSORS') {
       	  $player_move = SCISSORS;
       	   echo "<p align='center'>You have chosen <b>SCISSORS</b>!</p>";
       	}
       	elseif ($player_move == 'ROCK') {
       	  	$player_move = ROCK;
       	  	 echo "<p align='center'>You have chosen <b>ROCK</b>!</p>";
       	  }
       	elseif ($player_move == 'PAPER') {
       	    	$player_move = PAPER;
       	      echo "<p align='center'>You have chosen <b>PAPER</b>!</p>";
       	    }
       	else {
       	    $player_move = NULL;
       	  }

    }  
  
    else {
      echo '<p align="center">Please select a move!</p>';
    }



$computer_move = mt_rand(1,3);

  switch ($computer_move) {
  	case '1':
  		$computer_move = SCISSORS;
  		  echo "<p align='center'>The computer has chosen <b>SCISSORS</b>!</p>";
  		break;
  	case '2':
  		$computer_move = ROCK;
  		 echo "<p align='center'>The computer has chosen <b>ROCK</b>!</p>";
  		break;
  	case '3':
  	    $computer_move = PAPER;
  	      echo "<p align='center'>The computer has chosen <b>PAPER</b>!</p>";
  		break;
}


   // Matching computer and player move
 if (isset($player_move) && isset($computer_move) && $player_move != NULL ) {
 
   if ($computer_move != $player_move) {

      if ($computer_move == SCISSORS && $player_move == PAPER) {
        echo '<p align="center">Scissors CUT Paper! The almighty computer has won!</p>';
      }
     
       elseif ($computer_move == ROCK && $player_move == SCISSORS) {
     	echo '<p align="center">Rock DESTROYS Scissors! The almighty computer has won!</p>';
     }

         elseif ($computer_move == PAPER && $player_move == ROCK) {
       	 echo '<p align="center">Paper WRAPS Rock! The almighty computer has won!<p>';
       }
           else {
         	echo "<p align='center'>$player_move beats $computer_move! You have won!</p>";
         }
         

 } else {
 	echo "<p align='center'>$computer_move and $player_move are the same... It is a draw!</p>";

}  

}



}  //end of main conditional IF.




?>


</body>
</html>