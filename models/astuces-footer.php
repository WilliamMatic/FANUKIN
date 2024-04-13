<?php 

$db = db();

$req = $db->query("

	SELECT titre FROM tb_astuce WHERE status = 1 LIMIT 5
	
");
