<?php 

$db = db();

$req = $db->query("SELECT COUNT(id) AS nbrprojets FROM tb_projet");