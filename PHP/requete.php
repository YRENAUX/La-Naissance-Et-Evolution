<?php
include('./PHP/bdd.php');
?>

<?php
/************************************************/
/* Preparation requete pour extraction données **/
/************************************************/


$reponse = $bdd->query('SELECT * FROM "table"');
$donnees = $reponse->fetch();

