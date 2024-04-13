<?php 

require 'fonctions/db.php';
$db = db();

$req = $db->prepare("
	SELECT * FROM tb_secteur WHERE status = 1 AND designation LIKE ?
");
$req->execute([ "%".$_GET['sector']."%" ]);

if ($res = $req->fetch(PDO::FETCH_OBJ)) {
	
	if (empty($_GET['skill'])) {
		
		$req = $db->prepare("
			SELECT * FROM tb_candidat WHERE status = 1 AND profil IS NOT NULL AND secteur_id = ?
		");
		$req->execute([ $res->id ]);

	}else{

		$req = $db->prepare("
			SELECT DISTINCT c.*
			FROM tb_candidat c
			JOIN tb_competence cmp ON c.id = cmp.candidat
			WHERE cmp.competences LIKE ? AND c.avatar IS NOT NULL AND c.secteur_id = ?
		");
		$req->execute([ "%".$_GET['skill']."%", $res->id ]);
	}

}

