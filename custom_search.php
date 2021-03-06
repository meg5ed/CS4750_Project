<?php
    include('check_logged.php');
    ?>
<html>
    
<head>

<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" type="text/css" href="search_results.css">  
<link rel="stylesheet" type="text/css" href="custom_search.css">
<meta charset="UTF-8">
<title>Custom search</title>
</head>
<body>

<div id="main-bg"></div>
<div id="main-screen">

<h1>Custom search</h1>

<div class="search_box" id="search_box">
<h2 style="margin-bottom:5px">Search by...</h2>

<div class="data_select" id="tenant_trigger" onclick="trigger_tenant()">
Tenant
</div>

<div class="data_select" id="payment_trigger" onclick="trigger_payment()">
Payment
</div>

<div class="data_select" id="lease_trigger" onclick="trigger_lease()">
Lease
</div>

<div class="data_select" id="unit_trigger" onclick="trigger_unit()">
Property/Unit
</div>

<h2>Where values equal...</h2>
<form action="search_results.php" method="post">
<input type="hidden" name="table_selected" value="Tenant" id="table_selected_input">
<div id="values_box"></div>
<input type="submit" class="search_button" value="Search"/>
</form>

</div>
    <br>
    <br>
    <a href='index.php'><button name = "leave">Home</button></a>
</div>

<script>
// tenant_checked();
// property_checked();
// payment_checked();
// lease_checked();
// unit_checked();

var selected_tables = [];

function trigger_tenant() {
  document.getElementById("tenant_trigger").style.backgroundColor = "royalblue";
  document.getElementById("tenant_trigger").style.color = "white";
  document.getElementById("values_box").innerHTML += "<h3>Tenant</h3>";
  var new_html = "</div>";

  new_html += "<div class=\"sub_data_select\"><label for=\"tenant_firstname\">First name</label><input type=\"text\" name=\"tenant_firstname\" value=\"\" placeholder=\"Enter first name...\"></div>";
  new_html += "<div class=\"sub_data_select\"><label for=\"tenant_lastname\">Last name</label><input type=\"text\" name=\"tenant_lastname\" value=\"\" placeholder=\"Enter last name...\"></div>";

  document.getElementById("values_box").innerHTML += new_html + "</div>";
  document.getElementById("table_selected_input").value = "Tenant";
  selected_tables += "tenant";
}

function trigger_payment() {
  document.getElementById("payment_trigger").style.backgroundColor = "royalblue";
  document.getElementById("payment_trigger").style.color = "white";
  console.log("here");
  document.getElementById("values_box").innerHTML += "<h3>Payment</h3>";
  var new_html = "</div>";

  new_html += "<div class=\"sub_data_select\"><label for=\"payment_month\">Month</label><input type=\"text\"  name=\"payment_month\" value=\"\" placeholder=\"Enter month...\"></div>";
  new_html += "<div class=\"sub_data_select\"><label for=\"payment_id\">ID</label><input type=\"text\"  name=\"payment_id\" value=\"\" placeholder=\"Enter payment ID...\"></div>";
  new_html += "<div class=\"sub_data_select\"><label for=\"payment_lease\">Lease ID</label><input type=\"text\"  name=\"payment_lease\" value=\"\" placeholder=\"Enter lease ID...\"></div>";

  document.getElementById("values_box").innerHTML += new_html + "</div>";
  document.getElementById("table_selected_input").value = "Payment";
  selected_tables += "payment";
}

function trigger_lease() {
  document.getElementById("lease_trigger").style.backgroundColor = "royalblue";
  document.getElementById("lease_trigger").style.color = "white";
  console.log("here");
  document.getElementById("values_box").innerHTML += "<h3>Lease</h3>";
  var new_html = "</div>";

  new_html += "<div class=\"sub_data_select\"><label for=\"lease_firstname\">First name</label><input type=\"text\" name=\"lease_firstname\" value=\"\" placeholder=\"Enter first name...\"></div>";
  new_html += "<div class=\"sub_data_select\"><label for=\"lease_lastname\">Last name</label><input type=\"text\" name=\"lease_lastname\" value=\"\" placeholder=\"Enter last name...\"></div>";
  new_html += "<div class=\"sub_data_select\"><label for=\"lease_id\">Lease ID</label><input type=\"text\"  name=\"lease_id\" value=\"\" placeholder=\"Enter lease ID...\"></div>";

  document.getElementById("values_box").innerHTML += new_html + "</div>";
  document.getElementById("table_selected_input").value = "lease_list";
  selected_tables += "lease";
}

function trigger_unit() {
  document.getElementById("unit_trigger").style.backgroundColor = "royalblue";
  document.getElementById("unit_trigger").style.color = "white";
  console.log("here");
  document.getElementById("values_box").innerHTML += "<h3>Property/Unit</h3>";
  var new_html = "</div>";

  new_html += "<div class=\"sub_data_select\"><label for=\"unit_id\">Unit ID</label><input type=\"text\"  name=\"unit_id\" value=\"\" placeholder=\"Enter unit ID...\"><br><label for=\"unit_number\">Unit Number</label><input type=\"text\"  name=\"unit_number\" value=\"\" placeholder=\"Enter unit number...\"></div>";
  new_html += "<div class=\"sub_data_select\"><label for=\"unit_property\">Property ID</label><input type=\"text\"  name=\"unit_property\" value=\"\" placeholder=\"Enter property ID...\"></div><br>";
  new_html += "<div class=\"sub_data_select\"><label for=\"property_number\">Number</label><input type=\"text\"  name=\"property_number\" value=\"\" placeholder=\"Enter number...\"><br><label for=\"property_street\">Street</label><input type=\"text\"  name=\"property_street\" value=\"\" placeholder=\"Enter street...\"><br><label for=\"property_city\">City</label><input type=\"text\"  name=\"property_city\" value=\"\" placeholder=\"Enter city...\"><br><label for=\"property_state\">State</label><input type=\"text\"  name=\"property_state\" value=\"\" placeholder=\"Enter state...\"><br><label for=\"property_zip\">Address</label><input type=\"text\"  name=\"property_zip\" value=\"\" placeholder=\"Enter zip...\"></div>";

  document.getElementById("values_box").innerHTML += new_html + "</div>";
  document.getElementById("table_selected_input").value = "unit_list";
  selected_tables += "unit";
}

</script>


</body>

</html>
