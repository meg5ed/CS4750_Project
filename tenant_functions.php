<?php
function add_tenant($fname, $lname, $gender, $age, $occupation, $phone_number, $mysqli){
    $count = $mysqli->query('select count(*) from tenant');
    $count_row = $count->fetch_assoc();
    $count_val = $count_row['count(*)']+1;
    
    $sql = "INSERT INTO tenant Values (
        't".$count_val."',
        '".$fname."' ,
        '".$lname."',
        '".$gender."',
        '".$age."',
        '".$occupation."',
        '".$phone_number."'
    
    )";
    if ($mysqli->query($sql)==TRUE){
        return 'SUCCESS';
    } else {
        return "Error: " . $sql . "<br>" . $mysqli->error;
    }
    
}


    
?>