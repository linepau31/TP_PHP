<?php
namespace model\site;

class Recette {
	private $id_recette;
	private $titre;

	private $ingredient;
	private $descriptif;
	private $etapes;
	private $chef;
	private $keywords;
	
	public function getId_recette() {
		return $this->id_recette;
	}
	public function getTitre() {
		return $this->titre;
	}
	public function getDescriptif() {
		return $this->descriptif;
	}
	public function getChef() {
		return $this->chef;
	}
	public function getIngredient() {
		return $this->ingredient;
	}

	public function getEtapes()
	{
		return $this->etapes;
	}
	public function getKeywords()
	{
		return $this->keywords;
	}
	
	public function setId_recette($id_recette) {
		if($id_recette > 0) { // si possitif, on donne la valeur
			$this->id_recette = $id_recette;
		}
	}
	public function setTitre($titre) {
		if(is_string($titre)) {
			$this->titre = $titre;
		}
	}
	public function setChef($chef) {
		if(is_string($chef)) {
			$this->chef = $chef;
		}
	}
	public function setDescriptif($descriptif) {
		if(is_string($descriptif)) {
			$this->descriptif = $descriptif;
		}
	}

    public function setIngredient($ingredient) {
        if(is_string($ingredient)) {
            $this->ingredient = $ingredient;
        }
    }
    public function setEtapes($etapes) {
        if(is_string($etapes)) {
            $this->etapes = $etapes;
        }
    }
	public function setKeywords($keywords) {
		if(is_string($keywords)) {
			$this->keywords = $keywords;
		}
	} 

}