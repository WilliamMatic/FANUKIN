<?php 

require 'fonctions/db.php';
$db = db();

$req = $db->prepare("
	SELECT * FROM tb_candidat WHERE status = 1 AND id = ?
");
$req->execute([ $_GET['id'] ]);
