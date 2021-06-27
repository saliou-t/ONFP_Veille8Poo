<?php

namespace dossier1;

//require_once('dossier1/Vehicule.php');

class Vehicule{

    public function __construct($marque, $matricule, $couleur, $vitesse){
        $this->marque = $marque;
        $this->matricule = $matricule;
        $this->couleur = $couleur;
        $this->vitesse = $vitesse;
    }

    public function rouler(){
        var_dump("La voiture de marque $this->marque de couleur $this->couleur roule à $this->vitesse à l'heure");
    }
    /**
     * Un setteur qui prends un paramètre et permet de modifier la couleur d'un vehicule par exemple
     */
    public function setColor($newColor){
        $this->couleur = $newColor;
    }

    /**
     *Un getteur qui permet d'obtenir la marque d'un vehicule par exemple 
     */
    public function getMarque(){
        return $this->marque;
    }
}
$voiture = new Vehicule("Renault","DK-0256-OF","Gris",310);

var_dump($voiture->getMarque());

