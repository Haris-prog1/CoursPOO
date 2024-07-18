<?php
class Auteur {
    private $nom;
    private $prenom;

    private  DateTime $dateNaissance;


    private array $livres;


    public function __construct(string $nom,string $prenom, string $dateNaissance, ) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = new Datetime($dateNaissance);
        $this->livres = [];
    

    }
    

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function __toString() {
        return $this->prenom . " " . $this->nom;
    }


    // fonction calculer age
    public function getDateNaissance(){
        $birthdate = new DateTime(('21-septembre-1947'));
        $today = new DateTime('today');
        $age = $birthdate->diff(('today'));
        return $age;
        
    }
   
}





  
