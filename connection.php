<?php
//<!--========== PHP CONNECTION TO DATABASE ==========-->
    $host = "database-2.cfsakam6sdjw.us-east-1.rds.amazonaws.com";
    $username = "admin";
    // $pass = "";
    $pass = "12345abc";

    $dbname = "cakeshop";
    //create connection
    $conn = mysqli_connect($host, $username, $pass, $dbname);
    //check connection
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

?>
