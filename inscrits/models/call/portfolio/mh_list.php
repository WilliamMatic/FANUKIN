<?php 

$db = db();

$req = $db->prepare('SELECT * FROM tb_porfolio WHERE candidat = ? ORDER BY id DESC');
$req->execute([ $_SESSION['candidatid'] ]);