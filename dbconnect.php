<?php
$servernme = 'localhost';
$username ='root';  //your database username here.
$password='';   // your password for the user above, if any. If not leave it blank
$dbname='users_registration';    # name of you database that is created in phpMy

// Create connection to MySQL server and select DB

$conn = mysqli_connect($servernme, $username,$password, $dbname);
if (!$conn) {
    
    die("error" .mysqli_connect_error());
}else{
    echo (" Connected successfully");
}

?>