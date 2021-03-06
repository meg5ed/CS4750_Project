<?php
    include('check_logged.php');
    ?>
<html>
<head>
    
<link rel="stylesheet" type="text/css" href="main.css">
<meta charset="UTF-8">
<title>Add tenant</title>
</head>
<body>

<div id="main-bg"></div>
<div id="main-screen">

<h1>Add tenant</h1>

<div class="input_box">
  <form action="input_tenant.php" method="post">

    <input type="text" name="first_name" size="20" placeholder="First name" />
    <input type="text" name="last_name" size="20" placeholder="Last name" />

    <select name="tenant_gender">
      <option value="X">Select gender</option>
      <option value="M">M</option>
      <option value="F">F</option>
    </select>

    <select name="tenant_birth_month" style="width:30%">
      <option value="no_input">Birth month</option>
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

    <select name="tenant_birth_date" id="birth_date_input" style="width:30%">
      <option value="no_input">Birth date</option>
      <script>
        for (var i=1; i<=31; i++) {
          document.getElementById("birth_date_input").innerHTML += "<option value=" + i + ">" + i + "</option>";
        }
      </script>
    </select>

    <select name="tenant_birth_year" id="birth_year_input" style="width:30%">
      <option value="no_input">Birth year</option>
      <script>
        var y = new Date().getFullYear();
        for (var i=y; i>=1900; i--) {
          document.getElementById("birth_year_input").innerHTML += "<option value=" + i + ">" + i + "</option>";
        }
      </script>
    </select>

    <input type="text" name="occupation" size="50" placeholder="Occupation" />
    <input type="text" name="phone_number" size="20" placeholder="Phone number" />

    <input type="submit" name="submit" value="Add tenant" />
  </form>

</div>

</div>

</body>
</html>
