<?php 

require 'fonctions/db.php';
$db = db();

$_GET['id'] = (int) $_GET['id'];

$req = $db->prepare("SELECT * FROM tb_contact WHERE id = ?");
$req->execute([ $_GET['id'] ]);