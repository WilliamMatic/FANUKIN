<?php

session_start();

header("Access-Control-Allow-Origin: *");
require '../../fonctions/db.php';

$db = db();

$req = $db->prepare('SELECT * FROM tb_porfolio WHERE candidat = ? AND id = ?');
$req->execute([ $_SESSION['candidatid'], $_GET['id'] ]);

if ($res = $req->fetch(PDO::FETCH_OBJ)) {
	
	$req = $db->prepare('DELETE FROM tb_porfolio WHERE candidat = ? AND id = ?');
	$req->execute([ $_SESSION['candidatid'], $_GET['id'] ]);

	unlink('../../../assets/portfolio/'.$res->porfolio);

	header("Location: ../../../infosone");
	exit();

}else{
	header("Location: ../../../infosone");
	exit();
}