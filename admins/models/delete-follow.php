<?php 

try {
	
	require 'fonctions/db.php';
	$db = db();

	$_GET['id'] = (int) $_GET['id'];

	$req = $db->prepare("SELECT * FROM tb_abonne WHERE id = ?");
	$req->execute([ $_GET['id'] ]);

	if ($req->rowCount() > 0 ) {
		
		$req = $db->prepare("DELETE FROM tb_abonne WHERE id = ?");
		$req->execute([ $_GET['id'] ]);

		$_SESSION['success'] = "Email supprimé";
		header("Location: ../follow");
		exit();

	}else{
		$_SESSION['error'] = "Email introuvable";
		header("Location: ../follow");
		exit();
	}

} catch (Exception $e) {
	$_SESSION['error'] = "Opération échouée";
	header("Location: ../follow");
	exit();	
}