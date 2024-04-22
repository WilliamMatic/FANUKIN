<?php 

session_start();

try {
	
	require 'fonctions/db.php';
	$db = db();

	$_POST['form_name'] = htmlspecialchars($_POST['form_name']);
	$_POST['form_phone'] = htmlspecialchars($_POST['form_phone']);
	$_POST['form_subject'] = htmlspecialchars($_POST['form_subject']);
	$_POST['form_message'] = htmlspecialchars($_POST['form_message']);


	$req = $db->prepare("INSERT INTO tb_contact(sujet, nom, phone, message) VALUES (?,?,?,?) ");
	$req->execute([ $_POST['form_subject'], $_POST['form_name'], $_POST['form_phone'], $_POST['form_message'] ]);

	$_SESSION['success'] = "Message envoyé";
	header("Location: ../contact#feed");
	exit();

} catch (Exception $e) {
	$_SESSION['error'] = "Opération échouée";
	header("Location: ../contact#feed");
	exit();
}