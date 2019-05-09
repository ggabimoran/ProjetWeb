<?php
require '../vendor/autoload.php';
include 'Vue.php';
include("Modele.php");

verif_authent();
enTete("Selectionnez votre lieu.");
vue_lieu();
retour_menu();
echo '<p></p>';
connexion_link();
pied();
?>