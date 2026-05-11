<?php
session_start();
include "db.php";

// check login
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}

// get last login
$email = $_COOKIE['email'] ?? "";
$lastLogin = "";

if($email != ""){
    $res = mysqli_query($conn, "SELECT last_login FROM users WHERE email='$email'");
    $data = mysqli_fetch_assoc($res);
    $lastLogin = $data['last_login'];
}

?>

<h2>Dashboard</h2>

<h3>Welcome, <?php echo $_SESSION['user']; ?></h3>

<p>Last Login: <?php echo $lastLogin; ?></p>

<a href="logout.php">Logout</a>