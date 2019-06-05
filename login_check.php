
<?php

    $uname = $_POST['uname'];
    $psw = $_POST['psw'];
    
    $server = 'localhost';
    $database = 'apartment_db_test';
    
    
    $mysqli = new mysqli($server, $uname, $psw, $database);
    if($mysqli->connect_error){
        $res = "Connection failed: " . $mysqli->connect_error;
        $conn = FALSE;
    } else {
        $res = 'Success';
        $conn= TRUE;
        
    }

    $sql = 'UPDATE User_list SET logged_in=1 WHERE user_id="0"';
    $mysqli->query($sql);
    
    if ($conn){
        header('Location:index.php');
    }
    $mysqli->close();
?>
<html>

<head>
<link rel="stylesheet" type="text/css" href="main.css">
<meta charset="UTF-8">
<title>Apartment: Home</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
<div id="main-bg"></div>
<div id="main-screen" class='container'>
    
    
    <br>
    <?php
    echo $res.' <br>';
    if ($conn){
        echo "<a href='index.php'><button name = 'leave'>Continue</button></a>";
    }
    ?>
    <br>
    <a href='login.html'><button name = "leave">Back</button></a>
    </div>
    </body>
</html>