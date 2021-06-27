<?php
    class Mere{ 
        public static function Test(){
            self::quiEstCe();
        }

        public function quiEstCe(){
            echo 'Je suis la classe <strong>Mere</strong> !';
        }
    }
    
    class Enfant extends Mere{
        public $name = "Fille";

        public function quiEstCe(){
            var_dump ("Je suis la classe <strong>{$this->name}</strong> !");
        }
    }

    Enfant::quiEstCe(); //affiche "Je suis la classe Fille !"


