<?php 

try {
	
	require 'fonctions/db.php';
	$db = db();

	$_GET['id'] = (int) $_GET['id'];

	$req = $db->prepare("SELECT * FROM tb_contact WHERE id = ?");
	$req->execute([ $_GET['id'] ]);

	if ($req->rowCount() > 0 ) {
		
		$req = $db->prepare("DELETE FROM tb_contact WHERE id = ?");
		$req->execute([ $_GET['id'] ]);

		$_SESSION['success'] = "Message supprimé";
		header("Location: ../messages");
		exit();

	}else{
		$_SESSION['error'] = "Message introuvable";
		header("Location: ../messages");
		exit();
	}

} catch (Exception $e) {
	$_SESSION['error'] = "Opération échouée";
	header("Location: ../messages");
	exit();	
}