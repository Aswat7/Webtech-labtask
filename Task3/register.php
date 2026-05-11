<?php include "db.php"; ?>

<h2>Register</h2>

<form method="POST">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    Password: <input type="password" name="password"><br><br>
    <button type="submit" name="register">Register</button>
</form>

<?php

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];

    // password hashing (IMPORTANT)
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(name,email,password)
            VALUES('$name','$email','$password')";

    if(mysqli_query($conn, $sql)){
        echo "Registration successful!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>