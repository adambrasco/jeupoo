<?php
class Guerrier
{
    private $attaque = 80;
    private $vie = 100;
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
    public function degats()
    {
        return $this->degats;
    }
    public function experience()
    {
        return $this->experience;
    }
    public function mort()
    {
        return $this->vie <= 0;
    }
}

$guerrier = new Guerrier;