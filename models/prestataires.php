<?php 

require 'fonctions/db.php';
$db = db();

$req = $db->query("

	SELECT * FROM tb_candidat WHERE STATUS = 1 AND avatar IS NOT NULL ORDER BY  RAND()
	
");
