<?php
$menuAdherent = new Menu("menuSecondaire");

$menuAdherent->ajouterComposant($bioRelaiMP->creerItemLien("MonCompteResponsable", "Mon compte"));

$menuSecondaire = $menuAdherent->creerMenu($_SESSION['bioRelaiMP'],'menuAdherent');

include_once 'vues/MonCompteAdherent.php';
?>