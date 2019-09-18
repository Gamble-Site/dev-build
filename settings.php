<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
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

    <title>SG | Settings</title>

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
                    <a class="nav-link" href="games.php">Games</a>
                    <a class="nav-link active" href="settings.php">Settings</a>
                    <a class="nav-link" href="logout.php">Logout</a>
                </nav>
            </div>
        </header>

        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-4">
                    <h2>Change Password</h2>
                    <p>Change your password if you're not happy with it.</p>
                    <p><a class="btn btn-secondary" href="reset-password.php" role="button">Change &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Change Email</h2>
                    <p>Change your email if you're not happy with it.</p>
                    <p><a class="btn btn-secondary" href="games/tower.php" role="button">Change &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Profile Picture</h2>
                    <p>Change your profile picture if you're not happy with it.</p>
                    <p><a class="btn btn-secondary" href="games/roulette.php" role="button">Change &raquo;</a></p>
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
        <script>
            window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
        </script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
</body>

</html>