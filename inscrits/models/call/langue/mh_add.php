<?php

session_start();

header("Access-Control-Allow-Origin: *");

require '../../class/Candidat.php';
require '../../class/CandidatHydrate.php';
require '../../fonctions/db.php';

$db = db();


$contrant = new Candidat(array(
	'langue' => trim(htmlspecialchars($_POST['langue'])),
));

$manager = new CandidatHydrate($db);

$manager->addLangue($contrant);

if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
	header("Location: ../../../infosone");
	exit();
}

if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
	header("Location: ../../../infosone");
	exit();
}