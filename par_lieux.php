<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sound's Good</title>
    <link rel="stylesheet"href="stylesheets.css">
  </head>
  <body>
<?php include 'include/menu.php' ?>
<div class="conteneur">
  <?php include 'include/affiche.php' ?>
<div id="right">
  <div id="link">
    <a href="?ardeche">ardeche</a> |
    <a href="?loire">loire</a> |
    <a href="?rhone">rhone</a> |
    <a href="?isere">isere</a> |
    <a href="?ain">ain</a> |
    <a href="?drome">drome</a> |
  </div>
  <?php
  if (strpos($_SERVER['REQUEST_URI'], "ardeche") !== false){
  include 'include/ardeche.php';

  }
  ?>
</div>
</div>
  </body>
</html>
