<?php

include('db_connect.php');

function add_property($address, $street, $city, $state, $zip,$pool,$gym,$parking, $mysqli){
    $count = $mysqli->query('select count(*) from Property');
    $count_row = $count->fetch_assoc();
    $count_val = $count_row['count(*)']+1;
    
    $sql = "INSERT INTO Property Values (
        'p".$count_val."',
        '".$address."' ,
        '".$street."' ,
        '".$city."',
        '".$state."',
        '".$zip."',
        '".$pool."',
        '".$gym."',
        '".$parking."',
    
    )";
    if ($mysqli->query($sql)==TRUE){
        return 'SUCCESS';
    } else {
        return "Error: " . $sql . "<br>" . $mysqli->error;
    }
    
}

$number = $_POST['property_number'];
$street = $_POST['property_street'];
$city = $_POST['property_city'];
$state = $_POST['property_state'];
$zip = $_POST['property_zip'];
$pool = $_POST['has_pool'];
$gym = $_POST['has_gym'];
$parking = $_POST['has_parking'];


$res = add_property($number, $street, $city, $state, $zip, $pool, $gym, $parking, $mysqli);

echo $res;
$mysqli->close();
?>

<html>
    <br>
    
    <a href='input_property.html'>Add Another</a>
    <br>
    <a href='index.php'>Back To Home</a>
</html>