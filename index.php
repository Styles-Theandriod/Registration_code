<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Index Page</h1>
    <?php
    require_once('./connect.php');
    //    include_once('./Navbar.php');
    //    include('./Navbar.php') 
    require_once('./Navbar.php');

    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l");
    echo "<br>";
    echo "<br>";
    
    // date_default_timezone_set("America/New_York");
    // echo "The time is " . date("h:i:sa");
    // echo "The time is " . date("h:i:sa");
    echo "<br>";
    $d=mktime(02, 8, 54, 7, 12, 2023);
    echo "Created date is " . date("Y-m-d h:i:sa", $d);
    echo "<br>";
    
    $d=strtotime("10:30pm April 15 2014");
    echo "Created date is " . date("Y-m-d h:i:sa", $d);

    echo "<br>";

    $d=strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $d) . "<br>";
    echo readfile("webdictionary.txt");
    
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("webdictionary.txt"));
    fclose($myfile);

    // Crud operation in PhP 
    // session and cookies 
    // File Handling in php 
    // form Validation 
    // file Uload in PHP 
    // PHP Mailer 


// What we have learnt so far plus other things that is not included
    // insert Data into msql 
    // Post and get in php 
    // require and include in PHP 
    // Create Table in php mysql 
    // Create Database in php 
    // Date and Time in php 

    // video to look out for 
    //https://www.youtube.com/watch?v=zZ6vybT1HQs
    ?>
</body>
</html>