<?php
class Monstre
{
    private $attaque = 50;
    public $vie = 100;
    private $armure = 50;
    private $arme;
    private $experience = 0;


    public function attaque($cible)
    {
        $cible->degats($this->attaque);
    }

    public function degats($degats)
    {
        $this->vie -= $degats;
    }

    public function experience()
    {
        return $this->experience;
    }

    public function mort()
    {
        if ($this->vie <= 0){
            echo "<br>le monstre est mort";
        }else{
            echo "<br> Il reste " .$this->vie. " de vie au monstre";
        }

    }

    public function getVie()
    {
        return $this->vie;
    }
}
