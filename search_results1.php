<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" type="text/css" href="search_results.css">
<meta charset="UTF-8">
<title>Results</title>
</head>
<body>
<div id="main-bg"></div>
<div id="main-screen">

<?php
  include(connect_db.php);
 ?>
<h1>Search Results</h1>



<div class="search_box" id="search_box">

  <div class="btn-group">
  <button>Tenant</button>
  <button>Property</button>
  <button>Lease</button>
  <button>Lease Agreement</button>
  <button>Payment</button>
  <button>Unit</button>

</div>



<table id="customers" style="width:91%">
  <tr>
      <th>ID</th>
      <th>Last Name</th>
      <th>First Name</th>
      <th>Gender</th>
      <th>Age</th>
      <th>Phone Number</th>
      <th>Occupation</th>

  </tr>
  <tr>
      <td>1</td>
      <td>Washington</td>
      <td>George</td>
      <td>M</td>
      <td>50</td>
      <td>(142) 274 8272</td>
      <td>President</td>
  </tr>
  <tr>
      <td>2</td>
      <td>Johnson</td>
      <td>Matt</td>
      <td>M</td>
      <td>18</td>
      <td>(142) 274 8272</td>
      <td>Student</td>
  </tr>
  <tr>
      <td>3</td>
      <td>Lepore</td>
      <td>Tess</td>
      <td>F</td>
      <td>22</td>
      <td>(424) 111 6221</td>
      <td>Pilot</td>
  </tr>
  <tr>
      <td>4</td>
      <td>Smith</td>
      <td>John</td>
      <td>M</td>
      <td>34</td>
      <td>(495) 681 1502</td>
      <td>Fire Fighter</td>
  </tr>
  <tr>
      <td>5</td>
      <td>Miller</td>
      <td>Jacqui</td>
      <td>F</td>
      <td>52</td>
      <td>(703) 372 2969</td>
      <td>Server</td>
  </tr>
</table>

</div>
</body>
</html>
