<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css">
<meta charset="UTF-8">
<title>Add unit</title>
</head>
<body>

<div id="main-bg"></div>
<div id="main-screen">

<h1>Add unit</h1>

<div class="input_box">
  <form action="add_unit.php" method="post">

    <input type="text" name="unit_number" size="5" placeholder="Enter unit number" />
    <select name="unit_property">
      <!-- NEED TO AUTO GENERATE -->
        <option value='random1'>Select property</option>
        <?php
        include('db_connect.php');
        //property_id, address_number, address_street
        $props = $mysqli->query('SELECT * FROM property');
        if ($mysqli->query('SELECT * FROM property')==FALSE){
            echo $mysqli->error;
        }
        if ($props->num_rows > 0) {
            // output data of each row
            while($row = $props->fetch_assoc()) {
                echo "<option value='" . $row['property_id'] . "'>" . $row['address_number']."  ".$row['address_street']."</option>";
                //echo "<option value='random1'>Select property</option>";
            }
        }
        
        ?>
    </select>
    <select name="unit_bedrooms">
      <option value="no_input">Select number bedrooms</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
    </select>
    <select name="unit_bathrooms">
      <!-- NEED TO AUTO GENERATE -->
      <option value="no_input">Select number bathrooms</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
    </select>

    <input type="submit" name="submit" value="Add unit" />
  </form>

</div>

</div>

</body>
</html>
