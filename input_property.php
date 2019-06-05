<?php
include('check_logged.php');
?>
<html>
    
<head>
<link rel="stylesheet" type="text/css" href="main.css">
<meta charset="UTF-8">
<title>Add property</title>
</head>
<body>

<div id="main-bg"></div>
<div id="main-screen">

<h1>Add property</h1>

<div class="input_box">
  <form action="add_property.php" method="post">

    <input type="text" name="property_number" size="50" placeholder="Enter property Number" />
    <input type="text" name="property_street" size="50" placeholder="Street" />
    <input type="text" name="property_city" size="50" placeholder="City" />
    <input type="text" name="property_state" size="20" placeholder="State" />
    <input type="text" name="property_zip" size="5" placeholder="Zip" />
    Building has a pool:
    <select name="has_pool">
      <option value="no_input">Select</option>
      <option value="Y">Y</option>
      <option value="N">N</option>
    </select>
    <br>
    Building has a gym:
    <select name="has_gym">
      <option value="no_input">Select</option>
      <option value="Y">Y</option>
      <option value="N">N</option>
    </select>
    <br>
    Building has parking:
    <select name="has_parking">
      <option value="no_input">Select</option>
      <option value="Y">Y</option>
      <option value="N">N</option>
    </select>
    <input type="submit" name="submit" value="Add property" />
  </form>

</div>

</div>

</body>
</html>
