
<?php

require(__DIR__ . '/../modeles/utilisateurModele.php');

// Vérification de la présence de la présence pour $_POST['email'] et $_POST['password']
// SI les valeurs existes
//      -> Require le modèle utilisateurs
//      -> Exécution de la requête
//      -> SI un utilisateur est retourné: on vérifie son mot de passe avec password_verify
//              -> Mot de passe OK -> redirection vers administration du site ou une autre page
//              -> Mot de passe non OK -> affichage page d'erreur ou retour sur la page de connexion
//      -> SINON affichage page d'erreur ou retour sur la page de connexion
// SINON affichage page d'erreur ou retour sur la page de connexion

if (isset($_POST['email']) && isset($_POST['password'])) {
    // La fonction recuperationUtilisateurConnexion est présente dans modeles/utilisateurModele.php
    $utilisateur = recuperationUtilisateurConnexion();

    // var_dump permet de voir le contenu d'une variable -> utile pour debugger le fonctionnement de votre code
    var_dump($utilisateur); // Affichage du retour du modele
    var_dump(password_verify($_POST['password'], $utilisateur['password'])); // Affichage du resultat de la comparaison mot de passe formulaire / utilisateur en base de données

    if (!empty($utilisateur) && isset($utilisateur['password']) && password_verify($_POST['password'], $utilisateur['password'])) {
        header('Location: /admin');
    } else {
        header('Location: /connexion');
    }
} else {
    header('Location: /connexion');
}
