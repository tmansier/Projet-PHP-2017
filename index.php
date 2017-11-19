

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Projet Web</title>

  <!-- CSS  -->
  <link rel="Stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

    <!-- Header + Menu-->
    <header>
        <main>
            <div class="nav-wrapper">
                <nav>
                    <!-- Permet de mettre un menu déroulant dans nom et prénom -->
                    <span id="dropdown" class="dropdown-content">Prénom Nom</span>

                    <!-- Logo -->
                    <a href="index.php"><img class="responsive-img" src="images/musika1.png" style="padding-left: 10px; padding-right: 5px;"></a>
                    <!-- Menu principal -->
                    <ul class="right" id="navprinc">
                        <li><a href="DemandeAlbums.php" class="cmn-t-underline">Catalogue</a></li>
                        <li><a href="#" class="cmn-t-underline">Nouvelles Commandes<i class="material-icons left small">add</i></a></li>
                        <li><a href="panier.php" class="cmn-t-underline">Panier </a></li>
                        <li><a href="apropos.php" class="cmn-t-underline">A Propos</a></li>
                        <li><a class="dropdown-button" href="Connexion.php" data-activates="dropdown1"><i class="material-icons left">perm_identity</i>
                            <?php
                            if(isset($_SESSION["NOM_USER"]))
                            {
                                echo "Bonjour ".$_SESSION["NOM_USER"];
                            }
                            else
                            {
                                echo "Connexion";
                            }
                            ?>

                            <i class="material-icons right">arrow_drop_down</i></a></li>
                    </ul>
                    <!-- icone hamburger sidenav -->
                    <a href="#" data-activates="mobile-menu" class="button-collapse" style="right-align;">
                        <i class="material-icons">menu</i></a>

                    <!-- Menu mobile + tablette -->
                    <ul class="side-nav" id="mobile-menu" style="background-color: #23b000;">
                        <li><a href="DemandeAlbums.php" class="cmn-t-underline">Catalogue</a></li>
                        <li><a href="#" class="cmn-t-underline">Nouvelles Commandes<i class="material-icons left tinyl">add</i></a></li>
                        <li><a href="panier.php" class="cmn-t-underline">Panier</a></li>
                        <li><a href="apropos.php" class="cmn-t-underline">A Propos</a></li>
                        <li><a class="dropdown-button" href="Connexion.php" data-activates="dropdown1"><i class="material-icons left">perm_identity</i><i class="material-icons left">arrow_drop_down</i>
                            <?php
                            if(isset($_SESSION["NOM_USER"]))
                            {
                                echo "Bonjour ".$_SESSION["NOM_USER"];
                            }
                            else
                            {
                                echo "Connexion";
                            }
                            ?>
                        </a></li>
                    </ul>
                </nav>
            </div>

        </main>
    </header>

    <div class="section">
      <div class="row s12" style="padding-right: 10px">

          <h3 style="color: #e52404; text-align : center;"> Bienvenue sur Musika dans les Bach ! </h3>
          <div class="section">
              <div class="row s12" style="padding-right: 10px">
                  <div class="col s3 l3">
                      <div class="img">
                          <img class="responsive-img" src="images/tourne_disque.jpg" style="margin-right: 110px;">
                      </div>
                  </div>
                  <div class="col s9 l9">
                      <div class="row s12">
                          <div class="col s6 l6">
                              <div class="card col s12 l12 white-text" style="padding: 0; background-color: #23b000;" >
                                  <h6 class="center-align card-content" style="padding: 8px; border: 10px;"> Projet Web 2016-2017 </h6>
                                  <div class="white black-text card-content" style="padding: 15px;">
                                      <p style="margin-top:10px; padding: 0;"> Ce projet a été produit pour le DUT Informatique, Université de Bordeaux.</p>
                                      <p style="margin-top:10px; padding: 0;"> Il s'agit d'un site présentant des albums, des oeuvres et des compositeurs.
                                          Vous pourrez parcourir des centaines d'albums et en écouter des extraits, découvir de nouvelles oeuvres et de nouveaux artistes.</p>
                                      <p style="margin-top:10px; padding: 0;"> Vous pourrez également commander, via l'API Amazon, vos albums préférés et comparer les prix... </p>
                                      <!-- Bouton voir les prix des vins -->
                                      <div class="card-content">
                                          <a href="apropos.php" target="_blank"class="waves-effect waves-light color-red btn" style="margin-left:4px; background-color: #e52404;">EN SAVOIR PLUS</a>            </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col s6 l6">
                              <div class="card col s12 white-text" style="padding:0; background-color: #23b000;">
                                  <h6 class="center-align card-content" style="padding: 8px; border: 30px;"> Recherche d'Album </h6>
                                  <div class="white black-text card-content" style="padding: 15px;">
                                      <p style="margin-top:10px; padding: 0;"> Cette page vous pemettra de rechercher vos albums préférés dans notre catalogue. </p>
                                      <div class="card-content">
                                          <a href="DemandeAlbums.php" target="_blank"class="waves-effect waves-light color-red btn" style="margin-left:4px; background-color: #e52404;">EN SAVOIR PLUS</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>


  <!-- FOOTER -->
    <footer>
        <div class="banniere"></div>
        <!-- logo MercanetAtos -->
        <div class="row" style="padding: 60px;padding-top: 10px;">
            <div class="col s12 m4">
                <div class="icon-block">
                    <img class="responsive-img" width="240" height="120" src="images/iutlogo.jpg">
                </div>
            </div>
            <!-- Service client + icones -->
            <div class="col s12 m4" style="padding: 60px; padding-top: 10px;">
                <img class="responsive-img" width="160" height="60" src="images/universitebx.jpeg">

            </div>
            <!-- Conditions -->
            <div class="col s12 m4" style="padding: 60px; padding-top: 10px;">
                <div class="icon-block">
                    <h5 style="margin-bottom: 20px;">Conditions</h5>
                    <h6>Comment ça marche ? </h6>
                    <h6>Conditions Générales </h6>
                    <h6>Mentions Légales</h6>
                </div>
            </div>
        </div>
    </footer>


  <!--  Scripts-->
  <!-- Scripts import javas -->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudfare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
  <!-- script exécution mobile -->
      <script>
        jQuery(document).ready(function($) {
          $(".button-collapse").sideNav();
        });
      </script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudfare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>


  </body>
</html>
