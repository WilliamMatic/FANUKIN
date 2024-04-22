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
//     $db = new PDO('mysql:host=localhost;dbname=u338836865_fanukin;charset=utf8', 'u338836865_fanukin', 'Fanukin@@2024', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
//     return $db;
//   } catch (Exception $e) {
//     die("Erreur lors de la connexion au serveur");
//   }
// }