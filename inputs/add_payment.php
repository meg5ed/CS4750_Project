<?php

include('db_connect.php');

function add_payment($lease_id, $date_paid, $month, $late, $mysqli){
    $count = $mysqli->query('select count(*) from Payment');
    $count_row = $count->fetch_assoc();
    $count_val = $count_row['count(*)']+1;
    
    $sql = "INSERT INTO Payment Values (
        'pa".$count_val."',
        
        '".$lease_id."',
        '".$date_paid."',
        '".$month."',
        '".$late."'
        
    
    )";
    if ($mysqli->query($sql)==TRUE){
        return 'SUCCESS';
    } else {
        return "Error: " . $sql . "<br>" . $mysqli->error;
    }
    
}

$lease_id = $_POST['lease_id'];
$date_paid = $_POST['payment_year'].'-'.$_POST['payment_month'].'-'.$_POST['payment_date'];
$month = $_POST['month_for_payment'];
$late = $_POST['late_check'];


$res = add_payment($lease_id, $date_paid, $month, $late, $mysqli);

echo $res;
$mysqli->close();
?>

<html>
    <div class='container'>
    <br>
    
    <a href='input_payment.php'>Add Another</a>
    <br>
    <a href='index.php'>Back To Home</a>
    </div>
</html>