<?php

session_start();

header("Access-Control-Allow-Origin: *");

require '../../class/Candidat.php';
require '../../class/CandidatHydrate.php';
require '../../fonctions/db.php';

$db = db();


$experience = new Candidat(array(
	'id' => $_GET['id'],
));

$manager = new CandidatHydrate($db);

$manager->deleteExperiences($experience);

if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
	header("Location: ../../../infosone");
	exit();
}

if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
	header("Location: ../../../infosone");
	exit();
}