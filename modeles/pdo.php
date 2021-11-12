<?php

function connexion()
{
    $bddNom = "portfolio_starter";
    $bddUrl = "127.0.0.1";
    $bddUtilisateur = "root";
    $bddMotDePasse = "root";
    $bddPort = "6631";

    return new PDO("mysql:host=$bddUrl;port=$bddPort;dbname=$bddNom", $bddUtilisateur, $bddMotDePasse);
}
