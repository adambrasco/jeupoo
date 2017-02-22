<?php
class Monstre
{
    private $_attaque = 100;
    private $_vie = 100;
    private $_armure = 50;
    private $_arme;
    private $_experience = 0;

    public function attaquer($monstreAFrapper)
    {
        $monstreAFrapper->_degats += $this->_attaque;
    }

    public function force()
    {
        return $this->_force;
    }

    public function degats($degats)
    {
        $this->_vie -= $degats;
    }

    public function experience()
    {
        return $this->_experience;
    }

    public function mort()
    {
        $this->_vie = 0;
    }

    public function getVie()
    {
        return $this->_vie;
    }
}

$monstre = new Monstre;