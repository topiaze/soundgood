<?php session_start(); ?>
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
  <?php print_r ($_SESSION); ?>
</div>
</div>
  </body>
</html>
