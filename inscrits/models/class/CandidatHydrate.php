<?php 

declare(strict_types=1);

/**
 * Includes all contract
 */
class CandidatHydrate
{
	private $db; // Instance de PDO
	public function __construct($db)
	{
		$this->setDb($db);
	}

	public function add(Candidat $candidat)
	{
		$q = $this->db->prepare('
				SELECT * FROM tb_candidat WHERE email = ?
			');
		$q->execute([ $candidat->email() ]);

		if ($q->rowCount() > 0) {
			$_SESSION['error'] = "Adresse email déjà prise";
		}else{
			$q = $this->db->prepare('
					SELECT * FROM tb_candidat WHERE phone = ?
				');
			$q->execute([ $candidat->phone() ]);

			if ($q->rowCount() > 0) {
				$_SESSION['error'] = "Numéro de telephone déjà utilisé";
			}else{

				$q = $this->db->prepare("INSERT INTO tb_candidat(secteur_id, name, email, phone, password, ville, faculte, annee, niveau, adresse) VALUES (?,?,?,?,?,?,?,?,?,?) ");
				$q->execute([ 1, $candidat->name(), $candidat->email(), $candidat->phone(), hash('sha512', $candidat->password()), $candidat->ville(), $candidat->faculte(), $candidat->annee(), $candidat->niveau(), $candidat->adresse() ]);

				// Informations sur le destinataire
				$to = $candidat->email();
				$subject = "Bienvenue sur notre site";

				// Message de l'e-mail
				$message = "
				<html>
				<head>
				  <title>Bienvenue sur notre site</title>
				</head>
				<body>
				  <p>Bonjour,</p>
				  <p>Nous sommes ravis de vous accueillir sur notre site. Votre compte a été créé avec succès.</p>
				  <p>Merci de votre inscription !</p>
				</body>
				</html>
				";

				// En-têtes de l'e-mail
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				$headers .= "From: MonSite <noreply@monsite.com>" . "\r\n";

				// Envoi de l'e-mail
				if (mail($to, $subject, $message, $headers)) {
				    $_SESSION['success'] = "Compte créer avec succès";
				} else {
				    $_SESSION['success'] = "Compte créer avec succès";
				}

			}
		}
	}

	public function addExperience(Candidat $candidat)
	{
		try {
			
			$q = $this->db->prepare("INSERT INTO tb_experience(candidat, societe, poste, contrant, debut, fin) VALUES (?,?,?,?,?,?) ");
			$q->execute([ $_SESSION['candidatid'], $candidat->societe(), $candidat->poste(), $candidat->contrant(), $candidat->debut(), $candidat->fin() ]);

			$_SESSION['success'] = "Expérience ajoutée";

		} catch (Exception $e) {
			$_SESSION['error'] = $e;
		}
	}

	public function experiences()
	{
		// Leur type est de 0
		$q = $this->db->prepare('
				SELECT * FROM tb_experience WHERE candidat =?
				ORDER BY id DESC
			');
		$q->execute([ $_SESSION['candidatid'] ]);
		return $q;
	}

	public function deleteExperiences(Candidat $candidat)
	{
		// Leur type est de 0
		$q = $this->db->prepare('
				DELETE FROM tb_experience WHERE candidat =? AND id = ?
			');
		$q->execute([ $_SESSION['candidatid'], $candidat->id() ]);
		return $q;
	}

	public function addEducation(Candidat $candidat)
	{
		try {
			
			$q = $this->db->prepare("INSERT INTO tb_education(candidat, etablissement, titre, debut, fin) VALUES (?,?,?,?,?) ");
			$q->execute([ $_SESSION['candidatid'], $candidat->etablissement(), $candidat->titre(), $candidat->debut(), $candidat->fin() ]);

			$_SESSION['success'] = "Education ajoutée";

		} catch (Exception $e) {
			$_SESSION['error'] = $e;
		}
	}

	public function educations()
	{
		// Leur type est de 0
		$q = $this->db->prepare('
				SELECT * FROM tb_education WHERE candidat = ?
				ORDER BY id DESC
			');
		$q->execute([ $_SESSION['candidatid'] ]);
		return $q;
	}

	public function deleteEducation(Candidat $candidat)
	{
		// Leur type est de 0
		$q = $this->db->prepare('
				DELETE FROM tb_education WHERE candidat = ? AND id = ?
			');
		$q->execute([ $_SESSION['candidatid'], $candidat->id() ]);
		return $q;
	}

	public function addCompetence(Candidat $candidat)
	{
		try {
			
			$q = $this->db->prepare("INSERT INTO tb_competence(candidat, competences) VALUES (?,?) ");
			$q->execute([ $_SESSION['candidatid'], $candidat->competences() ]);

			$_SESSION['success'] = "Compétence ajoutée";

		} catch (Exception $e) {
			$_SESSION['error'] = $e;
		}
	}

	public function competences()
	{
		// Leur type est de 0
		$q = $this->db->prepare('
				SELECT * FROM tb_competence WHERE candidat = ?
				ORDER BY id DESC
			');
		$q->execute([ $_SESSION['candidatid'] ]);
		return $q;
	}

	public function deleteCompetence(Candidat $candidat)
	{
		// Leur type est de 0
		$q = $this->db->prepare('
				DELETE FROM tb_competence WHERE candidat = ? AND id = ?
			');
		$q->execute([ $_SESSION['candidatid'], $candidat->id() ]);
		return $q;
	}

	public function addLangue(Candidat $candidat)
	{
		try {
			
			$q = $this->db->prepare("INSERT INTO tb_langue(candidat, langue) VALUES (?,?) ");
			$q->execute([ $_SESSION['candidatid'], $candidat->langue() ]);

			$_SESSION['success'] = "Langue ajoutée";

		} catch (Exception $e) {
			$_SESSION['error'] = $e;
		}
	}

	public function langues()
	{
		// Leur type est de 0
		$q = $this->db->prepare('
				SELECT * FROM tb_langue WHERE candidat = ?
				ORDER BY id DESC
			');
		$q->execute([ $_SESSION['candidatid'] ]);
		return $q;
	}

	public function deleteLangue(Candidat $candidat)
	{
		// Leur type est de 0
		$q = $this->db->prepare('
				DELETE FROM tb_langue WHERE candidat = ? AND id = ?
			');
		$q->execute([ $_SESSION['candidatid'], $candidat->id() ]);
		return $q;
	}

	public function addTarif(Candidat $candidat)
	{
		try {
			
			$q = $this->db->prepare("INSERT INTO tb_tarification(candidat, domaine, cout) VALUES (?,?,?) ");
			$q->execute([ $_SESSION['candidatid'], $candidat->domaine(), $candidat->cout() ]);

			$_SESSION['success'] = "Tarification ajoutée";

		} catch (Exception $e) {
			$_SESSION['error'] = $e;
		}
	}

	public function tarifs()
	{
		// Leur type est de 0
		$q = $this->db->prepare('
				SELECT * FROM tb_tarification WHERE candidat = ?
				ORDER BY id DESC
			');
		$q->execute([ $_SESSION['candidatid'] ]);
		return $q;
	}

	public function deleteTarif(Candidat $candidat)
	{
		// Leur type est de 0
		$q = $this->db->prepare('
				DELETE FROM tb_tarification WHERE candidat = ? AND id = ?
			');
		$q->execute([ $_SESSION['candidatid'], $candidat->id() ]);
		return $q;
	}

	public function prestateurs()
	{
		// Leur type est de 0
		$q = $this->db->query('
				SELECT * FROM tb_candidat WHERE type_candidat = 0
				ORDER BY name
			');
		return $q;
	}

	public function entreprises()
	{
		// Leur type est de 1
		$q = $this->db->query('
				SELECT * FROM tb_candidat WHERE type_candidat = 1
				ORDER BY name
			');
		return $q;
	}

	public function prestateur(Candidat $candidat)
	{
		$q = $this->db->prepare('
				SELECT * FROM tb_candidat WHERE id = ? AND type_candidat = 0
			');
		$q->execute([ $candidat->id() ]);
		return $q;
	}

	public function entreprise(Candidat $candidat)
	{
		$q = $this->db->prepare('
				SELECT * FROM tb_candidat WHERE id = ? AND type_candidat = 1
			');
		$q->execute([ $candidat->id() ]);
		return $q;
	}
			
	public function delete(Candidat $candidat)
	{
		try {
			
			$request = $this->db->prepare('SELECT * FROM tb_candidat WHERE id = ?');
			$request->execute([ $candidat->id() ]);

			if ($res = $request->fetch(PDO::FETCH_OBJ)) {

				if ($res->type_candidat == 1) {
					
					$request = $this->db->prepare('DELETE FROM tb_candidat WHERE id = ?');
					$request->execute([ $candidat->id() ]);

					unlink('../../../assets/avatarcandidat/'.$res->avatar);
							
					$_SESSION['success'] = "Entrepirse " .$res->name. " supprimée";

				}else{

					$request = $this->db->prepare('DELETE FROM tb_candidat WHERE id = ?');
					$request->execute([ $candidat->id() ]);

					unlink('../../../assets/avatarcandidat/'.$res->avatar);
							
					$_SESSION['success'] = "Prestateur " .$res->name. " supprimé";

				}

			}else{
				$_SESSION['error'] = "Ce candidat n'existe pas";
			}

		} catch (Exception $e) {
			$_SESSION['error'] = "Suppression échouée";
		}

	}

	public function SendCode(Candidat $candidat)
	{
		$req = $this->db->prepare("SELECT * FROM tb_candidat WHERE email = ?");
		$req->execute([ $candidat->email() ]);

		if ($res = $req->fetch(PDO::FETCH_OBJ)) {
			$code = rand(10000, 99999);
			$to = $res->email;
			$subject = 'Votre code de reinitialisation de votre mot de passe est '.$code;
			$message = '<p> Chèr(e)'. $res->nom.',</p><p>Votre code de reinitialisation de votre mot de passe est '. $code.',</p>';
			$headers = 'From: mwindaholding@gmail.com' . "\r\n" .
			    'Reply-To: ngutshinsisili@gmail.com' . "\r\n" .
			    'MIME-Version: 1.0' . "\r\n" .
			    'Content-type: text/html; charset=UTF-8' . "\r\n";

			$result = mail($to, $subject, $message, $headers);

			if ($result) {
				
				$_SESSION['sendcodesuccess'] = $code;
				$_SESSION['codegenerate'] = $code;

				$_SESSION['success'] = "Mail envoyé avec sucès";
				$_SESSION['emailreset'] = $candidat->email();

			}else{

				unset($_SESSION['sendcodesuccess']);
				unset($_SESSION['emailreset']);
				$_SESSION['error'] = "Le mail ne pas envoyé";

			}

		}else{

			unset($_SESSION['sendcodesuccess']);
			unset($_SESSION['emailreset']);
			$_SESSION['error'] = "Adresse email introuvable";

		}
	}

	public function ResetPassword(Candidat $candidat)
	{
		$req = $this->db->prepare("SELECT * FROM tb_candidat WHERE email = ?");
		$req->execute([ $candidat->email() ]);

		if ($res = $req->fetch(PDO::FETCH_OBJ)) {

			$req = $this->db->prepare("UPDATE tb_candidat SET password = ? WHERE email = ?");
			$password = hash('sha512', $candidat->password());
			$req->execute([ $password, $candidat->email() ]);

			$_SESSION['success'] = "Mot de passe réinitialisé avec succès";

		}else{
			$_SESSION['error'] = "Adresse email introuvable";
		}	
	}

	public function login(Candidat $candidat)
	{
		$req = $this->db->prepare("SELECT * FROM tb_candidat WHERE password = ? AND email = ? AND status = 1");
		$password = hash('sha512', $candidat->password());
		$req->execute([ $password, $candidat->email() ]);

		if ($res = $req->fetch(PDO::FETCH_OBJ)) {
			
			$_SESSION['candidatid'] = $res->id;
			$_SESSION['id'] = $res->id;
			$_SESSION['name'] = $res->name;
			$_SESSION['datenaiss'] = $res->datenaiss;
			$_SESSION['phone'] = $res->phone;
			$_SESSION['email'] = $res->email;
			$_SESSION['salaire'] = $res->salaire;
			$_SESSION['avatar'] = $res->avatar;
			$_SESSION['password'] = $res->password;
			$_SESSION['profil'] = $res->profil;
			$_SESSION['country'] = $res->country;
			$_SESSION['city'] = $res->city;
			$_SESSION['secteur'] = $res->secteur;
			$_SESSION['type_candidat'] = $res->type_candidat;
			$_SESSION['status'] = $res->status;

			$_SESSION['success'] = "Connexion éffectuée";

		}else{
			$_SESSION['error'] = "Adresse email ou Mot de passe introuvable";
		}	
	}

	public function logout()
	{
		session_destroy();
		
		unset($_SESSION['candidatid']);
		unset($_SESSION['id']);
		unset($_SESSION['name']);
		unset($_SESSION['datenaiss']);
		unset($_SESSION['phone']);
		unset($_SESSION['email']);
		unset($_SESSION['salaire']);
		unset($_SESSION['avatar']);
		unset($_SESSION['password']);
		unset($_SESSION['profil']);
		unset($_SESSION['country']);
		unset($_SESSION['city']);
		unset($_SESSION['secteur']);
		unset($_SESSION['type_candidat']);
		unset($_SESSION['status']);

		$_SESSION['success'] = "Deconnexion éffectuée";
	}

	public function setDb(PDO $db)
	{
		$this->db = $db;
	}

}