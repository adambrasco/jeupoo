<!DOCTYPE html>
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
$_SESSION['jeu'] = serialize($jeu);

/*$coffres1 = new salledonjon();
$coffres1->ouvriruncoffre($coffres);
var_dump($coffres1);*/
if(!isset($_SESSION['monstre'])) {
    $monstre = new Monstre();
    $_SESSION['monstre'] = serialize($monstre);
}
else {
    $monstre = unserialize($_SESSION['monstre']);
}

$jeu->perso->attaque($monstre);
$monstre->attaque($jeu->perso);
$monstre->mort();
$jeu->perso->mort();
?>
<form method="post" action="donjon2.php">
    <select name="fight" id="fight">
        <option value="fight">Attaque</option>
    </select>
    <input type="submit" value="Start">
</form>

