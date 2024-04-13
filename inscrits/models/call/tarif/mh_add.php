<?php

session_start();

header("Access-Control-Allow-Origin: *");

require '../../class/Candidat.php';
require '../../class/CandidatHydrate.php';
require '../../fonctions/db.php';

$db = db();


$contrant = new Candidat(array(
	'domaine' => trim(htmlspecialchars($_POST['domaine'])),
	'cout' => trim(htmlspecialchars($_POST['cout'])),
));

$manager = new CandidatHydrate($db);

$manager->addTarif($contrant);

if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
	header("Location: ../../../infosone");
	exit();
}

if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
	header("Location: ../../../infosone");
	exit();
}