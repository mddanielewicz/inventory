<?php
//include data
include('inc/data.php');

//Page Variables
$title = "Inventory";

?>

<!doctype>
<html>
<head>
  <title><?php echo $title ?></title>
</head>
<body>
  <?php
  include('inc/header.php');
  ?>
  <div>
    <table>
    <?php
      foreach($inventory as $items => $id){
        echo "<tr>";
        echo "<th>Item ID#</th>";
        echo "<td>" . $items . "</td>";
        echo "<th>Device</th>";
        echo "<td>" . $id['catagory'] . "</td>";
        echo "<th>Brand</th>";
        echo "<td>" . $id['brand'] . "</td>";
        echo "<th>Service Tag</th>";
        echo "<td>" . $id['serviceTag'] . "</td>";
        echo "<th>Express Code</th>";
        echo "<td>" . $id['expressCode'] . "</td>";
        echo "<th>Model</th>";
        echo "<td>" . $id['model'] . "</td>";
        echo "<th>OS Version</th>";
        echo "<td>" . $id['Windows 10'] . "</td>";
        echo "<th>Location</th>";
        echo "<td>" . $id['location'] . "</td>";
        echo "<th>Room</th>";
        echo "<td>" . $id['room'] . "</td>";
        echo "<th>Status</th>";
        echo "<td>" . $id['status'] . "</td>";
        echo "</tr>";
      }
    ?>
  </table>
  </div>
</body>
</html>
