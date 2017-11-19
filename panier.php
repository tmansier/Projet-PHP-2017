<?php
	session_start();

	require_once 'functions-panier.php';

	echo '<?xml version="1.0" encoding="utf-8"?>';
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
	<h3 style="text-align:center; color: #e52404;"> Votre Panier </h3>

		<form method="post" action="panier.php">
			<table style="width: 400px">
				<tr>
					<td><h5>Libellé</h5></td>
					<td><h5>Prix Unitaire</h5></td>
					<td><h5>Quantité</h5></td>
				</tr>
				<?php
					if (creationPanier())
					{
						$nbArticles=count($_SESSION['panier']['libelleProduit']);
						if ($nbArticles <= 0)
							echo "<tr><td>Votre panier est vide </td></tr>";
						else
						{
							for ($i=0 ;$i < $nbArticles ; $i++)
							{
								echo "<tr>";
								echo "<td>".htmlspecialchars($_SESSION['panier']['libelleProduit'][$i])."</ td>";
								echo "<td>".htmlspecialchars($_SESSION['panier']['prixProduit'][$i])."</td>";
								echo "<td><a href=\"".htmlspecialchars("panier.php?action=suppression&l=".rawurlencode($_SESSION['panier']['libelleProduit'][$i]))."\">XX</a></td>";
								echo "</tr>";
							}

							echo "<tr><td colspan=\"2\"> </td>";
							echo "<td colspan=\"2\">";
							echo "Total : ".MontantGlobal();
							echo "</td></tr>";

							echo "<tr><td colspan=\"4\">";
							echo "<input type=\"submit\" value=\"Rafraichir\"/>";
							echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";

							echo "</td></tr>";
						}
					}
				?>
			</table>
		</form>
	</body>
</html>
