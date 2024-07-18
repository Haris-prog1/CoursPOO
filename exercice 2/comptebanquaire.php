<?php 
class CompteBanquaire{
    private $libelle;
    private $solde;
    private $devise;
    private Titulaire $titulaire;
    
    
    public function __construct($libelle,$solde = 0,$devise, $titulaire) {
        $this->libelle = $libelle;
        $this->solde = $solde;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
    }
    public function getLibelle(){
        return $this->libelle;
    }
    public function getSolde(){
        return $this->solde;
    }
    public function getDevise(){
        return $this->devise;
    }
    public function getTitulaire(){
        return $this->titulaire;
    }

    }
    public function crediter($montant) 
        if ($montant > 0) {
            $this->solde += $montant;
        }
    public function debiter($montant) {
        if ($montant > 0 && $this->solde >= $montant) {
            $this->solde -= $montant;
            }
    // function de virement
    public function __toString() {
        return "{$this->libelle} ({$this->solde}), {$this->devise} , {$this->titulaire} ";
    }
    
    
    
    
    
    
    
    
    
    
    
    
}