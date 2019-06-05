<?php

include('db_connect.php');

function add_unit($unit_num, $property, $bedrooms, $bathrooms, $mysqli){
    $count = $mysqli->query('select count(*) from Unit');
    $count_row = $count->fetch_assoc();
    $count_val = $count_row['count(*)']+1;
    
    $sql = "INSERT INTO Unit Values (
        'u".$count_val."',
        
        '".$property."',
        '".$unit_num."',
        '".$bedrooms."',
        '".$bathrooms."'
        
    
    )";
    if ($mysqli->query($sql)==TRUE){
        return 'SUCCESS';
    } else {
        return "Error: " . $sql . "<br>" . $mysqli->error;
    }
    
}

$unit_num = $_POST['unit_number'];
$property = $_POST['unit_property'];
$bedrooms = $_POST['unit_bedrooms'];
$bathrooms = $_POST['unit_bathrooms'];


$res = add_unit($unit_num, $property, $bedrooms, $bathrooms, $mysqli);

echo $res;
$mysqli->close();
?>

<html>
    <br>
    
    <a href='input_unit.php'>Add Another</a>
    <br>
    <a href='index.php'>Back To Home</a>
</html>