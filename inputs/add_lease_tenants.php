<?php


function add_lease_agreement($lease_id, $tenant_id, $unit_id, $sign_date, $mysqli){
    $count = $mysqli->query('select count(*) from Lease_Agreement');
    $count_row = $count->fetch_assoc();
    $count_val = $count_row['count(*)']+1;
    
    $sql = "INSERT INTO Lease_Agreement Values (
        'la".$count_val."',
        
        '".$tenant_id."',
        '".$lease_id."',
        '".$unit_id."',
        '".$sign_date."'
        
    
    )";
    if ($mysqli->query($sql)==TRUE){
        return "la".$count_val;
    } else {
        return "Error: " . $sql . "<br>" . $mysqli->error;
    }
    
}


$sign_date = $_POST['lease_sign_year'].'-'.$_POST['lease_sign_month'].'-'.$_POST['lease_sign_date'];

for ($x = 1; $x <= $_POST['unit_tenants']; $x++) {
    include('db_connect.php');
    $res = add_lease_agreement($_POST['lease_id_val'], $_POST['tenant_id_'.$x], $_POST['unit_id_val'], $sign_date, $mysqli);
    echo $res;
    $mysqli->close();
        
        

    
}

?>

<html>
<head>
        <link rel="stylesheet" type="text/css" href="bootstrap.css">
        <meta charset="UTF-8">
        <title>Add tenants</title>
    </head>
<br>
<button class='button btn'><a href='input_lease.php'>Add Another</a></button>
<br>
<button class='button btn'><a href='index.php'>Back To Home</a></button>

</html>
    