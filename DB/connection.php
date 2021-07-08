<?php 

    //attribute for connection to database
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "aes";

    //connect with database 
    $conn = mysqli_connect($hostname, $username, $password, $dbname) OR DIE ("Connection Failed ! ");
    //start  session
    session_start();
?>