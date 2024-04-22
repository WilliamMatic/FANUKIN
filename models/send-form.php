<?php 
session_start();
try {
	
	require 'fonctions/db.php';
	$db = db();

	if ( isset($_FILES['avatar']['name']) && !empty($_FILES['avatar']['name']) ) {

		if ($_FILES['avatar']['size'] <= 5000000) {

			$infosfichier = pathinfo($_FILES['avatar']['name']);
			$extension_upload = $infosfichier['extension'];
			$extensions_autorisees = array('PDF', 'pdf', 'docx', 'doc');
			
			if (in_array($extension_upload, $extensions_autorisees)) {
				
				$id_avatar = $_POST['email'].'_'.uniqid();
				$avatar = $id_avatar.'.'.$extension_upload;

				try {

					$req = $db->prepare("INSERT INTO tb_file(file_name) VALUES (?) ");
					$req->execute([ 'assets/file/'.$avatar ]);

					move_uploaded_file($_FILES['avatar']['tmp_name'], '../admins/assets/file/' . $avatar);

					$_SESSION['success'] = "Fichier envoyé";
					header("Location: ../authenticate#feed");

				} catch (Exception $e) {
					$_SESSION['error'] = "Envoie échouée";
					header("Location: ../authenticate#feed");
				}

			}else{
				$_SESSION['error'] = "Le fichier doit être au format PDF ou word";
				header("Location: ../authenticate#feed");
			}

		}else{
			$_SESSION['error'] = "La taille du fichier est trop volumineuse";
			header("Location: ../authenticate#feed");
		}

	}else{
		$_SESSION['error'] = "Le fichier est obligatoire";

		header("Location: ../authenticate#feed");
	}

} catch (Exception $e) {
	$_SESSION['error'] = "Envoie échouée";
	header("Location: ../authenticate#feed");
}