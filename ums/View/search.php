<?php
include "../Model/DatabaseConnection.php";
$conobj=Connect();

$userQuery=SearchProductsByName($conobj,$Pname);

if ($userQuery->num_rows > 0) {

    while($row = $userQuery->fetch_assoc()) {
      echo "<center><fieldset class='items'>";
      echo "Username : ".$row["Username"];
      echo "<p style='color:#630f80;'>Product Name : ".$row["name"]."</p>";
      echo "<p>Description : ".$row["description"]."</p>";
      echo "Type : ".$row["Type"]."<br>";
      echo "<p style='color:#9e1653;'>Price : ".$row["price"]."</p>";
      echo "Quantity : ".$row["quantity"]."<br>";
      $img = $row["image"];
      echo "<p>Image : <img src='$img' width=60px></img></p>";
      echo "</fieldset></center>";
      
  } 
}
else 
echo "Product Not Found !!!<br>";

?>