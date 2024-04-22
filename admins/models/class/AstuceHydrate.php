<?php 

declare(strict_types=1);

/**
 * Includes all contract
 */
class AstuceHydrate
{

	private $db; // Instance de PDO
	public function __construct($db)
	{
		$this->setDb($db);
	}

	public function getList()
	{
		$q = $this->db->query("
				SELECT tb_astuce.*, DATE_FORMAT(tb_astuce.datepublish, '%d-%m-%Y') AS datepub, tb_admin.nom AS adminname, 
				tb_secteur.designation AS secteurname FROM tb_astuce 
				INNER JOIN tb_admin ON tb_astuce.admin = tb_admin.id 
				INNER JOIN tb_secteur ON tb_secteur.id = tb_astuce.secteur
				ORDER BY tb_astuce.id DESC
			");
		return $q;
	}
			
	public function delete(Astuce $astuce)
	{
		try {
			
			$request = $this->db->prepare('SELECT * FROM tb_astuce WHERE id = ?');
			$request->execute([ $astuce->id() ]);

			if ($res = $request->fetch(PDO::FETCH_OBJ)) {
				
				$request = $this->db->prepare('DELETE FROM tb_astuce WHERE id = ?');
				$request->execute([ $astuce->id() ]);

				unlink('../../../assets/astuce/'.$res->avatar);
						
				$_SESSION['success'] = "Astuce supprimée";

			}else{
				$_SESSION['error'] = "Cette astuce n'existe pas";
			}

		} catch (Exception $e) {
			$_SESSION['error'] = "Suppression échouée";
		}

	}

	public function setDb(PDO $db)
	{
		$this->db = $db;
	}


}