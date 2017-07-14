<?php
//include data
include('inc/data.php');

//Page Variables
$title = "Inventory";
$sort = null;
include('inc/header.php');

if(isset($_GET['sort'])){
  if($_GET['sort'] == 'computer'){
    $sort = 'computer';
    $output =
  }elseif($_GET['sort'] == 'cable'){
    $sort = 'cable';
  }elseif($_GET['sort'] == 'monitor'){
    $sort = 'monitor';
  }else{
    $sort = null;
  }
}
?>

    <table>
    <?php
      if($sort == null){
        foreach($inventory as $items => $id){
          echo "<tr>";
          echo "<th>Item ID#</th>";
          echo "<td>" . $items . "</td>";
          echo "<th>Device</th>";
          echo '<td><a href="index.php?sort=' . $id['catagory'] . '">' . $id['catagory'] . "</a></td>";

          if(isset($id['brand'])){
            echo "<th>Brand</th>";
            echo "<td>" . $id['brand'] . "</td>";
          }elseif(isset($id['type'])){
            echo "<th>Type</th>";
            echo "<td>" . $id['type'] . "</td>";
          }else{
            echo '<th></th>';
            echo '<td></td>';
          }

          if(isset($id['serviceTag'])){
            echo "<th>Service Tag</th>";
            echo "<td>" . $id['serviceTag'] . "</td>";
          }elseif(isset($id['connectorType'])){
            echo "<th>Connector Type</th>";
            echo "<td>" . $id['connectorType'] . "</td>";
          }elseif(isset($id['size'])){
            echo "<th>Size</th>";
            echo "<td>" . $id['size'] . "</td>";
          }else{
            echo '<th></th>';
            echo '<td></td>';
          }

          if(isset($id['expressCode'])){
            echo "<th>Express Code</th>";
            echo "<td>" . $id['expressCode'] . "</td>";
          }elseif(isset($id['length'])){
            echo "<th>Length</th>";
            echo "<td>" . $id['length'] . "</td>";
          }else{
            echo '<th></th>';
            echo '<td></td>';
          }

          if(isset($id['model'])){
            echo "<th>Model</th>";
            echo "<td>" . $id['model'] . "</td>";
          }else{
            echo '<th></th>';
            echo '<td></td>';
          }

          if(isset($id['osVersion'])){
            echo "<th>OS Version</th>";
            echo "<td>" . $id['osVersion'] . "</td>";
          }else{
            echo '<th></th>';
            echo '<td></td>';
          }

          if(isset($id['location'])){
            echo "<th>Location</th>";
            echo "<td>" . $id['location'] . "</td>";
          }else{
            echo '<th></th>';
            echo '<td></td>';
          }

          if(isset($id['room'])){
            echo "<th>Room</th>";
            echo "<td>" . $id['room'] . "</td>";
          }else{
            echo '<th></th>';
            echo '<td></td>';
          }

          if(isset($id['status'])){
            echo "<th>Status</th>";
            echo "<td>" . $id['status'] . "</td>";
          }else{
            echo '<th></th>';
            echo '<td></td>';
          }
          echo "</tr>";
      }
    }elseif ($sort == 'computer'){
      foreach($inventory as $items => $id){
        for($i = 0; $i < sizeof($inventory); $i++){
          if($id['catagory'] == 'computer'){
            echo 'computer';
          }
        }
        // echo "<tr>";
        // echo "<th>Item ID#</th>";
        // echo "<td>" . $items . "</td>";
        // echo "<th>Device</th>";
        // echo '<td><a href="index.php?sort=' . $id['catagory'] . '">' . $id['catagory'] . "</a></td>";
        // echo "<th>Brand</th>";
        // echo "<td>" . $id['brand'] . "</td>";
        // echo "<th>Service Tag</th>";
        // echo "<td>" . $id['serviceTag'] . "</td>";
        // echo "<th>Express Code</th>";
        // echo "<td>" . $id['expressCode'] . "</td>";
        // echo "<th>Model</th>";
        // echo "<td>" . $id['model'] . "</td>";
        // echo "<th>OS Version</th>";
        // echo "<td>" . $id['osVersion'] . "</td>";
        // echo "<th>Location</th>";
        // echo "<td>" . $id['location'] . "</td>";
        // echo "<th>Room</th>";
        // echo "<td>" . $id['room'] . "</td>";
        // echo "<th>Status</th>";
        // echo "<td>" . $id['status'] . "</td>";
        // echo "</tr>";
      }
    }

    ?>
  </table>
</div> <!--End Content -->
</body>
</html>
