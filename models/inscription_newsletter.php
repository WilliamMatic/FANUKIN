<?php

require 'fonctions/db.php';
$conn = db();


// Récupère l'adresse e-mail du formulaire
$email = $_POST['email'];

// Prépare et exécute la requête SQL pour insérer l'adresse e-mail dans la table tb_newsletter
$stmt = $conn->prepare("INSERT IGNORE INTO tb_newsletter (email) VALUES (?)");
$stmt->execute([ $email ]);

if ($stmt->execute() === TRUE) {
  // Succès de l'inscription à la newsletter
  echo "Inscription à la newsletter réussie !";
} else {
  // Échec de l'inscription à la newsletter
  echo "Erreur lors de l'inscription à la newsletter : " . $conn->error;
}

// Ferme la connexion à la base de données
$conn->close();
?>
