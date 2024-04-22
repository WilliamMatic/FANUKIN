<?php 

session_start();

try {
	
	require 'fonctions/db.php';
	$db = db();

	$_POST['email'] = htmlspecialchars($_POST['email']);

	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	    
		$req = $db->prepare("INSERT INTO tb_abonne(email, dateabonnement) VALUES (?,?) ");
		$date = date('Y-m-d');
		$req->execute([ $_POST['email'], $date ]);

		$_SESSION['success'] = "Abonnement éffectuée";
		header("Location: ../hom#feedfollow");
		exit();

	} else {
	    $_SESSION['error'] = "L'adresse email est invalide";
	    header("Location: ../home#feedfollow");
	    exit();
	}
	

} catch (Exception $e) {
	$_SESSION['error'] = "Opération échouée";
	header("Location: ../home#feedfollow");
	exit();
}