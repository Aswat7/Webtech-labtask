<?php

$conn = mysqli_connect("localhost", "root", "");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS user_system");
mysqli_select_db($conn, "user_system");

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    last_login VARCHAR(100)
)";

mysqli_query($conn, $sql);

?>