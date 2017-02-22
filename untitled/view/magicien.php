<?php
class Mage
{
    private $_magie = 100;
    private $_vie = 100;
    private $_armure = 50;
    private $_arme;
    private $_degats;
    private $_experience = 0;

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
$mage = new Mage;