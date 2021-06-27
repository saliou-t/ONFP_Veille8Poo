<?php

namespace dossier1;

require('../dossier1/Vehicule.php');

class Voiture extends Vehicule{

    public function __construct($marque, $matricule, $couleur, $vitesse,$fuel){
        
        parent::__construct($marque, $matricule, $couleur, $vitesse); 
        $this->fuel = $fuel; //une proprièté supplé de la classe "voiture"
    }

    //une fonction propre à la classe Voiture
    public function rouler2(){
    	var_dump("La voiture $this->marque consomme du $this->fuel");
    }
}

$voiture1 = new Voiture("Porche","DK-7477-OF","Noire Mat",330,"gazoil");
$voiture1->rouler();
$voiture1->rouler2();

