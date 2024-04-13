<?php 

declare(strict_types=1);

/**
 * Includes all exam groups
 */
class Candidat
{

	// Infos perso
	private int $id;
	private string $name;
	private string $datenaiss;
	
	private string $phone;
	private $email;
	private string $salaire;

	private string $avatar;
	private string $password;
	private string $passwordConfirm;

	private string $ville;
	private string $faculte;
	private string $annee;
	private string $niveau;
	private string $adresse;

	// Info autre
	private string $competences;
	private string $langue;
	private string $profil;

	// Experiences pro
	private string $societe;
	private string $poste;
	private string $contrant;
	private string $debut;
	private string $fin;

	// Education
	private string $etablissement;
	private string $titre;

	// Tarification
	private string $domaine;
	private string $cout;

	// Config
	private int $country;
	private int $city;
	private int $secteur;
	private int $type_candidat;
	
	function __construct(array $data)
	{
		$this->hydrate($data);
	}

	public function hydrate(array $data){
		foreach ($data as $key => $value){
			$method = 'set'.ucfirst($key);
			if (method_exists($this, $method))
			{
				$this->$method($value);
			}
		}
	}

	// getters

	public function id(): int
	{
		return $this->id;
	}

	public function name(): string
	{
		return $this->name;
	}

	public function datenaiss()
	{
		return $this->datenaiss;
	}

	public function phone(): string
	{
		return $this->phone;
	}

	public function email(): string
	{
		return $this->email;
	}

	public function salaire(): string
	{
		return $this->salaire;
	}

	public function avatar(): string
	{
		return $this->avatar;
	}

	public function password(): string
	{
		return $this->password;
	}

	public function passwordconfirm(): string
	{
		return $this->passwordconfirm;
	}




	public function ville(): string
	{
		return $this->ville;
	}

	public function faculte(): string
	{
		return $this->faculte;
	}

	public function annee(): string
	{
		return $this->annee;
	}

	public function niveau(): string
	{
		return $this->niveau;
	}

	public function adresse(): string
	{
		return $this->adresse;
	}




	public function competences(): string
	{
		return $this->competences;
	}

	public function profil(): string
	{
		return $this->profil;
	}

	public function langue(): string
	{
		return $this->langue;
	}

	public function societe(): string
	{
		return $this->societe;
	}

	public function poste(): string
	{
		return $this->poste;
	}

	public function contrant(): string
	{
		return $this->contrant;
	}

	public function debut(): string
	{
		return $this->debut;
	}

	public function fin(): string
	{
		return $this->fin;
	}

	public function etablissement(): string
	{
		return $this->etablissement;
	}

	public function titre(): string
	{
		return $this->titre;
	}

	public function domaine(): string
	{
		return $this->domaine;
	}

	public function cout(): string
	{
		return $this->cout;
	}

	public function pays(): string
	{
		return $this->pays;
	}

	public function secteur(): int
	{
		return $this->secteur;
	}

	public function type_candidat(): int
	{
		return $this->type_candidat;
	}


	// Setters
	public function setId($id)
	{
		$id = (int) $id;

		if ($id > 0) {

			$this->id = $id;
			
		}else{
			$_SESSION['error'] = "L'identifiant de la ville doit être superieur à 0";
		}

	}

	public function setName($name)
	{
		if ( isset($name) && !empty($name) ) {
			
			$name = htmlspecialchars(trim($name));

			if (strlen($name) <= 255) {
				
				$this->name = $name;

			}else{
				$_SESSION['error'] = "Le nom est trop long";
			}

		}else{
			$_SESSION['error'] = "Le nom est obligatoire";
		}

	}

	public function setDatenaiss($datenaiss)
	{
		if ( isset($datenaiss) && !empty($datenaiss) ) {
			
			$datenaiss = htmlspecialchars(trim($datenaiss));

			if (strlen($datenaiss) <= 255) {
				
				$this->datenaiss = $datenaiss;

			}else{
				$_SESSION['error'] = "La date de naissance est trop long";
			}

		}else{
			$_SESSION['error'] = "La date de naissance est obligatoire";
		}

	}

	public function setPhone($phone)
	{
		if (isset($phone) && !empty($phone) ) {
			
			$phone = htmlspecialchars(trim($phone));

			if (strlen($phone) <= 20) {
				
				$this->phone = $phone;

			}else{
				$_SESSION['error'] = "Le numéro de telephone est trop long";
			}

		}else{
			$_SESSION['error'] = "Le numéro de telephone est obligatoire";
		}

	}

	public function setEmail($email)
	{

		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		    $this->email = $email;
		} else {
		    $_SESSION['error'] = "L'adresse email est invalide";
		}

	}

	public function setSalaire($salaire)
	{
		if ( isset($salaire) && !empty($salaire) ) {
			
			$salaire = htmlspecialchars(trim($salaire));

			if (strlen($salaire) <= 255) {
				
				$this->salaire = $salaire;

			}else{
				$_SESSION['error'] = "Le salaire est trop long";
			}

		}else{
			$_SESSION['error'] = "Le salaire est obligatoire";
		}

	}

	public function setAvatar($avatar)
	{
		if (isset($avatar) && !empty($avatar) ) {
			
			$avatar = htmlspecialchars(trim($avatar));

			if (strlen($avatar) <= 255) {
				
				$this->avatar = $avatar;

			}else{
				$_SESSION['error'] = "Avatar trop longue";
			}

		}else{
			$_SESSION['error'] = "L'avatar est obligatoire";
		}

	}

	public function setPassword($password)
	{
		if (isset($password) && !empty($password) ) {
			
			$password = htmlspecialchars(trim($password));

			if (strlen($password) <= 255) {
				
				$this->password = $password;

			}else{
				$_SESSION['error'] = "Mot de passe trop long";
			}

		}else{
			$_SESSION['error'] = "Mot de passe est obligatoire";
		}

	}

	public function setPasswordConfirm($passwordConfirm)
	{
		if (isset($passwordConfirm) && !empty($passwordConfirm) ) {
			
			$passwordConfirm = htmlspecialchars(trim($passwordConfirm));

			if (strlen($passwordConfirm) <= 255) {
				
				$this->passwordConfirm = $passwordConfirm;

			}else{
				$_SESSION['error'] = "Mot de passe trop long";
			}

		}else{
			$_SESSION['error'] = "Mot de passe est obligatoire";
		}

	}






	public function setVille($ville)
	{
		if ( isset($ville) && !empty($ville) ) {
			
			$ville = htmlspecialchars(trim($ville));

			if (strlen($ville) <= 255) {
				
				$this->ville = $ville;

			}else{
				$_SESSION['error'] = "Nom du ville trop long";
			}

		}else{
			$_SESSION['error'] = "Nom du ville obligatoire";
		}

	}
	public function setFaculte($faculte)
	{
		if ( isset($faculte) && !empty($faculte) ) {
			
			$faculte = htmlspecialchars(trim($faculte));

			if (strlen($faculte) <= 255) {
				
				$this->faculte = $faculte;

			}else{
				$_SESSION['error'] = "Filière est trop long";
			}

		}else{
			$_SESSION['error'] = "Filière est obligatoire";
		}

	}
	public function setAnnee($annee)
	{
		if ( isset($annee) && !empty($annee) ) {
			
			$annee = htmlspecialchars(trim($annee));

			if (strlen($annee) <= 255) {
				
				$this->annee = $annee;

			}else{
				$_SESSION['error'] = "Année est trop long";
			}

		}else{
			$_SESSION['error'] = "Année est obligatoire";
		}

	}
	public function setNiveau($niveau)
	{
		if ( isset($niveau) && !empty($niveau) ) {
			
			$niveau = htmlspecialchars(trim($niveau));

			if (strlen($niveau) <= 255) {
				
				$this->niveau = $niveau;

			}else{
				$_SESSION['error'] = "Niveau est trop long";
			}

		}else{
			$_SESSION['error'] = "Niveau est obligatoire";
		}

	}
	public function setAdresse($adresse)
	{
		if ( isset($adresse) && !empty($adresse) ) {
			
			$adresse = htmlspecialchars(trim($adresse));

			if (strlen($adresse) <= 255) {
				
				$this->adresse = $adresse;

			}else{
				$_SESSION['error'] = "Adresse est trop long";
			}

		}else{
			$_SESSION['error'] = "Adresse est obligatoire";
		}

	}






	public function setCompetences($competences)
	{
		if (isset($competences) && !empty($competences) ) {
			
			$competences = htmlspecialchars(trim($competences));

			if (strlen($competences) <= 255) {
				
				$this->competences = $competences;

			}else{
				$_SESSION['error'] = "Compétence trop long";
			}

		}else{
			$_SESSION['error'] = "Compétence est obligatoire";
		}

	}

	public function setLangue($langue)
	{
		if (isset($langue) && !empty($langue) ) {
			
			$langue = htmlspecialchars(trim($langue));

			if (strlen($langue) <= 255) {
				
				$this->langue = $langue;

			}else{
				$_SESSION['error'] = "Langue trop longue";
			}

		}else{
			$_SESSION['error'] = "Langue est obligatoire";
		}

	}

	public function setProfil($profil)
	{
		if (isset($profil) && !empty($profil) ) {
			
			$profil = htmlspecialchars(trim($profil));

			if (strlen($profil) <= 255) {
				
				$this->profil = $profil;

			}else{
				$_SESSION['error'] = "Profil trop long";
			}

		}else{
			$_SESSION['error'] = "Profil est obligatoire";
		}

	}

	public function setSociete($societe)
	{
		if (isset($societe) && !empty($societe) ) {
			
			$societe = htmlspecialchars(trim($societe));

			if (strlen($societe) <= 255) {
				
				$this->societe = $societe;

			}else{
				$_SESSION['error'] = "Société trop longue";
			}

		}else{
			$_SESSION['error'] = "Société est obligatoire";
		}

	}

	public function setPoste($poste)
	{
		if (isset($poste) && !empty($poste) ) {
			
			$poste = htmlspecialchars(trim($poste));

			if (strlen($poste) <= 255) {
				
				$this->poste = $poste;

			}else{
				$_SESSION['error'] = "Poste trop long";
			}

		}else{
			$_SESSION['error'] = "Poste est obligatoire";
		}

	}

	public function setContrant($contrant)
	{
		if (isset($contrant) && !empty($contrant) ) {
			
			$contrant = htmlspecialchars(trim($contrant));

			if (strlen($contrant) <= 255) {
				
				$this->contrant = $contrant;

			}else{
				$_SESSION['error'] = "Contrant trop long";
			}

		}else{
			$_SESSION['error'] = "Contrant est obligatoire";
		}

	}

	public function setDebut($debut)
	{
		if (isset($debut) && !empty($debut) ) {
			
			$debut = htmlspecialchars(trim($debut));

			if (strlen($debut) <= 255) {
				
				$this->debut = $debut;

			}else{
				$_SESSION['error'] = "Date debut trop longue";
			}

		}else{
			$_SESSION['error'] = "Date debut est obligatoire";
		}

	}

	public function setFin($fin)
	{
		if (isset($fin) && !empty($fin) ) {
			
			$fin = htmlspecialchars(trim($fin));

			if (strlen($fin) <= 255) {
				
				$this->fin = $fin;

			}else{
				$_SESSION['error'] = "Date fin trop longue";
			}

		}else{
			$_SESSION['error'] = "Date fin est obligatoire";
		}

	}

	public function setEtablissement($etablissement)
	{
		if (isset($etablissement) && !empty($etablissement) ) {
			
			$etablissement = htmlspecialchars(trim($etablissement));

			if (strlen($etablissement) <= 255) {
				
				$this->etablissement = $etablissement;

			}else{
				$_SESSION['error'] = "Etablissement trop longue";
			}

		}else{
			$_SESSION['error'] = "Etablissement est obligatoire";
		}

	}

	public function setTitre($titre)
	{
		if (isset($titre) && !empty($titre) ) {
			
			$titre = htmlspecialchars(trim($titre));

			if (strlen($titre) <= 255) {
				
				$this->titre = $titre;

			}else{
				$_SESSION['error'] = "Etablissement trop longue";
			}

		}else{
			$_SESSION['error'] = "Etablissement est obligatoire";
		}

	}

	public function setDomaine($domaine)
	{
		if (isset($domaine) && !empty($domaine) ) {
			
			$domaine = htmlspecialchars(trim($domaine));

			if (strlen($domaine) <= 255) {
				
				$this->domaine = $domaine;

			}else{
				$_SESSION['error'] = "Domaine trop long";
			}

		}else{
			$_SESSION['error'] = "Domaine est obligatoire";
		}

	}

	public function setCout($cout)
	{
		if (isset($cout) && !empty($cout) ) {
			
			$cout = htmlspecialchars(trim($cout));

			if (strlen($cout) <= 255) {
				
				$this->cout = $cout;

			}else{
				$_SESSION['error'] = "Le coût trop longue";
			}

		}else{
			$_SESSION['error'] = "Le coût est obligatoire";
		}

	}

	public function setCountry($country)
	{
		$country = (int) $country;

		if ($country > 0) {

			$this->country = $country;
			
		}else{
			$_SESSION['error'] = "L'identifiant du pays doit être superieur à 0";
		}

	}

	public function setCity($city)
	{
		$city = (int) $city;

		if ($city > 0) {

			$this->city = $city;
			
		}else{
			$_SESSION['error'] = "L'identifiant de la ville doit être superieur à 0";
		}

	}

	public function setSecteur($secteur)
	{
		$secteur = (int) $secteur;

		if ($secteur > 0) {

			$this->secteur = $secteur;
			
		}else{
			$_SESSION['error'] = "L'identifiant du secteur doit être superieur à 0";
		}

	}


	public function setType_candidat($type_candidat)
	{
		$type_candidat = (int) $type_candidat;

		if ($type_candidat > 0) {

			$this->type_candidat = $type_candidat;
			
		}else{
			$_SESSION['error'] = "Le type de candidatinexistant";
		}

	}


}