<?php session_start();   ?>
<!DOCTYPE html>
<?php
include 'include/Inscription.php';
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sound's Good</title>
    <link rel="stylesheet"href="stylesheets.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>
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
  <div align="center">
           <h2>Inscription</h2>
           <br /><br />
           <form method="POST" action="">
              <table>
                 <tr>
                    <td align="right">
                       <label for="pseudo">Pseudo :</label>
                    </td>
                    <td>
                       <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
                    </td>
                 </tr>
                 <tr>
                    <td align="right">
                       <label for="mail">Mail :</label>
                    </td>
                    <td>
                       <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
                    </td>
                 </tr>
                 <tr>
                    <td align="right">
                       <label for="mail2">Confirmation du mail :</label>
                    </td>
                    <td>
                       <input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
                    </td>
                 </tr>
                 <tr>
                    <td align="right">
                       <label for="mdp">Mot de passe :</label>
                    </td>
                    <td>
                       <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
                    </td>
                 </tr>
                 <tr>
                    <td align="right">
                       <label for="mdp2">Confirmation du mot de passe :</label>
                    </td>
                    <td>
                       <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" />
                    </td>
                 </tr>
                 <tr>
                    <td></td>
                    <td align="center">
                       <br />
                       <input type="submit" name="forminscription" value="Je m'inscris" />
                    </td>
                 </tr>
              </table>
           </form>
           <?php
           if(isset($erreur)) {
              echo '<font color="red">'.$erreur."</font>";
           }
           ?>
        </div>
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
