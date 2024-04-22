<?php

session_start();

header("Access-Control-Allow-Origin: *");
require 'fonctions/db.php';

$db = db();

$targetDir = "../assets/gallerie/";

$fileNames = array_filter($_FILES['files']['name']);

if (!empty($fileNames)) {

  foreach ($_FILES['files']['name'] as $key => $val) {

    $fileName = basename($_FILES['files']['name'][$key]);
    $targetFilePath = $targetDir . $fileName;

    $infosfichier = pathinfo($_FILES['files']['name'][$key]);
    $extension_upload = $infosfichier['extension'];
    $extensions_autorisees = array('png', 'PNG', 'JPG', 'jpg', 'JPEG', 'jpeg', 'mp4', 'mp3');

    if (in_array($extension_upload, $extensions_autorisees)) {

      $id_photo = uniqid();
      $photo = $id_photo . '.' . $extension_upload;

      $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
      if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], '../assets/gallerie/' . $photo)) {

        $request = $db->prepare("
            INSERT INTO tb_galerie (img) VALUES (?)
          ");
        $date_publish = date('Y-m-d');
        $request->execute([ $photo ]);

      }

    }

  }

  header("Location: ../pictures");
  exit();

}else{
	header("Location: ../pictures");
	exit();
}