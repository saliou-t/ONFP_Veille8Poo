<?php 
class Apprenant{
	public  $prenom;
	public  $nom;
	public  $age;

	public function __construct($prenom,$nom,$age){
		$this->prenom = $prenom;
		$this->nom = $nom;
		$this->age = $age;
	}

	public function salutation(){

		var_dump("Je m'appelle $this->prenom $this->nom, j'ai $this->age et je suis un Apprenant !");
	}
}

class Etudiant extends Apprenant{
	
	public function __construct($prenom,$nom,$age){
		parent::__construct($prenom,$nom,$age);
	}

	//surcharge de la methode salutation() de la class Apprenant

	public function salutation(){
		var_dump("Je m'appelle $this->prenom $this->nom, j'ai $this->age et je suis un Etudiant !");
	}
}

$etudiant0 = new Apprenant("Gaydel","Lô", 18);
$etudiant0->salutation();

$etudiant1 = new Etudiant("Moustapha","Diallo", 22);
$etudiant1->salutation();