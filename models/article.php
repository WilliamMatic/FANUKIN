<?php 

require 'fonctions/db.php';
$db = db();

$_GET['id'] = (int) $_GET['id'];

$req = $db->prepare("

	SELECT tb_astuce.*, tb_secteur.designation AS secteur, tb_admin.nom AS admins, DATE_FORMAT(tb_astuce.datepublish, '%d-%m-%Y') AS datepub
	FROM tb_astuce INNER JOIN tb_secteur ON tb_astuce.secteur = tb_secteur.id
	INNER JOIN tb_admin ON tb_admin.id = tb_astuce.admin
	WHERE tb_astuce.status = 1 AND tb_astuce.id = ?
	
");

$req->execute([ $_GET['id'] ]);