<?php

$host = "localhost";
$user = "root";
$password = "";


$conn = mysqli_connect($host, $user, $password);

if(!$conn)
{
    die("Connection Failed");
}


$sql = "CREATE DATABASE IF NOT EXISTS library_db";

if(mysqli_query($conn, $sql))
{
    echo "Database Created Successfully <br>";
}
else
{
    echo "Database Creation Failed <br>";
}


mysqli_select_db($conn, "library_db");

$table = "CREATE TABLE IF NOT EXISTS books(

    id INT AUTO_INCREMENT PRIMARY KEY,

    title VARCHAR(200) NOT NULL,

    author VARCHAR(200) NOT NULL,

    category VARCHAR(100) NOT NULL,

    status VARCHAR(50) NOT NULL

)";

if(mysqli_query($conn, $table))
{
    echo "Table Created Successfully";
}
else
{
    echo "Table Creation Failed";
}

?>