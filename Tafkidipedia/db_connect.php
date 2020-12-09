<?php
    //Four variables to connect to the database
    $host = "localhost";
    $username = "root";
    $user_pass = "";
    $database_in_use = "test";

    //Create a database connections object
    $mysqli = new mysqli($host, $username, $user_pass, $database_in_use);
?>