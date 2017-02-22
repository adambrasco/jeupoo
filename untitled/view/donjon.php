<?php
session_start();

require_once 'guerrier.php';
require_once 'magicien.php';
require_once 'paladin.php';
require_once 'monstre.php';

$guerrier = new Guerrier;
$mage = new Mage;
$monstre = new Monstre;

$guerrier->regenerer();
$guerrier->attaque($monstre);

var_dump($mage);
var_dump($guerrier);
var_dump($monstre);