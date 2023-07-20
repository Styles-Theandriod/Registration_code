<?php
  
    // include the dbconnect.php file inside here 
    require 'dbConnect.php';
    if (isset($_REQUEST['username'])) {
    //remove back slash
    $username= stripslashes($_REQUEST['username']);
    //escape special characters in a string.
    $username = mysqli_real_escape_string($conn, $username);
    // $email = stripslashes($_REQUEST['email']);
    // $email = mysqli_real_escape_string($conn, $email);

    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);

    $cpassword = stripslashes($_REQUEST['psw-repeat']);
    $cpassword = mysqli_real_escape_string($conn, $password);

    $trn_date = date("Y-m-d H:i:s");
    $query = "INSERT into `users` (username, password, cpassword, trn_date)
    VALUES('$username', '.md5($password).','$cpassword', '$trn_date')";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "<h3>You are registered successfully.</h3>";
    }else{
        
    }
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

            <label for="usernme"><b>UserName</b></label>
            <input type="text" placeholder="Enter Username" name="username" id="username" required>

            <label for="psw">Password</label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required>

            <label for="psw-repeat">
                <b>Repeat Password</b>
            </label>

            <input type="password" name="psw-repeat" id="psw-repeat" required>
            <hr>

            <p>By creating an account you agree to our <a href="#">Terms & Priivacy</a></p>

            <input type="submit" class="registerbtn" name="submit" value="Register">
        </div>

        <!-- <div class="container signin">
        </div> -->
    </form>
 </body>

</html>