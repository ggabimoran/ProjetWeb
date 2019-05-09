<?php

include("Vue.php");
include("../src/User/User.php");
include("../src/User/UserRepository.php");

$psd = $_POST['psd']; //pseudo 
$mdp = $_POST['mdp']; //mot de passe
$dbName = getenv('DB_NAME');
  $dbUser = getenv('DB_USER');
  $dbPassword = getenv('DB_PASSWORD');
  $connection = new PDO("pgsql:host=postgres user=$dbUser dbname=$dbName password=$dbPassword");
  $userRepository = new \User\UserRepository($connection);

  $password = $userRepository->getPassword($psd);  
  if($password == $mdp) {
  	header('Location: index.php');
  }
enTete('Vérification du mot de passe');
/*
  Si le mot de passe entré est vide ou faux (cf. fonction verif_mdp), afficher une erreur et un lien vers tpConnexion.php
 
  S'il est bon, rediriger vers la page index.php
*/
  //$user = new \User\User($psd);

 
  
  	affiche_erreur("Le mot de passe entré est eronné.");
  	affiche_info('Veuillez-essayer de nouveau <a href="Connexion.php">ici</a>.');
 



  pied();

  ?>