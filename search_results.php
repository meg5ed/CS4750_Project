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
      
    include('connect_db.php');

?>
<body>

  <div id = "title_container">
    <h1>Search Results</h1>
  </div>

  <div class="search_box" id="search_box">
    <form action="search_results.php" method="get">
      <table class="btn-group">
        <tr>
          <td><button name = "table" value = "Tenant">Tenant</button></td>
          <td><button name = "table" value = "Lease">Lease</button></td>
          <td><button name = "table" value = "Lease_Agreement">Lease Agreement</button></td>
          <td><button name = "table" value = "Unit">Unit</button></td>
          <td><button name = "table" value = "Payment">Payment</button></td>
          <td><button name = "table" value = "Property">Property</button>
          </tr>
        </table>
      </form>
      <div class ="horizontal_padding"></div>

        <table id="users">


          <?php
      // getting the choosen table (button clicked)
          $table = $_GET["table"];


      // If no table is choosen (no button clicked), set default to Tenant
          if (strlen($table) <= 0)
          {
            $table = "Tenant";
          } 


      // selecting all values from the table
          $query = "SELECT * FROM ".$table ;


          $result = $conn->query($query);

          $data_set = $result-> fetch_all(MYSQLI_ASSOC);
          $columns = array_keys($data_set[0]);

      //printing column headers
          echo "<tr>";
          foreach ($columns as $column )
          {
            echo "<td>".$column."</td>\n";
          }

          echo "</tr><hr>";


      // printing each row of the column
          foreach($data_set as $row) {
            foreach ($columns as $column)
            {
              echo "<td>".$row[$column]."</td>\n";
            }
            echo "</tr>\n";
          }
          ?>
        </table>
      </div>
    
  </body>
</html>
