<?php

session_start();

require '../../class/Candidat.php';
require '../../class/CandidatHydrate.php';
require '../../fonctions/db.php';

$db = db();

$manager = new CandidatHydrate($db);

$manager->logout();

if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
	unset($_SESSION['success']);
	header("Location: ../../../");
	exit();
}