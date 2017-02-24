<?php
session_start();
require_once 'guerrier.php';
require_once 'magicien.php';
require_once 'paladin.php';
require_once 'monstre.php';
require_once 'jeu.php';
require_once 'salledonjon.php';
$personnage = isset($_POST['personnage'])?$_POST['personnage']:'';
$choix = $_POST["fight"];
$jeu = unserialize($_SESSION['jeu']);
$lastperso = $jeu;
$monstre = unserialize($_SESSION['monstre']);

if($choix == 'fight') {
    $lastperso->attaque($monstre);
    if ($monstre->vie > 0) {
        echo "le monstre a " . $monstre->vie . " de vie";
    } else {
        echo "Le monstre est mort";
    }
    $monstre->attaque($lastperso);
    if ($lastperso->vie > 0) {
        echo "<br> le perso a " . $lastperso->vie . "de vie";

    } else {
        echo "<br> Le " . $lastperso->nom . " est mort";
    }
    $_SESSION['jeu'] = $jeu;
    $_SESSION['monstre'] = $monstre;
    header('Location: donjon.php');
}
?>

