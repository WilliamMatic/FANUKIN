<?php 

function db()
{
  try {
    $db = new PDO('mysql:host=localhost;dbname=fanukin;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    return $db;
  } catch (Exception $e) {
    die("Erreur lors de la connexion au serveur");
  }
}

// function db()
// {
//   try {
//     $db = new PDO('mysql:host=localhost;dbname=u620751964_fanukin;charset=utf8', 'u620751964_fanukin', 'Fanukin@@Giresse2024', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
//     return $db;
//   } catch (Exception $e) {
//     die("Erreur lors de la connexion au serveur");
//   }
// }