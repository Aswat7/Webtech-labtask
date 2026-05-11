<?php
include "db.php";
session_start();

// cookie auto-fill
$emailValue = $_COOKIE['email'] ?? "";
?>

<h2>Login</h2>

<form method="POST">
    Email: <input type="email" name="email" value="<?php echo $emailValue; ?>"><br><br>
    Password: <input type="password" name="password"><br><br>
    <button type="submit" name="login">Login</button>
</form>

<?php

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if($row = mysqli_fetch_assoc($result)){

        if(password_verify($password, $row['password'])){

            // session
            $_SESSION['user'] = $row['name'];

            // cookies
            setcookie("email", $email, time() + (86400 * 7));

            // update last login
            $time = date("Y-m-d H:i:s");
            mysqli_query($conn, "UPDATE users SET last_login='$time' WHERE email='$email'");

            header("Location: dashboard.php");
        }
        else{
            echo "Wrong password!";
        }

    } else {
        echo "User not found!";
    }
}

?>