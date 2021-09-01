<?php
namespace controller\admin;
use classe;
use model\admin as ma;
use model\site as ms;
class Admin {

/****************** ACCES A LA ZONE ADMIN ******************/
	public function voirAdmin() {
		if( (empty($_POST['pseudo'])) || (empty($_POST['password'])) ) {
			$manager = new ma\MembreManager();
			$message = $manager->getMsg();
			$view = new classe\View('admin', 'admin', 'Admin', 'Je suis la desc de l\'admin', 'clé admin 1, clé admin 2');
			$view->AfficherVue(array('message'=>$message));
		} else {
			
			$manager = new ma\MembreManager();
			$membre = $manager->ReadMembre($_POST['pseudo'], $_POST['password']);
			
			if( ($membre->getPseudo() == $_POST['pseudo']) AND ($membre->getPassword() == $_POST['password']) ) {
				$_SESSION['pseudo'] = $_POST['pseudo'];
				$this->AfficherToutesLesRecettes();

			} else {
				$manager = new ma\MembreManager();
				$message = $manager->getMsgErreur();
				$view = new classe\View('admin', 'admin', 'Admin', 'Je suis la desc de l\'admin', 'clé admin 1, clé admin 2');
				$view->AfficherVue(array('message'=>$message));
			}
		}
	}
/****************** ACCES A LA ZONE ADMIN ******************/
/***********************************************************/


/*************** CREATION D'UNE RECETTE ***************/
	public function CreerRecette() {
		if( (empty($_POST['titre'])) && (empty($_POST['photo'])) && (empty($_POST['descriptif'])) && (empty($_POST['keywords'])) ) {
			$manager = new ms\RecetteManager();
			$message = $manager->getMsgCreateRecette();

		} elseif( (empty($_POST['titre'])) || (empty($_POST['photo'])) || (empty($_POST['descriptif'])) || (empty($_POST['keywords'])) ) {
			$manager = new ms\RecetteManager();
			$message = $manager->getMsgErreurCreateRecette();
		} else {
			$recette = new ms\Recette();
			$recette->setTitre($_POST['titre']);
			$recette->setPhoto($_POST['photo']);
			$recette->setDescriptif($_POST['descriptif']);
			$recette->setKeywords($_POST['keywords']);
			
			$manager = new ms\RecetteManager();
			$manager->CreateRecette($recette);
			$message = $manager->getMsgSuccesCreateRecette();
		}
		
	    $view = new classe\View('admin', 'recette-create', 'Créer une recette', 'Créer une recette', 'clé 1, clé 2');
		$view->AfficherVue(array('message'=>$message));
	}
/*************** CREATION D'UNE RECETTE ***************/
/*****************************************************/


/****************** ACCES ACCUEIL ADMIN ******************/
	public function AfficherToutesLesRecettes() {
		$manager = new ms\RecetteManager();
		$recettes = $manager->ReadAllRecette();
		
		$view = new classe\View('admin', 'admin-acces', 'Zone Admin', 'Je suis la desc de la zone admin', 'clé zone admin 1, clé zone admin 2');
		$view->AfficherVue(array('pseudo' => $_SESSION['pseudo'],
										 'recettes'=>$recettes));
	}

/****************** ACCES ACCUEIL ADMIN ******************/
/*********************************************************/


/*************** MODIFICATION D'UNE RECETTE ***************/
	public function ModifierRecette() {
		$manager = new ms\RecetteManager();
		$recette = $manager->ReadRecette($_GET['id_recette']);
		if( (empty($_POST['titre'])) && (empty($_POST['photo'])) && (empty($_POST['descriptif'])) && (empty($_POST['keywords'])) ) {
			$message = $manager->getMsgCreateRecette();
		} elseif( (empty($_POST['titre'])) || (empty($_POST['photo'])) || (empty($_POST['descriptif'])) || (empty($_POST['keywords'])) ) {
			$message = $manager->getMsgErreurCreateRecette();
		} else {
			$recette = new ms\Recette();
			$recette->setId_recette($_POST['id_recette']);
			$recette->setTitre($_POST['titre']);
			$recette->setPhoto($_POST['photo']);
			$recette->setDescriptif($_POST['descriptif']);
			$recette->setKeywords($_POST['keywords']);
			
			$manager->UpdateRecette($recette);
			
			$message = $manager->getMsgSuccesUpdateRecette();
		}
		
			$view = new classe\View('admin', 'recette-update', 'Modifier une recette', 'Modifier une recette', 'clé 1, clé 2');
			$view->AfficherVue(array('message' =>$message,
									 'recette' => $recette));
	}
/*************** MODIFICATION D'UNE RECETTE ***************/
/*********************************************************/


/*************** SUPPRESSION D'UNE RECETTE ***************/
	public function SupprimerRecette() {
		if( (empty($_POST['oui'])) && (empty($_POST['non'])) ) {
			$manager = new ms\RecetteManager();
			$recette = $manager->ReadRecette($_GET['id_recette']);
			
			$view = new classe\View('admin', 'recette-delete', 'Supprimer une recette', 'Supprimer une recette', 'clé 1, clé 2');
			$view->AfficherVue(array('recette' => $recette));
		} elseif(isset($_POST['non'])) {
			$this->AfficherToutesLesRecettes();
		} elseif(isset($_POST['oui'])) {
			$recette = new ms\Recette();
			$recette->setId_recette($_POST['id_recette']);
			
			$manager = new ms\RecetteManager();
			$manager->DeleteRecette($recette);
			$message = $manager->getMsgSuccesDeleteRecette();
			$view = new classe\View('admin', 'recette-delete', 'Supprimer une recette', 'Supprimer une recette', 'clé 1, clé 2');
			$view->AfficherVue(array('recette' => $recette,
									 'message' => $message));
		}
	}
/*************** SUPPRESSION D'UNE RECETTE ***************/
/********************************************************/



	public function seDeconnecter() {
		$view = new classe\View('admin', 'deconnexion', 'Se déconnecter', 'Déconnexion de la zone admin', 'clé déconnecter 1, clé déconnecter 2');
		$view->AfficherVue();
	}
	
}