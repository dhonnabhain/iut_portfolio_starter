<?php

require(__DIR__ . '/pdo.php');

function recuperationUtilisateurConnexion()
{
    $sql = "SELECT email, password FROM users WHERE email = :email";

    $requete = connexion()->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
    $requete->execute([':email' => $_POST['email']]);

    return $requete->fetch(PDO::FETCH_ASSOC);
}

function creationUtilisateur($motDePasse)
{
    $sql = "INSERT INTO users (login, email, password) VALUES (:login, :email, :password)";

    $requete = connexion()->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);

    return $requete->execute([
        ':login' => $_POST['login'],
        ':email' => $_POST['email'],
        ':password' => $_POST['password'],
    ]);
}
