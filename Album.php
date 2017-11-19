
<?php
session_start();

require_once 'functions-panier.php';

echo '<?xml version="1.0" encoding="utf-8"?>';
if (isset($_SESSION["NOM_USER"]))
{

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
    <link href="css/styleforBD.css" type="text/css" rel="stylesheet" media="screen,projection"/>
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

<?php   // Connexion odbc
$code = $_GET['Album'];

$driver = 'sqlsrv';
$host = 'INFO-SIMPLET';
$nomDb = 'Classique_Web';
$user = 'ETD';
$password = 'ETD';
// Chaîne de connexion
$pdodsn = "$driver:Server=$host;Database=$nomDb";
// Connexion PDO
$pdo = new PDO($pdodsn, $user, $password);
$requete = "select Album.Titre_Album , Album.Code_Album
from Album
where Album.Code_Album = '".$code."'";

foreach ($pdo->query($requete) as $row)
{
    echo "<h3>".$row['Titre_Album']."</h3>";
    echo '<div id="pagealbum">'.'<img src="image.php?Code='.$row['Code_Album'].'"/>'."<div>";

}
$pdo = null;
?>

<?php   // Connexion odbc

$driver = 'sqlsrv';
$host = 'INFO-SIMPLET';
$nomDb = 'Classique_Web';
$user = 'ETD';
$password = 'ETD';
// Chaîne de connexion
$pdodsn = "$driver:Server=$host;Database=$nomDb";
// Connexion PDO
$pdo = new PDO($pdodsn, $user, $password);
$requete = "select sum(Prix) as PrixTotal
from Album
inner join Disque on Album.Code_Album = Disque.Code_Album
inner join Composition_Disque on Disque.Code_Disque = Composition_Disque.Code_Disque
inner join Enregistrement on Composition_Disque.Code_Morceau = Enregistrement.Code_Morceau
where Album.Code_Album = '".$code."'";

foreach ($pdo->query($requete) as $row) {
    echo "<div><h5> Prix de Base : ".$row['PrixTotal']." €</h5></div>";
}

$pdo = null;
?>

<?php   // Connexion odbc
$album = $_GET['Album'];
echo "<h3>Extraits</h3>";
$driver = 'sqlsrv';
$host = 'INFO-SIMPLET';
$nomDb = 'Classique_Web';
$user = 'ETD';
$password = 'ETD';
// Chaîne de connexion
$pdodsn = "$driver:Server=$host;Database=$nomDb";
// Connexion PDO
$pdo = new PDO($pdodsn, $user, $password);
$requete = "select distinct Enregistrement.Code_Morceau ,Enregistrement.Nom_de_Fichier , Enregistrement.Titre
from Album
inner join Disque on Album.Code_Album = Disque.Code_Album
inner join Composition_Disque on Disque.Code_Disque = Composition_Disque.Code_Disque
inner join Enregistrement on Composition_Disque.Code_Morceau = Enregistrement.Code_Morceau
where Album.Code_Album = '".$code."'";

foreach ($pdo->query($requete) as $row)
{
    //echo "<d      iv>".'<img src="image.php?Code='.$row['Code_Album'].'"/>'."<div>";
    echo "<div><p>".$row['Titre']."</p></div>";
    echo '<div><audio preload="auto" src="musique2.php?Morceau='.$row['Code_Morceau'].'" controls></audio></div>';

}

$pdo = null;
?>

<input
<!-- FOOTER -->
<footer>
    <div class="banniere"></div><!-- logo MercanetAtos -->
    <div class="row" style="padding: 60px;padding-top: 10px;">
        <div class="col s12 m4">
            <div ="icon-block">
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
