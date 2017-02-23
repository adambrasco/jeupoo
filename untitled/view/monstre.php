<?php
class Monstre
{
    private $attaque = 50;
    private $vie = 100;
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
        $this->vie = 0;
    }

    public function getVie()
    {
        return $this->vie;
    }
}

$monstre = new Monstre;