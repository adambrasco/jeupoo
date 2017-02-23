<?php
session_start();
require_once 'guerrier.php';
require_once 'magicien.php';
require_once 'paladin.php';
require_once 'monstre.php';
require_once 'jeu.php';


$personnage = $_POST["classe"];
$jeu = new Jeu();
$jeu->choix($personnage);
$_SESSION['personnage'] = $jeu->perso;

var_dump($_SESSION);