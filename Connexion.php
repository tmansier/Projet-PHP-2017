
<?php
session_start();

if (isset($_SESSION["NOM_USER"]))
{
    header("Location: panier.php");
}
else
{

}
?>

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



<h3 style="text-align:center; color: #e52404;"> Connexion </h3>


<div class="section">
    <div class="row s12" style="padding-right: 10px">
        <div class="col s3"></div>
        <div class="col s6">
                <form method="post" action="Traite_Connexion.php">
                    Nom : <input name="Login" type="text" /><br/>
                    Mot de passe : <input name="Password" type="text" /><br/>
                    <input name="Connect" type="submit" value="Connecter" />
                </form>
                <a href="Inscription.html"> <button>S'inscrire</button></a>

        </div>
        <div class="col s3"></div>

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
<script src="https://code.jquery.com/jquery-2.1.1.min.js">

</script>
<script src="https://cdnjs.cloudfare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>


</body>
</html>
