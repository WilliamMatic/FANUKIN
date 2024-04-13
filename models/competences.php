<?php 

$db = db();

$request = $db->prepare("
	SELECT * FROM tb_competence WHERE candidat = ?
");
$request->execute([ $_GET['candidat'] ]);

