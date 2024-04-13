<?php 

$db = db();

$req = $db->prepare("
	SELECT * FROM tb_porfolio WHERE candidat = ?
");
$req->execute([ $_GET['id'] ]);
