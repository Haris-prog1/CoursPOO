<?php
class Livre {
    private string$titre;
    private int$nombrePages;
    private int $anneeParution;
    private float $prix;

    private Auteur $auteur;
    

    public function __construct($titre, $nombrePages, $anneeParution, $prix) {
        $this->titre = $titre;
        $this->nombrePages = $nombrePages;
        $this->anneeParution = $anneeParution;
        $this->prix = $prix;
      //  lier le livre en contruction à l'objet auteur
    }

   


    public function getTitre(){
        return $this->titre;
    }

    public function getNombrePages(){
        return $this->nombrePages;
    }
    public function getAnneeParution(){
        return $this->anneeParution;
    }
    public function getPrix(){
        return $this->prix;
    }


        public function __toString() {
        return "{$this->titre} ({$this->anneeParution}), {$this->nombrePages} pages, {$this->prix} euros";
    }
}

   








