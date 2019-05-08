<?php

include("Vue.php");
include("../src/User/User.php");

$psd = $_POST['psd']; //pseudo 
$mdp = $_POST['mdp']; //mot de passe

enTete("Vérification du mot de passe");

/*
  Si le mot de passe entré est vide ou faux (cf. fonction verif_mdp), afficher une erreur et un lien vers tpConnexion.php
 
  S'il est bon, rediriger vers la page index.php
*/




pied();

?>