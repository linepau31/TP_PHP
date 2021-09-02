<?php
namespace model\site;

class Recette {
	private $id_recette;
	private $titre;
	private $photo;
	private $difficulte;
	private $temps;
	private $cout;
	private $ingredient;
	private $descriptif;
	private $etapes;
	private $date;
	private $plat;
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
	public function getPhoto()
	{
		return $this->photo;
	}
	public function getDifficulte()
	{
		return $this->difficulte;
	}
	public function getTemps()
	{
		return $this->temps;
	}
	public function getCout()
	{
		return $this->cout;
	}
	public function getEtapes()
	{
		return $this->etapes;
	}
	public function getDate()
	{
		return $this->date;
	}
	public function getPlat()
	{
		return $this->plat;
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
	public function setPhoto($photo)
	{
		if ($photo > 0) {
			$this->photo = $photo;
		}
	}
    public function setIngredient($ingredient) {
        if(is_string($ingredient)) {
            $this->ingredient = $ingredient;
        }
    }
    public function setCout($cout) {
        if(is_string($cout)) {
            $this->cout = $cout;
        }
    }
    public function setTemps($temps) {
        if(is_string($temps)) {
            $this->temps = $temps;
        }
    }
    public function setPlat($plat) {
        if(is_string($plat)) {
            $this->plat = $plat;
        }
    }
    public function setDate($date) {
        if(is_string($date)) {
            $this->date = $date;
        }
    }
    public function setEtapes($etapes) {
        if(is_string($etapes)) {
            $this->etapes = $etapes;
        }
    }
    public function setDifficulte($difficulte) {
        if(is_string($difficulte)) {
            $this->difficulte = $difficulte;
        }
    }
	public function setKeywords($keywords) {
		if(is_string($keywords)) {
			$this->keywords = $keywords;
		}
	} 

}