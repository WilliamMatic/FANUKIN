<?php

session_start();

if ($_POST['password'] == $_POST['confirmpassword']) {

	header("Access-Control-Allow-Origin: *");

	require '../../class/Candidat.php';
	require '../../class/CandidatHydrate.php';
	require '../../fonctions/db.php';

	$db = db();


	$create = new Candidat(array(
		'name' => $_POST['name'],
		'email' => strtolower($_POST['email']),
		'phone' => $_POST['phone'],
		'password' => $_POST['password'],
		'confirmpassword' => $_POST['confirmpassword'],
		'ville' => $_POST['ville'],
		'faculte' => $_POST['faculte'],
		'annee' => $_POST['annee'],
		'niveau' => $_POST['niveau'],
		'adresse' => $_POST['adresse'],
	));
	
	$manager = new CandidatHydrate($db);

	$manager->add($create);

	if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
		header("Location: ../../../../authenticate");
		exit();
	}

	if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
		header("Location: ../../../../authenticate");
		exit();
	}

}else{
	$_SESSION['error'] = "Le deux mot de passe ne sont pas identique";
	header("Location: ../../../../authenticate");
	exit();
}