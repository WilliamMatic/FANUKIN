<?php

session_start();

header("Access-Control-Allow-Origin: *");

require '../../class/Candidat.php';
require '../../class/CandidatHydrate.php';
require '../../fonctions/db.php';

$db = db();


$candidat = new Candidat(array(
	'email' => $_POST['form_user_name'],
	'password' => $_POST['user_password'],
));

$manager = new CandidatHydrate($db);

$manager->login($candidat);

if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
	header("Location: ../../../dashboard");
	exit();
}

if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
	header("Location: ../../../../");
	exit();
}