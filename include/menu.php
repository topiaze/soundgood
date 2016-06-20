<header>
  <ul>
  <li><a class="active" href="accueil.php">Accueil</a></li>
  <li><a href="#news">A propos de nous</a></li>
  <?php if ((isset($_SESSION['mail'])) && (!empty($_SESSION['mail']))){
    print '<li id="connect"><a href="include/deconnexion.php">Déconnexion</a></li>';
  }else {
    print '<li id="connect"><a href="connexion.php">Connexion</a></li>';
    print  '<li id="inscript"><a href="inscription.php">Inscription</a></li>';
  }

   ?>

  <li class="dropdown">
    <a href="#" class="dropbtn">Festivals</a>
    <div class="dropdown-content">
      <a href="par_lieux.php">Trier par lieux</a>
      <a href="#">Trier par date</a>
    </div>
  </li>
</ul>
</header>
