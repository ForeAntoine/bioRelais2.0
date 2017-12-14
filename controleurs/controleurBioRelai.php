<?php
include_once 'vues/vueBioRelai.php';

//Formulaire initial

$formulaireReservation = new Formulaire('post', 'index.php', 'fReservation', 'fReservation');

$formulaireReservation->ajouterComposantLigne($formulaireReservation->creerInputSubmit("btnProducteur", "btnProducteur", "Gestion des producteurs"));
$formulaireReservation->ajouterComposantTab();

$formulaireReservation->ajouterComposantLigne($formulaireReservation->creerInputSubmit("btnVente", "btnVente", "Gestion des ventes"));
