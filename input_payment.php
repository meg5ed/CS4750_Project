<?php
    include('check_logged.php');
    ?>
<html>
    
<head>
<link rel="stylesheet" type="text/css" href="main.css">
<meta charset="UTF-8">
<title>Add payment</title>
</head>
<body>

<div id="main-bg"></div>
<div id="main-screen">

<h1>Add payment</h1>
<?php
    include('db_connect.php');
        //echo "<option value='NULL'>Select property1</option>";
        //property_id, address_number, address_street
    $props = $mysqli->query('SELECT * FROM lease_list where end_date>current_date()');
?>
<div class="input_box">
  <form action="add_payment.php" method="post">
    <select name="lease_id">
      <option value='NULL'>Select Lease Address</option>
        <?php
        
        
        if ($mysqli->query('SELECT * FROM lease_list')==FALSE){
            echo $mysqli->error;
        }
        if ($props->num_rows > 0) {
            // output data of each row
            while($row = $props->fetch_assoc()) {
                echo "<option value='" . $row['lease_id'] . "'> ".$row['unit_number']." ".$row['address_number']."  ".$row['address_street']."</option>";
                //echo "<option value='random1'>Select property</option>";
            }
        }
        $mysqli->close();
        ?>
    </select>

    <select name="month_for_payment">
      <option value="no_input">Select month paid for</option>
      <option value="JAN">January</option>
      <option value="FEB">February</option>
      <option value="MAR">March</option>
      <option value="APR">April</option>
      <option value="MAY">May</option>
      <option value="JUN">June</option>
      <option value="JUL">July</option>
      <option value="AUG">August</option>
      <option value="SEP">September</option>
      <option value="OCT">October</option>
      <option value="NOV">November</option>
      <option value="DEC">December</option>
    </select>

    <select name="payment_month" style="width:30%">
      <option value="no_input">Paid month</option>
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

    <select name="payment_date" id="payment_date_input" style="width:30%">
      <option value="no_input">Paid date</option>
      <script>
        for (var i=1; i<=31; i++) {
          document.getElementById("payment_date_input").innerHTML += "<option value=" + i + ">" + i + "</option>";
        }
      </script>
    </select>

    <select name="payment_year" id="payment_year_input" style="width:30%">
      <option value="no_input">Paid year</option>
      <script>
        var y = new Date().getFullYear();
        for (var i=y; i>=1900; i--) {
          document.getElementById("payment_year_input").innerHTML += "<option value=" + i + ">" + i + "</option>";
        }
      </script>
    </select>
    <select name="late_check" style="width:33%">
        <option value='O'>Late Payment?</option>
      <option value="N">No</option>
      <option value="Y">Yes</option>
    </select>
      <br>
    <input type="submit" name="submit" value="Add payment" />
  </form>

</div>

</div>

</body>
</html>
