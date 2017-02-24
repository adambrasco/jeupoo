<?php
class Guerrier
{
    public $attaque = 80;
    public $vie = 100;
    private $armure = 50;
    private $arme;
    private $degats;
    private $experience = 0;

    public function regenerer($vie = 19)
    {
        if(is_null($vie)){
            $this->vie = 100;
        }else{
            $this->vie += $vie;
        }
    }
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
