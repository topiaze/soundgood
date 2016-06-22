<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sound's Good</title>
    <link rel="stylesheet"href="stylesheets.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>
  </head>
  <body>
<?php include 'include/menu.php' ?>
<div class="conteneur">
  <?php include 'include/affiche.php' ?>
  <div id="conteneur2">
<div id="rights">
  <div id="link">
    <a href="?ardeche">ardeche</a> |
    <a href="?loire">loire</a> |
    <a href="?rhone">rhone</a> |
    <a href="?isere">isere</a> |
    <a href="?ain">ain</a> |
    <a href="?drome">drome</a> |
  </div>
</div>
  <div id="rightp">
  <?php
  if (strpos($_SERVER['REQUEST_URI'], "ardeche") !== false){
  include 'include/ardeche.php';

  }
  ?>
</div>
</div>
</div>
</div>
  </body>
</html>
