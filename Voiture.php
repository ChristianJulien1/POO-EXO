<?php

class Voiture{
    private $marque;
    private $modele;
    public $annee;
    public $couleur;
    public $vitesseactuelle = 0;

    public function __construct($marque, $modele){
        $this->marque = $marque;
        $this->modele = $modele;
    }

    public function afficher(){
        echo $this->marque . " - " . $this->modele . " ( " . $this->annee . " ) - " . $this->couleur . " - Vitesse : " . $this->vitesseactuelle . " km/h\n";
    }
    public function accelerer($vitesse) {
        $this->vitesseactuelle += $vitesse;
    }
}

$ma_voiture = new Voiture("Toyota", "Corolla");
$ma_voiture-> annee = 2022;
$ma_voiture-> couleur = "Rouge";
$ma_voiture-> afficher(); 
$ma_voiture-> accelerer(50);
$ma_voiture-> afficher();