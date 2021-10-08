<?php

/***************************************************************
 * Pages
 */

// Accueil
if ($_SERVER['REQUEST_URI'] === '/') {
    require(__DIR__ . '/controleurs/accueilPageControleur.php');
}

// Connexion
if ($_SERVER['REQUEST_URI'] === '/connexion') {
    require(__DIR__ . '/controleurs/connexionPageControleur.php');
}

// Inscription
if ($_SERVER['REQUEST_URI'] === '/inscription') {
    require(__DIR__ . '/controleurs/inscriptionPageControleur.php');
}

// Administration
if ($_SERVER['REQUEST_URI'] === '/admin') {
    require(__DIR__ . '/controleurs/adminPageControleur.php');
}

/***************************************************************
 * Traitements formulaires
 */

// Connexion
if ($_SERVER['REQUEST_URI'] === '/connexion/traitement') {
    require(__DIR__ . '/controleurs/connexionFormulaireControleur.php');
}

// Inscription
if ($_SERVER['REQUEST_URI'] === '/inscription/traitement') {
    require(__DIR__ . '/controleurs/inscriptionFormulaireControleur.php');
}
