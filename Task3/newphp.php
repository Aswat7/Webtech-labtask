<?php
 $name ="";
 $email ="";
 $username="";
 $password="";
 $confirmPassword="";
 $gender ="";
 $dob="";

 if(isset($_POST['submit'])){
 $name =$_POST['name'];
 $email =$_POST['email'];
 $username=$_POST['username'];
 $password=$_POST['password'];
 $confirmPassword=$_POST['confirmpassword'];
 $gender =$_POST['gender'];
 $dob=$_POST['dob'];

 echo"<h3>Registration Information</h3>";
     echo "Name : " . $name . "<br>";
    echo "Email : " . $email . "<br>";
    echo "Username : " . $username . "<br>";
    echo "Gender : " . $gender . "<br>";
    echo "Date of Birth : " . $dob . "<br><br>";
 }
?>