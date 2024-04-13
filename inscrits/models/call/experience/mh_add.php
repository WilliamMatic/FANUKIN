<?php

session_start();

header("Access-Control-Allow-Origin: *");

require '../../class/Candidat.php';
require '../../class/CandidatHydrate.php';
require '../../fonctions/db.php';

$db = db();


$contrant = new Candidat(array(
	'societe' => trim(htmlspecialchars($_POST['societe'])),
	'poste' => trim(htmlspecialchars($_POST['poste'])),
	'contrant' => trim(htmlspecialchars($_POST['contrant'])),
	'debut' => trim(htmlspecialchars($_POST['debut'])),
	'fin' => trim(htmlspecialchars($_POST['fin'])),
));

$manager = new CandidatHydrate($db);

$manager->addExperience($contrant);

if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
	header("Location: ../../../infosone");
	exit();
}

if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
	header("Location: ../../../infosone");
	exit();
}