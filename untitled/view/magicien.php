<?php
class Mage
{
    public $attaque = 100;
    public $vie = 100;
    private $armure = 50;
    private $arme;
    private $degats;
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
            echo "il vous reste" .$this->vie. "";
        }else{
            echo "<br>il vous reste" .$this->vie. "points de vie";
        }
    }
}