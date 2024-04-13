<?php 

session_start();

try {
	
	require '../../fonctions/db.php';
	$db = db();

	if (strlen($_POST['profil']) > 500) {
		header("Location: ../../../infosone");
		exit();
	}

	$_POST['profil'] = htmlspecialchars(trim($_POST['profil']));

	$req = $db->prepare("UPDATE tb_candidat SET profil = ? WHERE id = ? ");
	$req->execute([ $_POST['profil'], $_SESSION['candidatid'] ]);

	$_SESSION['profil'] = $_POST['profil'];

	header("Location: ../../../infosone");
	exit();

} catch (Exception $e) {
	header("Location: ../../../infosone");
	exit();
}