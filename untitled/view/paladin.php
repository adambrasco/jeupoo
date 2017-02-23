<?php
class Paladin
{
    private $magie = 50;
    private $attaque = 50;
    private $vie = 100;
    private $armure = 50;
    private $arme;
    private $degats;
    private $experience = 0;

    public function attaquer($monstreAFrapper)
    {
        $monstreAFrapper->degats +=$this->attaque;
    }
    public function sort($monstreAFrapper)
    {
        $monstreAFrapper->degats +=$this->magie;
    }
    public function force()
    {
        return $this->force;
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
        $this->vie = 0;
    }
}

$paladin = new Paladin;

