<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css">
<meta charset="UTF-8">
<title>Add lease</title>
</head>
<body>

<div id="main-bg"></div>
<div id="main-screen">

<h1>Add lease</h1>

<div class="input_box">
  <form action="add_lease.php" method="post">

    <select name="lease_property">
      <!-- NEED TO AUTO GENERATE -->
      <option value='random1'>Select property</option>
        <?php
        include('db_connect.php');
        //property_id, address_number, address_street
        $props = $mysqli->query('SELECT * FROM Property');
        if ($mysqli->query('SELECT * FROM Property')==FALSE){
            echo $mysqli->error;
        }
        if ($props->num_rows > 0) {
            // output data of each row
            while($row = $props->fetch_assoc()) {
                echo "<option value='" . $row['property_id'] . "'>" . $row['address_number']."  ".$row['address_street']."</option>";
                //echo "<option value='random1'>Select property</option>";
            }
        }
        $mysqli->close();
        ?>
    </select>
    <input type="text" name="unit_number" size="5" placeholder="Enter unit number" />

    <select name="lease_start_month" style="width:30%">
       <option value="no_input">Start month</option>
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

    <select name="lease_start_date" id="lease_date_input" style="width:30%">
      <option value="no_input">Start date</option>
      <script>
        for (var i=1; i<=31; i++) {
          document.getElementById("lease_date_input").innerHTML += "<option value=" + i + ">" + i + "</option>";
        }
      </script>
    </select>

    <select name="lease_start_year" id="lease_year_input" style="width:30%">
      <option value="no_input">Start year</option>
      <script>
        var y = new Date().getFullYear();
        for (var i=y; i>=1900; i--) {
          document.getElementById("lease_year_input").innerHTML += "<option value=" + i + ">" + i + "</option>";
        }
      </script>
    </select>

    <select name="lease_end_month" style="width:30%">
      <option value="no_input">End month</option>
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

    <select name="lease_end_date" id="birth_date_input" style="width:30%">
      <option value="no_input">End date</option>
      <script>
        for (var i=1; i<=31; i++) {
          document.getElementById("birth_date_input").innerHTML += "<option value=" + i + ">" + i + "</option>";
        }
      </script>
    </select>

    <select name="lease_end_year" id="birth_year_input" style="width:30%">
      <option value="no_input">End year</option>
      <script>
        var y = new Date().getFullYear();
        for (var i=y; i>=1900; i--) {
          document.getElementById("birth_year_input").innerHTML += "<option value=" + i + ">" + i + "</option>";
        }
      </script>
    </select>

    <input type="text" name="lease_cost" size="7" placeholder="Enter cost" style='width:35%' />
    <select name="unit_tenants" style='width:50%'>
      <option value="no_input">Select Number Tenants</option>
      <option value=1>1</option>
      <option value=2>2</option>
      <option value=3>3</option>
      <option value=4>4</option>
      <option value=5>5</option>
      <option value=6>6</option>
      <option value=7>7</option>
      <option value=8>8</option>
      <option value=9>9</option>
    </select>

    <input type="submit" name="submit" value="Continue" />
  </form>

</div>

</div>

</body>
</html>
