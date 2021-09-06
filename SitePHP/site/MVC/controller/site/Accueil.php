<?php
namespace controller\site;
use classe;
use model\site as ms;

class Accueil {
/*************** AFFICHER TOUTES LES RECETTES ***************/		
	public function AfficherAccueil() {
		
		$manager = new ms\RecetteManager();
		$recettes = $manager->ReadAllRecette();
		
		$view = new classe\View('site', 'accueil', 'Accueil', 'Je suis la desc de l\'accueil', 'clé 1, clé 2');
		$view->AfficherVue(array('recettes'=>$recettes));
	}

/**********************************************************/


/*************** AFFICHER UNE RECETTE***************/	
	public function AfficherRecette() {
		
		$manager = new ms\RecetteManager();
		$recette = $manager->ReadRecette($_GET['id_recette']);
		
		$view = new classe\View('site', 'voir-recette', $recette->getTitre(), $recette->getDescriptif(), $recette->getChef());
		$view->AfficherVue(array('recette'=>$recette));
	}

/***************************************************/			
}