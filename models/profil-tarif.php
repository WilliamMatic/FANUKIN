<?php 

$db = db();

$req = $db->prepare("
	SELECT * FROM tb_tarification WHERE candidat = ?
");
$req->execute([ $_GET['id'] ]);
