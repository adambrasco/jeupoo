<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

class Jeu extends Guerrier {

    public $perso;

    public function choix($personnage){

        if($personnage == "paladin"){
            $this->perso =  new Paladin('Paladin');
            echo "Paladin <br>", "vie =" .$this->vie. "";
            echo "<br>attaque = " .$this->attaque. "";
        }
        elseif($personnage  == "guerrier"){
            $this->perso =  new Guerrier('Guerrier');
            echo "Guerrier <br>", "vie =" .$this->vie. "";
            echo "<br>attaque = " .$this->attaque. "";
        }
        elseif($personnage == "mage"){
            $this->perso =  new Mage('Mage');
            echo "Mage <br>", "vie =" .$this->vie. "";
            echo "<br>Magie = " .$this->attaque. "";
        }

    }
}

