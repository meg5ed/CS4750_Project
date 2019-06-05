<?php

include('db_connect.php');
$sql = 'UPDATE User_list SET logged_in=0 WHERE user_id="0"';
$mysqli->query($sql);
    
$mysqli->close();
    
?>
<html>
<a href='login.html'><button name = "leave">Login</button></a>
</html>