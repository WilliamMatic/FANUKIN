<?php 

session_start();

try {
	
	require '../../fonctions/db.php';
	$db = db();

	$_POST['secteur'] = htmlspecialchars(trim($_POST['secteur']));

	$req = $db->prepare("UPDATE tb_candidat SET secteur = ? WHERE id = ? ");
	$req->execute([ $_POST['secteur'], $_SESSION['candidatid'] ]);

	$_SESSION['secteur'] = $_POST['secteur'];

	header("Location: ../../../infosone");
	exit();

} catch (Exception $e) {
	header("Location: ../../../infosone");
	exit();
}