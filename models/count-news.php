<?php 

$db = db();

$req = $db->query("SELECT COUNT(id) AS nbrnews FROM tb_astuce");