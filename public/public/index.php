<?php
require '../vendor/autoload.php';
include 'Vue.php';

//postgres
$dbName = getenv('DB_NAME');
$dbUser = getenv('DB_USER');
$dbPassword = getenv('DB_PASSWORD');
$connection = new PDO("pgsql:host=postgres user=$dbUser dbname=$dbName password=$dbPassword");


enTete("Selectionnez votre lieu.");
vue_lieu();
retour_menu();
pied();
?>