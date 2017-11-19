<?php
$pdo = new PDO("sqlsrv:Server=INFO-SIMPLET;Database=Classique_Web", "ETD", "ETD");
$stmt = $pdo->prepare("SELECT Extrait FROM Enregistrement WHERE Code_Morceau=?");
$stmt->execute(array($_GET['Morceau']));
$stmt->bindColumn(1, $lob, PDO::PARAM_LOB);
$stmt->fetch(PDO::FETCH_BOUND);
$image = pack("H*", $lob);
header("Content-Type: audio/ogg");
echo $image;
?>