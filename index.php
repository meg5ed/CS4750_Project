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
    <a href='custom_search.html'><button name = "leave"><h2>Search Data</h2></button></a>
        <br>
        <br>
    <a href='add_data.html'><button name = "leave"><h2>Insert Data</h2></button></a>
    </div>
    </body>
</html>


