<?php

include("Vue.php");
include("Modele.php");

$psd = $_POST['psd']; //pseudo 
$mdp = $_POST['mdp']; //mot de passe

if(verifie_Password($psd, $mdp)){
	$GLOBALS['AUTHENT'] = 1;
	header('Location: index.php');
}

enTete('Vérification du mot de passe');
affiche_erreur("Le mot de passe entré est eronné.");
affiche_info('Veuillez-essayer de nouveau <a href="Connexion.php">ici</a>.');
pied();
?>