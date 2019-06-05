<?php
function add_property($fname, $lname, $gender, $age, $occupation, $phone_number, $mysqli){
    
    
    $sql = "INSERT INTO property Values (
        '"$fname"' ,
        '"$lname"',
        '"$gender"',
        '"$age"',
        '"$occupation"',
        '"$$phone_number"'
    
    )";
    $result = $mysqli->query($sql);
}


    
?>