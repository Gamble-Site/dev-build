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
if ($_SESSION["isAdmin"] != 1) {
    header("location: noperms.html");
    exit;
}

$query = "SELECT id, username, created_at, coins, isAdmin  FROM users";
$allUsers = mysqli_query($link, $query);


echo "<table>";
echo "<tr><th>ID</th><th>Username</th><th>Created At</th><th>Coins</th><th>isAdmin</th>";
foreach($allUsers as $user) {
    echo "<tr>";
    echo "<td><a>" . $user['id'] . "</a></td>";
    echo "<td><a>". $user['username'] . "</a></td>";
    echo "<td><a>". $user['created_at'] . "</a></td>";
    echo "<td><a>". $user['coins'] . "</a></td>";
    if ($user['isAdmin'] == 1) {
    echo "<td><a>true</a></td>";
    } else {
    echo "<td><a>false</a></td>";
    }
    echo "</tr>";
};

// Close Connection
mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin dashboard</title>
</head>
<body>

</body>
</html>