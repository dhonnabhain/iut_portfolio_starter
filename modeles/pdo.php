<?php

function connexion()
{
    $bddNom = "portfolio_light";
    $bddUrl = "127.0.0.1:3331";
    $bddUtilisateur = "root";
    $bddMotDePasse = "";
    $bddPort = "3331";

    return new PDO("mysql:host=$bddUrl;port=$bddPort;dbname=$bddNom", $bddUtilisateur, $bddMotDePasse);
}
