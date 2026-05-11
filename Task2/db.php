<?php
  $conn = mysqli_connect("localhost","root", "");
  if(!$conn){
    die("Connection Failed : " . mysqli_connect_error());
  }
  else{
    echo "Connected" . "<br>";
  }

  $sql = "CREATE DATABASE IF NOT EXISTS myDatabase";

  if($conn->query($sql) === TRUE){
    echo "Database Create successfully <br>";

  }

  else{
    die("Error Creating database". $conn->error);
  }

  mysqli_select_db($conn, "myDatabase");

  $sql = "CREATE TABLE IF NOT EXISTS Profile(
   id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   name VARCHAR(30) NOT NULL,
   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

  if(mysqli_query($conn,$sql)){
    echo "Table create successfully<br>";
  }
  else{
    echo "Error creating table:".mysqli_error($conn);
  }

  if(isset($_POST["mysubmit"])){
    $name = $_POST["myname"];
    $tablesql = "INSERT INTO Profile (name) VALUES ('$name')";
    if($conn->query($tablesql) === true){
        echo "New record created successfully<br>";
    }
    else {
        echo "Error: " . $tablesql . "<br>" . $conn->error; 
    }
  }

  
?>