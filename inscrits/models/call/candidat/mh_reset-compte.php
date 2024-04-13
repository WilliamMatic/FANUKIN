<?php

session_start();

if ($_POST['password'] != $_POST['confirmpassword']) {
	$_SESSION['error'] = "Les deux mots de passe ne sont pas identiques";
	header("Location: ../../../../reset");
	exit();
}

if ($_POST['code'] != $_SESSION['codegenerate']) {
	$_SESSION['error'] = "Code non reconnu";
	header("Location: ../../../../reset");
	exit();
}

header("Access-Control-Allow-Origin: *");

require '../../class/Candidat.php';
require '../../class/CandidatHydrate.php';
require '../../fonctions/db.php';

$db = db();


$candidat = new candidat(array(
	'email' => $_SESSION['emailreset'],
	'password' => $_POST['password'],
));

$manager = new CandidatHydrate($db);

$manager->ResetPassword($candidat);

if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {

	unset($_SESSION['sendcodesuccess']);
	unset($_SESSION['emailreset']);
	unset($_SESSION['codegenerate']);
	
	header("Location: ../../../../reset");
	exit();
}

if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
	header("Location: ../../../../reset");
	exit();
}