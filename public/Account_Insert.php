<?php
include("Modele.php");
include("Vue.php");

$psd = $_POST['psd']; //pseudo 
$mdp = $_POST['mdp']; //mot de passe
$city_id = $_POST['city_id']; //pseudo 


if($result = account_creation($psd, $mdp, $city_id)){
  $GLOBALS['AUTHENT'] = 1;
  header('Location: Annonces.php');
}

echo $result;
enTete('Account Creation');

affiche_erreur("Le city_id doit être numeric.");
affiche_info('Veuillez-essayer de nouveau <a href="Creation.php">ici</a>.');

pied();
?>