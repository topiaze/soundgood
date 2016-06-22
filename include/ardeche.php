<?php
require 'variables.php';
$sql = "SELECT festival FROM Festivals WHERE lieux='ardeche'";
foreach ($bdd->query($sql) as $row) {
  print $row['festival'];
}

 ?>
