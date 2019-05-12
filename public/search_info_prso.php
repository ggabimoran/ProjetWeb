<?php
include("Modele.php");
include("Vue.php");
include("../src/User/User.php")
include("../src/User/UserRepository.php")
include("../src/User/Message.php")
include("../src/User/MessageRepository.php")

$psd = $_POST['psd']; //pseudo 

$user = search_info_perso($psd);
$message = search_info_message($user->getId());
enTete('Infomation of user id: {$psd}');
vue_info_perso($use, $message)


retour_menu();
pied();
?>