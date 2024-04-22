<?php 

$db = db();

$_GET['id'] = (int) $_GET['id'];

$req = $db->prepare("SELECT * FROM tb_contact WHERE id = ?");
$req->execute([ $_GET['id'] ]);

if ($req->rowCount() > 0 ) {
	
	$req = $db->prepare("UPDATE tb_contact SET status = 1 WHERE id = ?");
	$req->execute([ $_GET['id'] ]);

}else{
	$_SESSION['error'] = "Message introuvable";
	header("Location: ../messages");
	exit();
}