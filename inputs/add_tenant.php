<?php

include('db_connect.php');

function add_tenant($fname, $lname, $gender, $age, $occupation, $phone_number, $mysqli){
    $count = $mysqli->query('select count(*) from Tenant');
    $count_row = $count->fetch_assoc();
    $count_val = $count_row['count(*)']+1;
    
    $sql = "INSERT INTO Tenant Values (
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

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$gender = $_POST['tenant_gender'];
$age = 20;
$occupation = $_POST['occupation'];
$phone_number = $_POST['phone_number'];

$res = add_tenant($fname, $lname, $gender, $age, $occupation, $phone_number, $mysqli);

echo $res;
$mysqli->close();
?>

<html>
    <br>
    
    <a href='add_tenant.html'>Add Another</a>
    <br>
    <a href='index.php'>Back To Home</a>
</html>