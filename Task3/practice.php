<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="newphp.php" method="post">
        <label>Name :</label>
        <input type="text" name="name">
        
        <br><br>

        <label>Username :</label>
        <input type="text" name="username" value = "username">


           <br><br>

        <label>Email :</label>
        <input type="text" name="email" value = "email">
   <br><br>
        Password :
        <input type="password" name="password" value = "password">
   <br><br>
        Confirm Password :
        <input type="password" name="confirmpassword" value = "password">
   <br><br>
        Gender :
        <input type = "radio" name ="gender" value ="Male"> Male

        <input type = "radio" name ="gender" value ="Female"> Female
   <br><br>

        Date of Birth :

        <input type="text" name ="dob" placeholder = "dd/mm/yyyy">
   <br><br>
        <input type="submit" name="submit" value="submit">
        <input type="reset" value="submit">


    </form>
</body>
</html>