<?php

// Page d'accueil
if ($_SERVER['REQUEST_URI'] === '/') {
    require(__DIR__ . '/controleurs/accueilPageControleur.php');
}

// Page de connexion
if ($_SERVER['REQUEST_URI'] === '/connexion') {
    require(__DIR__ . '/controleurs/connexionPageControleur.php');
}

// Traitement du formulaire de connexion
if ($_SERVER['REQUEST_URI'] === '/connexion/traitement') {
    require(__DIR__ . '/controleurs/connexionFormulaireControleur.php');
}

if ($_SERVER['REQUEST_URI'] === '/admin') {
    require(__DIR__ . '/controleurs/adminPageControleur.php');
}
