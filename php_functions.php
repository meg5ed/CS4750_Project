<?php
function OpenCon()
 {
    $dbhost = "localhost";
    $dbuser = "newuser";
    $dbpass = "password";
    $db = "apartment_db_test";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
    return $conn;
 }
 
function CloseCon($conn) {
    $conn -> close();
 }



   
?>