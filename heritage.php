<?php 

class FigureTroisCotes{
	protected $nom;
	protected $cote1;
	protected $cote2;
	protected $cote3;

	public function surface($cote1,$cote2,$cote3){
		//une fonction qui permet de calculer la surface de la figure à trois cotés
	}
	public function perimetre($cote1,$cote2,$cote3){
		$cote1 = $this->cote1;
		$cote2 = $this->cote2;
		$cote3 = $this->cote3;

		$perimetre = $this->cote1 + $this->cote2+ $this->cote3;

		echo "Périmète = ".$perimetre;
		// fonction qui permet de retourner le périmètre du rectangle
	}
}

class Triangle extends FigureTroisCotes{

	 public function __construct($nom, $cote1, $cote2, $cote3){

        // parent::__construct($nom, $cote1, $cote2, $cote3); 
    }
}

$triagle = new Triangle("Triangle Rectangle",12,12,10);

$triagle->perimetre(12,12,10);
