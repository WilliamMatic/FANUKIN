<?php 

require 'fonctions/db.php';
$db = db();

$req = $db->query("

	SELECT tb_secteur.*, COUNT(tb_candidat.secteur) AS secteurs
	FROM tb_secteur LEFT JOIN tb_candidat ON tb_secteur.designation = tb_candidat.secteur 
	WHERE tb_secteur.status = 1
	GROUP BY tb_secteur.id
	
");
