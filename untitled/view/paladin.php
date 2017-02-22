<?php
class Paladin
{
    private $_magie = 50;
    private $_attaque = 50;
    private $_vie = 100;
    private $_armure = 50;
    private $_arme;
    private $_degats;
    private $_experience = 0;

    public function attaquer($monstreAFrapper)
    {
        $monstreAFrapper->_degats +=$this->_attaque;
    }
    public function sort($monstreAFrapper)
    {
        $monstreAFrapper->_degats +=$this->_magie;
    }
    public function force()
    {
        return $this->_force;
    }
    public function degats()
    {
        return $this->_degats;
    }
    public function experience()
    {
        return $this->_experience;
    }
    public function mort()
    {
        $this->_vie = 0;
    }
}

$paladin = new Paladin;

