
<?php

$driver = 'sqlsrv';
$host = 'INFO-SIMPLET';
$nomDb = 'Classique_Web';
$user = 'ETD';
$password = 'ETD';
// Chaîne de connexion
$pdodsn = "$driver:Server=$host;Database=$nomDb";
// Connexion PDO
$pdo = new PDO($pdodsn, $user, $password);
$query = "Select * from Abonné where Login ='".$Login."' and Password ='".$Password."'";

$result = $pdo->query($query)->fetchAll();

if ($result != null ) {
    session_start();
    $pdo = null;
    $_SESSION["NOM_USER"]= $result[0]['Nom'];

    header("Location: panier.php");

}
else
{
    header("Location: Connexion.php");
}


?>


