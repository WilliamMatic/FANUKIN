<?php 
session_start();

if ( empty($_GET['skill']) ) {
	$_GET['skill'] = '';
}

if ( empty($_GET['sector']) ) {
	header("Location:../");
	exit();
}

$_SESSION['skill'] = $_GET['skill'];
$_SESSION['sector'] = $_GET['sector'];

header("Location: ../filter-search.php?skill=".$_GET['skill']."&sector=".$_GET['sector']);
exit();