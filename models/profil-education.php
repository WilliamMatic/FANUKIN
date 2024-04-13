<?php 

$db = db();

$req = $db->prepare("
	SELECT * FROM tb_education WHERE candidat = ?
");
$req->execute([ $_GET['id'] ]);
