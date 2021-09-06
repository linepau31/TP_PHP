<?php
namespace model\site;
use PDO;
class RecetteManager {

/*************** CREATION D'UNE RECETTE ***************/		
	public function CreateRecette(Recette $recette) {
		$cnx = $this->Connexion();
		$sql = 'INSERT INTO recette
			   (titre,chef,descriptif,ingredient,etapes,keywords) VALUES (:titre,:chef,:descriptif, :ingredient, :etapes, :keywords)';
		$rs_createRecette = $cnx->prepare($sql);
		$rs_createRecette->bindValue(':titre', $recette->getTitre(), PDO::PARAM_STR);
		$rs_createRecette->bindValue(':chef', $recette->getChef(), PDO::PARAM_STR);
		$rs_createRecette->bindValue(':descriptif', $recette->getDescriptif(), PDO::PARAM_STR);
        $rs_createRecette->bindValue(':ingredient', $recette->getIngredient(), PDO::PARAM_STR);
        $rs_createRecette->bindValue(':etapes', $recette->getEtapes(), PDO::PARAM_STR);
		$rs_createRecette->bindValue(':keywords', $recette->getKeywords(), PDO::PARAM_STR);
		$rs_createRecette->execute();
	}
		// FAIRE LES SUIVANTS

/*************** CREATION D'UNE RECETTE ***************/	

	public function getMsgCreateRecette() {
		$msg = '<p><i>* Tous les champs sont obligatoires</i></p>';
		return $msg;
	}

	public function getMsgErreurCreateRecette() {
		$msg = '<p class="red">Merci de remplir tous les champs</p>';
		return $msg;
	}

	public function getMsgSuccesCreateRecette() {
		$msg = '<p class="green">Félicitations : Le nouvel article a bien été inséré !</p>';
		return $msg;
	}

/*****************************************************/


/*************** AFFICHER LA RECETTE DEMANDE ***************/	
	public function ReadRecette($id_recette) {
		$cnx = $this->Connexion();
		$sql = 'SELECT * FROM recette
				WHERE id_recette  = :id_recette';
		$rs_readRecette = $cnx->prepare($sql);	
		$rs_readRecette->bindValue(':id_recette', $id_recette, PDO::PARAM_INT);
		$rs_readRecette->execute();
		$data = $rs_readRecette->fetch(PDO::FETCH_ASSOC);
		
		$recette = new Recette();
		$recette->setTitre($data['titre']);
		$recette->setChef($data['chef']);
		$recette->setDescriptif($data['descriptif']);
        $recette->setEtapes($data['etapes']);
        $recette->setIngredient($data['ingredient']);
		$recette->setKeywords($data['keywords']);
		
		return $recette;
	}
/*************** AFFICHER LA RECETTE DEMANDE ***************/
/**********************************************************/


/*************** AFFICHER TOUTES LES RECETTES ***************/	
	public function ReadAllRecette() {
		$cnx = $this->Connexion();
		$rs_readAllRecette = $cnx->prepare('SELECT * FROM recette');
		$rs_readAllRecette->execute();
		
		while($data = $rs_readAllRecette->fetch(PDO::FETCH_ASSOC)) {
			$recette = new Recette();
            $recette->setId_recette($data['id_recette']);
			$recette->setTitre($data['titre']);
			$recette->setChef($data['chef']);
            $recette->setIngredient($data['ingredient']);
            $recette->setEtapes($data['etapes']);
            $recette->setKeywords($data['keywords']);
			$recettes[] = $recette;
		}
		return $recettes;
	}
/*************** AFFICHER TOUTES LES RECETTES ***************/
/**********************************************************/


/*************** MODIFICATION D'UNE RECETTE***************/	
	public function UpdateRecette(Recette $recette) {
		$cnx = $this->Connexion();
		$sql = 'UPDATE recette SET titre = :titre, chef = :chef, descriptif = :descriptif, etapes = :etapes , ingredient = :ingredient, keywords = :keywords
			    WHERE id_recette = :id_recette';
		$rs_updateRecette = $cnx->prepare($sql);
		$rs_updateRecette->bindValue(':id_recette', $recette->getId_recette(), PDO::PARAM_INT);
		$rs_updateRecette->bindValue(':titre', $recette->getTitre(), PDO::PARAM_STR);
		$rs_updateRecette->bindValue(':chef', $recette->getChef(), PDO::PARAM_STR);
		$rs_updateRecette->bindValue(':descriptif', $recette->getDescriptif(), PDO::PARAM_STR);
        $rs_updateRecette->bindValue(':etapes', $recette->getEtapes(), PDO::PARAM_STR);
        $rs_updateRecette->bindValue(':ingredient', $recette->getIngredient(), PDO::PARAM_STR);
		$rs_updateRecette->bindValue(':keywords', $recette->getKeywords(), PDO::PARAM_STR);
		
		$rs_updateRecette->execute();
	}
/*************** MODIFICATION D'UNE RECETTE ***************/	

	public function getMsgSuccesUpdateRecette() {
		$msg = '<p class="green">Félicitations : La nouvelle recette a bien été modifié !</p>';
		return $msg;
	}

/*********************************************************/	


/*************** SUPPRESSION D'UNE RECETTE ***************/	
	public function DeleteRecette(Recette $recette) {
		$cnx = $this->Connexion();
		$sql = 'DELETE FROM recette
				WHERE id_recette = :id_recette';
		$rs_deleteRecette = $cnx->prepare($sql);
		$rs_deleteRecette->bindValue(':id_recette', $recette->getId_recette(), PDO::PARAM_INT);
		$rs_deleteRecette->execute();		
	}
/*************** SUPPRESSION D'UNE RECETTE ***************/
	public function getMsgSuccesDeleteRecette() {
		$msg = '<p class="green">Félicitations : La recette a bien été supprimé !</p>';
		return $msg;
	}
/********************************************************/


/*************** CONNEXION A LA BDD ***************/	
	private function Connexion() {
		$cnx = new PDO('mysql:host='.HOST.';dbname='. DBNAME.';charset=utf8', ''.CNX_LOGIN.'', ''. CNX_PASS.'');
		return $cnx;
	}

/**************************************************/	
}