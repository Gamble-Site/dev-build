<?php
// Init Session
session_start();

// Require Config
require_once "config.php";

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

  <title>SG | Profile</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="css/index.css" rel="stylesheet">
  <link href="css/store-style.css" rel="stylesheet"></head>

<body>

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <img class="navIcon" src="img/logo2.png">
                <h3 class="masthead-brand">SG Gamble</h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link" href="games.php">Games</a>
                    <a class="nav-link" href="settings.php">Settings</a>
                    <a class="nav-link" href="logout.php">Logout</a>
                </nav>
            </div>

            <div class="containers">

                <div class="container">
                    <div class="card-deck mb-3 text-center">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">€10,- Coins Pack</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">100 Coins</small></h1>
                                <img class="pack100" src="img/100pack.png">
                                <button type="button" class="btn btn-lg btn-block btn-outline-primary">Buy</button>
                            </div>
                        </div>
                    </div>
                </div>


                        <div class="container">
                            <div class="card-deck mb-3 text-center">
                                <div class="card mb-4 shadow-sm">
                                    <div class="card-header">
                                        <h4 class="my-0 font-weight-normal">€50,- Coins Pack</h4>
                                    </div>
                                    <div class="card-body">
                                        <h1 class="card-title pricing-card-title">500 Coins</small></h1>
                                        <img class="pack500" src="img/500pack.png">
                                        <button type="button"
                                            class="btn btn-lg btn-block btn-outline-primary">Buy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                                <div class="container">
                                    <div class="card-deck mb-3 text-center">
                                        <div class="card mb-4 shadow-sm">
                                            <div class="card-header">
                                                <h4 class="my-0 font-weight-normal">€100,- Coins Pack</h4>
                                            </div>
                                            <div class="card-body">
                                                <h1 class="card-title pricing-card-title">1000 Coins</small></h1>
                                                <img class="pack1000" src="img/1000pack.png">
                                                <button type="button"
                                                    class="btn btn-lg btn-block btn-outline-primary">Buy</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
        

        </header>
</body>

</html>