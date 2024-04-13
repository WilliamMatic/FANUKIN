<?php 

session_start();

try {
	
	require '../../fonctions/db.php';
	$db = db();

	$_POST['updateperso'] = htmlspecialchars(trim($_POST['updateperso']));

	$req = $db->prepare("UPDATE tb_candidat SET ".$_POST['culum']." = ? WHERE id = ? ");
	$req->execute([ $_POST['updateperso'], $_SESSION['candidatid'] ]);

	if ($_POST['culum'] == "name") {
		$_SESSION['name'] = $_POST['updateperso'];
	}

	if ($_POST['culum'] == "phone") {
		$_SESSION['phone'] = $_POST['updateperso'];
	}

	if ($_POST['culum'] == "email") {
		$_SESSION['email'] = $_POST['updateperso'];
	}

	if ($_POST['culum'] == "salaire") {
		$_SESSION['salaire'] = $_POST['updateperso'];
	}

	header("Location: ../../../infosone");
	exit();

} catch (Exception $e) {
	header("Location: ../../../infosone");
	exit();
}