<?php 

require 'fonctions/db.php';
$db = db();

$req = $db->prepare('SELECT * FROM tb_secteur WHERE status = 1 AND designation LIKE ? ORDER BY designation ASC');
$req->execute([ $_GET['value'].'%' ]);

$sectors = $req->fetchAll();
echo json_encode($sectors);