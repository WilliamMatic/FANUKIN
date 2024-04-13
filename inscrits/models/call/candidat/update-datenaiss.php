<?php 

session_start();

try {
	
	require '../../fonctions/db.php';
	$db = db();

	$_POST['date'] = htmlspecialchars(trim($_POST['date']));

	$req = $db->prepare("UPDATE tb_candidat SET datenaiss = ? WHERE id = ? ");
	$req->execute([ $_POST['date'], $_SESSION['candidatid'] ]);

	$_SESSION['datenaiss'] = $_POST['date'];

	header("Location: ../../../infosone");
	exit();

} catch (Exception $e) {
	header("Location: ../../../infosone");
	exit();
}