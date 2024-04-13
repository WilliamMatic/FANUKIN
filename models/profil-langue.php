<?php 

$db = db();

$req = $db->prepare("
	SELECT * FROM tb_langue WHERE candidat = ?
");
$req->execute([ $_GET['id'] ]);
