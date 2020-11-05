<?php
require('./sr/db_connect.php');
include("./sr/session.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $listtitle; ?></title>
    <?php echo $metaCSS; ?>  </head>
  <body>
<?php require_once('./nav/g_nav.php')?>
<?php require_once('./nav/g_section.php')?>
<div class="content column is-half is-offset-one-quarter" style="margin-top: 30px">



<div class="table-container">
  <table class="table is-narrow is-hoverable">
  <tr>
    <th>CustomerID</th>
    <th>FullName</th>
    <th>Gender</th>
    <th>Phone</th>
    <th>Address</th>
  </tr>

  <?php

$sql = "SELECT * FROM grahak_details ORDER by id DESC";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>".$row['g_id']."</td>";
          echo "<td>".$row['name']."</td>";
          echo "<td>".$row['address']."</td>";
          echo "<td>".$row['gender']."</td>";
          echo "<td>".$row['phone']."</td>";
          echo "</tr>";
    }






?>

</table> 
</div>

</div>
<?php require_once('./nav/g_footer.php')?>

  </body>
</html>