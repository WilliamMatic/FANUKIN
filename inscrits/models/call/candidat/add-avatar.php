<?php 

session_start();

try {

	require '../../fonctions/db.php';
	$db = db();
	
	if ( isset($_FILES['avatar']['name']) && !empty($_FILES['avatar']['name']) ) {

		if ($_FILES['avatar']['size'] <= 5000000) {

			$infosfichier = pathinfo($_FILES['avatar']['name']);
			$extension_upload = $infosfichier['extension'];
			$extensions_autorisees = array('PNG', 'png', 'JPG', 'jpg', 'JPEG', 'jpeg');
			
			if (in_array($extension_upload, $extensions_autorisees)) {
				
				$id_avatar = $_SESSION['candidatid'].'_'.uniqid();
				$avatar = $id_avatar.'.'.$extension_upload;

				try {

					$req = $db->prepare("UPDATE tb_candidat SET avatar = ? WHERE id = ?");
					$req->execute([ $avatar, $_SESSION['candidatid'] ]);

					move_uploaded_file($_FILES['avatar']['tmp_name'], '../../../assets/avatarcandidat/' . $avatar);

					$_SESSION['avatar'] = $avatar;

					header("Location: ../../../infosone");
					exit();

				} catch (Exception $e) {
					header("Location: ../../../infosone");
					exit();
				}

			}else{
				header("Location: ../../../infosone");
				exit();
			}

		}else{
			header("Location: ../../../infosone");
			exit();
		}

	}else{
		header("Location: ../../../infosone");
		exit();
	}

} catch (Exception $e) {
	header("Location: ../../../infosone");
	exit();
}