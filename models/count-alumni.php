<?php 

require 'fonctions/db.php';
$db = db();

$req = $db->query("SELECT COUNT(id) AS nbralumnis FROM tb_candidat");