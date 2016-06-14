<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sound's Good</title>
    <link rel="stylesheet"href="stylesheets.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  </head>
  <body>
<?php include 'include/menu.php' ?>
<div class="conteneur">
  <div id="left">
    <h3 id="affiche">A l'affiche</h3>
    <img class="top_i" src="img/sylak.jpeg"/>
    <img class="top_i" src="img/index.jpeg"/>
    <img class="bot_i" src="img/nimes.jpeg"/>
    <img class="bot_i" src="img/fdm.jpeg"/>
  </div>
  <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("top_i");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>
<script>
var myIndexs = 0;
carousels();

function carousels() {
  var i;
  var x = document.getElementsByClassName("bot_i");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  myIndexs++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousels, 4000); // Change image every 2 seconds
}
</script>
<div id="right">
  <form method="post" action="include/login.php">
    <label>username:</label>
  <input id="log" type="text" name="login" placeholder="Nom d'utilisateur"> <br>
  <label>password:</label>
  <input id="pass" type="password" name="pass" placeholder="Mot de passe"><br>
  <input id="sub" type="submit" name="submit" value="Connexion">
  </form>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#log').hide(0).delay(250).fadeIn(1000);
      $('#pass').hide(0).delay(500).fadeIn(1000);
      $('#sub').hide(0).delay(750).fadeIn(1000);
    })
  </script>
</div>
</div>
  </body>
</html>
