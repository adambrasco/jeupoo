<?php
class salledonjon
{
    private $potiondevie = 100;
    private $coffres = array('potion de vie', 'baton de magicien', 'épée');


    public function initdonjon()
    {

    }
    public function observer()
    {

    }

    public function ouvriruncoffre($coffres)
    {
        $this->coffres = array_rand($coffres, 2);
    }

    public function ouvrirporte()
    {

    }

    public function attaquer()
    {

    }

    public function fuir()
    {

    }
}