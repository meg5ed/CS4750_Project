<?php

include('db_connect.php');
$sql = 'SELECT logged_in From User_list WHERE user_id="0"';
$result = $mysqli->query($sql);
$result_row = $result->fetch_assoc();
$result_val = $result_row['logged_in'];


if($result_val==0){
        $conn = FALSE;
        header('Location:login.html');
    }
$mysqli->close();

?>
