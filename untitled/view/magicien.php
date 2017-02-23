<?php
class Mage
{
    private $magie = 100;
    private $vie = 100;
    private $armure = 50;
    private $arme;
    private $degats;
    private $experience = 0;

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
$mage = new Mage;