<?php 

$db = db();

$req = $db->prepare("
	SELECT * FROM tb_experience WHERE candidat = ?
");
$req->execute([ $_GET['id'] ]);
