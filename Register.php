<?php
  
  if($_SERVER["REQUEST_METHOD"]== "POST"){
    // include the dbconnect.php file inside here 
    require 'dbConnect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $sql = "SELECT * From users_table where username = '$username'";
    $result = mysqli_query($conn,$sql);
    
  }

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Register.css">
</head>

<body>
    <form action="" method="$_POST">
        <div class="container">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Username" name="username" id="username" required>

            <label for="psw">Password</label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

            <label for="psw-repeat">
                <b>Repeat Password</b>
            </label>

            <input type="password" name="psw-repeat" id="psw-repeat" required>
            <hr>

            <p>By creating an account you agree to our <a href="#">Terms & Priivacy</a></p>

            <button type="button" class="registerbtn">Register</button>
        </div>

        <div class="container signin">
            <p>already have an account? <a href="#">Sign in</a></p>
        </div>
    </form>
</body>

</html>