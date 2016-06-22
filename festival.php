<?php session_start(); ?>
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
<div id="right">
  <form method="post" action="ton_action">
       <label for="le_nom">trier par lieux</label><br />
       <select name="le_nom" id="le_nom">
           <option value="ta_valeur">Le nom qui apparaitra</option>
           <option value="ta_valeur">Le nom qui apparaitra</option>
           <option value="ta_valeur">Le nom qui apparaitra</option>
           <option value="ta_valeur">Le nom qui apparaitra</option>

</select>

</form>
</div>
</div>
  </body>
</html>
