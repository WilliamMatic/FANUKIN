<?php 

session_start();

require 'fonctions/db.php';
$db = db();

$_GET['id'] = (int) $_GET['id'];

$request = $db->prepare('SELECT * FROM tb_galerie WHERE id = ?');
$request->execute([ $_GET['id'] ]);

if ($res = $request->fetch(PDO::FETCH_OBJ)) {
	
	$request = $db->prepare('DELETE FROM tb_galerie WHERE id = ?');
	$request->execute([ $_GET['id'] ]);

	unlink('../assets/gallerie/'.$res->img);
			
	$_SESSION['success'] = "Image supprimée";
	header("Location: ../pictures");
	exit();

}else{
	$_SESSION['error'] = "Cette image n'existe pas";
	header("Location: ../pictures");
}