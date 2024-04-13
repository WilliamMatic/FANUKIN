<?php 

$db = db();

$req = $db->query("

	SELECT COUNT(*) AS nbrastuces FROM tb_astuce WHERE status = 1
	
");
