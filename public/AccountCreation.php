<?php
include("Modele.php");

$psd = $_POST['psd']; //pseudo 
$mdp = $_POST['mdp']; //mot de passe
$city_id = $_POST['city_id']; //pseudo 


if(account_creation($psd, $mdp, $city_id)){
  $GLOBALS['AUTHENT'] = 1;
  header('Location: index.php');
}

enTete('Account Creation');

affiche_erreur("Le city_id doit être numeric.");
affiche_info('Veuillez-essayer de nouveau <a href="Connexion.php">ici</a>.');

pied();
?>