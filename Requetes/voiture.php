<?php

namespace dossier1;

require('../dossier1/Vehicule.php');

class Voiture extends Vehicule{

    public function __construct(){
        
        parent::__construct($marque, $matricule, $couleur, $vitesse); 
        $this->fuel = $fuel; //une proprièté supplé de la classe "voiture"
    }
    //une redéfinition de la methode rouler()

    public function rouler(){
        
    } 

}

$voiture1 = new Voiture("Porche","DK-7477-OF","Noire Mat",330,"gazoil");
$voiture1->rouler();
$voiture1->rouler2();

    