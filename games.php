<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<!doctype html><html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>SG | Games</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/index.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
        <img class="navIcon" src="img/logo2.png">
          <h3 class="masthead-brand">SG Gamble</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="login.php"><?php echo htmlspecialchars($_SESSION["username"]); ?></a>
          </nav>
        </div>
      </header>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2>Slots</h2>
            <p>Play some slots to get your money trippled!</p>
            <p><a class="btn btn-secondary" href="games/slots.php" role="button">Join Slots &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Tower</h2>
            <p>Play the Tower gamemode and get some money!</p>
            <p><a class="btn btn-secondary" href="games/tower.php" role="button">Join Tower &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Roulette</h2>
            <p>Some good 'ol roulette. High risk high rewards</p>
            <p><a class="btn btn-secondary" href="games/roulette.php" role="button">Join Roulette &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Blackjack</h2>
            <p>It's not about the cards you're dealt, but how you play the hand.</p>
            <p><a class="btn btn-secondary" href="games/blackjack.php" role="button">Join Blackjack &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Spin</h2>
            <p>Are you feeling lucky? Then this is a really good game for you!</p>
            <p><a class="btn btn-secondary" href="games/spin.php" role="button">Join Wheel &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Crash</h2>
            <p>Crash, the only game where YOU can create your own success!</p>
            <p><a class="btn btn-secondary" href="games/crash.php" role="button">Join Crash &raquo;</a></p>
          </div>
        </div>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Made by<a href="#"> Sven </a>and<a href="#"> Guillermo</a>.</p>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
