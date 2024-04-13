<?php

session_start();

header("Access-Control-Allow-Origin: *");

require '../../class/candidat.php';
require '../../class/CandidatHydrate.php';
require '../../fonctions/db.php';

$db = db();


$candidat = new candidat(array(
	'email' => $_POST['email'],
));

$manager = new CandidatHydrate($db);

$manager->SendCode($candidat);

if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
	header("Location: ../../../../reset");
	exit();
}

if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
	header("Location: ../../../../reset");
	exit();
}