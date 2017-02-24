<?php
session_start();
require_once 'guerrier.php';
require_once 'magicien.php';
require_once 'paladin.php';
require_once 'monstre.php';
require_once 'jeu.php';
require_once 'salledonjon.php';


$personnage = $_POST["classe"];
$jeu = new Jeu();
$jeu->choix($personnage);
$_SESSION['personnage'] = $jeu->perso;

/*$coffres1 = new salledonjon();
$coffres1->ouvriruncoffre($coffres);
var_dump($coffres1);*/

$monstre = new Monstre();




$_SESSION['personnage']->attaque($monstre);
$monstre->attaque($_SESSION['personnage']);
$monstre->mort();
var_dump($monstre);
var_dump($_SESSION['personnage']);
