<?php
session_start();
include("config.php");

$_SESSION['connect'] = 0;
header('Location: index.php');

?>