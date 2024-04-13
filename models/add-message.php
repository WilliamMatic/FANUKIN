<?php 

try {
	
	require 'fonctions/db.php';
	$db = db();

	$_POST['form_name'] = htmlspecialchars($_POST['form_name']);
	$_POST['form_phone'] = htmlspecialchars($_POST['form_phone']);
	$_POST['form_subject'] = htmlspecialchars($_POST['form_subject']);
	$_POST['form_message'] = htmlspecialchars($_POST['form_message']);


	$req = $db->prepare("INSERT INTO tb_message(sujet, nom, telephone, message) VALUES (?,?,?,?) ");
	$req->execute([ $_POST['form_subject'], $_POST['form_name'], $_POST['form_phone'], $_POST['form_message'] ]);

	echo "Opération reussie";

} catch (Exception $e) {
	echo $e;
}