<?php
    include('check_logged.php');
    ?>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" type="text/css" href="search_results.css">
        <meta charset="UTF-8">
        <title>Add lease</title>
    </head>
    <body>
    <div class="container">
        <br>
        <h1>Apartment Database</h1>
    <br>
    <?php
    
    include('db_connect.php');
    
    
    
    $mysqli->close();
    ?>
    <br>
    <a href='custom_search.php'><button name = "leave">Search</button></a>
        <br>
        <br>
    <a href='add_data.php'><button name = "leave">Insert Data</button></a>
        <br>
        <br>
    <a href='logout.php'><button name = "leave" class='button'>Logout</button></a>
    </div>
    </body>
</html>


