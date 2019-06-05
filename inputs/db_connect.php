<?php
    $dbServer = "localhost";
    $dbUsername = 'newuser';
    $dbPassword = 'password';
    $db = 'apartment_db_test';
    $mysqli = new mysqli($dbServer, $dbUsername, $dbPassword, $db);
    if($mysqli->connect_error)
        die("Connection failed: " . $mysqli->connect_error);
?>