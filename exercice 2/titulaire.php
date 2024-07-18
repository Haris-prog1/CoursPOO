<?php

class Titulaire{
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $ville;
    private $comptes =[];

    public function __construct($nom, $prenom, $dateNaissance,$ville,) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->ville = $ville;
        
    }
    public function ajouterCompte(CompteBanquaire $comptes){
       // $this->comptes[] = $comptes;
        
    }
    
    public function getNom() {
        return $this->nom;
    }
    
    public function getPrenom() {
        return $this->prenom;
    }
    public function getDatenaissance() {
        return $this->dateNaissance;
    }
    public function getVille() {
        return $this->ville;
    }
    public function getComptes() {
        return $this->comptes;
    }
    
    
    public function __toString() {
        return $this->nom . " " . $this->prenom . "" . $this->dateNaissance."". $this->ville."".$this->comptes;
    }
}







  
