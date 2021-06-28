<?php 

namespace /;
	class Parent{
		protected $prenom;
		protected $nom;
		protected $age;

		public function dirBonjour(){
			var_dump("Je m'appelle $prenom $nom et je dit Bonjour à tous le monde ");
		}
	}

	$parent1 = new Parent();

	$parent1->dirBonjour();
