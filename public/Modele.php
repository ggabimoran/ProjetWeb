<?php
session_start();
include("../src/User/UserRepository.php");
include("../src/User/MessageRepository.php");
include("config.php");

/* Fonction qui renvoie l'utilisateur sur la page de login si besoin */
function verif_authent() {
    global $AUTHENT;

    if($AUTHENT == 1)
        if(!$_SESSION['nomuser'])
            header('Location: Connexion.php');
}

function config($psd, $mdp) {
    global $nom_hote, $nom_user, $nom_base;
    $_SESSION['nomhote'] = $nom_hote;
    $_SESSION['nombase'] = $nom_base;
    $_SESSION['nomuser'] = $psd;
    $_SESSION['mdp'] = $mdp;
}


function verifie_Password($psd, $mdp){
	$dbName = getenv('DB_NAME');
	$dbUser = getenv('DB_USER');
	$dbPassword = getenv('DB_PASSWORD');
	$connection = new PDO("pgsql:host=postgres user=$dbUser dbname=$dbName password=$dbPassword");
	$userRepository = new \User\UserRepository($connection);

	return $mdp == $userRepository->getPassword($psd);
}

function account_creation($psd, $mdp, $city_id){
	$dbName = getenv('DB_NAME');
	$dbUser = getenv('DB_USER');
	$dbPassword = getenv('DB_PASSWORD');
	$connection = new PDO("pgsql:host=postgres user=$dbUser dbname=$dbName password=$dbPassword");
	$userRepository = new \User\UserRepository($connection);

	return $userRepository->insert($psd, $mdp, $city_id);
}

function search_info_perso($psd){
	$dbName = getenv('DB_NAME');
	$dbUser = getenv('DB_USER');
	$dbPassword = getenv('DB_PASSWORD');
	$connection = new PDO("pgsql:host=postgres user=$dbUser dbname=$dbName password=$dbPassword");
	$userRepository = new \User\UserRepository($connection);

	return $userRepository->getUser($psd);
}

function search_info_message($id_sender){
	$dbName = getenv('DB_NAME');
	$dbUser = getenv('DB_USER');
	$dbPassword = getenv('DB_PASSWORD');
	$connection = new PDO("pgsql:host=postgres user=$dbUser dbname=$dbName password=$dbPassword");
	$MessageRepository = new \User\MessageRepository($connection);
	return $MessageRepository->getMessage($id_sender);
}





?>