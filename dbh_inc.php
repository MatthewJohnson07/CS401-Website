<?php

    $serverName = "localhost";
    $dbUsername = "root";
    $dbPassword = "workSQL88Mj";
    $dbName = "collaborate";

    $conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

    if(!$conn){
        die("Connection failed" . mysqli_connect_error());
    }

    $connection = new PDO("mysql:dbname=collaborate;host=127.0.0.1", "root", "workSQL88Mj");

?>