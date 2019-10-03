<?php
// Initialize the session
session_start();

// Require Config
require_once "../config.php";

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$query = "SELECT coins FROM users WHERE id = $_SESSION[id]";
// $query2 = "UPDATE users SET coins='200' WHERE id = $_SESSION[id]";
// if (mysqli_query($link,$query2)) {
// } else {
//   echo "ERROR: Could not able to execute $sql. "  
//   . mysqli_error($link); 
// }

if ($stmt = mysqli_prepare($link, $query)) {
  // Execute the statement
  mysqli_stmt_execute($stmt);
  // Bind result variables
  mysqli_stmt_bind_result($stmt, $coins);
  // Fetch Values
  while (mysqli_stmt_fetch($stmt)) {
   }
  // Exit Statement
  mysqli_stmt_close($stmt);
} else {
  echo "An error occured";
}
// Close Connection
mysqli_close($link);

// Button
if($_GET){
  if(isset($_GET['insert'])){
      startBet();
    }
  }

function startBet() {
  $value = $_POST['subject'];
  echo "test";
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>SG | Spin</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="../css/index.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
        <img class="navIcon" src="../img/logo2.png">
          <h3 class="masthead-brand">SG Gamble</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link" href="../games.php">Games</a>
            <a class="nav-link" href="../profile.php"><?php echo htmlspecialchars($_SESSION["username"]); ?></a>
            <a class="nav-link" href="../logout.php">Logout</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Spin</h1>
        <p class="lead">Insert how much you wanna bet, then click spin<br></p>
        <form method="post">
            <input type="number" name="bet">
        </form>
        <form method="get">
        <p class="lead">
          <input name="insert" type="button" class="btn btn-lg btn-secondary"/>
        </p>
        </form>
      </main>   

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Made by<a href="#"> Sven </a>and<a href="#"> Guillermo</a>.</p>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
