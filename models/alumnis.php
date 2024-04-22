<?php 

$db = db();

$req = $db->query("

	SELECT * FROM tb_candidat WHERE status = 1 AND avatar IS NOT NULL
	
");
