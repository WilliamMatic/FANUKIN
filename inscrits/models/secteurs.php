<?php 

$db = db();

$req = $db->query('SELECT * FROM tb_secteur WHERE status = 1 ORDER BY designation ASC');