<?php

include('db_connect.php');



function add_lease($unit_id, $start_date, $end_date, $cost, $mysqli){
    $count = $mysqli->query('select count(*) from Lease');
    $count_row = $count->fetch_assoc();
    $count_val = $count_row['count(*)']+1;
    
    $sql = "INSERT INTO Lease Values (
        'l".$count_val."',
        
        ".$cost.",
        '".$start_date."',
        '".$end_date."',
        '".$unit_id."'
        
    
    )";
    if ($mysqli->query($sql)==TRUE){
        return "l".$count_val;
    } else {
        return "Error: " . $sql . "<br>" . $mysqli->error;
    }
    
}

$start_date = $_POST['lease_start_year'].'-'.$_POST['lease_start_month'].'-'.$_POST['lease_start_date'];
$end_date = $_POST['lease_end_year'].'-'.$_POST['lease_end_month'].'-'.$_POST['lease_end_date'];
$cost = $_POST['lease_cost'];

$units = $mysqli->query("select unit_id from Unit where unit_number=".$_POST['unit_number']." and property_id='".$_POST['lease_property']."'");
$units_row = $units->fetch_assoc();
$unit_id = $units_row['unit_id'];


$res = add_lease($unit_id, $start_date, $end_date, $cost, $mysqli);

echo $res;

?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="main.css">
        <meta charset="UTF-8">
        <title>Add tenants</title>
    </head>
    <body>
        <div id="main-bg"></div>
        <div id="main-screen">

        <h1>Add Tenants to lease</h1>
            <div class='input_box'>
        <form action="add_lease_tenants.php" method="post">
            <select name="lease_sign_month" style="width:30%">
            <option value="no_input">Sign month</option>
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
            </select>

    <select name="lease_sign_date" id="lease_date_input" style="width:30%">
      <option value="no_input">Sign day</option>
      <script>
        for (var i=1; i<=31; i++) {
          document.getElementById("lease_date_input").innerHTML += "<option value=" + i + ">" + i + "</option>";
        }
      </script>
    </select>

    <select name="lease_sign_year" id="lease_year_input" style="width:30%">
      <option value="no_input">Sign year</option>
      <script>
        var y = new Date().getFullYear();
        for (var i=y; i>=1900; i--) {
          document.getElementById("lease_year_input").innerHTML += "<option value=" + i + ">" + i + "</option>";
        }
      </script>
    </select>
            <?php
            echo "<input type=\"hidden\" name=\"unit_tenants\" value=\"".$_POST["unit_tenants"]."\">";
            echo "<input type=\"hidden\" name=\"lease_id_val\" value=\"".$res."\">";
            echo "<input type=\"hidden\" name=\"unit_id_val\" value=\"".$unit_id."\">";
            ?>
            
            <br>
            <?php
            for ($x = 1; $x <= $_POST['unit_tenants']; $x++) {
                echo '
                <h3>Tenant '.$x.' <br> 
                <input type="text" name="tenant_id_'.$x.'" size="5" placeholder="Enter tenant id" />';
        
            } 
            ?>
            <input type="submit" name="submit" value="Finish"/>
            </form>
        
        </div>
    </body>
</html>

<?php
$mysqli->close();
?>