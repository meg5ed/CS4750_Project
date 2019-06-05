<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="search_results.css">
<meta charset="UTF-8">
<title>Results</title>
</head>
<body>
<div id="main-bg"></div>
<div id="main-screen">

<?php

    include('db_connect.php');

?>
<body>

  <div id = "title_container">
    <h1>Search Results</h1>
  </div>

  <div class="container bg-white p-3" id="search_box">
      <table class="btn-group">
        <tr>
          <form  action="search_results.php" method="post">
          <input type="hidden" name="table_selected" id="table_selected_input" value="random">
          <?php

          if (array_key_exists("tenant_firstname", $_POST)) {
            echo "<input type=\"hidden\" name=\"tenant_firstname\" value=\"".$_POST["tenant_firstname"]."\">";
            echo "<input type=\"hidden\" name=\"tenant_lastname\" value=\"".$_POST["tenant_lastname"]."\">";
          }
          if (array_key_exists("payment_id", $_POST)) {
            echo "<input type=\"hidden\" name=\"payment_id\" value=\"".$_POST["payment_id"]."\">";
            echo "<input type=\"hidden\" name=\"payment_month\" value=\"".$_POST["payment_month"]."\">";
            echo "<input type=\"hidden\" name=\"payment_lease\" value=\"".$_POST["payment_lease"]."\">";
          }
          if (array_key_exists("lease_id", $_POST)) {
            echo "<input type=\"hidden\" name=\"lease_id\" value=\"".$_POST["lease_id"]."\">";
          }
          if (array_key_exists("unit_property", $_POST)) {
            echo "<input type=\"hidden\" name=\"unit_id\" value=\"".$_POST["unit_id"]."\">";
            echo "<input type=\"hidden\" name=\"unit_number\" value=\"".$_POST["unit_number"]."\">";
            echo "<input type=\"hidden\" name=\"unit_property\" value=\"".$_POST["unit_property"]."\">";
            echo "<input type=\"hidden\" name=\"unit_property\" value=\"".$_POST["unit_number"]."\">";
            echo "<input type=\"hidden\" name=\"property_number\" value=\"".$_POST["property_number"]."\">";
            echo "<input type=\"hidden\" name=\"property_street\" value=\"".$_POST["property_street"]."\">";
            echo "<input type=\"hidden\" name=\"property_city\" value=\"".$_POST["property_city"]."\">";
            echo "<input type=\"hidden\" name=\"property_state\" value=\"".$_POST["property_state"]."\">";
            echo "<input type=\"hidden\" name=\"property_zip\" value=\"".$_POST["property_zip"]."\">";
          }

          if (array_key_exists("tenant_firstname", $_POST)) {
            echo "<td><input type=\"submit\" onmouseover=\"document.getElementById('table_selected_input').value = 'Tenant'; console.log('here')\" name = \"table\" value = \"Tenant\" id=\"head_Tenant\">";
          }
          if (array_key_exists("payment_id", $_POST)) {
            echo "<td><input type=\"submit\" onmouseover=\"document.getElementById('table_selected_input').value = 'Payment'; console.log('here')\" name = \"table\" value = \"Payment\" id=\"head_Payment\">";
          }
          if (array_key_exists("lease_id", $_POST)) {
            echo "<td><input type=\"submit\" onmouseover=\"document.getElementById('table_selected_input').value = 'Lease'; console.log('here')\" name = \"table\" value = \"Lease\" id=\"head_Lease\">";
          }
          if (array_key_exists("unit_property", $_POST)) {
            echo "<td><input type=\"submit\" onmouseover=\"document.getElementById('table_selected_input').value = 'Property'; console.log('here')\" name = \"table\" value = \"Property/Unit\" id=\"head_Property\">";
          }

          ?>
          </form>
          </tr>
        </table>
      <div class ="horizontal_padding"></div>

        <table id="users" class='table'>


          <?php
          if (array_key_exists("table_selected", $_POST)) {
        // getting the choosen table (button clicked)
            $table = $_POST["table_selected"];
            echo "<script>document.getElementById(\"head_".$table."\").style.backgroundColor = 'royalblue'; document.getElementById(\"head_".$table."\").style.color = 'white';</script>";

        // structure SQL query

            $where_statements = "";
            switch ($table) {
                case "Tenant":
                    if (array_key_exists("tenant_firstname", $_POST)) {
                      $where_statements = $where_statements."tenant_FirstName LIKE '".$_POST["tenant_firstname"]."%' AND ";
                    }
                    if (array_key_exists("tenant_lastname", $_POST)) {
                      $where_statements = $where_statements."tenant_LastName LIKE '".$_POST["tenant_lastname"]."%' AND ";
                    }
                    break;
                case "Payment":
                    if (array_key_exists("payment_id", $_POST)) {
                      $where_statements = $where_statements."payment_id LIKE '".$_POST["payment_id"]."%' AND ";
                    }
                    if (array_key_exists("payment_month", $_POST)) {
                      $where_statements = $where_statements."month_covered LIKE '".$_POST["payment_month"]."%' AND ";
                    }
                    if (array_key_exists("payment_lease", $_POST)) {
                      $where_statements = $where_statements."lease_id LIKE '".$_POST["payment_lease"]."%' AND ";
                    }
                    break;
                case "lease_list":
                    if (array_key_exists("lease_firstname", $_POST)) {
                      $where_statements = $where_statements."tenant_FirstName LIKE '".$_POST["lease_firstname"]."%' AND ";
                    }
                    if (array_key_exists("lease_lastname", $_POST)) {
                      $where_statements = $where_statements."tenant_LastName LIKE '".$_POST["lease_lastname"]."%' AND ";
                    }
                    if (array_key_exists("lease_id", $_POST)) {
                      $where_statements = $where_statements."lease_id LIKE '".$_POST["lease_id"]."%' AND ";
                    }
                    break;
                case "unit_list":
                    if (array_key_exists("unit_id", $_POST)) {
                      $where_statements = $where_statements."unit_id LIKE '".$_POST["unit_id"]."%' AND ";
                    }
                    if (array_key_exists("unit_number", $_POST)) {
                      $where_statements = $where_statements."unit_number LIKE '".$_POST["unit_number"]."%' AND ";
                    }
                    if (array_key_exists("property_number", $_POST)) {
                      $where_statements = $where_statements."address_number LIKE '".$_POST["property_number"]."%' AND ";
                    }
                    if (array_key_exists("property_street", $_POST)) {
                      $where_statements = $where_statements."address_street LIKE '".$_POST["property_street"]."%' AND ";
                    }
                    if (array_key_exists("property_city", $_POST)) {
                      $where_statements = $where_statements."address_city LIKE '".$_POST["property_city"]."%' AND ";
                    }
                    if (array_key_exists("property_state", $_POST)) {
                      $where_statements = $where_statements."address_state LIKE '".$_POST["property_state"]."%' AND ";
                    }
                    if (array_key_exists("property_zip", $_POST)) {
                      $where_statements = $where_statements."address_zip LIKE '".$_POST["property_zip"]."%' AND ";
                    }
                    break;
                default:
                    //do nothing (tenant should be default automatically)
            }
            $where_statements = $where_statements."1 = 1";

        // selecting all values from the table
            $query = "SELECT * FROM ".$table." WHERE ".$where_statements;

            $result = $mysqli->query($query);
            if ($mysqli->query($query)==FALSE){
                echo $mysqli->error;
            }
            $data_set = $result-> fetch_all(MYSQLI_ASSOC);
            if (count($data_set) != 0) {

              $columns = array_keys($data_set[0]);

          //printing column headers
              echo "<tr>";
              foreach ($columns as $column )
              {
                echo "<td>".$column."</td>\n";
              }

              echo "</tr>";


          // printing each row of the column
              foreach($data_set as $row) {
                foreach ($columns as $column)
                {
                  echo "<td>".$row[$column]."</td>\n";
                }
                echo "</tr>\n";
              }
            } else {
              echo "No results to display.";
            }
          } else {
            echo "No results to display.";
          }
          ?>
        </table>
      </div>
    <table class='btn-group'>
        <tr>
          <td><a href='custom_search.html'><button name = "leave">Search Again</button></a></td>
          <td><a href='index.php'><button name = "leave">Home</button></a></td>
          </tr>
    </table>
  </body>
</html>
