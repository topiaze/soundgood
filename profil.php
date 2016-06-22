<?php
session_start();

require 'include/variables.php';

if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $requser = $bdd->prepare('SELECT * FROM user WHERE id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
?>
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
  <h2>Profil de <?php echo $userinfo['pseudo']; ?></h2>
  <br /><br />
  Pseudo = <?php echo $userinfo['pseudo']; ?>
  <br />
  Mail = <?php echo $userinfo['mail']; ?>
  <br />
  <?php
  if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
  ?>
  <br />
  <a href="editionprofil.php">Editer mon profil</a>
  <a href="deconnexion.php">Se déconnecter</a>
  <?php
  }
  ?>
</div>
</div>
  </body>
</html>
<?php
}
?>
