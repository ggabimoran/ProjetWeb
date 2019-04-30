<?php

include("Vue.php");

$psd = $_POST['psd']; //pseudo 
$mdp = $_POST['mdp']; //mot de passe

enTete("Vérification du mot de passe");

/*
  Si le mot de passe entré est vide ou faux (cf. fonction verif_mdp), afficher une erreur et un lien vers tpConnexion.php
 
  S'il est bon, rediriger vers la page index.php
*/

function verif_mdp($psd,$mdp) {

	if ($db = db_connect()) {
		$_SESSION['mdp']=$mdp;
		db_close($db);
		return true;
	} else
		return false;

}


pied();

?>