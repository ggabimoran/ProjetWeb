<?php
include("Modele.php");
include("Vue.php");
include("../src/User/User.php");


$psd = $_POST['psd']; //pseudo 

$users = search_info_perso($psd);
echo $user;
foreach ($users as $user)
$message = search_info_message($user->getId());
echo $user;
enTete('Infomation of user id: \'".$psd."\'');
vue_info_perso($user, $message);


retour_menu();
pied();
?>